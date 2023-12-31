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
    <h1>Add Marks <br><?php
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
background-size:100%;padding-bottom:50px;color:white;">
<div class="row" style="padding-top:40px;">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <h2 style="text-align: center;padding-bottom:20px;">Add marks of Student</h2>
        <form action="" method="post" class="form-group">
            <label for="">REG Number</label>
            <input type="text" name="regnumber" class="form-control">
            <label for="">Mathematics/100</label>
            <input type="text" name="mathematics" class="form-control">
            <label for="">Sport/100</label>
            <input type="text" name="sport" class="form-control">
            <label for="">Discipline/100</label>
            <input type="text" name="discipline" class="form-control"><br>
       
              <input type="submit" class="btn btn-info" name="signup" style="background-color:green;" value="Add Marks">
        </form>
    </div>
    <div class="col-md-4">

    </div>
    </div>
</section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST["signup"])){
$regnumber=$_POST["regnumber"];
$mathematics=$_POST["mathematics"];
$sport=$_POST["sport"];
$discipline=$_POST["discipline"];
@$connect=mysqli_connect("localhost","root","","marks");
@$q=mysqli_query($connect,"insert into scores values('','$regnumber','$mathematics','$sport','$discipline');");
echo "<script>window.location.href = 'addmarks.php';</script>";
}
?>