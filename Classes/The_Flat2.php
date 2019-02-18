<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 08.10.18
 * Time: 12:26
 */
namespace HTL3R\Megahamster;
require_once "vendor/autoload.php";

class The_Flat2 extends Room_living /*implements \JsonSerializable*/
{


    /*function __construct()
    {
        parent::__construct("TheFlat", 120, 80, 80, 149, ["Food Jars"], true);
    }*/

    /**
     * The_Flat2 constructor.
     */
    public function __construct($name, $price, $length, $width, $height, $special_equipment, $is_sport)
    {
        parent::__construct($name, $price, $length, $width, $height, $special_equipment, true);
    }

    public function outputProductInfo()
    {
        return "Our Domain $this->name is the advanced choice of real estate for a hamster owner." . parent::outputProductInfo();
    }

}

