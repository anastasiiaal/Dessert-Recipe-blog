<?php
require_once 'connect.php';


// $path = './img/';
// $arrayType = ["jpg" => 'image/jpg', "jpeg" => 'image/jpeg'];
// $name = basename($_FILES['img']['name']);
// $insertname = "img/" . $name;

// if(in_array($_FILES['img']['type'], $arrayType)){
//     move_uploaded_file($_FILES['img']['tmp_name'], $path.$name);
// } else {
//     echo "Please choose an image in format JPG/JPEG";
// }

if(isset($_POST['submit'])) {

    $id = $_POST['id_recipe'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $timing = $_POST['timing'];
    // $category = $_POST['category'];
    // $img = $_POST['img'];
    // $imgname = 
    $alt = $_POST['alt'];

    $edited = $db->query("UPDATE `recipe` SET `title` = '$title', `alt_photo` = '$alt', `description` = '$description', `prep_time` = '$timing', `ingredients` = '$ingredients', `instructions` = '$instructions' WHERE `id_recipe` = '$id'");
    
};

// if(isset($POST['submit'])) {
//     $edited = $db->query("UPDATE `recipe` SET `title` = '$title', `photo` = '$imgname', `alt_photo` = '$alt', `description` = '$description', `prep_time` = '$timing', `ingredients` = '$ingredients', `instructions` = '$instructions', `category` = '$category' WHERE `id_recipe` = '$id'")
// }

if($edited) {
    header('Location: admin.php');
} else {
    echo "Ooups, something went wrong";
};