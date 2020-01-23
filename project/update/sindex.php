<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>




    <div class="">
        <?php    
    $connect = mysqli_connect("localhost:3307", "root", "", "sdata");  

                $query = "SELECT * FROM stable";  
   $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { 
                  $img1=$row['img1'];
                  $img2=$row['img2'];
                 
                 ?>

        <table>
            <tr>
                <th>ID</th>
                <th>img1</th>
                <th>date1</th>
                <th>Description</th>
                <th>date2</th>
                <th>img2</th>
                <th>img2</th>
               
            </tr>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td class="tdcls"><?php echo $row["desc"];?></td>
                <td><?php echo $row["date1"];?></td>
                <td><?php echo $row["date2"];?> </td>
                <?php echo"   <td><img src='gaming chairs/$img1' height='200' width='200' class='img-thumnail' /></td>"?>
                <?php echo"   <td><img src='gaming chairs/$img2' height='200' width='200' class='img-thumnail' /></td>"?>
                
            </tr>
        </table>
       <?php    
} ?>
      

    </div>




</body>
</html>