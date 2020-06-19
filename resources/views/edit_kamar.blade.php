<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Edit Kamar</title>
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

        <h3 class="alert alert-dark text-center mt-3">EDIT DATA KAMAR</h3>
        <a class = "btn btn-success" href="/kamar/read_kamar"> Kembali</a>
        <br/>
        <br/>

        @foreach($kamar as $kam)
        <form action="/kamar/update_kamar" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" class="form-control" name="id_kamar" value="{{ $kam->id_kamar }}"><br/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">No Kamar : </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="no_kamar" value="{{ $kam->no_kamar }}"><br/>
                            </div>
                            <div class="col-md-3">
                                <label for="">Jenis Kamar : </label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="jenis_kamar" value="{{ $kam->jenis_kamar }}">
                                    @if($kam->jenis_kamar == "Singularity")
                                            <option value="Singularity" selected>Singularity Room</option>
                                            <option value="Serendipity">Serendipity Room</option>
                                            <option value="Epiphany">Epiphany Room</option>
                                    @elseif($kam->jenis_kamar == "Serendipity")
                                            <option value="Singluarity">Singularity Room</option>
                                            <option value="Serendipity" selected>Serendipity Room</option>
                                            <option value="Epiphany">Epiphany Room</option>
                                    @else
                                        <option value="Singluarity">Singularity Room</option>
                                        <option value="Serendipity">Serendipity Room</option>
                                        <option value="Epiphany" selected>Epiphany Room</option>
                                    @endif
                                </select><br>
                            </div>
                            <div class="col-md-3">
                                <label for="inputGambar">Gambar : </label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="gambar" id="inputGambar" value="{{ $kam->gambar }}"><br>
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
