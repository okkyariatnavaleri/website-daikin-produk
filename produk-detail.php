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
    <?php require "head.php"; ?>

</head>

<body class="dark:bg-slate-900">
    <?php require "navbar.php"; ?>

    <!-- detail produk -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 detail-product-image">
                    <img src="image/<?php echo $produk['foto']; ?>" alt="">
                </div>
                <div class="mt-5 col-lg-7 dark:text-white">
                    <h1><?php echo $produk['nama']; ?></h1>
                    <p class="fs-5">
                        <?php echo htmlspecialchars_decode($produk['deskripsi']); ?>
                    </p>
                </div>

                <div class="mt-5 mb-5 text-center dark:text-white ">
                    <h3 class="mb-3">Spesifikasi</h3>
                    <img src="image/<?php echo $produk['spesifikasi']; ?>" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- produk terkait -->
    <div class="py-5 container-fluid">
        <div class="container">
            <h2 class="mb-5 text-center dark:text-white">Produk Terkait</h2>

            <div class="row">
                <?php while ($data = mysqli_fetch_array($queryProdukTerkait)) { ?>
                    <div class="mb-3 col-md-6 col-lg-3">
                        <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>">
                            <img src="image/<?php echo $data['foto']; ?>" class="shadow img-fluid img-thumbnail produk-terkait-image" alt="">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>
</body>

</html>