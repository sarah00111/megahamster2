<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 08.10.18
 * Time: 12:02
 */
namespace HTL3R\Megahamster;
require_once "vendor/autoload.php";

class The_Pit2 extends All_Rooms implements \JsonSerializable
{
    protected $side;

    /**
     * @return int
     */
    public function getSide()
    {
        return $this->side;
    }

    function __construct($name, $price, $side, $special_equipment, $is_sport)
    {
        parent::__construct($name, $price, $special_equipment, false, $is_sport);
        $this->side = $side;
    }

    public function outputProductInfo()
    {
        return "$this->name is the logical choice for security-conscious  hamster owner. It features a length of $this->side. " . parent::outputProductInfo();
    }

    public function calculateArea()
    {
        return 2 * $this->side * $this->side * (1 + sqrt(2));
    }

    public function jsonSerialize()
    {

        return parent::jsonSerialize() + [
                laenge => $this->side
            ];

        /*$jsonArray['name'] = "The Pit";
        $jsonArray['price'] = $this->price;
        $jsonArray['special_equipment'] = $this->special_equipment;
        $jsonArray['side_length'] = $this->side_length;

        return $jsonArray;*/
    }
}