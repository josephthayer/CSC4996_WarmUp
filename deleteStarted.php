<?php
//Joseph Thayer
//Delete task from started table
include "connectAndCheck.php"; //pass pdo variable and check if any tasks are late
 

try{
    // start query
    $sql = "DELETE FROM started WHERE task_id=:task_id";
    $stmt = $pdo->prepare($sql);
    // bind parameter passed by reference
    $stmt->bindParam(':task_id', $_REQUEST['task_id']);
    
    // execute query
    if($stmt->execute())
    echo "Record deleted.";
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