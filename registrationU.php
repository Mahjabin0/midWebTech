<?php

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['rname']) || empty($_REQUEST['rid']) ||empty($_REQUEST['rphone'])||empty($_REQUEST['remail'])|| empty($_REQUEST['gender']) ||empty($_REQUEST['rdate'])|| empty($_REQUEST['rbloodgroup']) || empty($_REQUEST['rpassword']) || empty($_REQUEST['rconfirmpassword']) || empty($_REQUEST['staff']))
		{
		echo "Field Cannot Be Empty";
		}

	/*elseif (!preg_match("/^[a-zA-Z ]*$/",$_REQUEST['rname']) {
		echo "Not allowed";
	}*/
	else
	{

		if($_REQUEST['rpassword']==$_REQUEST['rconfirmpassword'])
		{
			/*$data=$_REQUEST['date'];
			$data.=$_REQUEST['month'];
			$data.=$_REQUEST['year'];*/

			$name=$_REQUEST['rname'];
			/*if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
			{
      			$nameErr = "Only letters and white space allowed";
    		}*/
			$id=$_REQUEST['rid'];
			$phone=$_REQUEST['rphone'];
			$email=$_REQUEST['remail'];
			$gender=$_REQUEST['gender'];
			$dob=$_REQUEST['rdate']	;
			$bg=$_REQUEST['rbloodgroup'];
			$password=$_REQUEST['rpassword'];
			$type=$_REQUEST['staff'];
			$myfile=fopen('userregistration.txt','a');
			fwrite($myfile,"$name|$id|$phone|$email|$gender|$dob|$bg|$password|$type\r\n");
			fclose($myfile);
			header("location:Login.php");
		}
		else
		{
			echo "Password Didn't Match";
		}
	}
}
else
{
	header("location:Registration.php");
}

?>