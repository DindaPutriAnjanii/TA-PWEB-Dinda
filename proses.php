<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>Warung Makan Kehidupink</title>
  </head>
  <body>
  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">WARUNG MAKAN KEHIDUPINK</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silahkan Pesan Menu Sesuai Keinginan Anda <br> 
          Selamat Menikmati!</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="index.html"><strong>Warung</strong> Makan Kehidupink</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.html">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.html">PESAN</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

      <?php
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];

$filename = 'pesanan.txt';
	if (isset($_POST['Pilih'])) {
		echo "Pesanan Anda : <br>";
		echo "Nama Pembeli		: $nama<br>"; 
		echo "No Meja			: $jumlah<br>";
		if (isset($_POST['mkn1'])) {
			echo" ".$_POST['mkn1'] ."<br>"	;	}
		if (isset($_POST['mkn2'])) {
			echo" ".$_POST['mkn2'] ."<br>"	;	}
		if (isset($_POST['mkn3'])) {
			echo" ".$_POST['mkn3'] ."<br>"	;	}
		if (isset($_POST['mkn4'])) {
			echo" ".$_POST['mkn4'] ."<br>"	;	}
		if (isset($_POST['mkn5'])) {
			echo" ".$_POST['mkn5'] ."<br>"	;	}
		if (isset($_POST['mkn6'])) {
			echo" ".$_POST['mkn6'] ."<br>"	;	}
		if (isset($_POST['mkn7'])) {
			echo" ".$_POST['mkn7'] ."<br>"	;	}
		if (isset($_POST['mkn8'])) {
			echo" ".$_POST['mkn8'] ."<br>"	;	}
		if (isset($_POST['mkn9'])) {
			echo" ".$_POST['mkn9'] ."<br>"	;	}
		if (isset($_POST['mkn10'])) {
			echo" ".$_POST['mkn10'] ."<br>"	;	}
		if (isset($_POST['mkn11'])) {
			echo" ".$_POST['mkn11'] ."<br>"	;	}
		if (isset($_POST['mkn12'])) {
			echo" ".$_POST['mkn12'] ."<br>"	;	}
		}

exit;
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>
