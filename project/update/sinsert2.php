<html>
<?php

$connect = mysqli_connect("localhost:3307", "root", "", "sdata");  
    
    
    

 if(isset($_POST["insert"]))  
 { 
     $target_dir = "gaming chairs/";
//$target = "upload/" .basename($_FILES['img1']['name']);
//$target2 = "upload/" .basename($_FILES['img2']['name']);

     $target_file = $target_dir . basename($_FILES["img1"]["name"]);
        // Check extension
$target_file2 = $target_dir . basename($_FILES["img2"]["name"]);
     
     
     
//$img1 = $_POST['img1'];
//$img2 = $_POST['img2'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$desc = $_POST['desc'];
// sql query for inserting data into database



if (move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2)){
        echo "The file ". basename( $_FILES["img1"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $img1=basename( $_FILES["img1"]["name"]); // used to store the filename in a variable
$img2=basename( $_FILES["img2"]["name"]);


$query="INSERT INTO `stable`(`img1`, `img2`,`date1`, `date2`, `desc`) VALUES ('$img1','$img2','$date1','$date2','$desc')";
 
  if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  


 }
mysqli_close($connect);
?>


<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;

    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;


    }

    tr:nth-child(even) {
        background-color: #f2f2;
    }

    .tdcls {
        width: 15%;
    }

    .bgimgg {
        background-image: url(../market/index.php/images/bg3.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
/*        margin-bottom: 150px;*/
    }









    body,
    .signin {
        background-color: #d3d3d3;
        font-family: 'Montserrat', sans-serif;
        color: #fff;
        font-size: 14px;
        letter-spacing: 1px;

        background-image: url(../market/index.php/images/bg4.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;

    }

    .login {
        position: relative;
        height: auto;
        width: auto;
        margin: auto;
        padding: 60px 60px;
        background-size: cover;
/*        box-shadow: 0px 30px 60px -5px #000;*/
    }

    form {
        padding-top: 1px;
        
    }

    .active {
        border-bottom: 2px solid #1161ed;
    }

    



    span {

        text-transform: uppercase;
        font-size: 15px;
        /*        opacity: 0.4;*/
        display: inline-block;
        position: relative;
        font-weight: bold;
        transition: all 0.5s ease-in-out;

    }

    .text {
        border: none;
        width: 89%;
        padding: 10px 20px;
        display: block;
        height: 15px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.7);
        border: 2px solid rgba(255, 255, 255, 0);
        overflow: hidden;
        margin-top: 15px;
        transition: all 0.5s ease-in-out;
    }

    .text:focus {
        outline: 0;
        border: 2px solid rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        background: rgba(0, 0, 0, 0);
    }

    .text:focus+span {
        opacity: 0.6;
    }





    input {
        display: inline-block;
        padding-top: 20px;
        font-size: 14px;
    }



    label {
        display: inline-block;
        padding-top: 10px;
        padding-left: 5px;

    }

    .signin {

        background-color: #1161ed;
        color: #FFF;
        /*  width: 100%;*/
        padding: 10px 20px;
        /*  display: block;*/
        height: 39px;
        border-radius: 20px;
        margin-top: 30px;
        transition: all 0.5s ease-in-out;
        border: 1px solid red;
        text-transform: uppercase;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 30%;
    }

    .signin:hover {
        background: #4082f5;
        box-shadow: 0px 4px 35px -5px #4082f5;
        cursor: pointer;
    }

    .signin:focus {
        outline: none;
    }

    hr {
        border: 1px solid rgba(255, 255, 255, 0.1);
        top: 85px;
        position: relative;
    }

    .text33 {
        height: 66px !important;

    }
    .gamel{
        color: white;
        text-align: center;
        font-size: 70px;
        padding-top:  20px;
    }
    .gamel2{
        background-color: 0px 30px 60px -5px #000;
    }
</style>

<body>
<section class="gamel2">
<div class="gamel">Upaload photos</div>
    </section>
    
    
    <section class="bgimgg">
        <div class="login">

            <form method="post" enctype="multipart/form-data">
                <div class="row changcolor">
                    <div class="col-md-6 ">
                        <span> Date1</span>
                        <input type="text" name="date1" class="text" placeholder="date1" autocomplete="off">
                        <br>


                        <span>Date2</span>
                        <input type="text" name="date2" class="text" placeholder="date2" autocomplete="off">
                        <br>


                    </div>
                    <div class="col-md-6">

                        
                        <span>Product Description:</span>
                        <input type="textarea" name="desc" class="text text33" placeholder="Enter Description" autocomplete="off">
                        <br>


                    </div>
                </div>
                
                
                <div class="row">
                <div class="col-md-6">
                    Product Image One:<br>
                        <input type="file" name="img1" id="image" />

                        <br>
                    </div> 
                    <div class="col-md-6">
                     Product Image Two:<br>
                        <input type="file" name="img2" id="image" />

                        <br>
                    </div> 
                    
                </div>
                
                
                
                <div class="container">
                 
                    <input type="submit" name="insert" id="insert" value="Insert" class="signin" />
                 
                </div>



            </form>

        </div>
    </section>







    <div class="">
        <?php    
    $connect = mysqli_connect("localhost:3307", "root", "", "sdata");  
if(isset($_REQUEST['delid'])){
    $delid=$_REQUEST['delid'];
    mysql_query("delete from stable where id='$delid'");
}
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
                <th>Delete</th>
               
            </tr>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td class="tdcls"><?php echo $row["desc"];?></td>
                <td><?php echo $row["date1"];?></td>
                <td><?php echo $row["date2"];?> </td>
                <?php echo"   <td><img src='gaming chairs/$img1' height='200' width='200' class='img-thumnail' /></td>"?>
                <?php echo"   <td><img src='gaming chairs/$img2' height='200' width='200' class='img-thumnail' /></td>"?>
                <td><a href="delete.php?id=<?php echo $row['id']?>" onclick="return checkdelete()">delete</a></td>
            </tr>
        </table>
        <?php   
}
      ?>

    </div>
<script>
    function checkdelete()
    {
        return confirm("are you sure you want to data");
    }
    </script>









</body>

</html>

<script>
    $(document).ready(function() {
        $('#insert').click(function() {
            var image_name = $('#image').val();
            if (image_name == '') {
                alert("Please Select Image");
                return false;
            } else {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });

</script>
