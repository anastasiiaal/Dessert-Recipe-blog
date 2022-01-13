<?php
try {
        $db = new PDO('mysql:host=localhost;dbname=recipe-blog;charset=utf8', 'root');
    } catch(Exception $e){
        echo 'Erreur : ' . $e->getMessage();
    }
