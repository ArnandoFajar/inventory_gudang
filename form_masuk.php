<?php
include('view/header.php');
include('view/sidebar.php');
include('library.php');
$lib = new Library();

if (isset($_GET['id_tabel']) && ($_GET['tabel'])) {
    $id = $_GET['id_tabel'];
    $tabel = $_GET['tabel'];
    $data = $lib->get_data_tabel($tabel, $id);
} else {
    header('location:barang_masuk.php');
}
if (isset($_POST['tombol_update'])) {
    $tabel = $_POST['tabel'];
    $id_tabel = $_POST['id'];
    $nama = $_POST['nama'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $stok_awal = $_POST['stok'];
    $stok_masuk = $_POST['stok_masuk'];
    $stok_akhir = $stok_awal + $stok_masuk;
    $lib->update($tabel, $id_tabel, $nama, $berat, $harga, $stok_akhir);

    //input riwayar Transaksi
    $tanggal = date("d-F-Y");
    $jenis_data = "Barang Masuk";
    $total_harga = $stok_masuk * $harga;
    $status_update = $lib->riwayat($tanggal, $nama, $berat, $harga, $jenis_data, $stok_masuk, $total_harga);
    if ($status_update) {
        echo "<script>alert('Data yang anda Update sukses');window.location='barang_keluar.php'</script>";
    }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3>Edit Data</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-2">
                            <input type="hidden" name="tabel" value="<?php echo $tabel; ?>">
                            <input type="hidden" name="id" value="<?php echo $data[0]; ?>">
                            <input type="hidden" name="nama" value="<?php echo $data['nama']; ?>">
                            <div class="form-control bg-gradient-gray"><?php echo $data['nama']; ?></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">berat</label>
                        <div class="col-sm-2">
                            <input type="hidden" name="berat" class="form-control" value="<?php echo $data['berat'] ?>">
                            <div class="form-control bg-gradient-gray"><?php echo $data['berat']; ?></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">harga</label>
                        <div class="col-sm-2">
                            <input type="hidden" name="harga" class="form-control" value="<?php echo $data['harga'] ?>">
                            <div class="form-control bg-gradient-gray"><?php echo $data['harga']; ?></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">stok</label>
                        <div class="col-sm-2">
                            <input type="hidden" name="stok" class="form-control" value="<?php echo $data['stok'] ?>">
                            <div class="form-control bg-gradient-gray"><?php echo $data['stok']; ?></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Input Stok Masuk</label>
                        <div class="col-sm-2">
                            <input type="text" name="stok_masuk" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-2">
                            <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('view/footer.php'); ?>