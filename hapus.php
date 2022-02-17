<?php
include('library.php');
$lib = new Library();

if (isset($_GET['id_tabel']) && ($_GET['tabel'])) {
    $id = $_GET['id_tabel'];
    $tabel = $_GET['tabel'];
    $hapus = $lib->hapus($tabel, $id);
    if ($hapus) {
        echo "<script>alert('Data yang anda hapus sukses');window.location='barang_keluar.php'</script>";
    }
}
