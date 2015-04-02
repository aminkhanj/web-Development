<?php



function amin()
 {
 	$student=array (34,78,90,78,89);
	
	foreach($student as $marks){

	if($marks <= 100 && $marks >= 80){
		
		echo $marks . " makes grade of A <br />"; 
	
	} else if ($marks < 80 && $marks >= 70){
		
		echo $marks . " makes grade of B <br />"; 
	
	} else if ($marks < 70 && $marks >= 60){
		
		echo $marks . " makes grade of C <br />"; 
	
	} else if ($marks < 60 && $marks >= 50){
		
		echo $marks . " makes grade of D <br />"; 
	
	} else if ($marks > 100 || $marks < 0){
		
		echo "Marks not correct <br />"; 
	
	} else {
		
		echo $marks . " makes grade of F <br />"; 
		
	
	}
}
}
amin();
?>