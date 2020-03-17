<?php

class dbconnect
{
    function connect()
    {
	    echo "connection";
      $connection=mysqli_connect("mysql1.gear.host","cegepmontreal","Welcome22@","cegepmontreal");
	    return $connection;
      	
    }
}

?>
