<?php

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $age = htmlspecialchars(trim($_POST['age']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $course = htmlspecialchars(trim($_POST['course']));

    $hobbies = [];

    if(isset($_POST['hobbies'])) {
        $hobbies = $_POST['hobbies'];
    }

    if (empty($name)) {
        $error .= "Name is required.<br>";
    }

    if (empty($email)) {
        $error .= "Email is required.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= "Invalid email format.<br>";
    }

    if (empty($password)) {
        $error .= "Password is required.<br>";
    }

    if (!is_numeric($age) || $age < 1 || $age > 100) {
        $error .= "Age must be between 1 and 100.<br>";
    }

    if (empty($gender)) {
        $error .= "Gender is required.<br>";
    }

    if (empty($course)) {
        $error .= "Course is required.<br>";
    }

    // Display Errors
    if (!empty($error)) {

        echo "<h2>Errors:</h2>";
        echo $error;

    } else {

        echo "<h2>Registration Successful</h2>";

        echo "<strong>Name:</strong> " . $name . "<br>";
        echo "<strong>Email:</strong> " . $email . "<br>";

        // Do not display password directly
        echo "<strong>Password:</strong> Hidden for security<br>";

        echo "<strong>Age:</strong> " . $age . "<br>";
        echo "<strong>Gender:</strong> " . $gender . "<br>";
        echo "<strong>Course:</strong> " . $course . "<br>";

        echo "<strong>Hobbies:</strong> ";

        if (!empty($hobbies)) {
            echo implode(", ", $hobbies);
        } else {
            echo "No hobbies selected";
        }

    }

} else {

    echo "Invalid Request.";

}
?>