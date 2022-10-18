<html>

<head>
    <title>Sign Up - Tuitter</title>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <link href="../Style/font-awesome.min.css" rel="stylesheet">
    <link href="../Style/others.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Descrição do meu website">
    <meta name="author" content="Ariel Lopes">
    <style>
        section.center form.create_account{
            width: 60%;
            margin: 30px auto 30px auto;
            border: 1px solid blue;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        section.center form.create_account p{
            padding: 15px 15px 15px 25px ;
            margin-top: 0px;
            width: 100%;
        }
        section.center form.create_account input,
        section.center form.create_account select{
            padding: 15px;
            margin-top: 20px;
            width: 85%;
            height: 40px;
            color: #8b8b8b;
            font-size: 20px;
            border: 1px solid #8b8b8b;
            border-radius: 5px;
        }
        input:focus{/**não está funcionando */
            border: 1px solid blue;
            color: blue;
        }
        section.center form.create_account select,
        section.center form.create_account [type=file]{
            height: 53px !important;
        }
        section.center form.create_account [type=checkbox]{
            font-size: 10px !important;
        }
    </style>
</head>

<body>
    <header>
        <img src="../logoOfficial.png" alt="Company_logo">
        <h1>
            Welcome to the new world!
        </h1>
    </header>
    <section class="center">
        <h1>Sign Up</h1>
        <form class="create_account">
            <input placeholder="Name:" type="text" name="name" size="15" maxlength="40">
            <input placeholder="Subname:" type="text" name="name" size="15" maxlength="40">
            <input placeholder="E-mail:" type="email" name="email" size="15" maxlength="40">
            <input placeholder="Telephone:" type="text" name="telephone" size="11" maxlength="11">
            <input placeholder="Password:" type="password" name="password" size="8" maxlength="8">
            <p>Born:
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
                <input type="checkbox" name="interests" value="Bussiness" checked="checked" />Bussiness
                <input type="checkbox" name="interests" value="Comunication" /> Comunication
                <input type="checkbox" name="interests" value="Friends" /> Friends
                <input type="checkbox" name="interests" value="Relationchips" />Relationchips
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