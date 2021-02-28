<?php
include 'connection/connection.php';

$name = $_POST['name'];
$msg = $_POST['msg'];

if(isset($_POST['name']) && isset($_POST['msg'])){
    $refresh = "<br><button type='button' class='btn btn-outline-dark btn-ref' onclick='location.reload();'><small><i class='fas fa-sync-alt'></i> Refresh</small></button>";
    $query = "INSERT INTO `message`(`name`,`msg`) VALUES ('$name','$msg')";
    $result = mysqli_query($con,$query) or trigger_error(mysqli_error($con));
    if ($result){
        echo "Pesan terkirim!<i class='fas fa-check-circle'></i>".$refresh;
    } else {
        echo "Pesan tidak terkirim!<i class='fas fa-times-circle'></i>".$refresh;
    }
} else {
    echo "Error";
}

mysqli_close($con);