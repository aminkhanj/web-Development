<?php

function calculate_grade($grades_array = array() ){
	foreach($grades_array  as $grade){
	 
	 	switch ($grade)
	 	 {

		case 'A':
			echo "marks from 80-90";
			break;
		

		 case 'B':
			echo "marks from 70-80 <br/>";
			break;
		

		 case 'C':
		 	echo "marks from 60-70 <br/>";
		 	break;
		 
		 
		 case 'D':
		 	echo "marks from 50-60 <br/>";
		 	break;
		 

		default:
			echo "you are Fail <br/>";
			break;
			}
			
	}
}
$grades_array =array('A' , 'B' , 'C' ,'D' , 'Fail');
	calculate_grade($grades_array);

?>