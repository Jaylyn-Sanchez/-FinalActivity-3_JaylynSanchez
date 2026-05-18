<form method="POST">
    <h3>Message:</h3>
    <textarea name="message" required></textarea><br>

    <button type="submit">Submit</button>
</form>

<?php
if (isset($_POST['message'])) {
    echo "<h3>Your Message:</h3>";
    echo nl2br($_POST['message']);
}
?>