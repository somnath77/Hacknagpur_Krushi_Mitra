<?php
  include('session.php');
  $collection = $db->user;
  $requester = $collection->find(['email' => $_SESSION['login_user']]);
  $requester = iterator_to_array($requester);
  var_dump($requester);
  $_SESSION['user_id'] = $requester[0]['_id'];
  $collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
    ['$push' =>  
                ["requests" => [ 'requester_id' => $requester[0]['_id'], 'for' => $_GET['animal_id']]

                ]
    ]
);



?>