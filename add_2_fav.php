<?php

    $user = $_GET['user'];
    $Name = $_GET['Name'];

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
    
    $ctr = 0;
    foreach($cursor as $c){
        $ctr++;
    }

    $single = new MongoDB\Driver\BulkWrite();
    if ($ctr == 0){
        $arr = array();
        $arr['user'] = $user;
        $arr['list'] = array($Name);
        $single->insert($arr);
        $manager->executeBulkWrite("$dbname.$c_user", $single);   
    }else{
        $arr = iterator_to_array($cursor2);
        $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
        $size = strval(sizeof($arr));
        $bulk->update(['user' => $user], ['$addToSet' => ['list' => $Name]]);
        $result = $manager->executeBulkWrite("$dbname.$c_user", $bulk);
    }
    header('Location: filtered_search.php');	

?>