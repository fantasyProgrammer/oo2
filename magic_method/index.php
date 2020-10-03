 <?php 
    // Magig method

    class student{

        public $name;

        public function detail(){
            echo " I am a Student.<br/>";
        }

        public function __get($me){
            echo "$me is a programmer .<br/>" ; //to get undefine property 
        }

        public function __set($it, $value){
            echo "I am here to $it $value <br/>";
        }

        public function __call($un,$value){

            echo "There is no ". $un." methodExit and arguments :". implode("," , $value);
        }


    }

    $st = New student();
    $st->detail();
    $st->Abir;
    $st->work = "programming";
    $st->undfine("2","5","8");

 ?> 