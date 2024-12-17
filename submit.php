<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $password = htmlspecialchars($_POST['password']);
    $education = htmlspecialchars($_POST['education']);
    $skills = htmlspecialchars($_POST['skills']);
    $address = htmlspecialchars($_POST['address']);

    echo "<h3>Form Submitted Successfully</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<p><strong>Education:</strong> $education</p>";
    echo "<p><strong>Skills:</strong> $skills</p>";
    echo "<p><strong>Address:</strong> $address</p>";
} else {
    echo "<p>Invalid request</p>";
}
?>
