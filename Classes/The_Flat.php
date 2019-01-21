<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 08.10.18
 * Time: 12:26
 */
namespace HTL3R\Megahamster;
require_once "vendor/autoload.php";

class The_Flat extends Room_living /*implements \JsonSerializable*/
{

    function __construct()
    {
        parent::__construct("TheFlat", 120, 80, 80, 149, ["Food Jars"], true);
    }

    public function outputProductInfo()
    {
        return "Our Domain 'The Flat' is the advanced choice of real estate for a hamster owner." . parent::outputProductInfo();
    }

}

