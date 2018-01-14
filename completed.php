<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=todo", "root", "jpmt1995");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage() . '<br><a href="index.php">Back to home</a>');
}
 

?>
 


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>To-Do List</title>
</head>
<body>
					<?php 
							$result = $pdo->query("SELECT COUNT(*) FROM complete");
							$row = $result->fetch();
							if($row[0] > 0)
							{
							$query = ("SELECT task_id, task_name, due_date FROM complete");
							$result = $pdo->query($query);
							while($row =  $result->fetch()) {
							echo "Task: \t" , $row['task_name'], '&nbsp; &nbsp &nbsp' ;
							echo "Due Date: \t" , $row['due_date'], '&nbsp; &nbsp &nbsp';	
							$var = $row['task_id'];
							echo '<a href="deleteCompleted.php?task_id=' . $var . '">Delete</a><br><br>' ;
							}
							}
							else
								echo "No tasks.";
						
											?> 
											<a href="index.php">Back to home</a>
</body>
</html>

<?php
// Close connection
unset($pdo);
?>