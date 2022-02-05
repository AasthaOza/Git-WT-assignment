<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/form.css">
    <title>SSRMS</title>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Results Section</span>
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
                    <a href="update1.php">Manage Students</a>
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
    <h2>Update Record</h2>
    <?php
    //include 'config.php';
    include('init.php');
    include('session.php');

    $stu_id = $_GET['id'];

    //$sql = "SELECT result.* FROM result JOIN students WHERE result.rno = students.rno = {$stu_id}";
    $sql = "SELECT * FROM   result  WHERE rno = 
       (SELECT rno FROM students WHERE rno= $stu_id)"; 
    
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata1.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="rno" value="<?php echo $row['rno']; ?>"/>
          <input type="text" name="name" value="<?php echo $row['name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Roll No.</label>
          <input type="hidden" name="rno" value="<?php echo $row['rno']; ?>"/>
          <input type="text" name="rno" value="<?php echo $row['rno']; ?>"/>
      </div>
      <div class="form-group">
          <label>Subject 1</label>
          <input type="text" name="p1" value="<?php echo $row['p1']; ?>"/>
      </div>
      <div class="form-group">
          <label>Subject 2</label>
          <input type="text" name="p2" value="<?php echo $row['p2']; ?>"/>
      </div>
      <div class="form-group">
          <label>Subject 3</label>
          <input type="text" name="p3" value="<?php echo $row['p3']; ?>"/>
      </div>
      <div class="form-group">
          <label>Subject 4</label>
          <input type="text" name="p4" value="<?php echo $row['p4']; ?>"/>
      </div>
      <div class="form-group">
          <label>Subject 5</label>
          <input type="text" name="p5" value="<?php echo $row['p5']; ?>"/>
      </div>
      <div class="form-group">
          <label>Total Marks</label>
          <input type="text" name="marks" value="<?php echo $row['marks']; ?>"/>
      </div>
      <div class="form-group">
          <label>Percentage</label>
          <input type="text" name="percentage" value="<?php echo $row['percentage']; ?>"/>
      </div>
      
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
