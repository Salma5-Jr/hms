<?php
include_once 'connect.php';
$course_name=$_POST['course_name'];
$course_code = $_POST['course_code'];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo("connection failed");
}else{
    print("successfully");
}

$sql = "CREATE TABLE courses(ID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID),course_name VARCHAR(30),
course_code VARCHAR(30)
);";
mysqli_query($conn,$sql);

// Prepare and bind
$sql = "INSERT INTO courses (course_name, course_code) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

// Check if the preparation was successful
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Bind parameters
$stmt->bind_param("ss", $course_name, $course_code);



if ($stmt->execute() === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();



















// Get form data
// $course_name = $_POST['course_name'];
// $course_code = $_POST['course_code'];

// Prepare and bind
// $stmt = $conn->prepare("INSERT INTO courses (course_name, course_code) VALUES (?, ?)");
// $stmt->bind_param("ss",$course_name, $course_code);

// Execute the statement
// if ($stmt->execute()) {
//     echo "New course added successfully";
// } else {
//     echo "Error: " . $stmt->error;
// }

// Close the connection
// $stmt->close();
// $conn->close();
?>
