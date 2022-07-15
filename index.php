<?php
define('_direct_no_', TRUE);

    switch($_GET['folder']){
        case 'series'  : $path = 'series'; $inc = $path.'/'.$_GET['file'].'.php';
        break;
        case 'about'  : $path = 'about'; $inc = $path.'/'.$_GET['file'].'.php';     
        break;
        
        default : $inc = 'main.php'; break;
    }

        include_once 'inc/head.inc';
        include_once 'inc/header.php';
        include_once $inc;
              
?>

<?php include_once 'inc/footer.php'; ?>


