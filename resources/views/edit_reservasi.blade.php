<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Edit Reservasi</title>
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
    <h3 class="alert alert-dark text-center mt-3">EDIT DATA RESERVASI</h3>

    <a class = "btn btn-success" href="/reservasi/read_reservasi"> Kembali</a>

    <br/>
    <br/>
    @foreach($reservasi as $res)
    <form action="/reservasi/update_reservasi" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="id_reservasi" value="{{ $res->id_reservasi }}"><br/>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">ID Petugas : </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="id_petugas" value="{{ $res->id_petugas}}"><br/>
                        </div>
                        <div class="col-md-3">
                            <label for="">Nomor Identitas : </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nomor_identitas" value="{{ $res->nomor_identitas}}"><br/>
                        </div>
                        <div class="col-md-3">
                            <label for="">ID Pembayaran : </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="id_pembayaran" placeholder="(Boleh Dikosongi)" value="{{ $res->id_pembayaran}}"><br/>
                        </div>
                        <div class="col-md-3">
                            <label for="">ID Kamar : </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="id_kamar" value="{{ $res->id_kamar}}"><br/>
                        </div>
                        <div class="col-md-3">
                            <label for="">Tanggal Reservasi : </label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="tgl_reservasi" value="{{ $res->tgl_reservasi}}"><br/>
                        </div>
                        <div class="col-md-3">
                            <label for="">Jumlah Reservasi : </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="jumlah_reservasi" value="{{ $res->jumlah_reservasi}}"><br/>
                        </div>
                        <div class="col-md-3">
                            <label for="">Tanggal Check In : </label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="tgl_checkin" value="{{ $res->tgl_checkin}}"><br/>
                        </div>
                        <div class="col-md-3">
                            <label for="">Tanggal Checkout : </label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" class="form-control" name="tgl_checkout" value="{{ $res->tgl_checkout}}"><br/>
                        </div>
                    </div>
                </div>
            <center><button type= "submit" class = "btn btn-warning">SUBMIT</button></center>
        </div>
    </form>
    @endforeach
</div>
</body>
</html>