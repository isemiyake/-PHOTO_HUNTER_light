<?php
//ROUTER PRINCIPAL

if (isset($_GET['photos'])):

    include_once '../app/controllers/photosControllers.php';
    \App\Controllers\PhotosControllers\indexAction($connexion);

else :
    include_once '../app/controllers/pagesControllers.php';
    \App\Controllers\PagesControllers\homeAction($connexion);

endif;
