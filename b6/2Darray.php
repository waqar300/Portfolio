<?php
//multi array or 2D array

$arrayName = array('name' => array('waqar','waqas','ali','asif' ) ,
                         'subject' => array('math', 'computer', 'physics') );




// $arrayName = array('fname' => 'waqar',
//                                  2=> array('lname'=>'anjum',
//                                        3 => array( 'age'=> 25

//                                        )) );



// $value;
if(is_array($arrayName)){
	foreach ($arrayName as $key => $value) {
		echo "$value";
	}
}



?>

