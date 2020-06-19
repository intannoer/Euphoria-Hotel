<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Book The Euphoria!</title>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <a class="navbar-brand" href="/home">EUPHORIA HOTEL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto"></ul>
        <div class="navbar-nav">
            <a class="dropdown-item" href="/about_us">About Us</a>
            <a class="dropdown-item" href="/daftar_kamar">Daftar Kamar</a>
            <a class="dropdown-item" href="/fasilitas">Fasilitas</a>
            <a class="dropdown-item disabled" href="/booking/input_booking">Booking Sekarang</a>
        </div>
      </div>
    </nav>
    <h3 class="alert alert-dark text-center mt-3">BOOK YOUR EUPHORIA</h3>
    <br/>
    <br/>
    <form action="/booking/insert_booking" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Nomor Identitas : </label>
                    </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Masukkan No Identitas" name="no_identitas" required> <br>
                </div>
                <div class="col-md-3">
                    <label for="">Nama Lengkap : </label>
                    </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda" name="nama_lengkap" required><br/>
                </div>
                <div class="col-md-3">
                    <label for="">Tanggal Booking : </label>
                </div>
                <div class="col-md-9">
                    <input type="Date" class="form-control" name="tgl_booking" required><br/>
                </div>
                <div class="col-md-3">
                    <label for="">Tipe Kamar : </label>
                </div>
                <div class="col-md-9">
                    <select class="form-control" name="tipe_kamar" required>
                        <option value="Singularity">Singularity Room</option>
                        <option value="Serendipity">Serendipity Room</option>
                        <option value="Epiphany">Epiphany Room</option>
                    </select><br>
                </div>
                <div class="col-md-3">
                    <label for="">Jumlah Booking : </label>
                </div>
                <div class="col-md-9">
                    <input type="number" class="form-control" placeholder="Masukkan Jumlah Booking"
                    name="jml_booking" required><br/>
                </div>
                <div class="col-md-3">
                    <label for="">Tanggal Check In : </label>
                </div>
                <div class="col-md-9">
                    <input type="date" class="form-control" name="tgl_checkin" required><br/>
                </div>
                <div class="col-md-3">
                    <label for="">Tanggal Checkout : </label>
                </div>
                <div class="col-md-9">
                    <input type="date" class="form-control" name="tgl_checkout" required><br/>
                </div>
                <div class="col-md-3">
                    <label for="">Tipe Pembayaran: </label>
                </div>
                <div class="col-md-9">
                    <select class="form-control" name="tipe_bayar" required>
                        <option value="Cash">Cash</option>
                        <option value="Transfer">Transfer Bank</option>
                        <option value="Credit">Credit Card</option>
                        <option value="Mbanking">Mobile Banking</option>
                    </select><br>
                </div>
            </div>
            <center><button type= "submit" class = "btn btn-warning">BOOK</button></center>
        </div>
    </form>
</div>
</body>
</html>
