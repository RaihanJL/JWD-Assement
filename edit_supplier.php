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
    $id = $_POST['id_supplier'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE supplier SET Nama='$nama', Alamat='$alamat', Kota='$kota', Telepon='$telepon' WHERE ID_Gerai='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM tabel_supplier WHERE ID_Supplier='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<form method="post">
    Nama: <input type="text" name="nama" value="<?php echo $row['Nama']; ?>"><br>
    Alamat: <input type="text" name="alamat" value="<?php echo $row['Alamat']; ?>"><br>
    Kota: <input type="text" name="kota" value="<?php echo $row['Kota']; ?>"><br>
    Telepon: <input type="text" name="telepon" value="<?php echo $row['Telepon']; ?>"><br>
    <input type="hidden" name="id_supplier" value="<?php echo $row['ID_Supplier']; ?>">
    <input type="submit" value="Submit">
    <a href="admin.php">Back</a>
</form>