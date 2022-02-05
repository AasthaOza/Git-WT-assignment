<?php
    include("init.php");
    include('session1.php');    
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="normalize.css">
    <title>SSRMS</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }

        body {
            background-image: url('3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: cover;
}
li{
    font-size: 20px;
}

    </style>
</head>
<body>
        
    <div class="title">
        <a href="dashboard1.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Dashboard</span>
        <a href="logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    
    <div class="nav">
        <ul>
            <li>
                <a href="dashboard.php"><b>Dashboard</b></a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="./profile1.php"><b>Profile &nbsp</b>
                </a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="./student.php"><b>Result &nbsp<b>
                </a>
            </li>
        </ul>
    </div>
</body>
</html>