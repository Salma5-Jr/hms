<?php
include_once 'connect.php';
$email = "email";
$password = "password";


// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
    echo" connection failed";
}
else{
    print("connection successfully");
}

// Write and execute the query
$sql = "SELECT id,password, email FROM register";
$result = $conn->query($sql);

// Fetch and display the results
if($result->num_rows>0){
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - email: " . $row["email"]. " - password: " . $row["password"]. ""."<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();

?>