<?php
// Perbarui detail di bawah dengan detail MySQL Anda
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'fkstore';
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
   // Jika ada kesalahan pada koneksi, hentikan skrip dan tampilkan kesalahan tersebut
    exit('Failed to connect to database: ' . $exception->getMessage());
}


// ###################


// Fungsi di bawah ini akan mengonversi string waktu ke waktu yang telah berlalu
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $w = floor($diff->d / 7);
    $diff->d -= $w * 7;
    $string = ['y' => 'year','m' => 'month','w' => 'week','d' => 'day','h' => 'hour','i' => 'minute','s' => 'second'];
    foreach ($string as $k => &$v) {
        if ($k == 'w' && $w) {
            $v = $w . ' week' . ($w > 1 ? 's' : '');
        } else if (isset($diff->$k) && $diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

// ###################


// Fungsi ini akan mengisi komentar dan balasan komentar menggunakan loop
function show_comments($comments, $parent_id = -1) {
    $HTML = '';
    if ($parent_id != -1) {
        // Jika komentar berupa balasan, urutkan berdasarkan kolom "tanggal_kirim".
        array_multisort(array_column($comments, 'submit_date'), SORT_ASC, $comments);
    }
    // Ulangi komentar menggunakan perulangan foreach
    foreach ($comments as $comment) {
        if ($comment['parent_id'] == $parent_id) {
           // Tambahkan komentar ke variabel $HTML
            $HTML .= '
            <div class="comment">
                <div>
                    <h3 class="name">' . HTMLspecialchars($comment['name'], ENT_QUOTES) . '</h3>
                    <span class="date">' . time_elapsed_string($comment['submit_date']) . '</span>
                </div>
                <p class="content">' . nl2br(HTMLspecialchars($comment['content'], ENT_QUOTES)) . '</p>
                <a class="reply_comment_btn" href="#" data-comment-id="' . $comment['id'] . '"><i class="fas fa-reply"></i> Reply</a>
                <a class="like_comment_btn" href="#" data-comment-id="' . $comment['id'] . '" style="font-size: 25px; color: grey; margin-right: 30px; margin-left: 20px;"><i class="fas fa-thumbs-up"></i></a>
                <a class="dislike_comment_btn" href="#" data-comment-id="' . $comment['id'] . '" style="font-size: 25px; color: grey;"><i class="fas fa-thumbs-down"></i></a>
               
                
                
                ' . show_write_comment_form($comment['id']) . '
                <div class="replies">
                ' . show_comments($comments, $comment['id']) . '
                </div>
            </div>
            ';
        }
    }
    return $HTML;
}

// ################### 


// Fungsi ini adalah template untuk formulir komentar tulis
function show_write_comment_form($parent_id = -1) {
    $HTML = '
    <div class="write_comment" data-comment-id="' . $parent_id . '">
        <form>
            <input name="parent_id" type="hidden" value="' . $parent_id . '">
            <input name="name" type="text" placeholder="Your Name" required>
            <textarea name="content" placeholder="Write your comment here..." required></textarea>
            <button type="submit">Submit Comment</button>
        </form>
    </div>
    ';
    return $HTML;
}


// ###################


// ID Halaman harus ada, ini digunakan untuk menentukan komentar mana untuk halaman tertentu
if (isset($_GET['page_id'])) {
    // Periksa apakah variabel formulir yang dikirimkan ada
    if (isset($_POST['name'], $_POST['content'])) {
        // Variabel POST ada, masukkan komentar baru ke dalam tabel komentar MySQL (formulir yang dikirimkan pengguna)
        $stmt = $pdo->prepare('INSERT INTO comments (page_id, parent_id, name, content, submit_date) VALUES (?,?,?,?,NOW())');
        $stmt->execute([ $_GET['page_id'], $_POST['parent_id'], $_POST['name'], $_POST['content'] ]);
        exit('Your comment has been submitted!');
    }
   // Dapatkan semua komentar berdasarkan ID Halaman yang diurutkan berdasarkan tanggal pengiriman
    $stmt = $pdo->prepare('SELECT * FROM comments WHERE page_id = ? ORDER BY submit_date DESC');
    $stmt->execute([ $_GET['page_id'] ]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Dapatkan jumlah total komentar
    $stmt = $pdo->prepare('SELECT COUNT(*) AS total_comments FROM comments WHERE page_id = ?');
    $stmt->execute([ $_GET['page_id'] ]);
    $comments_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('No page ID specified!');
}
?>


<!-- ################### -->


<div class="comment_header">
    <span class="total"><?=$comments_info['total_comments']?> comments</span>
    <a href="#" class="write_comment_btn" data-comment-id="-1">Write Comment</a>
</div>

<?=show_write_comment_form()?>

<?=show_comments($comments)?>

<!-- ################### -->

<script>
// Refresh otomatis setiap 15 detik
setInterval(function() {
    window.location.reload();
}, 15000);
</script>

