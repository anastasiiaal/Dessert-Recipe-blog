<?php
require_once 'connect.php';

$id = $_GET['id'];

$recipe = $db->query("SELECT recipe.id_recipe, recipe.title, recipe.description, recipe.photo, recipe.alt_photo, recipe.prep_time, recipe.ingredients, recipe.instructions, recipe.category FROM recipe WHERE recipe.id_recipe = '$id'");
$recipe = $recipe->fetch(PDO::FETCH_ASSOC);

$ingredient = explode(";", $recipe['ingredients']);
$instruction = explode(";", $recipe['instructions']);

$blog = $db->query("SELECT recipe.id_recipe, category.id_category, category.name_category FROM recipe INNER JOIN category ON recipe.category = category.id_category WHERE recipe.id_recipe = '$id'");
$other = $blog->fetch(PDO::FETCH_ASSOC);

// ob_start();
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
    <link rel="icon" type="image/x-icon" href="img/favicon1.png">
    <link rel="stylesheet" href="main.css">
    <title>HOME CHEF : Recipe </title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav__header">
                <ul>
                    <li>
                        <a href="catalogue.php?cat=cakes">Cakes</a>
                    </li>
                    <li>
                        <a href="catalogue.php?cat=cookies">Cookies</a>
                    </li>
                    <li>
                        <figure>
                            <a href="index.php">
                                <img src="img/logo.svg" alt="Logo">
                            </a>
                        </figure>
                    </li>
                    <li>
                        <a href="catalogue.php?cat=cupcakes">Cupcakes</a>
                    </li>
                    <li>
                        <a href="catalogue.php?cat=pies">Pies</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="recipe">
            <div class="container">
                <div class="recipe__description dflex">
                    <figure>
                        <img src="<?=$recipe['photo']?>" alt="<?=$recipe['alt_photo']?>">
                    </figure>
                    <div class="recipe__text dflex fdcolumn">
                        <h2><?=$recipe['title']?></h2>
                        <p class="p-description">
                            <?=$recipe['description']?> 
                        </p>
                        <a href="catalogue.php?cat=<?=$other['name_category']?>">
                            <p class="card-category">
                                <?=$other['name_category']?>
                            </p>
                        </a>
                        <p class="card-time">
                            Cooking time: <?=$recipe['prep_time']?>
                        </p>
                    </div>
                </div>
                <div class="prep-wrapper dflex">
                    <div class="recipe__preparation">
                        <div class="recipe__ingredients">
                            <h3>You’re going to need:</h3>
                            <ul class="recipe__list">
<?php
foreach($ingredient as $value){
?>

                                <li><?=$value?></li>

<?php
};
?>
                            </ul>
                        </div>
                        <div class="recipe__instructions">
                            <h3>Instructions:</h3>
                            <ul class="recipe__list">
<?php
foreach($instruction as $value){
?>                                
                                <li><?=$value?></li>
<?php
};
?>
                            </ul>
                        </div>
                    </div>
                    <aside class="similar">
                        <h3>You might also like:</h3>
                        <div class="dflex fdcolumn">

<?php

// similar recipes selection

$cat = $recipe['category'];
$takenId = $recipe['id_recipe'];

$recomend = $db->query("SELECT recipe.id_recipe, recipe.title, recipe.photo, recipe.alt_photo, recipe.prep_time, recipe.category FROM recipe INNER JOIN category ON recipe.category = category.id_category WHERE recipe.category = '$cat' LIMIT 3");
$recomend = $recomend->fetchAll(PDO::FETCH_ASSOC);

foreach($recomend as $r) {
    if($r['id_recipe'] === $takenId) {
        continue; // FAUT UTILISER AUTRE CHOSE?
    } else {
?>

                            <div class="recipe-card dflex fdcolumn">
                                <img src="<?=$r['photo']?>" alt="<?=$r['alt_photo']?>">
                                <div class="recipe-card__text">
                                    <h3><?=$r['title']?></h3>
                                    <a href="catalogue.php?cat=<?=$other['name_category']?>">
                                        <p class="card-category">
                                            <?=$other['name_category']?>
                                        </p>
                                    </a>
                                    <p class="card-time">
                                        Cooking time: <?=$r['prep_time']?>
                                    </p>
                                    <a href="recipe.php?id=<?=$r['id_recipe']?>" class="arrow yellow">See the recipe ></a>
                                </div>
                            </div>

<?php
};
?>

<?php
};
?>


                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <nav class="nav__footer">
                <ul>
                    <li>
                        <a href="catalogue.php?cat=cakes">Cakes</a>
                    </li>
                    <li>
                        <a href="catalogue.php?cat=cookies">Cookies</a>
                    </li>
                    <li>
                        <figure>
                            <a href="index.php">
                                <img src="img/logo.svg" alt="Logo">
                            </a>
                        </figure>
                    </li>
                    <li>
                        <a href="catalogue.php?cat=cupcakes">Cupcakes</a>
                    </li>
                    <li>
                        <a href="catalogue.php?cat=pies">Pies</a>
                    </li>
                </ul>
            </nav>
            <div class="network__wrapper dflex">
                <figure>
                    <a href="https://twitter.com">
                        <img src="img/network01.svg" alt="Twitter">
                    </a>
                </figure>
                <figure>
                    <a href="https://www.facebook.com">
                        <img src="img/network02.svg" alt="Facebook">
                    </a>
                </figure>
                <figure>
                    <a href="https://instagram.com">
                        <img src="img/network03.svg" alt="Instagram">
                    </a>
                </figure>
            </div>
        </div>
    </footer>
</body>
</html>