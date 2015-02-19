<?php
   require 'functions.php';
$conn = connect($config);

	// For getting data:

// if ($conn) {
// 	$users= get('posts', $conn);

// } else die('Could not connect!');

// if ($users) {
// 	while($row = $users) {
// 	Name'] . '<br>';
// 	}
// } else {
// 	echo 'No rows returned';
// }


	// For inserting data:

// $user = 'pagalawang try';
// $pass =  'pa';

// $result = insert($user, $pass, $conn);

// if ( $result ) { 
// 	echo "It was successfully added!";
// } else {
// 	echo "failed to store data!";
// }

	//For updating data:

// $upname = 'pagalawang try';
// $user = 'TRY';
// $pass =  'Nagwork!';

// $result = update($upname, $user, $pass, $conn);

// if ($result) {
// 	echo "It was successfully updated!";
// } else {
// 	echo "failed to update!";
// }


	// For Delete:

// $delname = 'ISA';

// $result = deldata($delname, $conn);

// if ($result) {
// 	echo "It was successfully deleted!";
// } else {
// 	echo "There's no name found!";
// }


require 'index.tmpl.php';