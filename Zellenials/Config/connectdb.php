<?php
$conect = mysqli_connect('localhost','root','','tubes_zellenials');

if (mysqli_connect_errno())
	{
		echo "Failed To Connect ".mysqli_connect_error();
	}

?>