<?php
//ROUTER PRINCIPAL
if (isset($_GET['authors'])):

    include_once '../app/controllers/authorsControllers.php';
    \App\Controllers\AuthorsControllers\indexAction($connexion);

elseif (isset($_GET['photos'])):

    include_once '../app/controllers/photosControllers.php';
    \App\Controllers\PhotosControllers\indexAction($connexion);

else :
    include_once '../app/controllers/pagesControllers.php';
    \App\Controllers\PagesControllers\homeAction($connexion);

endif;
