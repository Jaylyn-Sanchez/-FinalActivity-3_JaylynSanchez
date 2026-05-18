<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    echo "Hello, " . $name;
}
?>

</body>
</html>