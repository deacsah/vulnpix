<?php 
$page = !empty($_GET['page']) ? $_GET['page'] : 'home.php';
$allowedPages = ['home.php', 'sqli.php', 'xss.php', 'cinj.php', 'lfi.php', 'login.php', 'upload.php', 'logout.php'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vulnpix</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style type="text/css">
        nav {
            margin-bottom: 20px;
        }
        .well {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 3px;
            border: 1px solid #ededed;
            background-color:#F8F9FA
        }
        .logo {
            width: 50px
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg static-top <?php echo !empty($_SESSION['fortilogsUsername']) ? 'navbar-dark bg-dark' : 'navbar-light bg-light' ?>">
        <div class="container">
            <a class="navbar-brand" href="index.php?page=home.php"><img src="images/vulpix.png" class="logo" /> Vulnpix</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page == 'home' ? 'active' : ''; ?>" href="index.php?page=home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page == 'sqli' ? 'active' : ''; ?>" href="index.php?page=sqli.php">SQLi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page == 'xss' ? 'active' : ''; ?>" href="index.php?page=xss.php">XSS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page == 'lfi' ? 'active' : ''; ?>" href="index.php?page=lfi.php">LFI/RFI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $page == 'cinj' ? 'active' : ''; ?>" href="index.php?page=cinj.php">ComInj</a>
                    </li>
                    <?php if (!empty($_SESSION['loggedIn'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page == 'logout' ? 'active' : ''; ?>" href="index.php?page=logout.php">Logout (<?php echo $_SESSION['loggedIn'] ?>)</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page == 'login' ? 'active' : ''; ?>" href="index.php?page=login.php">Login</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container">
        <?php 
            if (in_array($page, $allowedPages)) {
                include("$page");
            } else {
                echo "<div class='alert alert-danger text-center'>Invalid page</div>";
            }
        ?>
        </div>
    </div>
</body>
</html>
