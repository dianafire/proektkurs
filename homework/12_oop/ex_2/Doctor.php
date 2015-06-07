<?php

    class Doctor extends Employee{

        protected $nightShiftMonth;
        protected $dayShiftMonth;


        public function __construct ($hoursWork,$salaryMonth){
            parent::__construct ($hoursWork,$salaryMonth);
        }


        public function setNights($nightShiftMonth){
            $this->nightShiftMonth=$nightShiftMonth;
        }

        public function getNights(){
            return $this->nightShiftMonth;
        }


        public function setDays($dayShiftMonth){
            $this->dayShiftMonth=$dayShiftMonth;
        }

        public function getDays(){
            return $this->dayShiftMonth;
        }

        public function sayShifts(){
            echo "За имам по ".$this->dayShiftMonth." дневни и по ".$this->nightShiftMonth." нощни дежурства на месец.<br />";
        }

        public function sayHi(){
            echo "Здрасти! Аз съм лекар. <br />";
        }


    }



?>