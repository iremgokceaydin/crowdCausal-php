<?php
require_once 'requestHandler.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'insertWorkerTesting' : insertWorkerTesting(); break;
        case 'insertWorkerTraining' : insertWorkerTraining(); break;
    }
}

function insertWorkerTesting(){
	// foreach ($_POST as $name => $value) {
 //        echo $name . " - ". $value;
 //    }

	$sql_object = new mymysql();
	$sql_object->connectToDatabase();
	$sql_object->insertWorkerTesting(
			$_POST['worker_amazon_id'], 
			$_POST['testing_1_p'],
			$_POST['testing_1_a'],
			$_POST['testing_1_a_text'],
			$_POST['testing_2_p'],
			$_POST['testing_2_a'],
			$_POST['testing_2_a_text']
		);

}


function insertWorkerTraining(){
	$sql_object = new mymysql();
	$sql_object->connectToDatabase();
	$sql_object->emptyWorkerTraining($_POST['worker_amazon_id'], $_POST['type'],$_POST['step']);
	$tuple = [];
	$subtract = 2;
	$index = 1;
	foreach($_POST as $key => $val) {
	  if(strpos($key, 'highlights') !== false || strpos($key, 'text') !== false) {
	  	if($index % 2 == 0){
	  		$tuple[] = $val;
	  		$sql_object->insertWorkerTraining(
				$_POST['worker_amazon_id'], 
				$_POST['type'],
				$_POST['step'],
				$index-$subtract,
				$tuple[0],
				$tuple[1]
			);
			unset($tuple);
			$subtract++;
	  	}
	  	else {	
	  		$tuple[] = $val;
	  	}
	  	$index++;
	  }
	}

}
?>