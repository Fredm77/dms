<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <style>
    h1{
        text-align: center;
    }
    body{
            margin: 0;
            padding: 0;
            font-family: montserrat;
            height: 100vh;
   
        }
        .relations{
                margin-left: 0;
                margin-top: 0;
                margin-bottom: 0;
                margin-right: 70px;
                padding-left: 4px;
                padding-right: 70px;
                padding-top: 14px;
                padding-bottom: 50px;
        }
        .relations ul li{
         display: block;
         padding: 5px;
        }
        .relations ul li a{
            text-decoration: none;
            text-align: center;
            border-radius: 7px;
            padding: 10px;
            padding-right: 15px;
            padding-left: 15px;
            color: white;
            font-size: 20px;
            display: block;
            background-color: rgb(0, 140, 255);
            box-shadow: 0 0 30px 0px rgba(57, 86, 247, 0.2);
            box-sizing: border-box;
        }
        .login{
        color: #2691d9;
        background-color: white;
        background-size: 200px;
        border-radius: 25px;
        border: none;
        padding: 3px 90px;
        font-size: 30px;
        margin: 10px -5px;
        text-decoration: none;
    }
   </style>
</head>
<body>
    <h1><br><?php
  $id=$_SESSION["sid"];
    $connect=mysqli_connect("localhost","root","","marks");
        $q=mysqli_query($connect,"select * from students where students.sid=$id;");
        $row=mysqli_fetch_array($q);
    ?>
       <h1 style="text-align: center;">Welcome <?php echo $row["fname"]." ".$row["lname"]; ?></h1>
<section class="container-fluid" style="background: linear-gradient(120deg,rgb(0, 140, 255),rgb(100, 211, 255));
background-size:100%;padding-bottom:100%;color:white;">
<div class="row" style="padding-top:40px;">
   <div class="col-md-3">

   </div>
    <div class="col-md-6">
        <h2 style="text-align: center;padding-bottom:20px;">Your Marks:</h2>
        <table class="table table-striped" style="background-color: rgb(163, 163, 163);color:rgb(1, 5, 14);">
          <tr>
            <th>REG Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mathematics/100</th>
            <th>Sport/100</th>
            <th>Discipline/100</th>
            <th>Average/100</th>
           
          </tr>
          <?php
                           $connect=mysqli_connect("localhost","root","","marks");
                           $q=mysqli_query($connect,"select students.sid,fname,lname,mathematics,sport,discipline from students,scores where scores.sid=students.sid and students.sid=$id;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo $data['sid']?></td>
                            <td><?php echo $data['fname']?></td>
                            <td><?php echo $data['lname']?></td>
                            <td><?php echo $data['mathematics']?></td>
                            <td><?php echo $data['sport']?></td>
                            <td><?php echo $data['discipline']?></td>
                            <?php  $sum=$data['mathematics']+$data['sport']+$data['discipline'];
                             $average=$sum/3;
                        ?>
                            <td><?php echo $average?></td>
                          
                        </tr>
                          <?php } ?>
        </table>
    </div>
    <div class="col-md-3">

    </div>
    </div><br><br>
 <center>   <a href="logout.php" class="login">Log Out</a></center>
</section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php

