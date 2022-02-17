<?php
$thisPage = 'DataBarang';
include('library.php');
$lib = new library();
$data_mie = $lib->show_mie();
$data_minyak = $lib->show_minyak();
$data_plastik = $lib->show_plastik();
$data_terigu = $lib->show_terigu();

include 'view/header.php';
include 'view/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="card">
            <div class="card-header bg-cyan">
                <h3 class="card-title">Data Barang Mie</h3>
            </div>
            <div class="card-body">
                <table id="tabel_mie" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_mie as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['berat'] ?></td>
                                <td><?php echo $row['harga'] ?></td>
                                <td><?php echo $row['stok'] ?></td>
                            <?php $no++;
                        } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-header bg-cyan">
                <h3 class="card-title">Data Barang Minyak</h3>
            </div>
            <div class="card-body">
                <table id="tabel_minyak" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_minyak as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['berat'] ?></td>
                                <td><?php echo $row['harga'] ?></td>
                                <td><?php echo $row['stok'] ?></td>
                            <?php $no++;
                        } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card">
            <div id="tabel-plastik" class="card-header bg-cyan">
                <h3 class="card-title">Data Barang Plastik</h3>
            </div>
            <div class="card-body">
                <table id="tabel_plastik" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_plastik as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['berat'] ?></td>
                                <td><?php echo $row['harga'] ?></td>
                                <td><?php echo $row['stok'] ?></td>
                            <?php $no++;
                        } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-header bg-cyan">
                <h3 class="card-title">Data Barang Terigu</h3>
            </div>
            <div class="card-body">
                <table id="tabel_terigu" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_terigu as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['berat'] ?></td>
                                <td><?php echo $row['harga'] ?></td>
                                <td><?php echo $row['stok'] ?></td>
                            <?php $no++;
                        } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include 'view/footer.php';
?>