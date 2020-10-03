 <?php 
   class person {
       public $name;
       public $age;
       public $id;

    //    public function __construct($name, $age){
    //        $this->name = $name;
    //        $this->age = $age;
    //    }
       public function setId($id){
           $this->id = $id;
       }
       public function __destruct(){
           if(! empty($this->id)){
               echo "This is saving";
           }
       }
   }
   
   $personOne = new person( "abir" , "36");
   $personOne->setId(12);
   unset($personOne);

 ?>