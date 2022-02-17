<?php
$thisPage = 'barang_masuk';
include('view/header.php');
include('view/sidebar.php');
include('library.php');
$lib = new Library();
$tabel = '';
if (isset($_POST['check'])) {
    $tabel = $_POST['tabel'];
    $hasil = $lib->check($tabel);
    if (!empty($hasil)) {
        echo "pilih data";
    }
}
?>
<div class="content-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-header bg-green">
                Barang Masuk
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="" class="col-sm-1 col-form-label">type data</label>
                    <div class="col-sm-10">
                        <form action="" method="POST">
                            <select name="tabel" id="">
                                <option value="tb_mie" <?php if ($tabel == 'tb_mie') echo 'selected'; ?>>Data Mie</option>
                                <option value="tb_minyak" <?php if ($tabel == 'tb_minyak') echo 'selected'; ?>>Data Minyak</option>
                                <option value="tb_plastik" <?php if ($tabel == 'tb_plastik') echo 'selected'; ?>>Data Plastik</option>
                                <option value="tb_terigu" <?php if ($tabel == 'tb_terigu') echo 'selected'; ?>>Data Terigu</option>
                            </select>
                            <input type="submit" name="check" class="" value="Check">
                        </form>
                    </div>
                </div>
            </div>
            <form action="" method="POST">
                <div class="card-body">
                    <table id="tabel_keluar" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Berat</th>
                                <th>Harga</th>
                                <th>stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if (!empty($tabel)) {
                                foreach ($hasil as $row) {
                                    $check_id = $lib->get_id_tabel($row[0]);
                            ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['berat'] ?></td>
                                        <td><?php echo $row['harga'] ?></td>
                                        <td><?php echo $row['stok'] ?></td>
                                        <td>
                                            <a class="btn btn-info" href="form_edit.php?id_tabel=<?php echo $check_id; ?>&tabel=<?php echo $tabel; ?>">Edit</a>
                                        </td>
                                    </tr>
                            <?php $no++;
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('view/footer.php');
?>