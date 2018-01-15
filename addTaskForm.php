<!--Joseph Thayer-->
<!--Form to update pending table-->

<?php include "HeaderFooter/header.php"; ?>

<form action="update.php" method="post">
    <p>
        <label for="task_name">Task:</label>
        <input type="text" name="task_name" id="task_name"> <!-- passing task_name thru URL-->
    </p>
    <p>
        <label for="due_date">Due Date: (YYYY-MM-DD) </label>
        <input type="text" name="due_date" id="due_date"> <!-- passing due_date thru URL-->
    </p>
    <input type="submit" value="Submit">
</form>
<br>
<a href="index.php">Back to home</a>
<?php include "HeaderFooter/footer.php"; ?>