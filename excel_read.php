<?php

require ('SimpleXLSX.php') ;

$array = array();
if ( $xlsx = SimpleXLSX::parse('read.xlsx') ) {
	for($i=0; $i < count($xlsx->rows()); $i++) {
		$array['row: '.$i] = $xlsx->rows()[$i];
	}
} else {
	echo SimpleXLSX::parseError();
}

echo "Here is Execel Data :- <pre>";
print_r($array);

?>