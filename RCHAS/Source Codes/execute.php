
<?php
//Start the session
ob_start();
session_start();
$dir=$_SESSION['unm'];
//If session valid
if ($dir)
{
		//get the command
		$command=$_POST['cmd'];
		//echo $command;
		//check for the first device and toggle device status
		if ($command == 'S')
			system("python gp1.py");
		//check for the second device and toggle device	status
		if ($command == 'T')
			system("python gp2.py");
		//check for the third device and toggle device	status
		if ($command == 'U')
			system("python gp3.py");	
		//check for the fourth device and toggle device	status
		if ($command == 'V')
			system("python gp4.py");		
}
//If session invalid
else 
{	
	header("Location: index.html");
}
ob_end_flush();

?>

