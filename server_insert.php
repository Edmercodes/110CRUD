<?php
	
	$user = "postgres"; 
	$pass = "masterkey"; 

	$db = new PDO('pgsql:dbname=practice host=localhost', $user, $pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if ($db) {

		$a = $_POST['firstname'];
		$b = $_POST['nickname'];
		$c = $_POST['lastname'];
		$d = $_POST['gender'];

		$stmt = $db->prepare("INSERT INTO forms (firstname, nickname, lastname, gender)
			VALUES (:a, :b, :c, :d)");
		$stmt->bindParam(':a', $a);
		$stmt->bindParam(':b', $b);
		$stmt->bindParam(':c', $c);
		$stmt->bindParam(':d', $d);

		$stmt->execute();
		
	}

	header('Location: index.php');	
?>







//echo $_POST['firstname'] . "<br>" . $_POST['nickname'] . "<br>" . $_POST['lastname'] . "<br>" . $_POST['gender'];
	
	/*
	$user = "postgres"; 
	$pass = "masterkey"; 

	$db = new PDO('pgsql:dbname=practice host=localhost', $user, $pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$a = $_POST['firstname'];
	$b = $_POST['nickname'];
	$c = $_POST['lastname'];
	$d = $_POST['gender'];

	$stmt = $db->prepare("INSERT INTO employees (firstname, nickname, lastname, gender) VALUES (:a, :b, :c, :d)");
	$stmt->bindParam(':a', $a);
	$stmt->bindParam(':b', $b);
	$stmt->bindParam(':c', $c);
	$stmt->bindParam(':d', $d);

	$stmt->execute();
	*/
