<?php
$email=$_POST['email'];
$password=$_POST['password'];
$firstName=$_POST['firstName'];
$middleName=$_POST['middleName'];
$lastName=$_POST['lastName'];


$conn=new mysqli('localhost','root','','test1');
if($conn->connect_error){
   die('connection failed :'$conn->connect_error);

}
else{
    $stmt=$conn->prepare("insert into registation(email,password,firstName,middleName,lastName) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$email,$password,$firstName,$middleName,$lastName);
    $stmt->execute();
    echo " done";
    $stmt->close();
    $conn->close();
}


?>
