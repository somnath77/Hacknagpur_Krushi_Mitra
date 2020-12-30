<?php
    include('session.php');
    $collection = $db->user;
    $collection->updateOne(['email' => $_SESSION['login_user']],
    [
        '$pull' =>
                  [  "requests"  => [   'requester_id' => new MongoDB\BSON\ObjectId($_GET['id'])   ]               ]
    ]
   );
   $owner = $collection->findOne(['email' => $_SESSION['login_user']]);

   $animal_col = $db->animals;
   $animal_col->updateOne(['_id' => new MongoDB\BSON\ObjectId($_GET['animal_id']) ],
    [
        '$set' =>
                  [  "user_id"  => $_GET['id']   ]               
    ]
   );

   $transaction = $db->transaction;
   $transaction->insertOne(['animal_id' => $_GET['animal_id'], 'prev_owner' => (string)$owner['_id'] , 'buyer' => $_GET['id']]);  






?>