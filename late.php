<?php 
//Joseph Thayer
include "connectAndCheck.php"; //pass pdo variable and check if any tasks are late
include "HeaderFooter/footer.php"; 
include "HeaderFooter/header.php";
						
						$result = $pdo->query("SELECT COUNT(*) FROM late"); //count rows to get # of iterations
							$row = $result->fetch(); 
							if($row[0] > 0) //if table isn't empty
							{
							$query = ("SELECT task_id, task_name, due_date FROM late");
							$result = $pdo->query($query);
							while($row =  $result->fetch()) { //output table
							$var = $row['task_id']; 
							echo "Task: \t" , $row['task_name'], '&nbsp; &nbsp &nbsp' ; //output task and due date
							echo "Due Date: \t" , $row['due_date'], '&nbsp; &nbsp &nbsp';
							echo ' <a href = "lateToCompleted.php?task_id=' . $var . '">Mark as completed</a> &nbsp &nbsp &nbsp';	//links to move and delete tasks
							echo '<a href="deleteLate.php?task_id=' . $var . '">Delete</a><br><br>' ;
							}
							}
							else
								echo "No tasks.";
						
									
											echo ' <a href="index.php">Back to home</a>';

// close connection
unset($pdo);
?>