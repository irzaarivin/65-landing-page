<html>
    <head>
        <meta name="viewport" content="width-scale=device-width, initial-size=1">
    </head>
    <body>
        <?php
        $data = file_get_contents("http://0.0.0.0:8080/dataSiswaRpl.json");
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
    </body>
</html>