<?php include "connectAndCheck.php"; ?>
 


<?php include "HeaderFooter/header.php"; ?>
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
<?php include "HeaderFooter/footer.php"; ?>

<?php
// Close connection
unset($pdo);
?>