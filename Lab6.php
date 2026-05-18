<form method="POST">
    Enter Email:
    <input type="text" name="email" required>
    <button type="submit">Check</button>
</form>

<?php
$result = "";

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = "Valid email: " . htmlspecialchars($email);
    } else {
        $result = "Invalid email";
    }

    echo "<h3>$result</h3>";
}
?>