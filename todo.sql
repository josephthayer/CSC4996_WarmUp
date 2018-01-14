
use todo


CREATE TABLE task (  
task_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,   
task_name VARCHAR(50) NOT NULL,  
due_date DATE NOT NULL,  
current_status ENUM('overdue', 'pending', 'complete', 'started') NOT NULL )



SET SQL_SAFE_UPDATES = 0;