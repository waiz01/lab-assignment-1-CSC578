<?php

$frameworks = array("Malaysia","Denmark","Indonesia","Vietnam","Thailand", "Brazil", "India", "China", "Argentina") ;

$name = $_GET["name"];

if (strlen($name) > 0) {

    $match = "";
	$option_match = "";

    for ($i = 0; $i < count($frameworks); $i++) {

        if (strtolower($name) == strtolower(substr($frameworks[$i], 0, strlen($name)))) {

            if ($match == "") {
                $match = $frameworks[$i];

            } 
			else {
                $match = $match . " , " . $frameworks[$i];

            }            
			
			if ($option_match == "") {
				$option_match = "<option>".$frameworks[$i]."</option>";

            } 
			else {
				$option_match .= "<option>".$frameworks[$i]."</option>";

            }

        }

    }

}

echo ($option_match == "") ? '<option>No country found</option>' : $option_match;

?>