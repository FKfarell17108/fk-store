<?php
$con = mysqli_connect("localhost", "root", "", "fkstore");
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['view'])) {
    if ($_POST["view"] != '') {
        $update_query = "UPDATE comments SET status = 1 WHERE status=0";
        mysqli_query($con, $update_query);
    }
    $query = "SELECT * FROM comments ORDER BY id DESC LIMIT 5";
    $result = mysqli_query($con, $query);
    $output = '';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
            <li>
                <a href="#">
                    <strong>' . $row["name"] . '</strong><br />
                    <small><em>' . $row["content"] . '</em></small>
                </a>
            </li>
            ';
        }
    } else {
        $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
    }
    $status_query = "SELECT * FROM comments WHERE status=0";
    $result_query = mysqli_query($con, $status_query);
    $count = mysqli_num_rows($result_query);
    $data = array(
        'notification' => $output,
        'unseen_notification' => $count
    );
    echo json_encode($data);
    mysqli_close($con);
    exit;
}

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];
    $insert_query = "INSERT INTO comments (name, content, status) VALUES ('$subject', '$comment', '0')";
    mysqli_query($con, $insert_query);
    mysqli_close($con);
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Notification using PHP Ajax Bootstrap</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <br /><br />
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-size: 25pt;">Comments</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="label label-pill label-danger count" style="border-radius:50px;"></span>
                            <span class="glyphicon glyphicon-bell" style="font-size: 20pt;"></span>
                        </a>
                        <ul class="dropdown-menu"></ul> <!-- Added this line -->
                    </li>
                </ul>
            </div>
        </nav>
        <br />

        <!-- Form for submitting comments -->
        <!-- <form method="post" id="comment_form">
            <div class="form-group">
                <label>Enter Subject</label>
                <input type="text" name="subject" id="subject" class="form-control">
            </div>
            <div class="form-group">
                <label>Enter Comment</label>
                <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Post" />
            </div>
        </form> -->
    </div>

    <!-- Script to handle form submission and notification update -->
    <script>
        $(document).ready(function () {
            // updating the view with notifications using ajax
            function load_unseen_notification(view = '') {
                $.ajax({
                    url: "comments-notif.php",
                    method: "POST",
                    data: { view: view },
                    dataType: "json",
                    success: function (data) {
                        $('.dropdown-menu').html(data.notification);
                        if (data.unseen_notification > 0) {
                            $('.count').html(data.unseen_notification);
                        }
                    }
                });
            }
            load_unseen_notification();

            // submit form and get new records
            $('#comment_form').on('submit', function (event) {
                event.preventDefault();
                if ($('#subject').val() != '' && $('#comment').val() != '') {
                    var form_data = $(this).serialize();
                    $.ajax({
                        url: "-notif.php",
                        method: "POST",
                        data: form_data,
                        success: function (data) {
                            $('#comment_form')[0].reset();
                            load_unseen_notification();
                        }
                    });
                } else {
                    alert("Both Fields are Required");
                }
            });

            // load new notifications
            $(document).on('click', '.dropdown-toggle', function () {
                $('.count').html('');
                load_unseen_notification('yes');
            });

            // refresh notification every 5 seconds
            setInterval(function () {
                load_unseen_notification();
            }, 5000);
        });
    </script>
</body>

</html>