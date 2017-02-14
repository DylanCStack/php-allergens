<?php
    Class Allergen
    {


        function findAllergen($test_input)
        {
            $knownAllergens = array(1=>"eggs", 2=>"peanuts", 4=>"shellfish", 8=>"strawberries", 16=>"tomatoes", 32=>"chocolate", 64=>"pollen", 128=>"cats");
            
            return $knownAllergens[$test_input];
        }
    }
?>
