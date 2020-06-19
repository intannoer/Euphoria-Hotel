<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Input Pembayaran</title>
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

        <h3 class="alert alert-dark text-center mt-3">TAMBAH DATA PEMBAYARAN</h3>
        <a class = "btn btn-success" href="/petugas/read_petugas"> Kembali</a>
        <br/>
        <br/>

        <form action="/pembayaran/insert_pembayaran" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="">ID Reservasi : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Masukkan ID Reservasi (Boleh Dikosongi)" name="id_reservasi"><br>
                    </div>
                    <div class="col-md-3">
                        <label for="">Tanggal Pembayaran : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="date" class="form-control" name="tgl_pembayaran"><br>
                    </div>
                    <div class="col-md-3">
                        <label>Total Pembayaran : </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Masukkan Total Pembayaran" name="total_pembayaran"><br>
                    </div>
                    <div class="col-md-3">
                        <label for="">Tipe Pembayaran: </label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-control" name="tipe_pembayaran">
                            <option value="Cash">Cash</option>
                            <option value="Transfer">Transfer Bank</option>
                            <option value="Credit">Credit Card</option>
                            <option value="Mbanking">Mobile Banking</option>
                        </select><br>
                    </div>                   
                    <div class="col-md-3">
                        <label for="">Status Pembayaran : </label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-control" name="status_pembayaran">
                            <option value="Lunas">Lunas</option>
                            <option value="Belum">Belum Lunas</option>
                        </select><br>
                    </div>
                </div>
            </div>
                <center><button type= "submit" class = "btn btn-warning">SUBMIT</button></center>
        </form>
    </div>
</body>
</html>