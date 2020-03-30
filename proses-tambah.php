<?php
include '../transaksi/koneksi.php';

if(isset($_POST['simpan'])){
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_level = 3;
    
    $sql = "INSERT INTO angg(nama,kelas,telp,username,password,id_level) VALUES ('$nama','$kelas','$telp','$username','$password','$id_level')";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows($koneksi);
    
    if($count == 1)
    {
        header("Location:index.php");
    }
    else{
        header("Location:tambah.php");
    }
}else{
    header("Location:tambah.php");

}
?>