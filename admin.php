<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function toggleForm(formId) {
            var form = document.getElementById(formId);
            if (form.style.display === 'none') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }
    </script>

</head>
<body>
    <div class="all-content">
        <div style="display:flex; justify-content: space-between; align-items: center">
            <h1 class="admin-head">Dashboard</h1>
            <p style="font-weight:bold">Admin</p>
        </div>
        <div>
            <div>
                <h2> Tabel Barang</h2>
                <button style="padding: 10px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold; cursor:pointer" class="button-tambah" onclick="toggleForm('barangForm')">Add Barang</button>
                <form id="barangForm" method="post" action="add_barang.php" style="display:none;">
                    <P>ID:</p><input type="text" name="id"><br>
                    <p>Kategori:</p> <input type="text" name="kategori"><br>
                    <p>Nama Barang:</p> <input type="text" name="nama_barang"><br>
                    <p>Harga:</p> <input type="text" name="harga"><br>
                    <p>Stok:</p> <input type="text" name="stok"><br>
                    <p>Supplier:</p> <input style="margin-bottom:20px" type="text" name="supplier"><br>
                    <input style="padding: 10px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold" type="submit" value="Tambah">
                </form>
            </div>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Supplier</th>
                    <th>Action</th>
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
                        echo "<td><a href='edit_barang.php?id=" . $row["ID"] . "'>Edit</a> | <a href='delete_barang.php?id=" . $row["ID"] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>    
        <div>
            <div>
                <h2> Tabel Gerai</h2>
                <button style="padding: 10px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold; cursor:pointer" class="button-tambah" onclick="toggleForm('geraiForm')">Add Gerai</button>
                <form id="geraiForm" method="post" action="add_gerai.php" style="display:none;">
                    <P>ID_Gerai:</p><input type="text" name="id"><br>
                    <p>Nama:</p> <input type="text" name="nama"><br>
                    <p>Alamat:</p> <input type="text" name="alamat"><br>
                    <p>Kota:</p> <input type="text" name="kota"><br>
                    <p>Telepon:</p> <input style="margin-bottom:20px" type="text" name="telepon"><br>
                    <input style="padding: 10px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold; cursor:pointer" type="submit" value="Tambah">
                </form>
            </div>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Action</th>
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
                        echo "<td><a href='edit_gerai.php?id=" . $row["ID_Gerai"] . "'>Edit</a> | <a href='delete_gerai.php?id=" . $row["ID_Gerai"] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
        <div>
            <div>
                <h2> Tabel Supplier</h2>
                <button style="padding: 10px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold; cursor:pointer" class="button-tambah" onclick="toggleForm('supplierForm')">Add Supplier</button>
                <form id="supplierForm" method="post" action="add_supplier.php" style="display:none;">
                    <P>ID_Supplier:</p><input type="text" name="id"><br>
                    <p>Nama:</p> <input type="text" name="nama"><br>
                    <p>Alamat:</p> <input type="text" name="alamat"><br>
                    <p>Kota:</p> <input type="text" name="kota"><br>
                    <p>Telepon:</p> <input style="margin-bottom:20px" type="text" name="telepon"><br>
                    <input style="padding: 10px 20px; background-color:#eeece1; border:none; border-radius: 5px; color:black; margin-bottom:20px; font-weight:bold; cursor:pointer" type="submit" value="Tambah">
                </form>
            </div>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Action</th>
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
                        echo "<td><a href='edit_supplier.php?id=" . $row["ID_Supplier"] . "'>Edit</a> | <a href='delete_supplier.php?id=" . $row["ID_Supplier"] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
