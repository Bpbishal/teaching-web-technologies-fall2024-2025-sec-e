<?php
    $data = $_REQUEST['mydata'];
    $user = json_decode($data);

    $std = ['name'=> 'alamin', 'email'=> 'alamin@aiub.edu', 'pass'=>'123']; 
    echo json_encode($std);
?>