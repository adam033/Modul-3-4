<?php
include '../aset/header.php'
?>
<style>
    input{
        border-color: white;
        background-color: none;
    }
    label{
        color: white;
    }
</style>
<div class="container">
<div class="row mt-4">
<div class="col-md-9">
    <div class="card">
        <div class="card-header bg-info text-white">
        <font face="Berlin Sans FB"><h2 class="card-title">Tambah Data Anggota</h2></font>
        </div>
        <div class="card-body bg-dark">
            <form method="POST" action="proses-tambah.php">
                <div class = "form-group">
                    <label for="anggota">Nama Lengkap</label>
                    <input type="text" class = "form-control" name="nama" id="anggota" placeholder="Masukan Nama Lengkap"> 
                </div>
                <div class = "form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukan Kelas">
                    <small class="form-text text-muted">Contoh : XRPL2</small>
                </div>
                <div class = "form-group">
                    <label for="telp">Nomor Telepon</label>
                    <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukan Nomor Telepon">
                    <small class="form-text text-muted">Contoh: 0859193774917</small>
                </div>
                <div class = "form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
            </form>

        </div>

    </div>

</div>
</div>
</div>

<?php
include '../aset/footer.php'
?>