<?php
include('view/header.php');
include('view/sidebar.php');
include('library.php');
$lib = new Library();

if (isset($_GET['id_tabel']) && ($_GET['tabel'])) {
    $id = $_GET['id_tabel'];
    $tabel = $_GET['tabel'];
    $data = $lib->get_data_keluar($tabel, $id);
} else {
    header('location:barang_keluar.php');
}
if (isset($_POST['tombol_update'])) {
    $tabel = $_POST['tabel'];
    $id_tabel = $_POST['id'];
    $nama = $_POST['nama'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $status_update = $lib->update($tabel, $id_tabel, $nama, $berat, $harga, $stok);
    if ($status_update) {
        header('location:index.php');
    }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

        <div class="card">
            <div class="card-header">
                <h3>Edit Data</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-1 col-form-label">Nama</label>
                        <div class="col-sm-2">
                            <input type="hidden" name="tabel" value="<?php echo $tabel; ?>">
                            <input type="hidden" name="id" value="<?php echo $data[0]; ?>">
                            <input type="hidden" name="nama" value="<?php echo $data['nama']; ?>">
                            <div class="form-control bg-gradient-gray"><?php echo $data['nama']; ?></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">berat</label>
                        <div class="col-sm-2">
                            <input type="hidden" name="berat" class="form-control" value="<?php echo $data['berat'] ?>">
                            <div class="form-control bg-gradient-gray"><?php echo $data['berat']; ?></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">harga</label>
                        <div class="col-sm-2">
                            <input type="hidden" name="harga" class="form-control" value="<?php echo $data['harga'] ?>">
                            <div class="form-control bg-gradient-gray"><?php echo $data['harga']; ?></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">stok</label>
                        <div class="col-sm-2">
                            <input type="hidden" name="stok" class="form-control" value="<?php echo $data['stok'] ?>">
                            <div class="form-control bg-gradient-gray"><?php echo $data['stok']; ?></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label>
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