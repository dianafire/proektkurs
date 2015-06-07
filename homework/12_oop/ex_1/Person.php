<?php

    class Person{

        const PLANET="Земя";
        const lIFE_EXPECTANCY=100;

        public $name;
        protected $age;
        protected $email;
        protected $lifeRemain;
        public $valid;


        public function __construct($name,$age,$email){
            $this->name=$name;
            $this->age=$age;
            $this->email=$email;
        }

        public function getValid(){
            if ((mb_strlen($this->name,'UTF-8')>3) && ($this->age>0)
                && ($this->age<200) &&(mb_strlen($this->email,'UTF-8')>3)){
                return $valid=true;
            }

        }

        public function sayHi ($valid){
            if ($valid==true){
                echo "Здрасти! Името ми е ".$this->name." и съм ".$this->age." години.<br />";
                echo "И като всички хора имам си електронна поща - ".$this->email.".<br />";
            }

        }


        /*public function introduction ($gender) {              //another way maybe :)
            if ((mb_strlen($this->name,'UTF-8')>3) && ($this->age>0)
                && ($this->age<200) &&(mb_strlen($this->email,'UTF-8')>3)){

                $this->sayHi();
                $this->livingPlace();
                $this->sayGender($gender);
                $this->getLifeRemain();
                $this->sayLifeRemain();

            }
        }*/


        public function livingPlace($valid){
            if ($valid==true){
                echo "Живея на планетата ".self::PLANET." :).<br />";
            }

        }


        public function getLifeRemain($valid){
            if ($valid==true){
                $this->lifeRemain=self::lIFE_EXPECTANCY - $this->age;
                return $this->lifeRemain;
            }

        }

        public function sayLifeRemain($valid){
            if ($valid==true){
                echo "Остава ми да живея още ".$this->lifeRemain. " години.<br /><br />";
            }

        }

        public function sayGender($gender,$valid){
            if ($valid==true){
                echo "Аз съм " . $gender . ".<br />";
            }

        }

        public function setName($name){
            if(mb_strlen($name,'UTF-8')>3) {
                $this->name=$name;
            }

        }

        public function setAge($age){
            if(($age>0) && ($age<200)){
                $this->age=$age;
            }
        }

        public function setEmail($email){
            if  (mb_strlen($email,'UTF-8')>3){
                $this->email=$email;
            }

        }


    }














?>