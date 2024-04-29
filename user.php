<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-left :200px; margin-right: 200px">
    <header class="judul-halaman">
        <h1>Toko Indonesia</h1>
    </header>    
    <div class="header-barang">
        <h2> Tabel Barang</h2>
        <form method="GET">
            <input type="text" name="search" placeholder="Nama Barang...">
            <button style="padding:5px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold; cursor:pointer" type="submit">Search</button>
        </form>
    </div>    
    <div class="table-barang">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Supplier</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "toko_indonesia";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection gagal : ". $conn->connect_error);
            }

            // Check if the search form is submitted
            if(isset($_GET['search'])) {
                $search = $_GET['search'];
                $sql = "SELECT * FROM tabel_barang WHERE Nama_Barang LIKE '%$search%'";
            } else {
                $sql = "SELECT * FROM tabel_barang";
            }

            $result = $conn->query($sql);

            $conn->close();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["ID"] . "</td>";
                    echo "<td>" . $row["Kategori"] . "</td>";
                    echo "<td>" . $row["Nama_Barang"] . "</td>";
                    echo "<td>" . $row["Harga"] . "</td>";
                    echo "<td>" . $row["Stok"] . "</td>";
                    echo "<td>" . $row["Supplier"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
    <div class="header-barang">
        <h2> Tabel Supplier</h2>

    </div>    
    <div class="table-barang">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Telepon</th>
                
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "toko_indonesia";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection gagal : ". $conn->connect_error);
            }
            $sql = "SELECT * FROM tabel_supplier";
            $result = $conn->query($sql);
            $conn->close();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["ID_Supplier"] . "</td>";
                    echo "<td>" . $row["Nama"] . "</td>";
                    echo "<td>" . $row["Alamat"] . "</td>";
                    echo "<td>" . $row["Kota"] . "</td>";
                    echo "<td>" . $row["Telepon"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
    <div class="header-barang">
        <h2> Nama Gerai</h2>
        
    </div>    
    <div class="table-barang">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Telepon</th>
                
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "toko_indonesia";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection gagal : ". $conn->connect_error);
            }
            $sql = "SELECT * FROM nama_gerai";
            $result = $conn->query($sql);

            $conn->close();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["ID_Gerai"] . "</td>";
                    echo "<td>" . $row["Nama"] . "</td>";
                    echo "<td>" . $row["Alamat"] . "</td>";
                    echo "<td>" . $row["Kota"] . "</td>";
                    echo "<td>" . $row["Telepon"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
