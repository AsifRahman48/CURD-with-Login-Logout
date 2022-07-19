<?php
$con=mysqli_connect('localhost','root','','orange');

$sql="insert into student(id,name,age,address)values('$id','$name','$age','$address')";
mysqli_query($con,$sql);

$id=$_POST['sid'];
$name=$_POST['sn'];
$age=$_POST['sa'];
$address=$_POST['sad'];
echo $id;
echo "<br>";
echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $address;



?>