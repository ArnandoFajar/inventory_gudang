<?php
$thisPage = 'riwayat_transaksi';
include('library.php');
$lib = new Library();
$data = $lib->tampil_riwayat();
include('view/header.php');
include('view/sidebar.php');
?>
<div class="content-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-header bg-cyan">
                <h3 class="card-title">Riwayat Transaksi</h3>
            </div>
            <div class="card-body">
                <table id="tabel_riwayat" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>Jenis Data</th>
                            <th>Stok</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row['tanggal'] ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['berat'] ?></td>
                                <td><?php echo $row['harga'] ?></td>
                                <td><?php echo $row['jenis_data'] ?></td>
                                <td><?php echo $row['stok'] ?></td>
                                <td><?php echo $row['total_harga'] ?></td>
                            <?php $no++;
                        } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('view/footer.php'); ?>