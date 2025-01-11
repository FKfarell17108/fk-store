<!DOCTYPE html>
<html>
<meta charset="utf-8">

<!-- SHORCUT ICON START -->
<link rel="shortcut icon" href="../assets/images/icon.png" type="image/x-icon">
<!-- SHORCUT ICON END -->

<!-- TITLE START -->
<title>FKStore Admin </title>
<!-- TITLE END -->

<head>

<body>

  <div class="container-navbar">
    <div class="wrapper-navbar">
      <div class="box-navbar">
        <nav>
          <ul><?php include ("page/navbar.php") ?></ul>
        </nav>
      </div>
    </div>
  </div>

  <div class="container-content">
    <div class="wrapper-content">
      <div class="box-content">
        <?php
        include ("content.php")
          ?>
      </div>
    </div>
  </div>

  <style>
    /* Resetting default browser styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body styles */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
    }

    /* Navbar styles */
    .container-navbar {
      background-color: #2a2a2a;
    }

    .wrapper-navbar {
      max-width: 1200px;
      margin: 0 auto;
    }

    .box-navbar {
      padding: 50px;
    }

    nav ul {
      list-style: none;
      text-align: center;
      font-size: 18px;
    }

    nav ul li {
      display: inline-block;
      padding: 10px;
      margin-right: 20px;
    }

    nav ul li a {
      border: 1px solid #fff;
    }

    nav ul li a:hover {
      background-color: #fff;
      color: #2a2a2a;
    }

    /* Content styles */
    .container-content {
      display: grid;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 50px 0;
    }

    .wrapper-content {
      max-width: min-content;
      width: 100%;
      margin: 0 auto;
    }
    
    /* Animations */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .box-content {
      animation: fadeIn 0.5s ease forwards;
    }

    @media (max-width: 768px) {
      /* Styles for mobile devices */

      .wrapper-navbar,
      .wrapper-content {
        max-width: 100%;
        padding: 0 20px;
      }

      .box-navbar {
        padding: 20px;
      }

      nav ul li {
        padding: 10px;
        margin-right: 10px;
      }

      nav ul li a {
        padding: 5px 10px;
      }

      .container-content {
        padding: 20px 0;
      }

      .box-content {
        padding: 20px;
      }
    }

    @media (max-width: 480px) {
      /* Styles for smaller mobile devices */

      nav ul {
        font-size: 16px;
      }

      nav ul li {
        padding: 8px;
        margin-right: 8px;
      }

      nav ul li a {
        font-size: 14px;
      }
    }
  </style>
</body>

</html>