<?php 
//Joseph Thayer
include "connectAndCheck.php"; //pass pdo variable and check if any tasks are late
include "HeaderFooter/footer.php"; 
include "HeaderFooter/header.php"; 
							
							$result = $pdo->query("SELECT COUNT(*) FROM complete"); //count rows to get # of iterations
							$row = $result->fetch();
							if($row[0] > 0) //if table isn't empty
							{
							$query = ("SELECT task_id, task_name, due_date FROM complete");
							$result = $pdo->query($query);
							while($row =  $result->fetch()) { //output table
							echo "Task: \t" , $row['task_name'], '&nbsp; &nbsp &nbsp' ; //output task and due date
							echo "Due Date: \t" , $row['due_date'], '&nbsp; &nbsp &nbsp';	
							$var = $row['task_id'];
							echo '<a href="deleteCompleted.php?task_id=' . $var . '">Delete</a><br><br>' ; //links to delete tasks
							}
							}
							else
								echo "No tasks.";
						
										 
											echo ' <a href="index.php">Back to home</a> ';

// close connection
unset($pdo);
?>