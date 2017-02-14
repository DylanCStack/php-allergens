<?php
    require_once "src/Allergen.php";
    Class AllergenTest extends PHPUnit_Framework_TestCase
    {
        function test_directCorrelation()
        {
            $test_Allergen = new Allergen;
            $input = 128;

            $result = $test_Allergen->findAllergen($input);
            $this->assertEquals("cats", $result);
        }
    }
?>
