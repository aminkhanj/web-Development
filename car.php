
<?php
$a1 =array(
	array("company" =>"honda", "car"=>"civic","engine"=>"ivtec"),
	array("company"=>"suzuki", "car"=>"alto", "engine"=>"F10A"));

$length = count($a1);
$i=0;
while($i < $length)
{
	if($a1[$i]["company"]=="honda"){
		echo $a1[$i]["company"] . "has" . $a1[$i]["car"] . "car which have" . $a1[$i]["engine"] ."<br />";
	}
	
	else if ($a1[$i]["company"]=="suzuki"){
		echo $a1[$i]["company"] . "has" . $a1[$i]["car"] . "car which have" . $a1[$i]["engine"] . "<br />";

	}
	$i++;
}
