<?php 
    require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daikin | Home</title>
    <link rel ="icon" href="image/icon_daikin.png" type="png" size="16x16">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <!--banner-->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-white">
            <h1>Daikin Airconditioning Indonesia</h1>
            <h3>AC Kelas Dunia</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-5">
                        <input type="text" class="form-control" placeholder="Tipe unit" aria-label="Recipient's username" aria-describedby="basic-addon2" name="produk" required>
                        <button type="submit" class="btn btn-primary">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--highlighted Produk terlaris-->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-breeze-series">
                        <h4><a class="no-decoration" href="produk.php?produk=BREEZE Series">Breeze Series</a></h4>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-ftv-series">
                        <h4><a class="no-decoration" href="produk.php?produk=FTV Series">FTV Series</a></h4>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-ftc-series">
                        <h4><a class="no-decoration" href="produk.php?produk=FTC Series">FTC Series</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Tentang kami-->
    <div class="container-fluid warna1 py-5">
        <div class="container text-center">
            <h3>PT. Mellisa Lestari Sinergi</h3>
            <p class="fs-5 mt-3">
                Kini Perusahaan kami dipercaya untuk menjadi Dealer Resmi
                PT. DAIKIN AIRCONDITIONING INDONESIA, sebagai pusat Penjualan AC
                dan Penyedia Sparepart resmi. Selain Penyedia unit AC, kami juga
                menawarkan Jasa Pemasangan dan Pemeliharaan AC dengan harga
                terbaik.
                <br><br>
                Jl. Lembah Damai No. 35 Kel. Lembah Damai,
                <br>
                Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28263
                <br><br>
                Telepon: +62-822-6886-4800
            </p>
                <br>
        </div>
    </div>
        
   <!--footer--> 
   <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>