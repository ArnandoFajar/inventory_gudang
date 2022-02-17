<?php
class Library
{
    //koneksi Database
    public function __construct()
    {
        $host = "localhost";
        $dbname = "gudang";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $this->db2 = new mysqli($host, $username, $password, $dbname);
        $this->db3 = mysqli_connect($host, $username, $password, $dbname);
    }

    //Dashboard index.php
    public function sum_mie()
    {
        $query = $this->db->query('SELECT SUM(stok) FROM tb_mie');
        $data = $query->fetch();
        $hasil = $data[0];
        return $hasil;
    }
    public function sum_minyak()
    {
        $query = $this->db->query('SELECT SUM(stok) FROM tb_minyak');
        $data = $query->fetch();
        $hasil = $data[0];
        return $hasil;
    }
    public function sum_terigu()
    {
        $query = $this->db->query('SELECT SUM(stok) FROM tb_terigu');
        $data = $query->fetch();
        $hasil = $data[0];
        return $hasil;
    }
    public function sum_plastik()
    {
        $query = $this->db->query('SELECT SUM(stok) FROM tb_plastik');
        $data = $query->fetch();
        $hasil = $data[0];
        return $hasil;
    }
    public function sum_riwayat()
    {
        $query = $this->db->query('SELECT SUM(total_harga) FROM tb_riwayat WHERE jenis_data= "barang keluar" ');
        $data = $query->fetch();
        $hasil = $data[0];
        return $hasil;
    }

    //Data Barang.php
    public function show_mie()
    {
        $result = $this->db2->query("SELECT * FROM tb_mie");
        return $result;
    }
    public function show_minyak()
    {
        $query = $this->db->prepare("SELECT * FROM tb_minyak");
        $query->execute();
        $data = $query->fetchALL();
        return $data;
    }
    public function show_plastik()
    {
        $query = $this->db->prepare("SELECT * FROM tb_plastik");
        $query->execute();
        $data = $query->fetchALL();
        return $data;
    }
    public function show_terigu()
    {
        $query = $this->db->prepare("SELECT * FROM tb_terigu");
        $query->execute();
        $data = $query->fetchALL();
        return $data;
    }

    // Barang Masuk.php
    public function tambah_barang($tabel, $nama, $berat, $harga, $stok)
    {
        $tb = htmlentities($tabel);
        $query = $this->db->prepare("INSERT INTO $tb (nama,berat,harga,stok) VALUES (:nama,:berat,:harga,:stok)");

        $query->bindParam(':nama', $nama);
        $query->bindParam(':berat', $berat);
        $query->bindParam(':harga', $harga);
        $query->bindParam(':stok', $stok);

        $query->execute();
        return $query->rowCount();
    }

    // Barang Kelua.php
    public function check($tabel)
    {
        $query = $this->db->prepare("SELECT * FROM $tabel");
        $query->execute();
        $data = $query->fetchALL();
        return $data;
    }
    public function get_id_tabel($data)
    {
        if ($data[0] == 'id_mie') {
            $data[0] = 'id_tabel';
        };
        if ($data[0] == 'id_minyak') {
            $data[0] = 'id_tabel';
        };
        if ($data[0] == 'id_plastik') {
            $data[0] = 'id_tabel';
        };
        if ($data[0] == 'id_terigu') {
            $data[0] = 'id_tabel';
        };
        return $data;
    }

    // Form keluar.php, Mengambil data 
    public function get_data_keluar($tabel, $id_tabel)
    {
        if ($tabel == 'tb_mie') {
            $id = 'id_mie';
        } else if ($tabel == 'tb_minyak') {
            $id = 'id_minyak';
        } else if ($tabel == 'tb_plastik') {
            $id = 'id_plastik';
        } else if ($tabel == 'tb_terigu') {
            $id = 'id_terigu';
        } else {
            echo '<meta http-equiv="refresh" content="0;url=newpage.php">';
        }
        $query = $this->db->prepare("SELECT * FROM $tabel where $id = $id_tabel");
        $query->execute();
        return $query->fetch();
    }
    public function update($tabel, $id_tabel, $nama, $berat, $harga, $stok)
    {
        if ($tabel == 'tb_mie') {
            $id = 'id_mie';
        } else if ($tabel == 'tb_minyak') {
            $id = 'id_minyak';
        } else if ($tabel == 'tb_plastik') {
            $id = 'id_plastik';
        } else if ($tabel == 'tb_terigu') {
            $id = 'id_terigu';
        } else {
            echo '<meta http-equiv="refresh" content="0;url=newpage.php">';
        }

        $query = $this->db->prepare("UPDATE $tabel SET nama=:nama,berat=:berat,harga=:harga,stok=:stok WHERE $id = $id_tabel");
        $query->bindParam(':nama', $nama);
        $query->bindParam(':berat', $berat);
        $query->bindParam(':harga', $harga);
        $query->bindParam(':stok', $stok);
        $query->execute();
        return $query->rowCount();
    }
    public function riwayat_keluar($tanggal, $nama, $berat, $harga, $jenis_data, $stok, $total_harga)
    {
        $query = $this->db->prepare("INSERT INTO tb_riwayat(tanggal,nama,berat,harga,jenis_data,stok,total_harga) 
                                    VALUES ('$tanggal','$nama','$berat','$harga','$jenis_data','$stok','$total_harga')");
        $query->execute();
        return $query->rowCount();
    }

    //riwayat Transaksi.php
    public function tampil_riwayat()
    {
        $query = $this->db->prepare("SELECT * FROM tb_riwayat");
        $query->execute();
        return $query->fetchALL();
    }

    //hapus data barang
    public function hapus($tabel, $idx)
    {
        if ($tabel == 'tb_mie') {
            $id = 'id_mie';
        } else if ($tabel == 'tb_minyak') {
            $id = 'id_minyak';
        } else if ($tabel == 'tb_plastik') {
            $id = 'id_plastik';
        } else if ($tabel == 'tb_terigu') {
            $id = 'id_terigu';
        } else {
            echo '<meta http-equiv="refresh" content="0;url=newpage.php">';
        }
        $query = $this->db->prepare("DELETE FROM $tabel WHERE $id = $idx");
        $query->execute();
        return $query;
    }
}
