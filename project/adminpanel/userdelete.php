<?php 
include ("scon.php");
$id= $_GET['id'];
$query = "DELETE FROM signup WHERE ID='$id'";
$data= mysqli_query($conn, $query);
if($data)
{
    echo "<script>Delete successfully.</script>";

?>
<meta http-equiv="refresh" content="0; url=usershow.php">
<?php
    }
else{
    echo "sorry data is not delete.";
}

?>