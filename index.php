<html>

<head>
    <title>Tuitter: Welcome to the new world!</title>
    <meta charset="utf-8">
    <link href="styles.css" rel="stylesheet" />
</head>

<body>
    <div class="logoLogin">
        <div><p id="centralLogo"><img id="logo" src="logoOfficial.png" alt="Company's logo"></p>
        <p class="introduceSocial">Welcome to the new, smart, effective and tecnological social media. Tuitter presents to
            everyone, THE NEW WORLD!</p>
        </div>
        <div class="loginMainPage">
            <form>
                <p>E-mail:
                    <input type="email" name="email" size="15" maxlength="40">
                </p>
                <p>Password:
                    <input type="password" name="password" size="15" maxlength="40">
                </p>
                <p><input class="submit" type="submit" name="subscribe" value="Submit"></p>
                <p><a href="Login/Uptade Password - Tuitter.php">Forgot password?</a></p>
                <p>New here?<a href="Login/Create Account - Tuitter.php"> Create your account</a></p>
            </form>
        </div>
    </div>
    <div class="refIndexBlock">
        <p class="refIndex"><a href="About us/About us - Tuitter.php">About us</a></p>
        <p class="refIndex"><a href="Contact us/Contact us - Tuitter.php">Contact us</a></p>
        <p class="refIndex"><a href="Work with us/Work with us - Tuitter.php">Work with us</a></p>
        <p class="refIndex"><a href="Partner Companies/Partner Companies - Tuitter.php">Partner Companies</a></p>
    </div>
    <?php
        echo "Hello World";
    ?>

</body>

</html>