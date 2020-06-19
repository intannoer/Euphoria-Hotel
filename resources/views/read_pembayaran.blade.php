<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Data Pembayaran</title>
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
				<a class="nav-item nav-link disable" href="/pembayaran/read_pembayaran">Pembayaran</a>
				<a class="nav-item nav-link active" href="/reservasi/read_reservasi">Reservasi</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<center><h2 class="alert alert-dark"> TABEL PEMBAYARAN </h2></center>
				<a class="btn btn-success btn-sm" href="/pembayaran/input_pembayaran"> + Tambah Data Pembayaran Baru</a>
				<div class="form-group"></div>
					<table class="table table-bordered">
					<table class="table table-hover">
						<tr>
							<th scope="col" class="alert alert-dark text-center">ID PEMBAYARAN</th>
							<th scope="col" class="alert alert-dark text-center">ID RESERVASI</th>
							<th scope="col" class="alert alert-dark text-center">TANGGAL PEMBAYARAN</th>
							<th scope="col" class="alert alert-dark text-center">TOTAL PEMBAYARAN</th>
							<th scope="col" class="alert alert-dark text-center">TIPE PEMBAYARAN</th>
							<th scope="col" class="alert alert-dark text-center">STATUS PEMBAYARAN</th>
							<th scope="col" class="alert alert-dark text-center">SISA PEMBAYARAN</th>
							<th scope="col" class="alert alert-dark text-center">ACTION</th>
						</tr>
						@foreach($pembayaran as $pem)
						<tr>
							<td>{{ $pem->id_pembayaran }}</td>
							<td>{{ $pem->id_reservasi }}</td>
							<td>{{ $pem->tgl_pembayaran }}</td>
							<td>{{ $pem->total_pembayaran }}</td>
							<td>{{ $pem->tipe_pembayaran }}</td>
							<td>{{ $pem->status_pembayaran }}</td>
							<td>{{ $pem->id_reservasi }}</td>
							<td>
								<center><a class="btn btn-warning btn-sm text-center" href="/pembayaran/edit_pembayaran/{{ $pem->id_pembayaran }}">Edit</a></center>
								<center><a class="btn btn-danger btn-sm text-center" onclick="return confirm('Yakin untuk dihapus ?')" href="/pembayaran/hapus_pembayaran/{{ $pem->id_pembayaran }}">Hapus</a></center>							
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
