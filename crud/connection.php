<?php 
   $host = "localhost";
   $port = "5432";
   $dbname = "users_db";
   $user = "postgres";
   $password = "mypassword"; 
   $connection_string = "host={$host} port={$port} dbname={$dbname}   
                              user={$user} password={$password} ";   $dbconn = pg_connect($connection_string);     
?>