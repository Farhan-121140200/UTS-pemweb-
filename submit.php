<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $nama = isset($_GET["nama"]) ? $_GET["nama"] : "";
    $nim = isset($_GET["nim"]) ? $_GET["nim"] : "";
    $prodi = isset($_GET["prodi"]) ? $_GET["prodi"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";
    $password = isset($_GET["password"]) ? $_GET["password"] : "";
    $jenisKelamin = isset($_GET["jenis-kelamin"]) ? $_GET["jenis-kelamin"] : "";
    $tanggalLahir = isset($_GET["tanggal-lahir"]) ? $_GET["tanggal-lahir"] : "";
    $alamat = isset($_GET["alamat"]) ? $_GET["alamat"] : "";

    $data = [
        $nama,
        $nim,
        $prodi,
        $email,
        $password,
        $jenisKelamin,
        $tanggalLahir,
        $alamat,
    ];

    $csvFile = fopen("data.csv", "a");
    fputcsv($csvFile, $data);
    fclose($csvFile);

    header("Location: HalamanTabel.html?nama=$nama&nim=$nim&prodi=$prodi&email=$email&password=$password&jenis-kelamin=$jenisKelamin&tanggal-lahir=$tanggalLahir&alamat=$alamat");
}
?>
