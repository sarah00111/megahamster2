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
            ->select('name', 'price', 'info')
            ->from('Rooms')
        ;

        return $qry->execute()->fetchAll();
    }
}