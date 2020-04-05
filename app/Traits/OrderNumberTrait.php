<?php


namespace App\Traits;

/** TODO: Посмотреть SortableTrait и взять код оттуда */
trait OrderNumberTrait
{
    public static function getNextOrderNumber()
    {
        return (floor(self::max('order_number')/10)+1)*10;
    }
}
