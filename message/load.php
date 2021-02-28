 <?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "herlinhelmi";

$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from message order by id desc";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0 ){
    $data = array();
    $data["data"] = array();
    while($r = mysqli_fetch_array($result)){
        $h['id'] = $r["id"];
        $h['name'] = $r["name"];
        $h['message'] = $r["msg"];
        $h['time'] = $r["time"];
        array_push($data["data"], $h);
    }
    echo json_encode($data);
} else {
    $data["error"]="Tidak ada data";
    echo json_encode($data);
}