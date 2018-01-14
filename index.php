<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


								try{  $pdo = new PDO("mysql:host=localhost;dbname=todo", "root", "jpmt1995");
									// Set the PDO error mode to exception
									$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								
								}
								 catch(PDOException $e){
								die("ERROR: Could not connect. " . $e->getMessage());
								}
							
							
					
  
 

?>
 


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>To-Do List</title>
</head>
<body>
				<p>
				<?php 
								
							$result = $pdo->query("SELECT COUNT(*) FROM pending");
							$row = $result->fetch();
							echo $row[0], ' <a href = "pending.php">Pending</a> Tasks';
				?> 
				</p>
				<p> <?php 
							$result = $pdo->query("SELECT COUNT(*) FROM started");
							$row = $result->fetch();
							echo $row[0], ' <a href = "started.php">Started</a> Tasks';
				?> </p>
				<p><?php 
							$result = $pdo->query("SELECT COUNT(*) FROM complete");
							$row = $result->fetch();
							echo $row[0], ' <a href = "completed.php">Completed</a> Tasks';
				?> </p>
				<p><?php 
							$result = $pdo->query("SELECT COUNT(*) FROM late");
							$row = $result->fetch();
							echo $row[0], ' <a href = "late.php">Late</a> Tasks';
				?> </p>
<p> <a href = "all.php"> View All </a> </p>
<p> <a href = "addTaskForm.php">Add Task </a></p>
</body>
</html>

<?php
// Close connection
unset($pdo);
?>