<?php
require_once 'connect.php';

$id = $_GET['id'];

$del = $db->query("DELETE FROM `recipe` WHERE `id_recipe` = '$id'");
if($del){
    header('Location: admin.php');
} else {
    echo "Il y a un souci";
};