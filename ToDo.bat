::Joseph Thayer
::To-Do List batch file

::path to mysql and sql file
"C:\wamp64\bin\mysql\mysql5.7.19\bin\mysql.exe" -u root -p todo < todo.sql


::path to PHP 
"C:\wamp64\bin\php\php7.1.9\php.exe" -f C:\wamp64\www\roughApp\index.php 
::open file in default browser
start "" http://localhost/roughapp/index.php





