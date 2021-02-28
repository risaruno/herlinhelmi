<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "herlinhelmi";

$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['name'];
$msg = $_POST['msg'];

if(isset($_POST['name']) && isset($_POST['msg'])){
    $refresh = "<br><button type='button' class='btn btn-outline-dark btn-ref' onclick='location.reload();'><small><i class='fas fa-sync-alt'></i> Refresh</small></button>";
    $query = "INSERT INTO `message`(`name`,`msg`) VALUES ('$name','$msg')";
    $result = mysqli_query($con,$query);
    if ($result){
        echo "<h3 class='after-form form-success'>Pesan terkirim!<i class='fas fa-check-circle'></i>".$refresh."</h3>";
    } else {
        echo "<h3 class='after-form form-fail'>Pesan tidak terkirim!<i class='fas fa-times-circle'></i><br>Silakan Hubungi Operator".$refresh."</h3>";
    }
} else {
    echo "Error";
}