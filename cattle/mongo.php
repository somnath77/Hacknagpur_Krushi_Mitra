<?php
require 'vendor/autoload.php';
$con = new MongoDB\Client("mongodb://localhost:27017");  
// Creating Database  
$db = $con->javatpoint;  
// Creating Document  
$collection = $db->employee;  
// Insering Record  
$collection->insertOne( [ 'name' =>'Peter', 'email' =>'peter@abc.com' ] );  
// Fetching Record  
$record = $collection->find( [ ] );  
foreach ($record as $employe) {  
echo $employe['name'], ': ', $employe['email']."<br>";  
}
?>