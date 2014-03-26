<?php
//namespace hhmvc\app\Record
// instances record runtime
final class Record{

    private static $instances = array();

    private function __construct(){}

    public static function instance($class)
    {        
        self::create($class);    
        return self::$instances[$class];
    }

    private static function create($class)
    {
        //check if an instance of requested class exists
        if (!array_key_exists($class , self::$instances))
        {
            self::$instances[$class] = new $class;
        }
    }
}

// __set __get runtime-record
// Class Record {

//      private $vars = array();

//      public function __set($index, $value)
//      {
//       	$this->vars[$index] = $value;
//      }
//      public function __get($index)
//      {
//     	    return $this->vars[$index];
//      }

// }