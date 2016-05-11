
<?php

ob_start();
session_start();
$dir=$_SESSION['unm'];

if ($dir)
{
		$command=$_POST['cmd'];
		//echo $command;
		if ($command == 'S')
			system("python gp1.py");
		if ($command == 'T')
			system("python gp2.py");
		if ($command == 'U')
			system("python gp3.py");	
		if ($command == 'V')
			system("python gp4.py");		
}
else 
{	
	header("Location: index.html");
}
ob_end_flush();

?>

