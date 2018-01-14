<?php include "connectAndCheck.php"; ?>
 


<?php include "HeaderFooter/header.php"; ?>
					<?php 
							$result = $pdo->query("SELECT COUNT(*) FROM pending");
							$row = $result->fetch();
							if($row[0] > 0)
							{
							
							$query = ("SELECT task_id, task_name, due_date FROM pending");
							$result = $pdo->query($query);
							while($row =  $result->fetch()) {
							$var = $row['task_id'];
							echo "Task: \t" , $row['task_name'], '&nbsp; &nbsp &nbsp' ;
							echo "Due Date: \t" , $row['due_date'], '&nbsp; &nbsp &nbsp';
							echo ' <a href = "changeStarted.php?task_id= ' . $var .'">Mark as started</a> &nbsp; &nbsp &nbsp';
							echo ' <a href = "changeCompleted.php?task_id= ' . $var .'">Mark as completed</a> &nbsp &nbsp &nbsp';	
							echo '<a href="deletePending.php?task_id=' . $var . '">Delete</a><br><br>' ;
							}
							}
							else
								echo "No tasks."
								

						
						?> 
						<a href="index.php">Back to home</a>
<?php include "HeaderFooter/footer.php"; ?>

<?php
// Close connection
unset($pdo);
?>