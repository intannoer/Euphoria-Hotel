<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Register Petugas</title>
<style>
    h3{
	font-family: Georgia, serif;
	}
    .navbar-brand{
    font-family: Impact, Charcoal, sans-serif;
    }
</style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/home">Euphoria Hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <h3 class="alert alert-dark text-center mt-3">DAFTAR AKUN PELANGGAN</h3>
        <a class = "btn btn-success" href="/pelanggan/login_pelanggan"> Kembali</a>
        <br/>
        <br/>

        <form action="/pelanggan/add_pelanggan" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Nama Pelanggan : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Pelanggan" name="nama_pelanggan"><br>
                    </div>
                    <div class="col-md-3">
                        <label>Gender Pelanggan : </label>
                    </div>
                    <div class="col-md-9">
                    <select class="form-control" name="jk_pelanggan">
                            <option value="laki laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                    </select><br>
                    </div><br>
                    <div class="col-md-3">
                        <label for="">Alamat Pelanggan : </label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" rows= "5" placeholder="Masukkan Alamat Pelanggan" name="alamat_pelanggan"></textarea><br>
                    </div>      
                    <div class="col-md-3">
                        <label for="">Nomor Telepon : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon Pelanggan" name="telp_pelanggan"><br>
                    </div>     
                    <div class="col-md-3">
                        <label for="">Kewarganegaraan : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan"><br>
                    </div>
                    <div class="col-md-3">
                        <label for="">Password Pelanggan : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="password_pelanggan"><br/>
                    </div>
                </div>
            </div>
                <center><button type= "submit" class = "btn btn-warning">SUBMIT</button></center>
        </form>
    </div>
</body>
</html>