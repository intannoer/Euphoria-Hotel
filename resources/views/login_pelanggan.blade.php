<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login Pelanggan</title>
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
                    <a class="nav-item nav-link active" href="/home">HOME</a>
                    <a class="nav-item nav-link active" href="/about_us">ABOUT US</a>
                    <a class="nav-item nav-link active" href="/daftar_kamar">ROOMS</a>
                    <a class="nav-item nav-link active" href="/fasilitas">FACILITY</a>
                </div>
            </div>
        </nav>

        <h3 class="alert alert-dark text-center mt-3">LOGIN PELANGGAN</h3>
        <br/>
        <br/>

        <form action="/pelanggan/confirm_pelanggan" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nomor Telefon : </label>
                <input type="text" class="form-control" id="" placeholder="Nomor Telefon" name="username" required><br/>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Password" name="password" required><br/>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">Remember me</label><br/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <p>{{ $pesan_login }}</p>
        <div class="tulisan-login">
            <p class="isi-tulisan-login">Belum punya akun? <a href="/pelanggan/regis_pelanggan">REGISTER</a></p>
        </div>
    </div>
</body>
</html>
