<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style>
	h2{
	font-family: Georgia, serif;
	}
    </style>
</head>
<body>
		<div class="card">
			<div class="card-body">
				<center><h2 class="alert alert-dark"> TABEL PETUGAS</h2></center>
			        <div class="form-group"></div>
                        <table class="table table-bordered">
                        <table class="table table-hover">
                            <tr>
                                <th scope="col" class="alert alert-dark text-center">ID PETUGAS</th>
                                <th scope="col" class="alert alert-dark text-center">NAMA PETUGAS</th>
                                <th scope="col" class="alert alert-dark text-center">JENIS KELAMIN</th>
                                <th scope="col" class="alert alert-dark text-center">JABATAN PETUGAS</th>
                                <th scope="col" class="alert alert-dark text-center">NO.TLP PETUGAS</th>
                                <th scope="col" class="alert alert-dark text-center">ALAMAT PETUGAS</th>
                                <th scope="col" class="alert alert-dark text-center">PASSWORD PETUGAS</th>
                            </tr>
                            @foreach($petugas as $pet)
                            <tr>
                                <td>{{ $pet->id_petugas }}</td>
                                <td>{{ $pet->nama_petugas }}</td>
                                <td>{{ $pet->jenis_kelamin }}</td>
                                <td>{{ $pet->jabatan_petugas }}</td>
                                <td>{{ $pet->notelp_petugas }}</td>
                                <td>{{ $pet->alamat_petugas }}</td>
                                <td>{{ $pet->password_petugas }}</td>
                            </tr>
                            @endforeach
                        </table>
                        </table>
            </div>
		</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>