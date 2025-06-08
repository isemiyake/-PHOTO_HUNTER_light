<?php

namespace App\Controllers\PhotosControllers;

use \PDO;

function indexAction(PDO $connexion)
{
    include_once '../app/models/photosModel.php';
    $photos = \App\Models\PhotosModel\findAll($connexion, 6);

    global $content, $title;
    $title = "Catalogue";
    ob_start();
    include '../app/views/photos/index.php';
    $content = ob_get_clean();
}
