<?php

    $user = "postgres";
    $pass = "hellomaster";

    $db = new PDO('pgsql:dbname=ite18 host=localhost', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($db) {
        
        $stmt = $db->prepare("SELECT * FROM form");
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
?>
