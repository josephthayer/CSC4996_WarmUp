<?php
//Joseph Thayer
//Move task from pending to completed
include "connectAndCheck.php"; //pass pdo variable and check if any tasks are late
 

try{
    // begin query
	$query = "INSERT INTO complete (task_id, task_name, due_date) SELECT task_id, task_name, due_date FROM pending WHERE task_id=:task_id"; 
	$stmt = $pdo->prepare($query);
	$stmt->bindParam(':task_id', $_REQUEST['task_id']);
	if($stmt->execute())
	{
    $sql = "DELETE FROM pending WHERE task_id=:task_id";
    $stmt = $pdo->prepare($sql);
    // bind parameter passed as reference
    $stmt->bindParam(':task_id', $_REQUEST['task_id']);
    
    // execute query
    if($stmt->execute())
    echo "Record moved.";
	}
} catch(PDOException $e){
    die("ERROR: Could not able to execute query " . $e->getMessage() . '<br><a href="index.php">Back to home</a>');
}
 
// close connection
unset($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>To-Do List</title>
</head>
<body>
<a href="index.php">Back to home</a>
</body>
</html>