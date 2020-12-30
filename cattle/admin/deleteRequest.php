<?php
    include('session.php');
    $collection = $db->animals;
    $requester = $collection->updateOne(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])],
    [
        '$set' =>
                  [  "approved"  => 'rejected'   ]             
    ]
    


);



?>