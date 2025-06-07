<?php

namespace App\Controllers\PagesControllers;

use \PDO;

function homeAction(PDO $connexion)
{
    include_once '../app/models/photosModel.php';
    $photos = \App\Models\PhotosModel\findAll($connexion);

    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion);

    global $content, $title;
    $title = "Page d'accueil";
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
