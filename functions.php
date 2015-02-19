<?php

$config = array(
	'username' => 'root',
	'password' => 'mark',
);

function connect($config)
{
	try{
		$conn = new PDO('mysql:host=localhost;dbname=test',
			$config['username'],
			$config['password']);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conn;
	} catch(Exception $e) {
		
		echo 'ERROR:' . $e->getMessage();
		return false;
	}

}

function get($tableName, $conn)
{
	
	try {
		$stmt = $conn->query("SELECT * FROM $tableName");
		$stmt->execute();

		return ($stmt->rowCount() > 0)
			? $stmt
			: false;

	} catch(Exception $e) {
		return false;
	}
}

function insert($username, $password, $conn)
{

	try{

		$stmt = $conn->prepare('INSERT INTO users(Username, Password)  
			VALUES(:username, :password )');
		
		$stmt->bindParam(':username', $username, PDO::PARAM_STR);
		$stmt->bindParam(':password', $password, PDO::PARAM_STR);

		$stmt->execute();

		return $stmt;

	} catch(Exception $e){
		return false;
	}
}

function update($upname, $user, $pass, $conn)
{

	try{

		$stmt = $conn->prepare('UPDATE users 
			SET Username = :username, Password = :password  
			WHERE Username = :user');

		$stmt->bindParam(':username', $user, PDO::PARAM_STR);
		$stmt->bindParam(':password', $pass, PDO::PARAM_STR);
		$stmt->bindParam(':user', $upname, PDO::PARAM_STR);

		$stmt->execute();

		return ($stmt->rowCount() > 0 )
			? $stmt
			: false;

	} catch(Exception $e){
		return false;
	}
}



function deldata($delname, $conn)
{

	try{

		$stmt = $conn->prepare('DELETE FROM users WHERE Username = :user');
		$stmt->bindParam(':user', $delname, PDO::PARAM_STR);

		$stmt->execute();


		return ($stmt->rowCount() > 0 )
			? $stmt
			: false;

	} catch(Exception $e){
		return false;
	}
}

