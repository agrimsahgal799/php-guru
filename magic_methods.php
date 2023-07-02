<?php
/*
Magic methods
---------------------
Magic methods are special methods that are called automatically when cretain conditions are meet.

1. Every magic method starts with underscore(__)
2. They are predefined, have a reserved name, and will never be used for other purposes.

List of magic methods :

# __construct()
# __destruct()
# __call($name, $parameter)
# __toString()
# __set($name, $value)
# __get()
# __debugInfo()

*/

class MagicMethod{
    
    /* This method gets called automatically every time when the object of a perticular class is created */
    function __construct(){
        echo "<strong>__constuct</strong> <br />";
        echo "__constuct magic method is called <br /><br />";
    }

    /* This method gets called automatically every time when the object of a perticular class is destroyed */
    function __destruct(){
        echo "<strong>__destruct</strong> <br />";
        echo "__destruct magic method is called <br />";           
    }
    
    /* This method gets called when a property or method is called whitch is not defined yet */
    function __call($name, $parameters){
        echo "<strong>__call</strong></br>";
        echo "method name : ".$name;
        echo "<pre>";print_r($parameters);echo "</pre>";
    }

    /* This method gets called when object is treated as a string */
    function __toString(){
        return "<strong>__toString</strong></br>you are using this class MagicMethod object as a string.</br></br>";
    }
}

/* OUTPUT */

$obj = new MagicMethod();
$obj->myCall('agrim','sahgal');
echo $obj;