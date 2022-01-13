<?php
require_once 'connect.php';

$blog = $db->query('SELECT `id_recipe`, `author`, `title`, `photo`, `alt_photo`, `category`, `prep_time` FROM `recipe` ORDER BY `id_recipe` ASC');

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
    <title>Admin : main</title>
</head>
<body>
    <main>
        <section id="admin-main">
            <div class="container">
                <nav class="nav__category">
                    <ul>
                        <li>
                            Filter:
                        </li>
                        <li>
                            <a href="#">The newest recipes</a>
                        </li>
                        <li>
                            <a href="#" class="category-active">The oldest recipes</a>
                        </li>
                    </ul>
                </nav>
                <a href="new-recipe.php" class="admin-btn add-btn">Add new recipe +</a>
                

<?php
echo '<div class="latest__card-wrapper dflex">';
while ($recipe = $blog->fetch(PDO::FETCH_ASSOC)) {
?>
                    <div class="recipe-card dflex fdcolumn">
                        <img src="<?=$recipe['photo']?>" alt="<?=$recipe['alt_photo']?>">
                        <div class="recipe-card__text">
                            <h3><?=$recipe['title']?></h3>
                            <p class="p-id">
                                recipe id N° <?=$recipe['id_recipe']?>
                            </p>
                            <div class="admin__btn-wrapper">
                                <a href="update.php?id=<?=$recipe['id_recipe']?>" class="admin-btn">Edit recipe</a>
                                <a href="delete.php?id=<?=$recipe['id_recipe']?>" class="admin-btn">Delete</a>
                            </div>
                        </div>
                    </div>
<?php
}  

echo '</div>';

// $content = ob_get_clean();

// require 'views/template.php';
?>
            </div>
        </section>
    </main>
</body>
</html>