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
   </style>
</head>
<body>
    <h1>Dashboard<br><?php
  $id=$_SESSION["tid"];
    $connect=mysqli_connect("localhost","root","","marks");
        $q=mysqli_query($connect,"select * from teachers where teachers.tid=$id");
        $row=mysqli_fetch_array($q);
    ?>
 <div class="row">
        <div class="col-md-4">
        <div class="relations">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="addstd.php">Add Students</a></li>
                
            </ul>
        </div>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
        <div class="relations">
            <ul>
                <li><a href="addmarks.php">Add Marks</a></li>
                <li><a href="viewmarks.php">View Marks</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        </div>
    </div>    
</h1>
<section class="container-fluid" style="background: linear-gradient(120deg,rgb(0, 140, 255),rgb(100, 211, 255));
background-size:cover;padding-bottom:50px;">
<div class="row" style="padding-top:40px;">
    <div class="col-md-1">
    </div>
    <div class="col-md-4">
        <div class="number" style="text-align: center; background-color:rgb(138, 168, 137);padding:80px 10px;margin-top:10px;
        border-radius:10px;border:3px solid rgb(120,234,125);">
       <h1>    Teacher <br>
            <?php
             $connect=mysqli_connect("localhost","root","","marks");
             $q=mysqli_query($connect,"select count(tid) from teachers");
             while($row = mysqli_fetch_array($q)) {
                $c=$row['0'];
               }
               echo $c;
            ?></h1>
        </div>
    </div>
        <div class="col-md-2">

        </div>
    <div class="col-md-4">
     <div class="number" style="text-align: center; background-color:rgb(138, 168, 137);padding:80px 10px;margin-top:10px;
     border-radius:10px;border:3px solid rgb(120,234,125);">
           <h1> Student <br>
            <?php
             $connect=mysqli_connect("localhost","root","","marks");
             $q=mysqli_query($connect,"select count(sid) from students");
             while($row = mysqli_fetch_array($q)) {
                $c=$row['0'];
               }
               echo $c;
            ?></h1>
        </div>
    </div>
</div>
</section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
