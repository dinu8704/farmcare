
<!DOCTYPE html>
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="../img/download.png">
<!--        <link rel="shortcut icon" href="../favicon.ico"> -->
        <link rel="stylesheet" type="text/css" href="css44/demo.css" />
        <link rel="stylesheet" type="text/css" href="css44/style2.css" />
		<link rel="stylesheet" type="text/css" href="css44/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            
            
            <section>				
                <div id="container_demo" >
                  
                    <div id="wrapper">
                       

                        <div id="register" class="animate form">
                            <form  action="userconn.php" method="POST"> 
                                <h1> Login </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                              
                                <p class="signin button"> 
									<input type="submit" name="submit" value="login"/> 
								</p>
                                <p class="change_link">  
									New User?
									<a href="usersignup.php" class="to_register"> Go and sign in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>