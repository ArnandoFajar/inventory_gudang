<?php
$thisPage = 'TambahBarang';
include('view/header.php');
include('view/sidebar.php');
?>
<div class="content-wrapper">
    <div class="content">
        <div class="card">
            <?php
            include('library.php');
            $lib = new Library();
            if (isset($_POST['tombol'])) {
                $tabel = $_POST['tabel'];
                $nama = $_POST['nama'];
                $berat = $_POST['berat'];
                $harga = $_POST['harga'];
                $stok = $_POST['stok'];
                $add_data = $lib->tambah_barang($tabel, $nama, $berat, $harga, $stok);

                if ($add_data) {
                    echo 'Success';
                    echo '<meta http-equiv="refresh" content="3;url=index.php">';
                }
            }
            ?>
            <div class="card-header bg-dark">
                <h3 class="card-title">Tambah Barang</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group row">
                        <label for="Data" class="col-sm-1 col-form-label">Data</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="tabel">
                                <option value="tb_mie">Data Mie</option>
                                <option value="tb_minyak">Data Minyak</option>
                                <option value="tb_plastik">Data Plastik</option>
                                <option value="tb_terigu">Data Terigu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-1 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="berat" class="col-sm-1 col-form-label">Berat</label>
                        <div class="col-sm-10">
                            <input type="text" name="berat" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-1 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" name="harga" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-1 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" name="stok" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="submit" class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="tombol" class="btn btn-primary" value="Tambah">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('view/footer.php') ?>