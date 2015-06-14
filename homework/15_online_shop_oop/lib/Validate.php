<?php


    class Validate{

        public static function get($nameOfVariable,$validate='string',$defaultValue=null){

            return self::doValidate($_GET,$nameOfVariable,$validate,$defaultValue);
        }

        public static function post($nameOfVariable,$validate='string',$defaultValue=null){

            return self::doValidate($_POST,$nameOfVariable,$validate,$defaultValue);
        }

        public static function doValidate ($inputList, $nameOfVariable, $validate, $defaultValue=null){



            if (isset($inputList[$nameOfVariable])){

                $value=$inputList[$nameOfVariable];

                if ($validate=='string'){
                    return htmlspecialchars(addslashes(strip_tags($value)));
                }
                elseif($validate=='number'){
                    return $value*1;
                }
            }

            else {
                return $defaultValue;
            }




        }


    }










?>