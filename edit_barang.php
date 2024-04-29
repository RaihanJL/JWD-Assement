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

    $sql = "UPDATE tabel_barang SET Kategori='$kategori', Nama_Barang='$nama_barang', Harga='$harga', Stok='$stok', Supplier='$supplier' WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM tabel_barang WHERE ID='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<form method="post">
    <p>Kategori:</p> <input type="text" name="kategori" value="<?php echo $row['Kategori']; ?>"><br>
    <p>Nama Barang:</p> <input type="text" name="nama_barang" value="<?php echo $row['Nama_Barang']; ?>"><br>
    <p>Harga:</p> <input type="text" name="harga" value="<?php echo $row['Harga']; ?>"><br>
    <p>Stok:</p> <input type="text" name="stok" value="<?php echo $row['Stok']; ?>"><br>
    <p>Supplier:</p> <input type="text" name="supplier" value="<?php echo $row['Supplier']; ?>"><br>
    <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
    <input type="submit" value="Submit">
    <a href="admin.php">Back</a>
</form>