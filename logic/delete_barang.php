<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "toko_indonesia";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection gagal : ". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tabel_barang WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data telah dihapus!!!<br>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

<a href="../admin.php"><button style="padding: 10px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold; cursor:pointer">back</button></a>