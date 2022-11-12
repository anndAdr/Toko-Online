<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Daftar</title>
</head>
<body style="background-color:#628E90; margin:100px; margin-bottom:0">
    <div class="row" style="margin-top:70px">
        <div class="col-md"></div>
        <div class="col-md rounded bg-light rounded-top border border-3 border border-success" style="padding:10px;">
        <form action="proses_register.php" method="POST">
        <center><h3>Pendaftaran</h3></center>
        nama:
        <input type="text" name="nama" placeholder="masukkan nama" class="form-control">
        alamat:
        <textarea name="alamat" placeholder="masukkan alamat lengkap" class="form-control"></textarea>
        role:
        <select class="form-select" name="role" aria-label="Default select example">
        <option select="">pilih role</option>
            <option value="pelanggan">pelanggan</option>
            <option value="admin">admin</option>
            <option value="petugas">petugas</option>
        </select>
        <input type="text" name="telp" placeholder="masukkan telp" class="form-control">
        username:
        <input type="text" name="username" placeholder="masukkan username" class="form-control">
        password:
        <input type="password" name="password" placeholder="masukkan password" class="form-control">
        <br><center><input type="submit" name="simpan" value="sign up" class="btn btn-success"></center><br>
    </form>
    </div>
    <div class="col-md"></div>
    </div>   
</body>
</html>