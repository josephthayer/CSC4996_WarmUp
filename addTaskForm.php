

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>To-Do List</title>
</head>
<body>

<form action="update.php" method="post">
    <p>
        <label for="task_name">Task:</label>
        <input type="text" name="task_name" id="task_name">
    </p>
    <p>
        <label for="due_date">Due Date: (YYYY-MM-DD) </label>
        <input type="text" name="due_date" id="due_date">
    </p>
    <input type="submit" value="Submit">
</form>
<br>
<a href="index.php">Back to home</a>
</body>
</html>