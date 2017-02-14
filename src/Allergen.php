<?php
    Class Allergen
    {
        function findAllergen($test_input)
        {
            $knownAllergens = array(128=>"cats", 64=>"pollen", 32=>"chocolate", 16=>"tomatoes", 8=>"strawberries", 4=>"shellfish", 2=>"peanuts", 1=>"eggs");
            $allergenValues = array_keys($knownAllergens);
            $output_array = array();
            foreach($allergenValues as $allergen)
            {
                if($test_input >= $allergen) {
                    array_push($output_array, $knownAllergens[$allergen]);
                    $test_input = $test_input - $allergen;
                }
            }


            return $output_array;
        }
    }
?>
