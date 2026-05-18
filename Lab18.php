<form method="GET">
    Name: <input type="text" name="get_name">
    <button type="submit">Submit GET</button>
</form>

<?php
if (isset($_GET['get_name'])) {
    echo "GET Output: " . $_GET['get_name'];
}
?>

<form method="POST">
    Name: <input type="text" name="post_name">
    <button type="submit">Submit POST</button>
</form>

<?php
if (isset($_POST['post_name'])) {
    echo "POST Output: " . $_POST['post_name'];
}
?>
