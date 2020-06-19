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
            <a class="dropdown-item" href="/daftar_booking">Daftar booking</a>
            <a class="dropdown-item" href="/fasilitas">Fasilitas</a>
            <a class="dropdown-item disabled" href="/booking/input_booking">Booking Sekarang</a>
        </div>
      </div>
    </nav>
    <h3 class="alert alert-dark text-center mt-3">CONFIRM YOUR EUPHORIA</h3>
    <br/>
    @foreach($booking as $boo)
    <form action="/booking/confirm" method="get">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Nomor Identitas : </label>
                    </div>
                <div class="col-md-9">
                    {{ $boo->no_identitas }} <br> <br>
                </div>
                <div class="col-md-3">
                    <label for="">Nama Lengkap : </label>
                    </div>
                <div class="col-md-9">
                    {{ $boo->nama_lengkap }} <br> <br>
                </div>
                <div class="col-md-3">
                    <label for="">Tanggal Booking : </label>
                </div>
                <div class="col-md-9">
                    {{ $boo->tgl_booking }} <br><br>
                </div>
                <div class="col-md-3">
                    <label for="">Tipe booking : </label>
                </div>
                <div class="col-md-9">
                   {{ $boo->tipe_kamar }} <br> <br>

                </div>
                <div class="col-md-3">
                    <label for="">Jumlah Booking : </label>
                </div>
                <div class="col-md-9">
                    {{ $boo->jml_booking }} <br> <br>
                </div>
                <div class="col-md-3">
                    <label for="">Tanggal Check In : </label>
                </div>
                <div class="col-md-9">
                    {{ $boo->tgl_checkin }} <br> <br>
                </div>
                <div class="col-md-3">
                    <label for="">Tanggal Checkout : </label>
                </div>
                <div class="col-md-9">
                    {{ $boo->tgl_checkout }}<br><br>
                </div>
                <div class="col-md-3">
                    <label for="">Tipe Pembayaran: </label>
                </div>
                <div class="col-md-9">
                   {{ $boo->tipe_bayar }}<br><br>
                </div>
            </div>
            <center><button type= "submit" class = "btn btn-warning" >Confirm</button></center>

        </div>
    </form>
    @endforeach
</div>

</body>
</html>
