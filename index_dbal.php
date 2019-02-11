<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 11.02.19
 * Time: 12:36
 */

require_once "vendor/autoload.php";

use HTL3R\Megahamster\RoomProvider as RoomProvider;

foreach(RoomProvider::getRooms() as $row) {
    echo "Name: " . $row['name'] . "<br>";
}