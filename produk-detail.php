<?php 
    require "koneksi.php";

    $nama = htmlspecialchars($_GET['nama']);
    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama='$nama'");
    $produk = mysqli_fetch_array($queryProduk);

    $queryProdukTerkait = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$produk[kategori_id]' AND id!='$produk[id]' LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daikin | Detail Produk</title>
    <link rel ="icon" href="image/icon_daikin.png" type="png" size="16x16">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- detail produk -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 detail-product-image">
                    <img src="image/<?php echo $produk['foto']; ?>" alt="">
                </div>
                <div class="col-lg-7 mt-5">
                    <h1><?php echo $produk['nama']; ?></h1>
                    <p class="fs-5">
                        <?php echo htmlspecialchars_decode($produk['deskripsi']); ?>
                    </p>
                </div>

                <div class="text-center mt-5 mb-5">
                    <h3 class="mb-3">Spesifikasi</h3>
                    <img src="image/<?php echo $produk['spesifikasi']; ?>" class="w-100" alt=""> 
                </div>
            </div>
        </div>
    </div>

    <!-- produk terkait -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center text-dark mb-5">Produk Terkait</h2>
            
            <div class="row">
                <?php while($data=mysqli_fetch_array($queryProdukTerkait)){ ?>
                <div class="col-md-6 col-lg-3 mb-3">
                    <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>">
                        <img src="image/<?php echo $data['foto']; ?>" class="img-fluid img-thumbnail produk-terkait-image shadow" alt="">
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>
    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>