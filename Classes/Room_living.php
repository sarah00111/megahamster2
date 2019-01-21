<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 08.10.18
 * Time: 11:49
 */
namespace HTL3R\Megahamster;
require_once "vendor/autoload.php";

abstract class Room_living extends All_Rooms
{
    protected $length;
    protected $width;
    protected $height;

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }




    /**
     * Room_living constructor.
     * @param $length
     * @param $width
     * @param $height
     */
    public function __construct($name, $price, $length, $width, $height, $special_equipment, $is_new)
    {
        parent::__construct($name, $price, $special_equipment, $is_new, false);
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }


    public function outputProductInfo(){
        return "It features a length of $this->length cm, a width of $this->width cm and a height of $this->height cm." . parent::outputProductInfo();
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }

    public function jsonSerialize()
    {
        return parent::jsonSerialize() + [
            laenge => $this->length,
            breite => $this->width,
            hoehe => $this->height

        ];

    }
}