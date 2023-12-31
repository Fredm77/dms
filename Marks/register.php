<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: montserrat;
            height: 100vh;
            overflow: hidden;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform:translate(-50%,-50%);
            
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 30px 0px rgba(57, 86, 247, 0.2);
            box-sizing: border-box;
        }
        .center h1{
            text-align: center;
            padding: 0 0 20px 0;
            border-bottom: 1px  solid silver;
        } 
        .center form{
            padding: 0 40px;

        }
        form .txt-field{
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 30px 0;
        }
        .txt-field input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        }
        .txt-field label{
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }
        .txt-field span::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #2691d9;
            transition: .5s;
        }
        .txt-field input:focus ~label,
        .txt-field input:valid ~label{
            top: -5px;
            color: #2691d9;
        }
        .txt-field input:focus ~span::before,
    .txt-field input:valid ~span::before{
        width: 100%;
    }
    .pass{
        text-align: center;
    }
    .login{
        color: white;
        background-color: #2691d9;
        background-size: 150px;
        border-radius: 25px;
        border: none;
        padding: 3px 100px;
        font-size: 30px;
        margin: 10px -5px;

    }
    .signup-link{
        padding-bottom: 20px;
        text-align: center;
    }
    .signup-link a{
        text-decoration: none;
        margin: 0 0 18px;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="center" class="col-sm-12 bg-success">
            <h1>Sign Up</h1>
            <form method="post" action="register.php">
            <div class="txt-field">
                <input type="text" name="fname" required>
                <span></span>
                <label >First Name</label>
               </div>
               <div class="txt-field">
                <input type="text" name="lname" required>
                <span></span>
                <label >Last Name</label>
               </div>
               <div class="txt-field">
                <input type="text" name="email" required>
                <span></span>
                <label >Email</label>
               </div>
               <div class="txt-field">
                <input type="password" name="password" required>
                <span></span>
                <label >Password</label>
               </div>
               <input type="submit" value="Sign Up" name="signup" class="login">
               <div class="signup-link">
                Do you have an account?<a href="login.php">Log In</a>
               </div>
            </form>
        </div>  
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST["signup"])){
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
@$connect=mysqli_connect("localhost","root","","marks");
@$q=mysqli_query($connect,"insert into teachers values('','$fname','$lname','$email','$password');");

if($q){
    echo "<script>alert('Account has been created successfully')</script>";
}
}
?>