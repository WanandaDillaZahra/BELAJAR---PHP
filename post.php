<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Indra El" /><br>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 1" /><br>
    <input type="number" name="nisn" placeholder="Ex. 12345" /><br>
    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
    if( isset($_POST["simpan"]) ){
        echo "<hr>";
        $namalengkap = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $nisn = $_POST["nisn"];

        echo "Nama Lengkap : " . $namalengkap . "<br>";
        echo "Kelas : " . $kelas . "<br>";
        echo "Nisn : " . $nisn;
        
    }
?>