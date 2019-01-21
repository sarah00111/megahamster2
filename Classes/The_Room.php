<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 01.10.18
 * Time: 13:15
 */
namespace HTL3R\Megahamster;
require_once "vendor/autoload.php";

class The_Room extends Room_living /*implements \JsonSerializable*/
{

    function __construct()
    {
        parent::__construct("TheRoom", 80, 50, 50, 49, [], false);
    }

    public function outputProductInfo()
    {
        return "Our Domain 'The Room' is the basic choice of real estate for a hamster owner." .  parent::outputProductInfo();
    }


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */

}