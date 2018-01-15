<?php 
//Joseph Thayer
include "connectAndCheck.php"; //pass pdo variable and check if any tasks are late
include "HeaderFooter/header.php"; 
include "HeaderFooter/footer.php";
				
				//query to create join of all 4 tables
				$query = ("SELECT task_name, due_date FROM pending 
							UNION
						SELECT task_name, due_date FROM complete
							UNION
						SELECT task_name, due_date FROM late
							UNION
						SELECT task_name, due_date FROM started;");
				$result = $pdo->query($query);
					
					while($row =  $result->fetch()) 
					{
						echo "Task: &nbsp;" , $row['task_name']."<br><br>"; //output tasks and due dates
						echo "Due Date: &nbsp;" , $row['due_date']."<br><br>";
					}
		
				echo '<a href="index.php">Back to home</a>';
 


// Close connection
unset($pdo);
?>