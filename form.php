<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $fullname = ($_POST['fullname']);
    $email = ($_POST['email']);
    $age = ($_POST['age']);
    $password = ($_POST['password']); 
    $gender = ($_POST['gender']);
    $country = ($_POST['country']);
    $interests =($_POST['interests']) ? $_POST['interests'] : [];

    echo "<h1>User Data</h1>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Full Name</td><td>$fullname</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Age</td><td>$age</td></tr>";
    echo "<tr><td>Password</td><td>$password</td></tr>";
    echo "<tr><td>Gender</td><td>$gender</td></tr>";
    echo "<tr><td>Country</td><td>$country</td></tr>";
    echo "<tr><td>Interests</td><td>" . implode(", ", $interests) . "</td></tr>";
    echo "</table>";
} else {
    echo "<p>No data submitted. Please fill out the form.</p>";
}
?>