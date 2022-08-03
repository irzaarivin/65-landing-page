<?php
$data = file_get_contents("http://localhost/dataSiswaRpl.json");
$data = json_decode($data, true);
$cek = $_GET["keyword"];
$return = [];
$i = 0;
foreach($data as $index => $siswa) {
    if(strpos(strtolower($siswa["field3"]), strtolower($cek)) !== false){
        $return[$i] = $data[$index];
        $i++;
    }
}
if(empty($return)){
    echo "Tidak Ada";
    return;
}
if($return) {
    echo "Ada";
    return;
}
?>
