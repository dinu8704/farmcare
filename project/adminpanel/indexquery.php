<!DOCTYPE html>
<html>

<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:sloginpage.php');
}

?>

<head>
    <title>Indexquery</title>
              <link rel="shortcut icon" href="../img/download.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>



<body>


    <style>
        body {
            background-color: gray;

        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            /*        margin-top: 8%;*/

        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;


        }

        tr:nth-child(even) {
            background-color: #f2f2;
        }



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

    </style>
    <section>
        <button class="btn btn-danger myButton"><a href="slogout.php">Logout</a>
        </button>



        <button class="btn btn-success myButton1"><a href="sinsert2.php">Go Back</a>
        </button>
    </section>

    <style>
        .table_legenda {
            table-layout: fixed;
        }

        .table_legenda th {
            word-wrap: break-word;
        }

        .zakmar {
            margin-top: 8%;
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

        .bttclo a {
            color: white;
        }

    </style>

    <div class="zakmar">
        <table border="1" class="table_legenda designt" width="100%">

            <tr class="zakmar2">
                <th width="5.33%">ID</th>
                <th width="8.33%">name</th>
                <th width="8.33%">mobile</th>
                <th width="20.33%">address</th>
                <th width="6.33%">service</th>
                <th width="6.33%">acre</th>
                <th width="6.33%">message</th>
                <th width="6.33%">Delete</th>

            </tr>

        </table>
        <?php    
    $connect = mysqli_connect("localhost:3307", "root", "", "sdata");  

                $query = "SELECT * FROM squery";  
   $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { 
                 
                 ?>
        <table border="1" class="table_legenda" width="100%">

            <tr class="zakmar2">
                <th width="5.33%"><?php echo $row["id"];?></th>
                <th width="8.33%"><?php echo $row["name"];?></th>
                <th width="8.33%"><?php echo $row["mobile"];?></th>
                <th width="20.33%"><?php echo $row["address"];?></th>
                <th width="6.33%"><?php echo $row["service"];?></th>
                <th width="6.33%"><?php echo $row["acre"];?></th>
                <th width="6.33%"><?php echo $row["message"];?></th>
                <th width="6.33%"><button class="btn btn-danger bttclo"><a href="sdeletequery.php?id=<?php echo $row['id']?>" onclick="return checkdelete()">delete</a></button></th>

            </tr>

        </table>



        <?php    
} ?>


    </div>

    <script>
        function checkdelete() {
            return confirm("are you sure you want to data");
        }

    </script>




</body>

</html>
