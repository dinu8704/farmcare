<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:sloginpage.php');
}

?>



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
$farname= $_POST['farname'];
$faraddress = $_POST['faraddress'];
// sql query for inserting data into database



if (move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2)){
        echo "The file ". basename( $_FILES["img1"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $img1=basename( $_FILES["img1"]["name"]); // used to store the filename in a variable
$img2=basename( $_FILES["img2"]["name"]);


$query="INSERT INTO `stable`(`img1`, `img2`,`date1`, `date2`, `desc`, `farname`, `faraddress`) VALUES ('$img1','$img2','$date1','$date2','$desc','$farname','$faraddress')";
 
  if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  


 }
mysqli_close($connect);
?>


<head>
              <link rel="shortcut icon" href="../img/download.png">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
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
            background-image: url(image/bg3.jpg);
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

            background-image: url(image/bg4.jpg);
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
            color: white;
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

        .gamel {
            color: white;
            text-align: center;
            font-size: 70px;
            padding-top: 20px;
        }

        .gamel2 {
            background-color: 0px 30px 60px -5px #000;
        }

    </style>

<body>
    <section class="gamel2">
        <div class="gamel">Admin panel</div>
        <style>
            .myButton {
                color: white;
                float: right;
                margin-top: -6%;
            }

            .myButton a {
                color: white;
            }

            .myButton1 {
                color: white;
                float: left;
                margin-top: -6%;
            }

            .myButton1 a {
                color: white;
            }
            
            .myButton2 {
                color: white;
/*                float: right;*/
                margin-left: 20%;
                margin-top: -6%;
            }

            .myButton2 a {
                color: white;
            }

        </style>
        <button class="btn btn-danger myButton"><a href="slogout.php">Logout</a>
        </button>
        <button class="btn btn-primary myButton2"><a href="usershow.php">Users</a>
        </button>
        <button class="btn btn-success myButton1"><a href="indexquery.php">Message</a>
        </button>
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

                        <span> Farmer Name</span>
                        <input type="text" name="farname" class="text" placeholder="Farmer Name" autocomplete="off">
                        <br>


                        <span>Farmer Address</span>
                        <input type="text" name="faraddress" class="text" placeholder="Farmer Address" autocomplete="off">
                        <br>


                      


                    </div>
                </div>
<br><br><br>
                <div class="row">
                    <div class="col-md-12 text-center">
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

    <style>
        .table_legenda {
            table-layout: fixed;
        }

        .table_legenda th {
            word-wrap: break-word;
        }

        .zakmar {
            /*            margin-top: 8%;*/
            margin-bottom: 10%;
        }

        .table_legenda {
            background-color: lightgray;
        }

        .designt tr:nth-child(1) {
            background-color: pink !important;
            color: black !important;
            text-transform: uppercase !important;
        }

        .zakmar2 th {
            border: 1px solid black;
        }

        .zakmar2 {
            color: black;
        }

        .bttclo a {
            color: white;
        }

    </style>


    <div class="">
        <div class="zakmar">
            <table border="1" class="table_legenda designt" width="100%">

                <tr class="zakmar2">
                    <th width="3.33%">ID</th>
                    <th width="20.33%">Description</th>
                    <th width="6.33%">date1</th>
                    <th width="6.33%">date2</th>
                    <th width="8.33%">Farmer Name</th>
                    <th width="10.33%">Farmer Address</th>
                    <th width="15.33%">img1</th>
                    <th width="15.33%">img2</th>
                    <th width="6.33%">Delete</th>
                </tr>

            </table>


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


            <table border="1" class="table_legenda" width="100%">

                <tr class="zakmar2">

                    <th width="3.33%"><?php echo $row["id"];?></th>
                    <th width="20.33%"><?php echo $row["desc"];?></th>
                    <th width="6.33%"><?php echo $row["date1"];?></th>
                    <th width="6.33%"><?php echo $row["date2"];?></th>
                    <th width="8.33%"><?php echo $row["farname"];?></th>
                    <th width="10.33%"><?php echo $row["faraddress"];?></th>
                    <th width="15.33%"><?php echo"   <img src='gaming chairs/$img1' height='200' width='200' class='img-thumnail' />"?></th>
                    <th width="15.33%"><?php echo"  <img src='gaming chairs/$img2' height='200' width='200' class='img-thumnail' />"?></th>
                    <th width="6.33%"><button class="btn btn-danger bttclo"><a href="delete.php?id=<?php echo $row['id']?>" onclick="return checkdelete()">delete</a></button></th>



                </tr>

            </table>


            <?php    
} ?>
        </div>
    </div>



    <script>
        function checkdelete() {
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
