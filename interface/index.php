 <?php 
    // Interface

    interface School {
        public function school();
    }

    interface Collage {
        public function collage();
    }

    interface Varsity {
        public function varsity();
    }

    class theacher implements school,Collage, Varsity{

        public function __construct(){
            $this->school();
            $this->collage();
            $this->varsity();
        }
        public function school(){
            echo "I am a school Teacher.<br/>";
        }

        public function Collage(){
            echo "I am a Collage Teacher.<br/>";
        }

        public function Varsity(){
            echo "I am a Varsity Teacher.<br/>";
        }
    }

    class student implements school,Collage, Varsity{

        public function __construct(){
            $this->school();
            $this->collage();
            $this->varsity();
        }
        public function school(){
            echo "I am a school student.<br/>";
        }

        public function Collage(){
            echo "I am a Collage student.<br/>";
        }

        public function Varsity(){
            echo "I am a Varsity student.<br/>";
        }
    }

    $teacher = new theacher();
    $student = new student();
  

 ?>