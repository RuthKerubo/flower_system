<?php
//mysqli_connect("localhost","root","");
//mysqli_select_db($con,"search");
//  $aVar = MySQLi_connect(
//        "localhost", //Server host name.
//        "root", //Database username.
//        "", //Database password.
//        "flower_system" //Database name or anything you would like to call it.
//     );

    $hn = 'localhost';
    $db = 'flower_system';
    $un = 'root';
    $pw = 'qwertyuiop';
    
    $conn = new mysqli($hn, $un, $pw, $db);
    if  ($conn->connect_error) die($conn->connect_error);
?>