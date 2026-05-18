<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['name']) && isset($_POST['email'])) {
    echo "Name: " . $_POST['name'] . "<br>";
    echo "Email: " . $_POST['email'];
}
?>

</body>
</html>