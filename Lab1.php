<form method="get" action="">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_GET['name'])) {
    echo "Hello, " . $_GET['name'];
}
?>
