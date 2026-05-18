<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="POST" action="require.php">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    Age:
    <input type="number" name="age" min="1" max="100" required>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Course:
    <select name="course" required>
        <option value="">Select Course</option>
        <option value="BSIT">BSIT</option>
        <option value="BSBA">BSBA</option>
        <option value="BSED">BSED</option>
    </select>
    <br><br>

    Hobbies:
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
    <input type="checkbox" name="hobbies[]" value="Music"> Music
    <br><br>

    <input type="submit" value="Register">
    <input type="reset" value="Reset">

</form>

<hr>

<h3>Message Form</h3>
<form method="GET" action="">
    Name:
    <input type="text" name="name" required>
    <br><br>

    Message:
    <input type="text" name="message">
    <br><br>
    <input type="submit" value="GET Submit">
</form>

<?php
if(isset($_GET['name'])) {
    echo "Name: " . htmlspecialchars($_GET['name']);
}

if(isset($_GET['message'])) {
    echo "\nMessage: " . htmlspecialchars($_GET['message']);
}
?>

</body>
</html>