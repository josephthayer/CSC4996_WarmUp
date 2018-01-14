<?php include "connectAndCheck.php"; ?>
 


<?php include "HeaderFooter/header.php"; ?>
				
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

<?php include "HeaderFooter/footer.php"; ?>

<?php
// Close connection
unset($pdo);
?>