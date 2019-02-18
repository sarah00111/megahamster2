<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 07.01.19
 * Time: 12:43
 */
require_once "vendor/autoload.php";

use HTL3R\Megahamster\The_Room;
use HTL3R\Megahamster\The_Pit;
use HTL3R\Megahamster\The_Flat;

$view = new \TYPO3Fluid\Fluid\View\TemplateView();
$paths = $view->getTemplatePaths();
$paths->setTemplateRootPaths([__DIR__ . '/Templates/']);
$paths->setPartialRootPaths([__DIR__ . '/Templates/Partials/']);


if(!isset($_GET['id'])) {
    $_GET['id'] = 'willkommen';
}
$get = $_GET['id'];
$teile = explode("_", $get);
if(count($teile) < 2) {
    $rooms[] = new The_Flat();
    $rooms[] = new The_Room();
    $rooms[] = new The_Pit();

    $view->assignMultiple(
        array(
            "Rooms" => $rooms
        )
    );

    $output = $view->render("index_willkommen");
    echo $output;
}else {
    $text = "Datenschutz";
    if($teile[1] == "impressum") {
        $text = "Impressum";
    }

    $view->assignMultiple(
        array(
            "info" => $text
        )
    );


    $output = $view->render("index_info");
    echo $output;
}


/*if($_GET['id'] == 3 || $_GET['id'] == 2) {
    $text = 'Impressum';
    if($_GET['id'] == 3) {
        $text = 'Datenschutz';
    }


    $view->assignMultiple(
        array(
            "info" => $text
        )
    );


    $output = $view->render("index_info");
    echo $output;

}else if($_GET['id'] == 1) {
    $rooms[] = new The_Flat();
    $rooms[] = new The_Room();
    $rooms[] = new The_Pit();

    $view->assignMultiple(
        array(
            "Rooms" => $rooms
        )
    );

    $output = $view->render("index_willkommen");
    echo $output;
}*/

