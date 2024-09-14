<?php
include_once 'connect.php';
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$year = $_POST['year'];
$course= $_POST['course'];
$password = $_POST['password'];
//check connection

if(!$conn){
    die("connection failed:" .mysqli_connect_error());
    echo("connection failed");
}else{
    echo "successfully";
}

//create table
$sql= "CREATE TABLE users(fullname VARCHAR (30),email VARCHAR(30),year VARCHAR(10),course VARCHAR(30),
password VARCHAR(20),ID int NOT NULL AUTO_INCREMENT, PRIMARY KEY (ID));";

//sql querry
mysqli_query($conn,$sql);

//insert data
if(isset($fullname)&& isset($email)&& isset($course)&&
 isset($year)&& isset($password)){
    $sqlquery = "INSERT INTO users (fullname,email,course,
    year,password) VALUES ('$fullname','$email','$year','$course','$password');";
    print("sent");

    try{
        mysqli_query($conn, $sqlquery);
        header("Location:index.html");
        print("sent");
        die();
    }catch(Exception $error){
        echo 'ERROR'.$error;
    }     
   }
?>
