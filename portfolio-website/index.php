<?php
    session_start();

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathans Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <aside>
        <img class="profilepic" src="img\placeholder.png" alt="ProfielFoto">
        <h2>NATHAN ELEVELD</h2>
        <h3>STUDENT INFORMATICA</h3>
        <h3>HBO</h3>
        <div class="sidebarline"></div>
        <h3>PERSOONLIJK PROFIEL</h3>
        <p>Ik ben een creatieve probleemoplosser die zowel zelfstandig als in een team goed functioneert. Mijn passie ligt in het vinden van innovatieve oplossinge, en mijn betrouwbaarheid staat centraal in alles wat ik doe.</p>
        <h4>VAKGERELATEERDE VAARDIGHEDEN</h4>
        <ul>
            <li>PHP</li>
            <li>HTML</li>
            <li>CSS</li>
            <li>SQL</li>
            <li>AZURE</li>
        </ul>

        <?php
            showMyWork();
        ?>

        <h3>CONTACTINFORMATIE</h3>
        <p>Tel.: 06-50 53 51 13</p>
        <p>Mail: nathaneleveld6@gmail.com</p>
        <p>LinkedIn: <a href="https://www.linkedin.com/in/nathan-eleveld-009471239/" target="_blank" rel="noopener">Klik hier</a></p>

        <?php
            showLogButtons();
        ?>
    </aside>
    <main>
        <div class="main-content">
            <div class="category">
                <h2>Werkervaring</h2>
                <div class="item">
                    <h3>Aareon</h3>
                    <h4>alkdjfal</h4>
                </div>
            </div>
            <div class="category">
                <h2>Opleidingen</h2>
                <div class="item">
                    <h3>NHL Stenden</h3>
                    <h4>Informatica</h4>
                </div>
                <div class="item">
                    <h3>DCTerra</h3>
                    <h4>Softwaredeveloper</h4>
                </div>
            </div>
            <div class="category">
                <h2>Hobies en interesses</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem adipisci voluptatum reprehenderit maxime, saepe quasi asperiores non? Consequuntur illo amet at officia voluptas architecto quo dolor necessitatibus quis! Minus, temporibus!</p>
            </div>
        </div>
    </main>
</body>
</html>