<?php
$link=mysqli_connect("localhost","root","","echanneling_db");

$Name=$_POST['Name'];
$Age=$_POST['Age'];
$Telephone=$_POST['Telephone'];
$Gender=$_POST['Gender'];


$save="insert into patients values('$Name','$Age','$Telephone','$Gender')";

if(mysqli_query($link,$save))
{
echo("Data saved OK");
}
else
{
echo("Data not saved,please check");
}


?>