<?php
//namespace hhmvc\app\Record

final class Record{
 
    /**
     * Maintains collection of instantiated classes
     */
    private static $instances = array();
    
    /**
     * Overload constructor
     */
    private function __construct(){}
    
    /**
     * Manages instantiation of classes
     * 
     * @param $class
     * 
     * @return self instance of the class
     */
    public static function instance($class)
    {        
        //instantiate class as necessary
        self::create($class);    
        
        //return instance
        return self::$instances[$class];
    }
    
    /**
     * Creates the instances
     * 
     * @param $class
     * 
     * @return none
     */
    private static function create($class)
    {
        //check if an instance of requested class exists
        if (!array_key_exists($class , self::$instances))
        {
            self::$instances[$class] = new $class;
        }
    }
}


// Class Record {

//  /*
//  * @the vars array
//  * @access private
//  */
//  private $vars = array();


//  /**
//  *
//  * @set undefined vars
//  *
//  * @param string $index
//  *
//  * @param mixed $value
//  *
//  * @return void
//  *
//  */
//  public function __set($index, $value)
//  {
// 	$this->vars[$index] = $value;
//  }

//  /**
//  *
//  * @get variables
//  *
//  * @param mixed $index
//  *
//  * @return mixed
//  *
//  */
//  public function __get($index)
//  {
// 	return $this->vars[$index];
//  }

// }

?>