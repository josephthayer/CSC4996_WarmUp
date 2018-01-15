<?php
//Joseph Thayer
//Creates connection via php and checks if any tasks are late

			require "config.php"; //include database configuration
					
			function checkTheDate($pdoCon, $tableName) //checks the dates of pending and started tables 
									{
									$todaysDate = date('Y-m-d'); //get current date
									$query = ("SELECT task_id, due_date FROM " .$tableName); //get task_id and due_date 
									$result = $pdoCon->query($query);							//task_id to move if late
									while($row =  $result->fetch()) 							//due_date to compare to current date
									{	$var = $row['due_date'];
										$id = $row['task_id'];
										if($todaysDate > $var) //execute queries if current date is past due date
										{	try{
													
													$query = "INSERT INTO late (task_id, task_name, due_date) SELECT task_id, task_name, due_date FROM ".$tableName." WHERE task_id=:id"; //pass current task_id by variable :id
													$stmt = $pdoCon->prepare($query); //begin query
													$stmt->bindParam(':id', $id); //bind parameter to table
													if($stmt->execute())
													{
													$sql = "DELETE FROM ".$tableName." WHERE task_id=:id"; //delete while passing tablename and task_id by variable
													$stmt = $pdoCon->prepare($sql);
												
													$stmt->bindParam(':id', $id); //bind parameter to table
													
													
													$stmt->execute(); //execute query
													} 
												}
										catch(PDOException $e){
													die("ERROR: Could not able to execute query " . $e->getMessage());
												}
											
										}
									
									} 
									}					
							
								
								
								
								try
								{  
								
								$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $options); //create php database connection with PDO library
								checkTheDate($pdo, "pending"); 
								checkTheDate($pdo, "started");
				
								}
								 catch(PDOException $e)
								{
								die("ERROR: Could not connect. " . $e->getMessage());
								}
							
							
					
  
 

?>