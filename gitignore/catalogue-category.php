<?php
require_once 'connect.php';

$cat = $_GET['cat'];


$listQuery = $db->query("SELECT recipe.id_recipe, recipe.title, recipe.photo, recipe.alt_photo, recipe.prep_time, category.id_category, category.name_category FROM recipe INNER JOIN category ON recipe.category = category.id_category WHERE name_category = '$cat'");
$list = $listQuery->fetchAll(PDO::FETCH_ASSOC);
print_r($list);

echo '<div class="latest__card-wrapper dflex">';
foreach ($list as $l) {

?>
                    <div class="recipe-card dflex fdcolumn">
                        <img src="<?=$l['photo']?>" alt="<?=$l['alt_photo']?>">
                        <div class="recipe-card__text">
                            <h3><?=$l['title']?></h3>
                            <a href="#">
                                <p class="card-category">
                                    <?=$l['name_category']?>
                                </p>
                            </a>
                            <p class="card-time">
                                Cooking time: <?=$l['prep_time']?>
                            </p>
                            <a href="#" class="arrow yellow">See the recipe ></a>
                        </div>
                    </div>
<?php                    

}  

echo '</div>';

// $content = ob_get_clean();

// require 'views/template.php';
