<html>
  <!-- Header -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Layanan Pengaduan Pelanggan</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container">
    <a class="navbar-brand" href="index.php">Layanan Pengaduan Pelanggan<t</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="main_navbar">
      <ul class="navbar-nav">
        <li class="nav-item">
         	<a class="nav-link" href="index.php?page=registrasi">Daftar Akun</a>
        </li>
         <li class="nav-item">
         	<a class="nav-link" href="index.php?page=login">Login</a>
        </li>
    </div>
  </div>
</nav>

<!--Untuk Switch Halaman-->
<!-- Untuk Tampilan Registrasi-->
<div class="row mt-3">
	<div class="col-md-4 offset-md-4">
		<div class="card">
			<div class="card-header bg-warning">
				REGISTRASI
			</div>
			<div class="card-body">
				<form action="" method="POST">
					<div class="mb-3">
						<label class="form-label">NIK</label>
						<input type="number" class="form-control" name="nik" placeholder="Masukkan NIK" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
					</div>
					<div class="mb-3">
						<label class="form-label">No. Telp</label>
						<input type="number" class="form-control" name="telp" placeholder="Masukkan No. Telpon" required>
					</div>
			</div>
			<div class="card-footer">
				<button type="submit" name="kirim" class="btn btn-outline-success">Daftar</button>
				<a href="index.php?page=login" class="m-3">Sudah memiliki akun? Login di sini!</a>
			</div>
		</form>
		</div>
	</div>
</div>

<!-- Buat CRUD Tambah -->
<!-- Footer -->
<footer class="footer py-2 bg-light fixed-bottom">
	<div class="container">
		<p class="text-center">Mas obii | Sumedang Jaya| 081223004572</p>
	</div>
</footer>
 
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>