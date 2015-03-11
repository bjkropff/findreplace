<?php
    class FindAndReplace
        {
        public $string;
        public $find;
        public $replace;

        function __construct($string, $find, $replace) {

            $this->string = $string;
            $this->find = $find;
            $this->replace = $replace;
        }

        function searchAndDestroy() {

            $split = str_split($this->string);


        }


    }
?>
