<html>
<head>
    <title>..</title>
</head>
<body>
    <?php
        if(isset($_GET['email'])&& !empty($_GET['email'])){
            if(filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
                echo 'Dit e-mail adres is ongeldig';
            }
            else{
                echo 'ongeldige e-mail, probeer het opnieuw';
            }
        }
        else{
            echo'Vul jouw e-mail in';
        }

    ?>
<form action="" method="get">
    email: <input type="text" name="email"/>
    <input type="submit" value="submit"/>
</form>
</body>
</html>
