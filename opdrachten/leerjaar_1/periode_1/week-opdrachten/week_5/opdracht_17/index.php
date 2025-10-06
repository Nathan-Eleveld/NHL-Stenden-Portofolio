<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 17</title>
    <link rel="stylesheet" href="../opdracht_17/css/style.css">
</head>
<body>
    <main>
        <h1>Webinar Subscription</h1>
        <hr>
        <form action="index.php" method="POST">
            <h3>Name</h3>
            <div class="name">
                <input type="text" name="fName" id="fName" placeholder="fName">
                <input type="text" name="lName" id="lName" placeholder="lName">
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
        </form>

    </main>
</body>
</html>