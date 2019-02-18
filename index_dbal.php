<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 11.02.19
 * Time: 12:36
 */

require_once "vendor/autoload.php";

use HTL3R\Megahamster\RoomProvider;
use HTL3R\Megahamster\The_Room2;
use HTL3R\Megahamster\The_Pit2;
use HTL3R\Megahamster\The_Flat2;

/*var_dump(RoomProvider::getRooms());*/
/*foreach (RoomProvider::getRooms() as $item) {
    echo $item->outputProductInfo() . "<br>";
}*/

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
    $rooms = RoomProvider::getRooms();

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

