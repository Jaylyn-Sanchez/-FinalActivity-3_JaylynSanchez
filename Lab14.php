<form method="POST">
    <h3>Select Hobbies:</h3>

    <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming<br>
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>

    <button type="submit">Submit</button>
</form>

<?php
if (!empty($_POST['hobbies'])) {
    echo "<h3>Selected Hobbies:</h3>";
    foreach ($_POST['hobbies'] as $hobby) {
        echo $hobby . "<br>";
    }
}
?>