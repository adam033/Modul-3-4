<?php
include '../transaksi/koneksi.php';
include '../transaksi/fungsi-transaksi.php';

$buku = ambilBuku($koneksi);
$anggota = ambilAnggota($koneksi);

include '../aset/header.php';
?>
<style>
    label{
        color: white;
    }

</style>
<div class="container">
<div class ="row mt-4">
<div class="col-md-8">
<div class="card">
<div class="card-header bg-info text-white">
<font face = "Berlin Sans FB"><h3>Form Tambah Peminjaman</h3></font>
</div>
<div class="card-body bg-dark">
<form action="proses-pinjam.php" method="post">
<div class="form-group">
     <label for="anggota">Nama Anggota</label>
     <select name="id_anggota" class="form-control">
           <?php
               foreach ($anggota as $a ) { ?>
                   <option value="<?= $a['id_anggota']?>"><?=$a['nama']?></option>
               <?php }
               ?>
     </select>
</div>
<div class="form-group">
     <label for="buku">Judul Buku</label>
     <select name="id_buku" class="form-control">
     <?php
         foreach ($buku as $b ) { ?>
             <option value="<?= $b ['id_buku'] ?>"><?= $b['judul'] ?></option>
         <?php }
        ?>
     </select>
</div>
<div class="form-group">
      <label for="datepicker">Tanggal Pinjam</label>
      <input type="date" name="tgl_pinjam" class="form-control">
</div>
                    
<div class="form-group">
       <button type="submit" name="btnPinjam" class="btn btn-info mr-auto">Simpan</button>
</div>

</form>
</div>
</div>
</div>
</div>
</div>

<?php
include '../aset/footer.php';
?>