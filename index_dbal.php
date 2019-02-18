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
foreach (RoomProvider::getRooms() as $item) {
    echo $item->outputProductInfo() . "<br>";
}

