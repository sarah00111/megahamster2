<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 11.02.19
 * Time: 12:29
 */

namespace HTL3R\Megahamster;

class RoomProvider
{
    public static function getRooms() {
        require_once __DIR__. "/../config.php";

        $config = new \Doctrine\DBAL\Configuration();

        $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

        $queryBuilder = $conn->createQueryBuilder();

        $qry = $queryBuilder
            ->select('name', 'price', 'special_equipment', 'length', 'width', 'height', 'typ')
            ->from('Rooms_1')
        ;

        return self::makeObject($qry->execute()->fetchAll());
    }

    public static function makeObject($input) {
        $erg = [];
        foreach ($input as $row) {
            switch ($row['typ']) {
                case 'Room':
                    $erg[] = new The_Room2($row['name'], $row['price'], $row['length'], $row['width'], $row['height'], $row['special_equipment'],false);
                    break;
                case 'Flat':
                    $erg[] = new The_Flat2($row['name'], $row['price'], $row['length'], $row['width'], $row['height'], $row['special_equipment'], false);
                    break;
                case 'Pit':
                    $erg[] = new The_Pit2($row['name'], $row['price'], $row['length'], $row['special_equipment'], true);
                    break;
            }

        }
        return $erg;
    }
}