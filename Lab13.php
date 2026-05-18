<form method="POST">
    Password:
    <input type="password" name="password"><br>

    <button type="submit">Submit</button>
</form>

<?php
if (isset($_POST['password'])) {
    echo "Password received (not displayed for security).";
}
?>