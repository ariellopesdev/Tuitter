<html>

<head>
    <title>Create Account - Tuitter</title>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <link href="style/font-awesome.min.css" rel="stylesheet">
    <link href="../style/others.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Descrição do meu website">
    <meta name="author" content="Ariel Lopes">
</head>

<body>
    <header>Welcome to the new world!</header>
    <section class="center">
        <form class="create_account">
            <p>Name:
                <input type="text" name="name" size="15" maxlength="40">
            </p>
            <p>Subname:
                <input type="text" name="name" size="15" maxlength="40">
            </p>
            <p>E-mail:
                <input type="email" name="email" size="15" maxlength="40">
            </p>
            <p>Telephone:
                <input type="text" name="telephone" size="11" maxlength="11">
            </p>
            <p>Password:
                <input type="password" name="password" size="8" maxlength="8">
            </p>
            <p>Birth Date:
                <input type="date" name="birth date">
            </p>
            <p>Country:
                <select name="countrys">
                    <option value="brazil">Brazil</option>
                    <option value="australia">Australia</option>
                    <option value="united states">United States</option>
                    <option value="canada">Canada</option>
                    <option value="france">France</option>
                    <option value="germany">Germany</option>
                    <option value="south africa">South Africa</option>
                    <option value="argentina">Argentina</option>
                    <option value="england">England</option>
                    <option value="italy">Italy</option>
                </select>
            </p>
            <p>Gender:
                <select name="genders">
                    <option value="masculine">Masculine</option>
                    <option value="feminine">Feminine</option>
                    <option value="other">Other</option>
                </select>
            </p>
            <p>Photo:
                <input type="file" name="photoProfile">
            </p>
            <p>Interests:
                <br />
                <input type="checkbox" name="interests" value="Bussiness" checked="checked" />Bussiness
                <input type="checkbox" name="interests" value="Bussiness" /> Comunication
                <input type="checkbox" name="interests" value="Bussiness" /> Friends
                <input type="checkbox" name="interests" value="Bussiness" /> Relationchips
            </p>
            <p><input class="submit" type="submit" name="subscribe" value="Submit"></p>
        </form>
        <!--create_account-->
    </section>
    <!--center-->
    <footer class="desktop">
        <nav class="center">
            <ul>
                <li><a href="../About us/About us - Tuitter.php">About us</a></li>
                <li><a href="../Contact us/Contact us - Tuitter.php">Contact us</a></li>
                <li><a href="../Work with us/Work with us - Tuitter.php">Work with us</a></li>
                <li><a href="../Partner Companies/Partner Companies - Tuitter.php">Partner Companies</a></li>
                <li><a href="../index.php">Get back to main page</a></li>
            </ul>
        </nav>
        <!--center-->
        <p>Developed by Ariel Lopes - All rights reserved</p>
    </footer>
    <!--desktop-->
    <footer class="mobile">
        <nav class="center">
            <div class="button">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <!--button-->
            <ul>
                <li><a href="..//Main Page/Main Page - Tuitter.php">Login</a></li>
                <li><a href="../Contact us/Contact us - Tuitter.php">Contact us</a></li>
                <li><a href="../Work with us/Work with us - Tuitter.php">Work with us</a></li>
                <li><a href="../Partner Companies/Partner Companies - Tuitter.php">Partner Companies</a></li>
                <li><a href="../index.php">Get back to main page</a></li>
            </ul>
        </nav>
        <!--center-->
        <p>Developed by Ariel Lopes - All rights reserved</p>
    </footer>
    <!--mobile-->
</body>

</html>