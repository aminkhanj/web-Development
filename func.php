<?php
function redirect_to($location = NULL)
{
	if($location !=NULL)
	{
		header("location: {$location}");
		exit;
	}
}
redirect_to("http://www.google.com.pk");

?>