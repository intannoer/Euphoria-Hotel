<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Book The Euphoria</title>
<style>
	h2{
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
	<div class="card">
		<div class="card-body">
			<center><h2 class="alert alert-dark">CHECK YOUR BOOKING</h2></center>
			<a class="btn btn-success btn-sm" href="/booking/edit_booking"> + Edit Data Booking Anda</a>
			<div class="form-group"></div>
				<table class="table table-bordered">
				<table class="table table-hover">
					<tr>
						<th scope="col" class="alert alert-dark text-center">KODE BOOKING</th>
						<th scope="col" class="alert alert-dark text-center">NO. IDENTITAS</th>
						<th scope="col" class="alert alert-dark text-center">NAMA LENGKAP</th>
						<th scope="col" class="alert alert-dark text-center">TANGGAL BOOKING</th>
						<th scope="col" class="alert alert-dark text-center">TIPE KAMAR</th>
						<th scope="col" class="alert alert-dark text-center">JUMLAH BOOKING</th>
						<th scope="col" class="alert alert-dark text-center">TANGGAL CHECKIN</th>
						<th scope="col" class="alert alert-dark text-center">TANGGAL CHECKOUT</th>
                        <th scope="col" class="alert alert-dark text-center">TIPE PEMBAYARAN</th>
                        <th scope="col" class="alert alert-dark text-center">KONFIRMASI KAMAR</th>
					</tr>
					@foreach($booking as $boo)
					<tr>
						<td>{{ $boo->kode_booking }}</td>
						<td>{{ $boo->no_identitas }}</td>
						<td>{{ $boo->nama_lengkap }}</td>
						<td>{{ $boo->tgl_booking }}</td>
						<td>{{ $boo->tipe_kamar }}</td>
						<td>{{ $boo->jml_booking }}</td>
						<td>{{ $boo->tgl_checkin }}</td>
						<td>{{ $boo->tgl_checkout }}</td>
                        <td>{{ $boo->tipe_bayar }}</td>
						<td>
			    			<center><a class="btn btn-warning btn-sm text-center" href="/booking/confirm_booking/{{ $boo->kode_booking }}">Konfirmasi</a></center>
							<center><a class="btn btn-danger btn-sm text-center" onclick="return confirm('Yakin untuk dihapus ?')" href="/booking/hapus_booking/{{ $boo->kode_booking }}">Hapus</a></center>
				    	</td>
					</tr>
					@endforeach
				</table>
				</table>

			</div>
		</div>
    </div>
</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
