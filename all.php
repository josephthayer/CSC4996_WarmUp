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
				$query = ("SELECT task_name, due_date FROM pending
							UNION
						SELECT task_name, due_date FROM complete
							UNION
						SELECT task_name, due_date FROM late
							UNION
						SELECT task_name, due_date FROM started;");
				$result = $pdo->query($query);
			while($row =  $result->fetch()) {
				echo "Task: \t" , $row['task_name']."<br><br>";
				echo "Due Date: \t" , $row['due_date']."<br><br>";
					}
			?>
			<a href="index.php">Back to home</a>
</body>
</html>

<?php
// Close connection
unset($pdo);
?>