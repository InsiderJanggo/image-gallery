<?php
    require_once('connect.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = filter_input(INPUT_POST, 'nama');
        $url = filter_input(INPUT_POST, 'url');
        $sql = "INSERT INTO foto (nama, url) 
            VALUES (:nama, :url)";
        $stmt = $db->prepare($sql);
        $params = array(
            ":nama" => $nama,
            ":url" => $url,
        );
        $saved = $stmt->execute($params);

        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman index
        if($saved) header("Location: index.php");
    }
?>