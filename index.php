<?php 
//Joseph Thayer
	include "connectAndCheck.php"; //pass pdo variable and check if any tasks are late
	include "HeaderFooter/header.php"; //include html elements
	include "HeaderFooter/footer.php"; 
					
					function statusCount($pdoCon, $tableName) //count rows from table
					{
						$query = ("SELECT COUNT(*) FROM ". $tableName);
							$result = $pdoCon->query($query);
							$row = $result->fetch();
							return $row[0];
					}
							echo '<p>' , statusCount($pdo, "pending"), ' <a href = "pending.php">Pending</a> Tasks</p>'; //output number of tables
							echo '<p>' , statusCount($pdo, "started"), ' <a href = "started.php">Started</a> Tasks</p>'; //links to task views
							echo '<p>', statusCount($pdo, "complete"), ' <a href = "completed.php">Completed</a> Tasks</p>';
							echo '<p>',statusCount($pdo, "late"), ' <a href = "late.php">Late</a> Tasks</p>';
							echo ' <p><a href = "all.php"> View All </a></p> '; //link to view all tasks
							echo '<p><a href = "addTaskForm.php">Add Task </a></p>'; //link to adding a task




// Close connection
unset($pdo);
?>