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
        <div class="grid">
            <div class="catogorie">
                <p>Name</p>
                <p>E-mail</p>
                <p>Work Phone</p>
                <p>Company</p>
                <p>Company Address</p>
                <p>Company Website</p>
            </div>
            <form action="index.php" method="POST">
                <div class="name">
                    <input type="text" name="" id="">
                    <input type="text" name="" id="">
                    <label for="">First Name</label>
                    <label for="">Last Name</label>
                </div>
                <div class="email">
                    <input type="email" name="" id="">
                    <br>
                    <label for="">example@example.com</label>
                </div>
                <div class="work-phone">
                    <input type="number" name="" id="">
                    -
                    <input type="number" name="" id="">
                    <label for="">Area Code</label>
                    <label class="under-phone-input" for="">Phone Number</label>
                </div>
                <div class="company">
                    <input type="text" name="" id="">
                </div>
                <div class="company-address">
                    <input type="text" name="" id="">
                    <label for="">Street Address</label>
                    <input type="text" name="" id="">
                    <label for="">Street Address Line 2</label>
                    <div class="city-and-state">
                        <input type="text" name="" id="">
                        <label for="">City</label>
                        <input type="text" name="" id="">
                        <label for="">State / Province</label>
                    </div>
                    <input type="text" name="" id="">
                    <label for="">Postal / Zip Code</label>
                </div>
                <div class="company-website">
                    <input type="text" name="" id="">
                </div>
                <input type="submit" name="" id="">
            </form>
        </div>

    </main>
</body>
</html>