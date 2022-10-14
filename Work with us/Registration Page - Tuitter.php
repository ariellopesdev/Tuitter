<html>
    <head>
        <title>Tuitter - Registration Page</title>
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
            <h1>Fill the mandatory fields</h1>
            <form class="registration">
                <p>Photo:
                    <input type="file" name="Photo">
                </p>
                <p>Complete Name:
                    <input type="text" name="username" size="15" maxlength="30">
                </p>
                <p>Birth Day:
                    <input type="date" name="born_day">
                </p>
                <p>Born City:
                    <input type="text" name="born_city" size="15" maxlength="30">
                </p>
                <p>Born Country:
                    <input type="text" name="born_country" size="15" maxlength="30">
                </p>
                <p>E-mail:
                    <input type="text" name="email">
                </p>
                <p>Address:
                    <input type="text" name="address" size="15" maxlength="30">>
                    <input type="text" name="number" size="15" maxlength="30">
                    <input type="text" name="district" size="15" maxlength="30">
                </p>
                <p>City:
                    <input type="text" name="city" size="15" maxlength="30">
                </p>
                <p>Country:
                    <input type="text" name="country" size="15" maxlength="30">
                </p>
                <p>Contact Phone:
                    <input type="number" name="phone">
                </p>
                <p>Experience Jobs:
                    <textarea name="comments" cols="20" rows="4">Enter your experience jobs...</textarea>
                </p>
                <p>Objetives:
                    <textarea name="comments" cols="20" rows="4">Enter your objetives...</textarea>
                </p>  
                <p>Courses:
                    <textarea name="comments" cols="20" rows="4">Enter your courses...</textarea>
                </p>   
            </form><!--registration-->
        </section><!--center-->
        <footer class="desktop">
            <nav class="center">
                <ul>
                    <li><a href="..//Main Page/Main Page - Tuitter.php">Login</a></li>
                    <li><a href="../About us/About us - Tuitter.php">About us</a></li>
                    <li><a href="../Contact us/Contact us - Tuitter.php">Contact us</a></li>
                    <li><a href="../Work with us/Work with us - Tuitter.php">Work with us</a></li>
                    <li><a href="../Partner Companies/Partner Companies - Tuitter.php">Partner Companies</a></li>
                    <li><a href="../index.php">Get back to main page</a></li>
                </ul>
            </nav><!--center-->
            <p>Developed by Ariel Lopes - All rights reserved</p>
        </footer><!--desktop-->
        <footer class="mobile">
            <nav class="center">
                <div class="button">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div><!--button-->
                <ul>
                    <li><a href="..//Main Page/Main Page - Tuitter.php">Login</a></li>
                    <li><a href="../Contact us/Contact us - Tuitter.php">Contact us</a></li>
                    <li><a href="../Work with us/Work with us - Tuitter.php">Work with us</a></li>
                    <li><a href="../Partner Companies/Partner Companies - Tuitter.php">Partner Companies</a></li>
                    <li><a href="../index.php">Get back to main page</a></li>
                </ul>
            </nav><!--center-->
            <p>Developed by Ariel Lopes - All rights reserved</p>
        </footer><!--mobile-->
    </body>
</html>