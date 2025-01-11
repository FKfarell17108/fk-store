<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comments</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="comments.css" rel="stylesheet" type="text/css">		
</head>
<body>
	<?php include("comments-notif.php"); ?>		
			
	<div class="comments"></div>

<script>
const comments_page_id = 1;// Nomor ini harus unik di setiap halaman
fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
	document.querySelector(".comments").innerHTML = data;
	document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
		element.onclick = event => {
			event.preventDefault();
			document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
		};
	});
	document.querySelectorAll(".comments .write_comment form").forEach(element => {
		element.onsubmit = event => {
			event.preventDefault();
			fetch("comments.php?page_id=" + comments_page_id, {
				method: 'POST',
				body: new FormData(element)
			}).then(response => response.text()).then(data => {
				element.parentElement.innerHTML = data;
			});
		};
	});
});
</script>

<script>
// Skrip untuk tombol like
$('.like_comment_btn').click(function(e) {
    e.preventDefault();
    var commentId = $(this).data('comment-id');
    $.post('like_comment.php', { comment_id: commentId }, function(data) {
        alert(data); // Tampilkan pesan sukses atau error
        // Refresh halaman atau tampilkan respons yang sesuai
    });
});

// Skrip untuk tombol dislike (mirip dengan tombol like)

// Skrip untuk tombol reply
$('.reply_comment_btn').click(function(e) {
    e.preventDefault();
    var commentId = $(this).data('comment-id');
    // Tampilkan formulir balasan di bawah komentar yang dipilih
});
</script>


</body>
</html>	

