<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
//create connection
                     
$conn=mysqli_connect('localhost','root','','yogyatri');
if(!$conn){
    die("connection failed:".$conn->connect_error);
}else{
    $stmt=$conn->prepare("INSERT INTO contactus(name,email,subject,message) VALUES(?,?,?,?)");
    $stmt->bind_param("sssi",$name,$email,$subject,$message);
    $stmt->execute();
    echo"query registerd";
    $stmt->close();
    $conn->close();
}
