
<?php

# https://www.daniweb.com/programming/web-development/tutorials/482414/separation-of-business-logic-and-presentation-logic-for-non-oop;

    class Template {

        public function __construct(){}


        public function __toString(){

        	return self::data($data=array());

        }


        public function data($data = array()){

            return $data;

        }
    }

       
    $view = new Template();

?>