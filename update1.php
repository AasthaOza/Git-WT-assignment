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
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Class Section</span>
        <a href="logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    <div class="nav">
        <ul>
            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>

            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Classes &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Add Class</a>
                    <a href="manage_classes.php">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Add Results</a>
                    <a href="update1.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>

<div id="main-content">
    <!-- <h2>All Records</h2> -->
    <?php
      include('init.php');
      include('session.php');

      $sql = "SELECT result.rno,result.name,result.percentage,result.marks FROM result JOIN students WHERE result.name = students.name";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    
        echo "<table>
                <caption>Manage Results</caption>
                <tr>
                <th>Roll No.</th>
                <th>NAME</th>
                <th>Total Marks</th>
                <th>Percentage</th>
                <th>ACTION</th>
                </tr>";
          
            while($row = mysqli_fetch_assoc($result)){

            echo "<tr>";
            echo "<td>" . $row['rno'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['marks'] . "</td>";
            echo "<td>" . $row['percentage'] . "</td>";
            echo "<td><a href='edit1.php? id=".$row['rno']."' style='color:#F66; text-decoration:none;'><span class='fa fa-edit'></span> Update</a></td>";
            echo "<td><a href='delete-result.php?rno=".$row['rno']."' style='color:#F66; text-decoration:none;'><span class='fa fa-trash'></span> Remove</a></td>";
            echo "</tr>";

           } ?>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>
