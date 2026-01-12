<?php
    $pages = [
        'fileOverview' => 'fileOverview/fileOverview.php',
        'userOverview' => 'userOverview.php'
    ];

    $cssFiles = [
        'fileOverview' => 'fileOverview/css/style.css',
        'userOverview' => 'userOverview/css/style.css'
    ];

    $page = $_GET['page'] ?? 'fileOverview';

    session_start();

    require_once "./auth/auth.php";

    function showMyWork(){
        if(isset($_SESSION["username"])){
            echo '
                <div class="my-work">
                    <h3>MIJN WERK</h3>
                    <button>Professional skills</button>
                    <button>Programeer opdrachten</button>
                </div>
            ';
        }
    }

    function showLogButtons(){
        if(isset($_SESSION["username"])){
            echo '
                <form method="post">
                    <button type="submit" name="logout">Logout</button>
                </form>
            ';
        }else{
            echo '<a href="login\login.php">Login</a>';
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
    <title>Admin Portaal</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
        if (isset($cssFiles[$page])) {
            echo '<link rel="stylesheet" href="' . htmlspecialchars($cssFiles[$page]) . '">';
        }
    ?>

</head>
<body>
    <aside>
        <img class="profilepic" src="../img\placeholder.png" alt="ProfielFoto">

        <?php
            echo "<h2>Welkom: " . $_SESSION["username"] . "</h2>";
            echo "<h3>Rol: " . $_SESSION["role"] . "</h3>";
            echo '<div class="sidebarline"></div>';
            date_default_timezone_set("Europe/Amsterdam");
            echo "<h4>" . date("d-m-Y") . "</h4>";
        ?>

        <h3>Belangrijke onderdelen</h3>
        <!-- <a href="?page=home">Home</a> -->
        <a href="?page=userOverview">Gebruikersoverzicht</a>
        <br>
        <a href="?page=fileOverview">Bestandsoverzicht</a>
        <br>
        <a href="../">Naar index</a>

        <?php
            showMyWork();
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