<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=todo", "root", "jpmt1995");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // create prepared statement
    $sql = "DELETE FROM complete WHERE task_id=:task_id";
    $stmt = $pdo->prepare($sql);
    // bind parameters to statement
    $stmt->bindParam(':task_id', $_REQUEST['task_id']);
    
    // execute the prepared statement
    if($stmt->execute())
    echo "Record deleted.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute query " . $e->getMessage() . '<br><a href="index.php">Back to home</a>');
}
 
// Close connection
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