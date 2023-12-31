<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <label for="">name <br><input type="text" name="name"></label><br>
        <label for="">email <br><input type="text" name="email"></label><br>
        <input type="radio" name="gender" value="male">male 
        <input type="radio" name="gender" value="female">female
        <input type="submit" value="save" name="save">
        
    </form>
    <progress id="file" max="100" value="25" style="width: 60%;">70%</progress>
</body>
</html>
<?php
if(isset($_POST["save"])){
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$connect=mysqli_connect('localhost','root','','test');
$q=mysqli_query($connect,"insert into test values('','$name','$email','$gender');");

if($q){
    echo "<script>alert('saved successfully')</script>";
}
else{
    echo "<script>alert('error occured')</script>";
}
}
?>

