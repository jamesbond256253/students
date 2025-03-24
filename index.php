<?php
$servername = "if0_38594585";
$username = "root";
$password = "Studentsinfo";
$database = "student_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $gender = $_POST["gender"]; 
    $student_id = $_POST["studentID"];
    $department = $_POST["course"];
    $address = $_POST["address"];
    $phone_number = $_POST["phoneNumber"];

    $sql = "INSERT INTO students (first_name, last_name, gender, student_id, department, address, phone_number) 
            VALUES ('$first_name', '$last_name', '$gender', '$student_id', '$department', '$address', '$phone_number')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student record added successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
