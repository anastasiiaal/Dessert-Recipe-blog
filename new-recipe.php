<?php
session_start();
require_once 'connect.php';

$catQuery = $db->query("SELECT `id_category`, `name_category` FROM `category`");

$cat = $catQuery->fetchAll(PDO::FETCH_ASSOC);

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
                    <!-- <input type="hidden" name="id_author" id="id_author"> -->
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
                            <textarea name="ingredients" id="ingredients" cols="30" rows="5" placeholder="Please separate each ingredient by a semicolon"></textarea>
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="instructions">Instructions</label>
                            <textarea name="instructions" id="instructions" cols="30" rows="5" placeholder="Please separate each instruction by a semicolon"></textarea>
                        </div>
                        <div class="dflex fdcolumn">
                            <label for="timing">Cooking time</label>
                            <input type="text" name="timing" id="timing" placeholder="E.g., 45 min, 1 h 30 min, etc.">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <p class="label">Choose a category:</p>
                        <div class="dflex fdcolumn radio-wrapper">

<?php
foreach($cat as $c) {
?>

                            <div>
                                <input type="radio" id="<?=$c['name_category']?>"
                                name="category" value="<?=$c['id_category']?>">
                                <label for="<?=$c['name_category']?>"><?=$c['name_category']?></label>
                            </div>       
                            
<?php
}
?>                           

                        </div>
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