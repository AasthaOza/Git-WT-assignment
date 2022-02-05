<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type='text/css' href="css/manage1.css">
    <title>SSRMS</title>
</head>

<style>
    body {
            /* background-image: url('.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: cover; */

            /* background-color: #474646; */
            
}
li{
    font-size: 18px;
}
</style>

<body>

    <div class="title">
        <a href="dashboard1.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Student Profile</span>
        <a href="logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
        <a href="dashboard1.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> BACK</a>
    </div>

    <div class="nav">
        <ul>
            <li>
                <a href="dashboard1.php"><b>Dashboard</b></a>
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


<div id="main-content" class="dm">
    <!-- //<h2>Student Record</h2> -->
    <?php
    include('init.php');
    include('session1.php');
    
    $q1 = "SELECT * from students WHERE stu_id ='".$_SESSION['login_user']."'";
    
    $result = mysqli_query($conn, $q1) or die("Query Unsuccessful.");


    if(mysqli_num_rows($result) > 0)  {
    echo "<table>
                <caption>Student Record</caption>
                <tr>
                <th>Roll No.</th>
                <th>NAME</th>
                <th>CLASS</th>
                </tr>";
                while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>" . $row['rno'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['class_name'] . "</td>";
                    echo "</tr>";
                  }

                echo "</table>";
            } else {
                echo "0 Students";
            }
        ?>
        </div>
</body>
</html> 

