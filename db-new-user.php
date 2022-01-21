<?php
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];
$hidden = password_hash($password, PASSWORD_BCRYPT);

if(isset($_POST['submit'])) {
    $user = $db->query("INSERT INTO `admin` (`login`, `password`) VALUES ('$login', '$hidden')");
}

if($user){
    header('Location: login.php');
} else {
    echo "<h3> Ooops, something went wrong! Please try again</h3>";
};
