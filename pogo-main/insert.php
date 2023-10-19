<?php
error_reporting(0);
$a=$_POST["t1"];
$b=$_POST["t2"];
$conn = mysqli_connect('localhost','root','', 'db2');
if($conn)
{ echo "Connected successfully"; }
$sql1 = "insert into stud values($a,$b)";
mysqli_query($conn,$sql1);
echo "<br>Row is inserted";
$sql2 = "select * from stud";
$rs = mysqli_query($conn,$sql2);
while($row=mysqli_fetch_assoc($rs))
{
echo "<br>Roll No is : {$row['Rollno']}<br>";
echo "Name is : {$row['Name']}<br>";
echo "<hr>";
}
?>
