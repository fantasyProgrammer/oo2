 <?php 
    
    // function __autoload($class){
    //     echo $class ."<br/>";
    //     include("classes/".$class.".php");
    // } //php 5.5
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });


   
   $call = new calculation;
    $num = array(
        array("number one:", 19, 10),
        array("number two:", 20, 20),
        array('number theree',30,30)
    );
    $call->getValue($num);

   
    new Java  ( new Php);

    $person = new person();
    foreach ($person as $key => $value) {
        echo "<pre>";
        echo "$key => $value";
        echo "<pre/>";
    }
    $person->interatiorInner();
    
?>