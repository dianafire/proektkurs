<?php


    class Employee{

        protected $hoursWork;
        protected $salaryMonth;

        public function __construct($hoursWork,$salaryMonth){

            $this->hoursWork=$hoursWork;
            $this->salaryMonth=$salaryMonth;

        }


        public function sayHoursSalary(){
            echo "Аз работя по ".$this->hoursWork." часа на месец и моята заплата е ".$this->salaryMonth." лева.<br />";
        }


        public function setHours($hours){
            $this->hoursWork=$hours;
        }


        public function getHours(){
            return $this->hoursWork;
        }


        public function setSalary($salary){
            $this->salaryMonth=$salary;
        }

        public function getSalary(){
            return $this->salaryMonth;
        }

        public function getPaid(){
            return $this->salaryMonth/$this->hoursWork;
        }

        public function sayPaid($paid){
            echo "Това означава, че взимам по ".$paid." лева на час.<br />";
        }

    }



?>











