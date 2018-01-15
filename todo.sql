
use todo
go


CREATE TABLE pending (  
task_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,   
task_name VARCHAR(50) NOT NULL,  
due_date DATE NOT NULL );
go

CREATE TABLE started (  
task_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,   
task_name VARCHAR(50) NOT NULL,  
due_date DATE NOT NULL );
go

CREATE TABLE complete (  
task_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,   
task_name VARCHAR(50) NOT NULL,  
due_date DATE NOT NULL );
go

CREATE TABLE late (  
task_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,   
task_name VARCHAR(50) NOT NULL,  
due_date DATE NOT NULL );
go



SET SQL_SAFE_UPDATES = 0;
go