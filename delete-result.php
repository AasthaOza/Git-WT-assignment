<?php

session_start();

include ("init.php");
                                     
if (isset($_GET['rno']))
{
    $rno=$_GET['rno'];
    $deleteQuery="DELETE FROM result where rno=$rno"; 
    mysqli_query($conn, $deleteQuery);

    echo "<script>window.location = 'update1.php';</script>";
} else {
    echo "ERR!";
}

?>