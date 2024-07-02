<?php
$link=mysqli_connect("localhost","root","","contactus_db");

$First_Name=$_REQUEST['First_Name'];
$Last_Name=$_REQUEST['Last_Name'];
$Email=$_REQUEST['Email'];
$Telephone=$_REQUEST['Telephone'];
$Gender=$_REQUEST['Gender'];
$Message=$_REQUEST['Message'];


$save="insert into feedbacks values('$First_Name','$Last_Name','$Email','$Telephone','$Gender','$Message')";

if(mysqli_query($link,$save))
{
echo("Message saved OK");
}
else
{
echo("Message not saved,please check again");
}


?>