<?php

if (isset($_GET['views'])){

    $views = $_GET['views'];

    require_once 'src/views/' .$views .'.php';
} else{
    require_once 'src/views/home.php';
}