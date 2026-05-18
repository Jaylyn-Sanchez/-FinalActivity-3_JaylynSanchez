<?php
$name = $email = $gender = $course = $message = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $gender = $_POST["gender"] ?? "";
    $course = $_POST["course"] ?? "";
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($name)) $errors[] = "Name is required";
    if (empty($email)) $errors[] = "Email is required";
    if (empty($gender)) $errors[] = "Gender is required";
    if (empty($course)) $errors[] = "Course is required";
    if (empty($message)) $errors[] = "Message is required";

    if (empty($errors)) {
        echo "<h3>Submitted Data:</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
        echo "Course: $course <br>";
        echo "Message: $message <br>";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br>

    Course:
    <select name="course">
        <option value="">Select</option>
        <option value="BSIT">BSIT</option>
        <option value="BSCS">BSCS</option>
    </select><br>

    Message:<br>
    <textarea name="message"></textarea><br>

    <button type="submit">Submit</button>
</form>