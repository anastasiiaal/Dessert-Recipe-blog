<?php

session_start();

require_once 'connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];
$timing = $_POST['timing'];
$category = $_POST['category'];
$alt = $_POST['alt'];
$author = "1";



if(isset($_POST['submit'])) {

    $path = './img/';
    $arrayType = ["jpg" => 'image/jpg', "jpeg" => 'image/jpeg'];
    $name = basename($_FILES['img']['name']);
    $insertname = "img/" . $name;

    if(in_array($_FILES['img']['type'], $arrayType)){
        move_uploaded_file($_FILES['img']['tmp_name'], $path.$name);
    } else {
        echo "Please choose an image in format JPG/JPEG";
    }

    // $new = $db->query("INSERT INTO `recipe` (`author`, `title`, `photo`, `alt_photo`, `description`, `prep_time`, `ingredients`, `instructions`, `category`) VALUES ('$author', '$title', '$insertname', '$alt', '$description', '$timing', '$ingredients', '$instructions', '$category')");

    $new = $db->prepare("INSERT INTO recipe (author, title, photo, alt_photo, description, prep_time, ingredients, instructions, category) VALUES (:author, :title, :insertname, :alt, :description, :timing, :ingredients, :instructions, :category)");
    $new->bindParam('author', $author);
    $new->bindParam('title', $title);
    $new->bindParam('insertname', $insertname);
    $new->bindParam('alt', $alt);
    $new->bindParam('description', $description);
    $new->bindParam('timing', $timing);
    $new->bindParam('ingredients', $ingredients);
    $new->bindParam('instructions', $instructions);
    $new->bindParam('category', $category);
    $new->execute();
}

if($new) {
    header('Location: admin.php');
} else {
    echo "Ooups, something went wrong";
};

