<?php
session_start();
//session_destroy();

require_once 'connect.php';

if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $user = $db->prepare("SELECT `id_admin`, `login`, `password` FROM `admin` WHERE `login` = :loginn");
    $user->bindParam('loginn', $login, PDO::PARAM_STR);
    $user->execute();
    $u = $user->fetch(PDO::FETCH_ASSOC);


    // var_dump($user); // affiche la requète
    // var_dump($user->fetchAll(PDO::FETCH_ASSOC)); //affiche un array

    if(($user->rowCount()) === 1) {
        if($u['password'] === $password) {
            $_SESSION['login'] = $login;            
        } else {
            echo "<h3 style='text-align:center; margin-top:20px;'>Login on password is incorrect</h3>";
        }
    } else {
        echo "<h3 style='text-align:center; margin-top:20px;'>Login on password is incorrect</h3>";
    };
};

ob_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title>Log in</title>
</head>
<body>
    <section id="login">
        <div class="container dflex">

<?php
if(isset($_SESSION['login'])) {
    header('Location: admin.php');
} else {
?>

            <form action="#" method="POST">
                <div class="form-wrapper">
                    <div>
                        <label for="login">Your login</label>
                        <input type="text" name="login" id="login">
                    </div>
                    <div>
                        <label for="password">Your password</label>
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <input type="submit" name="submit" value="Log in" class="add-input">
            </form>

<?php  }  ?>            
        </div>
    </section>
</body>
</html>