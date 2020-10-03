 <?php 
    
    // function __autoload($class){
    //     echo $class ."<br/>";
    //     include("classes/".$class.".php");
    // } //php 5.5

   /* spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });*/

    

    trait Java{
        public function JavaCoder(){
            return "I Love Java .<br/>";
        }
    }

    trait PHP{
        public function PhpCoder(){
            return "I Love php";
        }
    }

    class coderOne{
        use Java;
    }

    class coderTwo{
        use PHP;
    }
    
    $c1 = new coderOne;
   echo $c1->JavaCoder();
    $c2  = new coderTwo;
   echo $c2->PhpCoder();

    



   

?>