  <?php
session_start();

$con = mysqli_connect('localhost:3307', 'root' );
if($con){
//	 echo "conenction successful";
}else{
	echo "no connection";
}

?>
  <!DOCTYPE html>
  <html>

  <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="styleadmi.css">
      
          <link rel="shortcut icon" href="../img/download.png">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script></head>

  <body>

      <header>

          <style>
              .btncenter{
                 text-align: center;
/*                  justify-content: center;*/
              }



          </style>
          <div class="container center-div shadow">
              <div class="heading text-center mb-5 text-uppercase text-white"> ADMIN LOGIN PAGE </div>
              <div class="container row d-flex flex-row justify-content-center mb-5">
                  <div class="admin-form shadow p-2 ">
                      <form action="slogin.php" method="POST">
                          <div class="form-group">
                              <label>Email ID</label>
                              <input type="text" name="username" value="" class="form-control" autocomplete="off">
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input type="text" name="password" value="" class="form-control" autocomplete="off">
                          </div>
                          <div class="btncenter"> 
                          <input type="submit" class="btn btn-success " name="submit"></div>
                      </form>
                  </div>
              </div>
          </div>
      </header>

  </body>

  </html>
