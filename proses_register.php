<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='register.php';</script>";
    }elseif(empty($alamat)){
            echo "<script>alert('tangga lahir tidak boleh kosong');location.href='register.php';</script>";
        }elseif(empty($telp)){
            echo "<script>alert('gender tidak boleh kosong');location.href='register.php';</script>";
        }elseif(empty($username)){
            echo "<script>alert('alamat tidak boleh kosong');location.href='register.php';</script>";
        }elseif(empty($password)){
            echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
        }elseif(empty($role)){
            echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama,alamat,telp,username,password,role) value ('".$nama."','".$alamat."','".$telp."','".$username."','".md5($password)."','".$role."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Pelanggan');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pelanggan');location.href='login.php';</script>";
        }
    }
}
?>