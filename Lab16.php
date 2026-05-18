<form method="POST">
    Age: <input type="number" name="age"><br>
    <button type="submit">Submit</button>
</form>

<?php
if (isset($_POST['age'])) {
    $age = $_POST['age'];

    if (!is_numeric($age)) {
        echo "Age must be numeric.";
    } elseif ($age < 1 || $age > 120) {
        echo "Invalid age range.";
    } else {
        echo "Valid age: $age";
    }
}
?>