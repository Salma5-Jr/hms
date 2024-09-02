<?php
include_once 'connect.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo("connection failed");
}else{
    print("successfully");
}

// Get form data
$course_name = $_POST['course_name'];
$course_description = $_POST['course_description'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO courses (course_name, course_description) VALUES (?, ?)");
$stmt->bind_param("ss", $course_name, $course_description);

// Execute the statement
if ($stmt->execute()) {
    echo "New course added successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
