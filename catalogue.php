<?php
require_once 'connect.php';

$blog = $db->query('SELECT recipe.id_recipe, recipe.title, recipe.photo, recipe.alt_photo, recipe.prep_time, category.id_category, category.name_category FROM recipe INNER JOIN category ON recipe.category = category.id_category ORDER BY id_recipe ASC');

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
    <title>HOME CHEF : Recipe catalogue</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav__header">
                <ul>
                    <li>
                        <a href="catalogue.php?cat=<">Cakes</a> 
                        <!-- !!!!!!! -->
                    </li>
                    <li>
                        <a href="#">Cookies</a>
                    </li>
                    <li>
                        <figure>
                            <a href="index.php">
                                <img src="img/logo.svg" alt="Logo">
                            </a>
                        </figure>
                    </li>
                    <li>
                        <a href="#">Cupcakes</a>
                    </li>
                    <li>
                        <a href="#">Pies</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="list">
            <div class="container">
                <nav class="nav__category">
                    <ul>
                        <li>
                            Filter:
                        </li>
                        <li>
                            <a href="#" class="category-active">All recipes</a>
                        </li>
                        <li>
                            <a href="#">Cakes</a>
                        </li>
                        <li>
                            <a href="#">Cookies</a>
                        </li>
                        <li>
                            <a href="#">Cupcakes</a>
                        </li>
                        <li>
                            <a href="#">Pies</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="latest list__catalogue">
            <div class="container dflex fdcolumn">

<?php
echo '<div class="latest__card-wrapper dflex">';
while ($recipe = $blog->fetch(PDO::FETCH_ASSOC)) {
?>

                    <div class="recipe-card dflex fdcolumn">
                        <img src="<?=$recipe['photo']?>" alt="<?=$recipe['alt_photo']?>">
                        <div class="recipe-card__text">
                            <h3><?=$recipe['title']?></h3>
                            <a href="#">
                                <p class="card-category">
                                    <?=$recipe['name_category']?>
                                </p>
                            </a>
                            <p class="card-time">
                                Cooking time: <?=$recipe['prep_time']?>
                            </p>
                            <a href="recipe.php?id=<?=$recipe['id_recipe']?>" class="arrow yellow">See the recipe ></a>
                        </div>
                    </div>
<?php
}  

echo '</div>';

// $content = ob_get_clean();

// require 'views/template.php';
?>

                <!-- <a href="#" class="arrow">Load more ></a> -->
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <nav class="nav__footer">
                <ul>
                    <li>
                        <a href="#">Cakes</a>
                    </li>
                    <li>
                        <a href="#">Cookies</a>
                    </li>
                    <li>
                        <figure>
                            <a href="index.php">
                                <img src="img/logo.svg" alt="Logo">
                            </a>
                        </figure>
                    </li>
                    <li>
                        <a href="#">Cupcakes</a>
                    </li>
                    <li>
                        <a href="#">Pies</a>
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