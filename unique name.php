<?php

function unique_names($array1, $array2) {
    // Combine the arrays using the union operator
    $merged_array = $array1 + $array2;

    // Remove duplicate names from the merged array
    $unique_name_array = array_unique($merged_array);

    // Return the final array
    return $unique_name_array;
    }
    
    
//note: I have used php's predefined array_unique function to remove duplicate names

?>