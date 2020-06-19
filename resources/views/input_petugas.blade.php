<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Input Petugas</title>
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
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/petugas/read_petugas">Petugas</a>
                    <a class="nav-item nav-link active" href="/pelanggan/read_pelanggan">pelanggan</a>
                    <a class="nav-item nav-link active" href="/kamar/read_kamar">Kamar</a>
                    <a class="nav-item nav-link active" href="/pembayaran/read_pembayaran">Pembayaran</a>
                    <a class="nav-item nav-link active" href="/reservasi/read_reservasi">Reservasi</a>
                </div>
            </div>
        </nav>

        <h3 class="alert alert-dark text-center mt-3">TAMBAH DATA PETUGAS</h3>
        <a class = "btn btn-success" href="/petugas/read_petugas"> Kembali</a>
        <br/>
        <br/>

        <form action="/petugas/insert_petugas" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Nama Petugas : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_petugas"><br>
                    </div>
                    <div class="col-md-3">
                        <label for="">Nomor Telepon : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon" name="telp_petugas"><br>
                    </div>
                    <div class="col-md-3">
                        <label>Jenis Kelamin : </label>
                    </div>
                    <div class="col-md-9">
                    <select class="form-control" name="jenis_kelamin">
                            <option value="laki laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                    </select><br>
                    </div><br>
                    <div class="col-md-3">
                        <label for="">Alamat Petugas : </label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" rows= "5" placeholder="Masukkan Alamat" name="alamat_petugas"></textarea><br>
                    </div>                    
                    <div class="col-md-3">
                        <label for="">Jabatan Petugas: </label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-control" name="jabatan_petugas">
                            <option value="Manager">Manager</option>
                            <option value="Receptionist">Receptionist</option>
                            <option value="Room Boy">Room Boy</option>
                            <option value="Waiters">Waiters</option>
                            <option value="Manager">Chef</option>
                            <option value="Customer Service">Customer Service</option>
                            <option value="Security">Security</option>
                        </select><br>
                    </div>
                    <div class="col-md-3">
                        <label for="">Password Petugas : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="password_petugas"><br/>
                    </div>
                </div>
                <center><button type= "submit" class = "btn btn-warning">SUBMIT</button></center>
        </form>
    </div>
</body>
</html>