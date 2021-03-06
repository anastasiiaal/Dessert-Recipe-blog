<?php
session_start();
require_once 'connect.php';

$id = $_GET['id'];

$recipe = $db->query("SELECT recipe.id_recipe, recipe.title, recipe.description, recipe.ingredients, recipe.instructions, recipe.category, recipe.photo, recipe.alt_photo, recipe.prep_time FROM recipe WHERE recipe.id_recipe = '$id'");
$recipe = $recipe->fetch(PDO::FETCH_ASSOC);

$catQuery = $db->query("SELECT `id_category`, `name_category` FROM `category`");

$cat = $catQuery->fetchAll(PDO::FETCH_ASSOC);

ob_start();

if(isset($_SESSION['login'])) {
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
            <a href="admin.php" class="arrow">< Back to recipes </a>
            <form action="dbupdate.php" method="POST" class="dflex fdcolumn" enctype="multipart/form-data">
                <div class="dflex">
                    <div class="form-wrapper">
                        <input type="hidden" name="id_recipe" id="id_recipe" value="<?= $recipe['id_recipe']?>">
                        <div class="dflex fdcolumn">
                            <label for="title">Modify the recipe title</label>
                            <input type="text" name="title" id="title" value="<?= $recipe['title']?>">
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="description">Modify the recipe description</label>
                            <textarea name="description" id="description" cols="30" rows="5"><?= $recipe['description']?></textarea>
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="ingredients">Modify the ingredients list</label>
                            <textarea name="ingredients" id="ingredients" cols="30" rows="5"><?= $recipe['ingredients']?></textarea>
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="instructions">Modify the instructions</label>
                            <textarea name="instructions" id="instructions" cols="30" rows="5"><?= $recipe['instructions']?></textarea>
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="timing">Change the cooking time</label>
                            <input type="text" name="timing" id="timing" value="<?= $recipe['prep_time']?>">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <p class="label">Change the category:</p>
                        <div class="dflex fdcolumn radio-wrapper">

<?php
foreach($cat as $c) {
    if($c['id_category']===$recipe['category']) {
?>

                            <div>
                                <input type="radio" id="<?=$c['name_category']?>"
                                name="category" value="<?=$c['id_category']?>" checked>
                                <label for="<?=$c['name_category']?>"><?=$c['name_category']?></label>
                            </div>       
                            
<?php
    } else {
?> 
                            <div>
                                <input type="radio" id="<?=$c['name_category']?>"
                                name="category" value="<?=$c['id_category']?>">
                                <label for="<?=$c['name_category']?>"><?=$c['name_category']?></label>
                            </div>  
<?php
    };
?>  
<?php
}
?>  
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="img">Choose another image</label>
                            <input type="file" name="img" id="img" value="<?=$recipe['photo']?>">
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="alt">Alt image</label>
                            <input type="text" name="alt" id="alt" value="<?= $recipe['alt_photo']?>">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" value="Save changes" class="add-input">
            </form>
        </div>
    </section>
</body>
</html>

<?php    
} else {
    header('Location: login.php');
}