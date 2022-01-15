<?php
require_once 'connect.php';

$id = $_GET['id'];

$recipe = $db->query("SELECT recipe.id_recipe, recipe.title, recipe.description, recipe.photo, recipe.alt_photo, recipe.prep_time FROM recipe WHERE recipe.id_recipe = '$id'");
$recipe = $recipe->fetch(PDO::FETCH_ASSOC);

$blog = $db->query('SELECT recipe.id_recipe, recipe.title, recipe.photo, recipe.alt_photo, recipe.prep_time, category.id_category, category.name_category FROM recipe INNER JOIN category ON recipe.category = category.id_category');
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
    <link rel="stylesheet" href="main.css">
    <title>HOME CHEF : Recipe </title>
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
                        <a href="#">
                            <p class="card-category">
                                cakes
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
                                <li>100 g (1 stick) butter</li>
                                <li>200 g (2 cups) crumbs digestive biscuits</li>
                                <li>250 g (1¼ cups) white chocolate</li>
                                <li>300 ml (1¼ cups) double (heavy) cream</li>
                                <li>280 g (1¼ cups) full fat cream cheese</li>
                                <li>1 teaspoon vanilla extract</li>
                            </ul>
                        </div>
                        <div class="recipe__instructions">
                            <h3>Instructions:</h3>
                            <ul class="recipe__list">
                                <li>Start by lining a 20cm (7 inch) spring form cake tin. Line the base and sides with non-stick paper. This makes removing the cheesecake easier.</li>
                                <li>200 g (2 cups) crumbs digestive biscuits</li>
                                <li>Using a food processor, blitz the biscuits until finely ground. Alternatively, place the biscuits in a food bag and crush with a rolling pin until you have fine crumbs.</li>
                                <li>Stir the crumbs into the melted butter mixing well to ensure all the crumbs are thoroughly covered. Press the buttery crumbs into the tin. Chill.</li>
                                <li>Melt the chocolate in a bowl over a pan of simmering water ensuring the bottom of the bowl does not come into contact with the water. Allow to cool slightly.</li>
                                <li>Lightly whip the double cream until it forms soft peaks.</li>
                                <li>Beat the vanilla extract into the cream cheese until smooth and shiny.</li>
                                <li>Beat the melted chocolate into the cream cheese then fold in the whipped cream.</li>
                                <li>Pour the cheesecake mixture over the biscuit base and smooth the top.</li>
                                <li>Chill for at least two hours and preferably overnight.</li>
                            </ul>
                        </div>
                    </div>
                    <aside class="similar">
                        <h3>You might also like:</h3>
                        <div class="dflex fdcolumn">

<?php

for($i=1;$i<=2;$i++) {

?>

                            <div class="recipe-card dflex fdcolumn">
                                <img src="img/recipe01.jpg" alt="Recipe photo">
                                <div class="recipe-card__text">
                                    <h3>No Bake White Chocolate Cheesecake</h3>
                                    <a href="#">
                                        <p class="card-category">
                                            cakes
                                        </p>
                                    </a>
                                    <p class="card-time">
                                        Cooking time: 30 min
                                    </p>
                                    <a href="recipe.html" class="arrow yellow">See the recipe ></a>
                                </div>
                            </div>

<?php

}

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