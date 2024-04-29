<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "toko_indonesia";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection gagal : ". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $supplier = $_POST['supplier'];

    $sql = "INSERT INTO tabel_barang (ID, Kategori, Nama_Barang, Harga, Stok, Supplier) VALUES ('$id','$kategori', '$nama_barang', '$harga', '$stok', '$supplier')";

    if ($conn->query($sql) === TRUE) {
        echo "Barang berhasil ditambahkan.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<a href="../admin.php"><button style="padding: 10px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold; cursor:pointer">back</button></a>