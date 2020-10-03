 <?php 
    //Access modifier
    //public
    //private
    //protected

   class userData{
       public $user;
       public $id;
       protected $age = "30";
    
        

        public function display (){
            echo "This user name id {$this->user} and This user id is {$this->id}"."<br/>";
            echo $this->age."inside the class";

        }

        

       public function __construct($name, $Id){
            $this->user = $name;
            $this->id = $Id;
            
       }
   }

   class admin extends userData{
        public $lavel;
       
        public function display (){
            echo "This user name id {$this->user} and This user id is {$this->id} and the user lavel is {$this->lavel}"."<br/>";
            echo $this->age."outside the class";

        }
   }

   $id = "565";
   $userName ="Abir";
   $ur = new userData($userName, $id);
   $ur->display();
   echo "<br/>";

   $userName ="Kalyan Biswa";
   $id = "5";
   $ad = new admin($userName, $id);
   $ad->lavel = "adminstor";
   $ad->display();
  

 ?>