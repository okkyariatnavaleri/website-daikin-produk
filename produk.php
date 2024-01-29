<?php 
    require "koneksi.php";

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");


    // get produk by nama produk/produk
    if(isset($_GET['produk'])){
        $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama LIKE '%$_GET[produk]%'");
    }
    // get produk by Produk
    else if(isset($_GET['produk'])){
        $queryProduk = mysqli_query($con, "SELECT id FROM produk WHERE nama='$_GET[produk]'");
       
    }
    // get produk by kategori
    else if(isset($_GET['kategori'])){
        $queryGetKategoriId = mysqli_query($con, "SELECT id FROM kategori WHERE nama='$_GET[kategori]'");
        $kategoriId = mysqli_fetch_array($queryGetKategoriId);
        
        $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$kategoriId[id]'");
    }    
    // get produk default
    else{
        $queryProduk = mysqli_query($con, "SELECT * FROM produk");
    }

    $countData = mysqli_num_rows($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daikin | Produk</title>
    <link rel ="icon" href="image/icon_daikin.png" type="png" size="16x16">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner-produk d-flex align-items-center">
        <div class="container">
            <h1 class="text-white text-center">Produk</h1>
        </div>
    </div>

    <!-- body -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 mb-5">
                <h3 class="mb-3">Kategori</h3>
                <ul class="list-group shadow">
                    <?php while($kategori = mysqli_fetch_array($queryKategori)){ ?>
                        <li class="list-group-item">
                            <a class="no-decoration" href="produk.php?kategori=<?php echo $kategori['nama']; ?>">
                                <?php echo $kategori['nama']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <h3 class="text-center mb-3">Produk</h3>
                <div class="row">
                    <?php 
                        if($countData<1){
                    ?>
                        <h4 class="text-center my-5">Produk yang anda cari tidak tersedia</h4>
                    <?php         
                        }
                    ?>

<?php
function truncateDescription($description, $length = 100, $append = '...') {
    $description = trim($description);
    if (strlen($description) > $length) {
        $description = substr($description, 0, $length);
        $description = substr($description, 0, strrpos($description, ' '));
        $description .= $append;
    }
    return $description;
}

while($produk = mysqli_fetch_array($queryProduk)) {
    $produkDeskripsi = htmlspecialchars_decode($produk['deskripsi']);
    $truncatedDeskripsi = truncateDescription($produkDeskripsi, 70); 

    ?>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
            <div class="image-box">
                <img src="image/<?php echo $produk['foto']; ?>" alt="...">
            </div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $produk['nama']; ?></h4>
                <p class="card-text text-truncate"><?php echo $truncatedDeskripsi; ?></p>
                <a href="produk-detail.php?nama=<?php echo $produk['nama']; ?>" class="btn text-white">Lihat Detail</a>
            </div>
        </div>
    </div>
<?php } ?>

                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>
   
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>