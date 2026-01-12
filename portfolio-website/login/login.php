<?php
    $msgs = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!$user = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS)){
            $msgs[] = "Invalid username";
        }
        
        if(!$pass = filter_input(INPUT_POST, "password")){
            $msgs[] = "Invalid password";
        }
        
        if(count($msgs) == 0){
            require_once("../dbconnection/dbconnection.php");
            if($dbConnection){
                try{
                    $stmt = $dbConnection->prepare(
                        "
                            SELECT *
                            FROM `users`
                            WHERE `username` = :username
                        "
                    );
                    $stmt->bindParam("username", $user, PDO::PARAM_STR);
                    $stmt->execute();
                }catch(Exception $ex){
                    echo $ex;
                }
            }
            if($stmt && $stmt->rowCount() == 1){
                $results = $stmt->fetchall(PDO::FETCH_ASSOC);
                if(password_verify($pass, $results[0]["password"])){
                    session_start();
                    $_SESSION["username"] = $results[0]["username"];
                    $_SESSION["role"] = $results[0]["role"];
                    header("location: ../index.php");
                }
            }else{
                $msgs[] = "Invalid username or password";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Inloggen</h2>

        <form action="<?=htmlentities($_SERVER['PHP_SELF'])?>" method="post">
            <div class="form-group">
                <label for="username">Gebruikersnaam</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>