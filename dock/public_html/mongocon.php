
<h1>Hello Guys!</h1>
<h4>Attempting MongoDB connection from php...</h4>

<?php

$user = 'root';
$pass = 'cisco123';

$connection = new MongoDB\Driver\Manager( "mongodb://$user:$pass@dbmongo:27017" );

echo 'connected to collection';



?>
