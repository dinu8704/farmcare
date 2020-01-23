<?php
include_once 'scon.php';
if(isset($_POST['save']))
{
// variables for input data

$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$desc = $_POST['desc'];
// sql query for inserting data into database

mysqli_query($conn,"insert into sdata(img1,img2,date1,date2,desc) values ('$img1','$img2','$date1','$date2','$desc')") or die(mysqli_error());
echo "<p align=center>Data Added Successfully.</p>";
}
?> 