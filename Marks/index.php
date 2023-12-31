<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .button{
            text-align: center;
            background-color: rgb(7, 180, 166);
            border-radius: 20px;
            color: white;
            font-size: 37px;
            display: inline-flex;
            text-transform: capitalize;
            text-decoration: none;
        
            padding: 14px;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
        }
        @media(max-width:770px){
         #top{
            margin-bottom: 50px;
         }
}
    </style>
</head>
<body>
   <div class="row">
    <div class="col-md-3">
        
    </div>
    <div class="col-md-6" style="text-align: center;">
    <h1>Welcome </h1>
        <h1>To</h1>
        <h1>School Data Management System</h1>
    </div>
   </div><br><br><br><br>
    <div class="row">
        <div >
        
        </div>
        <div>
         <center> <a href="login.php" class="button" id="top">login as teacher</a>
         <a href="loginstd.php" class="button" style="margin-left: 30px;">view marks as student</a></center>
        </div>
    </div>
</body>
</html>