<?php
	function sqlConnect () {
		
		$retVal3 = false;	
		$retVal  = mysqli_connect("localhost","root","","furkan");

	
		if ($retVal) 
		{
		
			$retVal3 = true;
		}
	
		return $retVal3;
	
	} // End Function
	
?>