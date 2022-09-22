<h1>Tambah Data</h1>
<form action="kwu-tambah.php" method="POST">
    <label for="kodebarang"> Kode Barang  : </label>
    <input type="number" name="kodebarang" placeholder="Ex. 001" /> <br>

    <label for="tanggal"> Tanggal  : </label>
    <input type="date" name="tanggal"/> <br>
    
    <label for="pembeli"> Pembeli :</label>
    <input type="text" name="pembeli" placeholder="Ex. Wananda" /><br>

    <label for="namabarang"> Nama Barang :</label>
    <input type="text" name="namabarang" placeholder="Ex. Ultra Milk"><br>

    <label for="qty"> Qty :</label>
    <input type="number" name="qty" placeholder="Ex. 80"><br>

    <label for="hargabeli"> Total Harga Beli :</label>
    <input type="number" name="hargabeli" placeholder="Ex. 10000"><br>

    <label for="hargajual"> Total Harga Jual :</label>
    <input type="number" name="hargajual" placeholder="Ex. 10000"><br>

    <input type="submit" name="simpan" value="Simpan Data" /> 
    <a href="kwu.php">Kembali</a>
</form>

<?php
    if ( isset($_POST["simpan"])) {
        $kodebarang = $_POST["kodebarang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];

        // CREATE - Menambahkan Data ke Database
        $query = "
                INSERT INTO transaksi VALUES
                ('$kodebarang', '$tanggal', '$pembeli', '$namabarang', '$qty', '$hargabeli', '$hargajual');
            ";

            include ('./kwu-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                echo "
                    <script>
                            alert('Data berhasil ditambahkan');
                            window.location='kwu.php';
                    </script>
                ";
            }
    }
?>