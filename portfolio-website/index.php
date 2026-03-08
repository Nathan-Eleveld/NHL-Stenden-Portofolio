<?php
    session_start();

    // require_once __DIR__ . '/auth/auth.php';

    if(!isset($_SESSION["username"])) {
        header("Location: /login/login.php");
        exit;
    }

    if($_SESSION["role"] !== "Admin" && $_SESSION["role"] !== "Professional skills docent"){
        header("Location: ../index.php");
        exit;
    }

    $pages = [
        'fileOverview' => 'fileOverview/fileOverview.php'
    ];

    $cssFiles = [
        'fileOverview' => 'fileOverview/css/style.css'
    ];

    $page = $_GET['page'] ?? 'fileOverview';

    function showLogButtons(){
        if(isset($_SESSION["username"])){
            echo '
                <form method="post">
                    <button type="submit" name="logout" class="logout-btn">Logout</button>
                </form>
            ';
        }else{
            echo '<a href="login/login.php">Login</a>';
        }
    }

    if(isset($_POST['logout'])){
        $_SESSION = [];
        session_destroy();
        header("location: ../index.php");
    }

    function getMaincontent($pages, $page){
        if(array_key_exists($page, $pages)){
            include $pages[$page];
        }else{
            include 'fileOverview/fileOverview.php';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathans Websites</title>
    <link rel="stylesheet" href="style.css">
    <?php
        if (isset($cssFiles[$page])) {
            echo '<link rel="stylesheet" href="' . htmlspecialchars($cssFiles[$page]) . '">';
        }
    ?>

</head>
<body>
    <aside>
        <img class="profilepic" src="./img/NHLStendenlogo.png" alt="ProfielFoto">

        <?php
            echo "<h2>Welkom: " . $_SESSION["username"] . "</h2>";
            echo "<h3>Rol: " . $_SESSION["role"] . "</h3>";
            echo '<div class="sidebarline"></div>';
            date_default_timezone_set("Europe/Amsterdam");
            echo "<h4> Datum:" . date("d-m-Y") . "</h4>";
        ?>

        <?php
            showLogButtons();
        ?>
    </aside>
    <main>
        <?php
            getMaincontent($pages, $page);
        ?>
    </main>
</body>
</html>