<?php 

session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'websiteuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$s = "select * from userinfodata where user = '$user'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "user name Already Taken ";
}
else
{
	$reg =  "insert into userinfodata(user,email,password,mobile,comment) values('$user','$email' , '$password','$mobile','$comment')";
	mysqli_query($con,$reg);
	echo "Registeraion successfull";
}

 ?>