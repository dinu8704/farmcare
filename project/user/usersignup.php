<?php

$connect = mysqli_connect("localhost:3307", "root", "", "sdata");  

 if(isset($_POST["submit"]))  
 { 
         $target_dir = "userimg/";
         $target_file = $target_dir . basename($_FILES["img1"]["name"]);
             if (move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file)){
            echo "The file ". basename( $_FILES["img1"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

    $img1=basename( $_FILES["img1"]["name"]); // used to store the filename in a variable
    $username  = $_POST['username'];
    $mobile  = $_POST['mobile'];
    $email   = $_POST['email'];
    $password  = $_POST['password'];
    $passwordconfirm  = $_POST['passwordconfirm'];



$password = trim ($_POST['password']); 
$passwordconfirm = trim ($_POST['passwordconfirm']); 
     if($password === $passwordconfirm){
         
$query="INSERT INTO `signup`(`username`,`mobile`,`email`,`password`,`passwordconfirm`,`img1` ) VALUES ('$username','$mobile','$email','$password','$passwordconfirm','$img1')";
 
                    echo '<script>alert(" Inserted into Database")</script>'; 

  if(mysqli_query($connect, $query))  
      {  
//           header('location:userlogin.php');
    ?>
<meta http-equiv="refresh" content="0; url=userlogin.php">
<?php
     }  
     }
     else{
         echo '<script>alert("password does not match")</script>';
     }




 }
mysqli_close($connect);
?>





<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Farm Care Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="shortcut icon" href="../img/download.png">

    <!--        <link rel="shortcut icon" href="../favicon.ico"> -->
    <link rel="stylesheet" type="text/css" href="css44/demo.css" />
    <link rel="stylesheet" type="text/css" href="css44/style2.css" />
    <link rel="stylesheet" type="text/css" href="css44/animate-custom.css" />



    <link rel="stylesheet" type="text/css" href="CustomFileInputs/css/component.css" />

    <script>
        (function(e, t, n) {
            var r = e.querySelectorAll("html")[0];
            r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
        })(document, window, 0);

    </script>
</head>

<body><p style="color:red; text-align:center;">Tip: You add your image one time you can't be change profile image so choose right image.</p>
    <div class="container">
        <!-- Codrops top bar -->


        <section>
            <div id="container_demo">

                <div id="wrapper">


                    <div id="register" class="animate form">
                        <form method="post" enctype="multipart/form-data">
                            <h1> Sign up </h1>
                            <p>
                                <label for="usernamesignup" class="uname" data-icon="u">Your Name</label>
                                <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                            </p>
                            
                            
                            <p>
                                <label for="usernamesignup2" class="uname" data-icon="u"> Your Mobile No.</label>
                                <input id="usernamesignup2" name="mobile" required="required"type="number" pattern="[0-9]*" inputmode="numeric" placeholder="1234005530" />
                            </p>
                            
                            
                            <p>
                                <label for="emailsignup" class="youmail" data-icon="e"> Your email</label>
                                <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com" />
                            </p>
                            <p>
                                <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <p>
                                <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                <input id="passwordsignup_confirm" name="passwordconfirm" required="required" type="password" placeholder="eg. X8df!90EO" />
                            </p>





                            <p>
                                <input type="file" name="img1" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />

                                <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" /></svg> <span>Your image&hellip;</span></label>

                            </p>

                            <p class="signin button">
                                <input type="submit" name="submit" value="Sign up" />
                            </p>


                            <p class="change_link">
                                Already a member ?
                                <a href="userlogin.php" class="to_register"> Go and log in </a>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
  
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

    <script src="CustomFileInputs/js/custom-file-input.js"></script>
</body>

</html>
