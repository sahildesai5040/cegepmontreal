<?php

class dbconnect
{
    function connect()
    {
      $connection=mysqli_connect("den1.mysql1.gear.host","cegepmontreal","Welcome22@","cegepmontreal");
	    return $connection;
      	
    }
}

?>
