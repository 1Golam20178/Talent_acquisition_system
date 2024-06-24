<?php
$email=$_POST['email'];
$password=$_POST['password'];
if(!empty($email)||!empty($password))
{

    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="login";
    $conn=new mysqli($host,$dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
    }
    else{

        $insert="INSERT Into info(email,password) values(?,?)";
        $stmt->bind_param("ss",$email,$password);
        $stmt->execute();
        echo " done";
        $stmt->close();
        $conn->close();
    }
}


?>