<?php
 $server_name="localhost";
 $username="root";
 $password="";
 $database_name="made4you";

 $conn=mysqli_connect($server_name,$username,$password,$database_name)
 ;
 if(!$conn)
 {
	 die("Connection Failed:" .mysqli_connect_error());
 }

 if(isset($_POST['save']))
 {
	$name=$_POST['name'];
    $father=$_POST['father'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $img=$_FILES['img']['name'];
    $location="image/".$img;
    copy($_FILES['img']['tmp_name'],$location);
    $message=$_POST['message'];

    $sql_query="insert into form(`name`,`father`,`phone`,`email`,`dob`,`gender`,`img`,`message`) 
    values('$name','$father','$phone','$email','$dob','$gender','$img','$message')";
    
	if (mysqli_query($conn, $sql_query))
	{
		echo "Successfull";
	}
	else
	{
		echo "Error" .sql . "" .mysql_error($conn);
	}
	mysqli_close($conn);
}
?>