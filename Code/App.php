<?php

//Fitxer per crear el contenidor de les dependències
namespace Code;
use Exception;
class App
{
//Array per al contenidor dependències

private static $container;

//Funcio enllaçar la dependència al contenidor

public static function bind($key, $value)
    {
        static::$container[$key] = $value;
    }

//Creem funcio per recuperar la dependencia
public static function get($key)
    {
       if (array_key_exists($key, static::$container)) {
           throw new Exception("No key '{$key}' in container}" );
       }
       return static::$container[$key];
    }
}