<?php
include_once 'connect.php';
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
// $contact = $_POST['contact'];
$year = $_POST['year'];
$course= $_POST['course'];
$password = $_POST['password'];
//check connection

if(!$conn){
    die("connection failed:" .mysqli_connect_error());
    echo("connection failed");
}else{
    echo "connection successfully";
}

//create table
$sql= "CREATE TABLE registers( ID int NOT NULL AUTO_INCREMENT, PRIMARY KEY (ID), firstname VARCHAR (30),middlename VARCHAR(30),
lastname VARCHAR(30),email VARCHAR(30),year VARCHAR(10),course VARCHAR(30),
password VARCHA(20));";

//sql querry
mysqli_query($conn,$sql);

//insert data
if( isset($firstname) && isset($middlename)&& isset($lastname)&& isset($email)&& isset($course)&&
 isset($year)&& isset($contact)&& isset($password)){
    $sqlquery = "INSERT INTO registers (firstname,middlename,lastname,email,course,contact,
    year,password) VALUES('$firstname', '$middlename','$lastname','$email','$year','$course','$password');";
    print("succesfully");

    try{
        mysqli_query($conn, $sqlquery);
        header("Location:login.html");
        print("sent");
        die();
    }catch(Exception $error){
        echo 'ERROR'.$error;
    }     
   }
?>
?>
?>