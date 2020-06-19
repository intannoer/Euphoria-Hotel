<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Data Reservasi</title>
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
				<a class="nav-item nav-link disable" href="/reservasi/read_reservasi">Reservasi</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<center><h2 class="alert alert-dark"> TABEL RESERVASI </h2></center>
				<a class="btn btn-success btn-sm" href="/reservasi/input_reservasi"> + Tambah Reservasi Baru</a>
				<div class="form-group"></div>
					<table class="table table-bordered">
					<table class="table table-hover">
						<tr>
							<th scope="col" class="alert alert-dark text-center">ID RESERVASI</th>
							<th scope="col" class="alert alert-dark text-center">ID PETUGAS</th>
							<th scope="col" class="alert alert-dark text-center">NOMOR IDENTITAS</th>
							<th scope="col" class="alert alert-dark text-center">ID PEMBAYARAN</th>
							<th scope="col" class="alert alert-dark text-center">ID KAMAR</th>
							<th scope="col" class="alert alert-dark text-center">TANGGAL RESERVASI</th>
							<th scope="col" class="alert alert-dark text-center">JUMLAH RESERVASI</th>
							<th scope="col" class="alert alert-dark text-center">TANGGAL CHECKIN</th>
							<th scope="col" class="alert alert-dark text-center">TANGGAL CHECKOUT</th>
							<th scope="col" class="alert alert-dark text-center"> ACTION</th>
						</tr>
						@foreach($reservasi as $res)
						<tr>
							<td>{{ $res->id_reservasi }}</td>
							<td>{{ $res->id_petugas }}</td>
							<td>{{ $res->nomor_identitas }}</td>
							<td>{{ $res->id_pembayaran }}</td>
							<td>{{ $res->id_kamar }}</td>
							<td>{{ $res->tgl_reservasi }}</td>
							<td>{{ $res->jumlah_reservasi }}</td>
							<td>{{ $res->tgl_checkin }}</td>
							<td>{{ $res->tgl_checkout }}</td>
							<td>
								<center><a class="btn btn-warning btn-sm text-center" href="/reservasi/edit_reservasi/{{ $res->id_reservasi }}">Edit</a></center>
								<center><a class="btn btn-danger btn-sm text-center" onclick="return confirm('Yakin untuk dihapus ?')" href="/reservasi/hapus_reservasi/{{ $res->id_reservasi }}">Hapus</a></center>								
							</td>
						</tr>
						@endforeach
					</table>
					</table>

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>