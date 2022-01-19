<?php 

session_start();
require_once 'connect.php';


if(isset($_POST['submit'])) {

    $path = './img/';
    $arrayType = ["jpg" => 'image/jpg', "jpeg" => 'image/jpeg'];
    $name = basename($_FILES['img']['name']);
    $insertname = "img/" . $name;

    if(in_array($_FILES['img']['type'], $arrayType)){
        $newImg = move_uploaded_file($_FILES['img']['tmp_name'], $path.$name);
    } else {
        echo "Please choose an image in format JPG/JPEG";
    };

    $id = $_POST['id_recipe'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $timing = $_POST['timing'];
    $category = $_POST['category'];
    $alt = $_POST['alt'];

    if($newImg) {
        $editedPhoto = $db->query("UPDATE `recipe` SET `photo` = '$insertname' WHERE `id_recipe` = '$id'");
    } else {
        echo "ok";
    }
    
    $edited = $db->prepare("UPDATE recipe SET title = :title, alt_photo = :alt, description = :description, prep_time = :timing, category = :category, ingredients = :ingredients, instructions = :instructions WHERE id_recipe = :id");

    $edited->execute([
        'id' => $id,
        'title' => $title,
        'alt' => $alt,
        'description' => $description,
        'timing' => $timing,
        'ingredients' => $ingredients,
        'instructions' => $instructions,
        'category' => $category,
    ]);
};

if($edited) {
    header('Location: admin.php');
} else {
    echo "Ooups, something went wrong";
};










//requète préparée qui n'a pas marché

// $edited = $db->prepare("UPDATE recipe SET title=?, alt_image=? WHERE id_recipe=?");

// $edited->bindParam('ssi', $title, $alt, $id);
// $edited->execute();

// var_dump($edited);



// $edited = $db->prepare("UPDATE recipe SET (title, alt_photo, description, prep_time, ingredients, instructions) VALUES (:title, :alt, :description, :timing, :ingredients, :instructions) WHERE id_recipe = ':id'");

// $edited->bindParam('title', $title);
// // $edited->bindParam('insertname', $insertname);
// $edited->bindParam('alt', $alt);
// $edited->bindParam('description', $description);
// $edited->bindParam('timing', $timing);
// $edited->bindParam('ingredients', $ingredients);
// $edited->bindParam('instructions', $instructions);
// // $edited->bindParam('category', $category);
// $edited->bindParam('id', $id);
// $edited->execute();



// $edited = $db->query("UPDATE `recipe` SET `title` = '$title', `alt_photo` = '$alt', `description` = '$description', `prep_time` = '$timing', `category` = '$category', `ingredients` = '$ingredients', `instructions` = '$instructions' WHERE `id_recipe` = '$id'");