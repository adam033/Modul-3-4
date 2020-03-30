<?php
include '../transaksi/koneksi.php';
include 'fungsi-transaksi.php';

if(isset($_POST['btn_pinjam'])){
$id_anggota =$_POST['id_anggota'];
$id_buku = $_POST['id_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_jatuh_tempo = date('Y-m-d',strtotime($tgl_pinjam.'+ 7 Days'));
$id_petugas = $_SESSION['id_petugas'];

$sql = "INSERT INTO peminjaman (id_anggota,id_buku,tgl_pinjam,tgl_jatuh_tempo,id_petugas) VALUES ($id_anggota,$id_buku,'$tgl_pinjam','$tgl_jatuh_tempo','$id_petugas')";

$stok = ambilStok($koneksi,$id_buku);//ambil data stok buku
if(cekPinjam($koneksi,$id_anggota)&& $stok > 0){
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows($koneksi);

    $stok_update = $stok-1;
    if($count == 1){
        updateStok($koneksi,$id_buku,$stok_update);
        header("Location = index.php");
    }
}
else{
    header("Location:index.php");
}

}else{
    header("Location:form-pinjam.php");
}
?>