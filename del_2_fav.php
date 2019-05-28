<?php

    $user = $_GET['user'];
    $title = $_GET['Name'];

    echo $user;
    echo $Name;
    

	$filter = ['user'=>$user];
	$options = [];
    
    $dbname = 'Freelancers';
    $c_user = 'favourites';

    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery("$dbname.$c_user", $query);
    $cursor2 = $manager->executeQuery("$dbname.$c_user", $query);
    

    $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
    $size = strval(sizeof($arr));
    $bulk->update(['user' => $user], ['$pull' => ['list' => $title]]);
    $result = $manager->executeBulkWrite("$dbname.$c_user", $bulk);
    
    header('Location: user_favourites.php?user='.$user);	

?>