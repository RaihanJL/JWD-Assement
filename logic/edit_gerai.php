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
    $id = $_POST['id_gerai'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE nama_gerai SET Nama='$nama', Alamat='$alamat', Kota='$kota', Telepon='$telepon' WHERE ID_Gerai='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM nama_gerai WHERE ID_Gerai='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<form method="post">
    <p>Nama:</p> <input type="text" name="nama" value="<?php echo $row['Nama']; ?>"><br>
    <p>Alamat:</p> <input type="text" name="alamat" value="<?php echo $row['Alamat']; ?>"><br>
    <p>Kota:</p> <input type="text" name="kota" value="<?php echo $row['Kota']; ?>"><br>
    <p>Telepon:</p> <input type="text" name="telepon" value="<?php echo $row['Telepon']; ?>"><br>
    <input type="hidden" name="id_gerai" value="<?php echo $row['ID_Gerai']; ?>">
    <input style="padding: 10px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold" type="submit" value="Submit">
    <a href="../admin.php">Back</a>
</form>