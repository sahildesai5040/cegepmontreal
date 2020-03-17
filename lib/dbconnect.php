<?php

class dbconnect
{
    function connect()
    {
       if(mysqli_connect("mysql1.gear.host","cegepmontreal","Welcome22@","cegepmontreal"))
       {
	       echo "Connection Success";
       }
	else
	{
		echo "connection Not success";
	}
	
    }
}

?>
