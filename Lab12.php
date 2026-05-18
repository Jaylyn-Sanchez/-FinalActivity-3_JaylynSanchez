<form method="POST">
    Name:
    <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>">

    <button type="submit">Submit</button>
</form>