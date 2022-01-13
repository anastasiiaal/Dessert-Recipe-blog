<?php
require_once 'connect.php';
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
    <title>Admin : add new</title>
</head>
<body>
    <section id="add-new">
        <div class="container">
            <a href="admin.php" class="arrow"> < Back to recipes </a>
            <form action="dbnew-recipe.php" method="POST" class="dflex fdcolumn" enctype="multipart/form-data">
                <div class="dflex">
                    <div class="form-wrapper">
                        <div class="dflex fdcolumn">
                            <label for="title">Recipe title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="description">Quick recipe description</label>
                            <textarea name="description" id="description" cols="30" rows="5"></textarea>
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="ingredients">Ingredients list</label>
                            <textarea name="ingredients" id="ingredients" cols="30" rows="5"></textarea>
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="instructions">Instructions</label>
                            <textarea name="instructions" id="instructions" cols="30" rows="5"></textarea>
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="timing">Cooking time</label>
                            <input type="text" name="timing" id="timing">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <p class="label">Choose a category:</p>
                        <div class="dflex fdcolumn radio-wrapper">
                            <div>
                                <input type="radio" id="cakes"
                                name="category" value="1">
                                <label for="cakes">Cakes</label>
                            </div>                           
                            <div>
                                <input type="radio" id="cookies"
                                name="category" value="2">
                                <label for="cookies">Cookies</label>
                            </div>
                            <div>
                                <input type="radio" id="cupcakes"
                                name="category" value="3">
                                <label for="cupcakes">Cupcakes</label>
                            </div>
                            <div>
                                <input type="radio" id="pies"
                                name="category" value="4">
                                <label for="pies">Pies</label>
                            </div>
                        </div>


<!-- if(isset($_POST['submit'])){

    $path = './img/';
    $arrayType = ["jpg" => 'image/jpg', "jpeg" => 'image/jpeg'];
    $name = basename($_FILES['img']['name']);

    if(in_array($_FILES['img']['type'], $arrayType)){
        move_uploaded_file($_FILES['img']['tmp_name'], $path.$name);
    } else {
        echo "Please choose an image in format JPG/JPEG";
    }
} -->

                        <div class="dflex fdcolumn">
                            <label for="img">Load an image</label>
                            <input type="file" name="img" id="img">
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="alt">Alt image</label>
                            <input type="text" name="alt" id="alt">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" value="Add the recipe +" class="add-input">
            </form>
        </div>
    </section>
</body>
</html>