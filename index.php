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
    <title>HOME CHEF : homemade desserts</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav__header">
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
        </div>
    </header>
    <main>
        <section id="offer">
            <div class="container dflex fdcolumn">
                <h1 class="tac">the best homemade desserts recipes</h1>
                <p class="offer__text tac">Make your everyday dessert routine easy, fun & healthy!</p>
                <a href="#categories" class="arrow">Search recipes ></a>
            </div>
        </section>
        <section id="categories">
            <div class="container dflex fdcolumn">
                <h2 class="tac">Search by category</h2>
                <div class="categories__wrapper dflex">
                    <a href="#" class="category dflex fdcolumn">
                        <figure>
                            <img src="img/category01.svg" alt="Cakes">
                        </figure>
                        <p class="category__text">
                            CAKES
                        </p>
                    </a>
                    <a href="#" class="category dflex fdcolumn">
                        <figure>
                            <img src="img/category02.svg" alt="Cakes">
                        </figure>
                        <p class="category__text">
                            COOKIES
                        </p>
                    </a>
                    <a href="#" class="category dflex fdcolumn">
                        <figure>
                            <img src="img/category03.svg" alt="Cakes">
                        </figure>
                        <p class="category__text">
                            CUPCAKES
                        </p>
                    </a>
                    <a href="#" class="category dflex fdcolumn">
                        <figure>
                            <img src="img/category04.svg" alt="Cakes">
                        </figure>
                        <p class="category__text">
                            PIES
                        </p>
                    </a>
                </div>
                <a href="catalogue.php" class="arrow">See all recipes ></a>
            </div>
        </section>
        <section class="latest">
            <div class="container dflex fdcolumn">
                <h2 class="tac">Latest recipes</h2>
                <div class="latest__card-wrapper dflex">

<?php
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
// $content = ob_get_clean();
// require 'views/template.php';
?>

                </div>
                <a href="catalogue.php" class="arrow">See all recipes ></a>
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
                            <a href="index.html">
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