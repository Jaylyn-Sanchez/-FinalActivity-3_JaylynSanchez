<form method="POST">
    <h3>Select Course:</h3>

    <select name="course" required>
        <option value="">--Select Course--</option>
        <option value="BSIT">BSIT</option>
        <option value="BSCS">BSCS</option>
        <option value="BSBA">BSBA</option>
        <option value="BSED">BSED</option>
    </select>

    <button type="submit">Submit</button>
</form>

<?php
if (isset($_POST['course'])) {
    echo "<h3>Selected Course: " . $_POST['course'] . "</h3>";
}
?>