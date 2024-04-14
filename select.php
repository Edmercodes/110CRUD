<?php

    $user = "postgres";
    $pass = "hellomaster";

    $db = new PDO('pgsql:dbname=csu host=localhost', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($db) {
        
        $stmt = $db->prepare("SELECT last_name FROM enrollment.employees");
        $stmt->execute();

        $datas = [];

        while($row = $stmt->fetchAll()){
            
            $datas = $row;
        }

        echo json_encode($datas);

    }
    else {
        echo 'Failed';
    }


/*
$user = "postgres";
$pass = "hellomaster";

$db = new PDO('pgsql:dbname=csu host=localhost', $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$username = $_POST['i_username'];
$password = $_POST['i_password'];


$stmt = $db->prepare("SELECT * FROM enrollment.employees");
$stmt->execute();

$datas = [];

while($row = $stmt->fetchAll()){
    
    $datas = $row;
}

echo json_encode($datas);

*/
?>
