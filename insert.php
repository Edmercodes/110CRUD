<?php
	
	echo $_POST['firstname'] . "<br>" . $_POST['nickname'] . "<br>" . $_POST['lastname'] . "<br>" . $_POST['gender'];

	$user = "postgres"; 
	$pass = "hellomaster"; 

	$db = new PDO('pgsql:dbname=ite18 host=localhost', $user, $pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if ($db) {

		$a = $_POST['firstname'];
		$b = $_POST['nickname'];
		$c = $_POST['lastname'];
		$d = $_POST['gender'];

		$stmt = $db->prepare("INSERT INTO forms (first_name,nick_name,  last_name, gender)
			VALUES (:a, :b, :c, :d)");
		$stmt->bindParam(':a', $a);
		$stmt->bindParam(':b', $b);
		$stmt->bindParam(':c', $c);
		$stmt->bindParam(':d', $d);

		$stmt->execute();
		
	}

	header('Location: index.php');

?>
