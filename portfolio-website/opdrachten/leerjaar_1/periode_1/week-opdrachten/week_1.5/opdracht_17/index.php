<?php

    if($_SERVER['REQUEST_METHOD'] == "POST") //Controle of de submit knop is ingedrukt.
    {
        $fname = filter_input(INPUT_POST, "fname");
        $lname = filter_input(INPUT_POST, "lname");
        $email = filter_input(INPUT_POST, "email");
        $area_code = filter_input(INPUT_POST, "area-code");
        $work_phone = filter_input(INPUT_POST, "work-phone");
        $company = filter_input(INPUT_POST, "company");
        $company_address = filter_input(INPUT_POST, "company-address");
        $company_address_2 = filter_input(INPUT_POST, "company-address-2");
        $city = filter_input(INPUT_POST, "city");
        $state = filter_input(INPUT_POST, "state");
        $postal = filter_input(INPUT_POST, "postal");
        $company_website = filter_input(INPUT_POST, "company-website");
        $radio = filter_input(INPUT_POST, "radio");

        if (
            empty($fname) || empty($lname) || empty($email) || empty($area_code) ||
            empty($work_phone) || empty($company) || empty($company_address) ||
            empty($company_address_2) || empty($city) || empty($state) ||
            empty($postal) || empty($company_website) || empty($radio)
        ) {
        
            // GPT code
            $error = "Oeps! Alle velden moeten ingevuld zijn.";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 17</title>
    <link rel="stylesheet" href="../opdracht_17/css/style.css">
</head>
<body>

    <?php
        // GPT code
        if (!empty($error)) {
            echo '<div class="error-message">' . $error . '</div>';
        }
    ?>

    <main>
        <h1>Webinar Subscription</h1>
        <hr>
        <form action="index.php" method="POST">
            <h3>Name</h3>
            <div class="name">
                <input type="text" name="fname" id="fname" placeholder="fname">
                <input type="text" name="lname" id="lname" placeholder="lname">
            </div>
            <h3>E-mail</h3>
            <div class="email">
                <input type="email" name="email" id="email" placeholder="email">
            </div>
            <h3>Work Phone</h3>
            <div class="work-phone">
                <input type="number" name="area-code" id="area-code" placeholder="area code">
                -
                <input type="number" name="work-phone" id="work-phone" placeholder="phone nummer">
            </div>
            <h3>Company</h3>
            <div class="company">
                <input type="text" name="company" id="company" placeholder="company name">
            </div>
            <h3>Company Address</h3>
            <div class="company-address">
                <input type="text" name="company-address" id="company-address" placeholder="company address 1">
                <input type="text" name="company-address-2" id="company-address-2" placeholder="company address 2">
                <input type="text" name="city" id="city" placeholder="city">
                <input type="text" name="state" id="state" placeholder="state">
                <input type="text" name="postal" id="postal" placeholder="postal">
            </div>
            <h3>Company Website</h3>
            <div class="company-website">
                <input type="text" name="company-website" id="company-website" placeholder="comany website">
            </div>

            <h3>Wanna quit?</h3>
            <div class="wanna-quit">
                <label for="radio_true">Jep</label>
                <input type="radio" name="radio" id="radio_true" value="true">
                <label for="radio_false">Nope</label>
                <input type="radio" name="radio" id="radio_false" value="false" checked>
            </div>

            <input type="submit">
        </form>

    </main>
</body>
</html>