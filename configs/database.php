<?php

define('dbhost', 'localhost');
define('dbusername', 'root'); // Edit this line
define('dbpassword', ''); // Edit this line
define('dbname', 'liquiix'); // Edit this line

$dbcon = mysqli_connect(dbhost,dbusername,dbpassword,dbname);