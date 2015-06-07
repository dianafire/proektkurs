<?php

    class Policeman extends Employee{

        protected $rank;

        public function __construct($hoursWork,$salaryMonth,$rank){

            parent::__construct($hoursWork,$salaryMonth);
            $this->rank=$rank;

        }

        public function setRank($rank){
            $this->rank=$rank;
        }

        public function getRank(){
            return $this->rank;
        }

        public function sayRank(){
            echo "Аз съм полицай. Моят чин е ".$this->rank.".<br />";
        }



    }





?>