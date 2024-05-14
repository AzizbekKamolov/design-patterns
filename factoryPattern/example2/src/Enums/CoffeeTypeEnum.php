<?php
enum CoffeeTypeEnum
{
    case CappuccinoCoffee;
    case AmericanoCoffee;
    case MochaCoffee;
    case EspressoCoffee;

    public static function accessedTypes():array
    {
        return [
            self::AmericanoCoffee->name,
            self::EspressoCoffee->name,
//            self::MochaCoffee->name,
            self::CappuccinoCoffee->name
        ];
    }
    public static function from(string $type):bool|string
    {
        if (in_array($type, self::accessedTypes())){
            foreach (self::cases() as $case){
                if ($case->name === $type){
                    return $type;
                }
            }
        }
        return false;
    }
}