<?php
include_once 'connect.php';

session_start();
$email = $_POST["email"];
$password = $_POST["password"];


echo "email: $email password: $password <br>";

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error());
    echo" connection failed";
}
else{
    print("connection successfully");
}

// Write and execute the query
$sql = "SELECT * FROM registers WHERE email='$email' AND password='$password';";
$result =  mysqli_query($conn, $sql);

// Fetch and display the results
if($result->num_rows>0){
    // fetched data will be only one row
   $row = $result->fetch_assoc();
    echo "<br> Firstname: ".$row["firstname"]. " Lastname: ".$row["lastname"] ." <br> ID: " . $row["ID"]."<br>". " Email: " . $row["email"]."<br>". "Password: " . $row["password"]."<br>";
   
   // save data to the session to be used across multiple pages
    $_SESSION["firstname"] = $row["firstname"];
    $_SESSION["lastname"] = $row["lastname"];
    $_SESSION["id"] = $row["ID"];
    $_SESSION["email"] = $row["email"];


    header("Location: booking-form-gui.php");
} else {
    header("Location: index.html");
    echo "0 results";
    die();
}


// Close the connection
$conn->close();

?>