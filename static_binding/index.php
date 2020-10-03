 <?php 
    
    // function __autoload($class){
    //     echo $class ."<br/>";
    //     include("classes/".$class.".php");
    // } //php 5.5

    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });

    class phpChild extends php{

        public static function getFramework(){
            return __CLASS__;
        }
    }

    $php = new Php();
    $php->framework();

    
   



   

?>