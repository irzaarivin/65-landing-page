<?php
header('Content-type: application/json');

$data = file_get_contents("http://localhost/dataSiswaRpl.json");
$data = json_decode($data, true);
$cek = $_GET["keyword"];

if(strtolower($cek) == "all"){
	echo json_encode($data);
	return;
}

$return = [];

$i = 0;
foreach($data as $index => $siswa) {
    if(strpos(strtolower($siswa["field3"]), strtolower($cek)) !== false){
    	$return[$i] = $data[$index];
    	$i++;
    }
}

if(empty($return)){
	echo json_encode(["status" => "failed", "msg" => "Siswa yang dicari tidak ditemukan!"]);
	return;
}

echo json_encode($return);

?>