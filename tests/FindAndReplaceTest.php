<?php
    require_once "src/FindAndReplace.php";

    Class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_find_and_replace()
        {

            $test_FindAndReplace = new FindAndReplace;
            $string = "i";
            $find = "i";
            $replace = "a";

            $result = $test_FindAndReplace->searchAndDestroy($string, $find, $replace);

            $this->assertEquals("a", $result);
        }



    }

?>
