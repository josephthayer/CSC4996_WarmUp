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
    $sql = "INSERT INTO pending (task_name, due_date) VALUES (:task_name, :due_date)";
    $stmt = $pdo->prepare($sql);
    // bind parameters to statement
    $stmt->bindParam(':task_name', $_REQUEST['task_name']);
    $stmt->bindParam(':due_date', $_REQUEST['due_date']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Record inserted." . '<br><a href="index.php">Back to home</a>';
} catch(PDOException $e){
    die("ERROR: Could not able to execute query " . $e->getMessage() . '<br><a href="index.php">Back to home</a>');
	
}
 
// Close connection
unset($pdo);
?>

