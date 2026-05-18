<form method="POST">
    <h3>Select Gender:</h3>

    <input type="radio" name="gender" value="Male" required> Male<br>
    <input type="radio" name="gender" value="Female"> Female<br><br>

    <button type="submit">Submit</button>
</form>

<hr>

<?php
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
    echo "<h3>You selected: " . $gender . "</h3>";
}
?>