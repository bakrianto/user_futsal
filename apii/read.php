<?php 
header("Content-type:application/json");
require 'db_config.php';
$num_rec = 10;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $num_rec;
$sqlTotal = "SELECT * FROM tb_user";
$sql = "SELECT * FROM tb_user Order By user_id desc LIMIT $start_from, $num_rec";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $json[] = $row;
}
$data['data'] = $json;
$result = mysqli_query($mysqli, $sqlTotal);
$data['total'] = mysqli_num_rows($result);
echo json_encode($data, JSON_PRETTY_PRINT);
?>