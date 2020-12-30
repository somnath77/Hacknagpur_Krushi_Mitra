<?php
    include('session.php');
    $collection = $db->user;
    $requester = $collection->updateOne(['email' => $_SESSION['login_user']],
    [
        '$pull' =>
                  [  "requests"  => [   'requester_id' => new MongoDB\BSON\ObjectId($_GET['id'])   ]               ]
    ]
    


);



?>