<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name) :bool
    {
       return mb_strlen($name) > 4;
    }

    public static function validateNumber(int|float $value)
    {
        return $value >0;
    }

    public static function validateBarCode(string $barCode) :bool
    {  
        return mb_strlen($barCode) == 13 && mb_substr($barCode, 0, 3) == '789';
    }
    public static function validateprovidername(string $providername) :bool
    {
       return mb_strlen($providername) > 3;
    }
    public static function validateprovidercnpj(int $providercnpj) :bool
    {  
        return mb_strlen($providercnpj) == 14;
    }
    public static function validatepublicPlace(string $publicPlace) :bool
    {  
        return mb_strlen($publicPlace) > 3;
    }
    public static function validatestreetNumber(int $streetNumber) :bool
    {  
        return mb_strlen($streetNumber);
    }
    public static function validateneighborhood(string $neighborhood) :bool
    {  
        return mb_strlen($neighborhood) > 4;
    }
    public static function validatecity(string $city) :bool
    {  
        return mb_strlen($city) > 3;
    }
    public static function validatepostalCode(string $postalCode) :bool
    {  
        return mb_strlen($postalCode) == 8;
    }
}

