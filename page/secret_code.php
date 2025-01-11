<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/icon.png" type="image/x-icon">
    <title>FKStore | Halaman Kode Admin</title>
</head>

<body>
    <form action="submit_secret_code.php" method="post">
        <label for="secret_code">Kode Admin:</label><br>
        <input type="text" id="secret_code" name="secret_code"><br><br>
        <input type="submit" value="Submit">
        <a href="javascript:history.back()">Kembali</a>
    </form>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        /* CSS untuk styling dan animasi formulir */
        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #fff;
            color: #2a2a2a;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-block;
            font-weight: bold;
            box-shadow: 0 2px 2px #2a2a2a;
        }

        input[type="submit"]:hover {
            background-color: #2a2a2a;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 4px #2a2a2a;
        }

        a {
            margin-top: 10px;
            background-color: #fff;
            color: #2a2a2a;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-block;
            font-weight: bold;
            box-shadow: 0 2px 2px #2a2a2a;
        }

        a:hover {
            background-color: #2a2a2a;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 4px #2a2a2a;
        }
    </style>
</body>

</html>