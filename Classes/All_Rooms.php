<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 01.10.18
 * Time: 13:13
 */
namespace HTL3R\Megahamster;
require_once "vendor/autoload.php";

abstract class All_Rooms implements \JsonSerializable
{

    protected $price;
    protected $special_equipment;
    protected $is_new;
    protected $name;
    protected $sport;

    protected $info;

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->outputProductInfo();
    }

    /**
     * @return mixed
     */
    public function getSport()
    {
        return $this->sport;
    }




    public function __construct($name, $price, $special_equipment, $is_new, $sport)
    {
        $this->price = $price;
        $this->special_equipment = $special_equipment;
        $this->is_new = $is_new;
        $this->name = $name;
        $this->sport = $sport;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }




    public function outputProductInfo(){
        return "It is available for the low price of $this->price,-.";
    }
    abstract public function calculateArea();

    public function getSpecialEquipment()
    {
        return $this->special_equipment;
    }

    public function jsonSerialize()
    {
        return [
            neu =>$this->is_new,
            preis => $this->price,
            equipment => $this->special_equipment,
            flaeche => floor($this->calculateArea()) . " cm"
        ];
    }
}