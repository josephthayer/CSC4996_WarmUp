<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require "config.php";
								try{  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $options);
									
									
									
									
									
								
									$todaysDate = date('Y-m-d');
									$query = ("SELECT task_id, due_date FROM pending");
									$result = $pdo->query($query);
									while($row =  $result->fetch()) 
									{	$var = $row['due_date'];
										$id = $row['task_id'];
										if($todaysDate > $var)
										{	try{
													// create prepared statement
													$query = "INSERT INTO late (task_id, task_name, due_date) SELECT task_id, task_name, due_date FROM pending WHERE task_id=:id"; 
													$stmt = $pdo->prepare($query);
													$stmt->bindParam(':id', $id);
													if($stmt->execute())
													{
													$sql = "DELETE FROM pending WHERE task_id=:id";
													$stmt = $pdo->prepare($sql);
													// bind parameters to statement
													$stmt->bindParam(':id', $id);
													
													// execute the prepared statement
													$stmt->execute();
													} 
												}
										catch(PDOException $e){
													die("ERROR: Could not able to execute query " . $e->getMessage());
												}
											
										}
									
									} 
									
									$query = ("SELECT task_id, due_date FROM started");
									$result = $pdo->query($query);
									while($row =  $result->fetch()) 
									{	$var = $row['due_date'];
										$id = $row['task_id'];
										if($todaysDate > $var)
										{	try{
													// create prepared statement
													$query = "INSERT INTO late (task_id, task_name, due_date) SELECT task_id, task_name, due_date FROM started WHERE task_id=:id"; 
													$stmt = $pdo->prepare($query);
													$stmt->bindParam(':id', $id);
													if($stmt->execute())
													{
													$sql = "DELETE FROM started WHERE task_id=:id";
													$stmt = $pdo->prepare($sql);
													// bind parameters to statement
													$stmt->bindParam(':id', $id);
													
													// execute the prepared statement
													$stmt->execute();
													} 
												}
										catch(PDOException $e){
													die("ERROR: Could not able to execute query " . $e->getMessage());
												}
											
										}
									
									} 


									
									
									
									
									
								
								}
								 catch(PDOException $e){
								die("ERROR: Could not connect. " . $e->getMessage());
								}
							
							
					
  
 

?>