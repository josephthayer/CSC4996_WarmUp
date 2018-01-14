<?php include "connectAndCheck.php"; ?>
 


<?php include "HeaderFooter/header.php"; ?>
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
<?php include "HeaderFooter/footer.php"; ?>

<?php
// Close connection
unset($pdo);
?>