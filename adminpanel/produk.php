<?php 
    require "session.php";
    require "../koneksi.php";

    $query = mysqli_query($con, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a.kategori_id=b.id");
    $jumlahProduk = mysqli_num_rows($query);

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel ="icon" href="../image/icon_daikin.png" type="png" size="16x16">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>

<style>
    .no-decoration{
        text-decoration: none;
    }
    form div{
        margin-bottom: 10px;
    }
</style>

<body>
    <?php require "navbar.php"; ?>

    <div class="container mt-5"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="../adminpanel" class="no-decoration text-muted"> 
                    <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Produk
                </li>
            </ol>
        </nav>

        <!-- tambah produk -->
        <div class="my-5 col-12 col-md-6">
            <h3>Tambah Produk</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" required >
                </div>

                <div>
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="">Pilih Satu</option>
                        <?php 
                        while($data=mysqli_fetch_array($queryKategori)){
                        ?>
                            <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                        <?php 
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" >
                </div>

                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" required></textarea>
                </div>

                <div>
                    <label for="spesifikasi">Spesifikasi</label>
                    <input type="file" name="spesifikasi" id="spesifikasi" class="form-control" >
                </div>

                <div>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </form>
            
            <?php 
                if(isset($_POST['simpan'])){
                    $nama = htmlspecialchars($_POST['nama']);
                    $kategori = htmlspecialchars($_POST['kategori']);
                    $deskripsi = htmlspecialchars($_POST['deskripsi']);
                    $target_dir = "../image/";
                    $nama_file = basename($_FILES["foto"]["name"]);
                    $target_file = $target_dir . $nama_file;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $image_size = $_FILES["foto"]["size"];
                    $random_name = generateRandomString(20);
                    $new_name = $random_name . "." . $imageFileType;
                    
                    $target_dir = "../image/";
                    $nama_file = basename($_FILES["spesifikasi"]["name"]);
                    $target_file = $target_dir . $nama_file;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $image_size = $_FILES["spesifikasi"]["size"];
                    $random_name = generateRandomString(20);
                    $new2_name = $random_name . "." . $imageFileType;

                    if($nama=='' || $kategori=='' || $deskripsi==''){
            ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Nama, kategori, dan deskripsi wajib diisi
                        </div>
            <?php
                    }
                    else{
                        if($nama_file!=''){
                            if($image_size > 3000000){ // dalam satuan byte
            ?>
                            <div class="alert alert-warning mt-3" role="alert">
                                File tidak boleh lebih dari 3 MB
                            </div>
            <?php 
                            }
                            else{
                                if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif'){
            ?>
                            <div class="alert alert-warning mt-3" role="alert">
                                File wajib bertipe jpg, png, atau gif
                            </div>
            <?php 
            
                                }
                                else{
                                    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $new_name);
                                    move_uploaded_file($_FILES["spesifikasi"]["tmp_name"], $target_dir . $new2_name);
                                }
                            }
                        }

                        //query insert to produk table
                        $queryTambah = mysqli_query($con, "INSERT INTO produk (kategori_id, nama, foto, deskripsi, spesifikasi) VALUES ('$kategori', '$nama', '$new_name', '$deskripsi', '$new2_name')");

                        if($queryTambah){
            ?>
                            <div class="alert alert-primary mt-3" role="alert">
                                Produk Berhasil Tersimpan
                            </div>
                            <meta http-equiv="refresh" content="2; url=produk.php" />
            <?php 
                        }
                        else{
                            echo mysqli_error($con);
                        }
                    }
                }
            ?>
        </div>

        <div class="mt-3 mb-5">
            <h2>List Produk</h2>

            <div class="table-responsive mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($jumlahProduk==0){
                        ?>
                            <tr>
                                <td colspan=4 class="text-center">Data produk tidak tersedia</td>
                            </tr>
                        <?php
                            }
                            else{
                                $jumlah = 1;
                                while($data=mysqli_fetch_array($query)){
                        ?>
                                <tr>
                                    <td><?php echo $jumlah; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['nama_kategori']; ?></td>
                                    <td>
                                        <a href="produk-detail.php?p=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fas fa-search"></i></a>
                                    </td>
                                </tr>
                        <?php 
                                $jumlah++;
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
   
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .then(editor => {
                // Logika untuk mengupdate nilai textarea saat konten berubah
                editor.model.document.on('change:data', () => {
                    const deskripsi = document.querySelector('#deskripsi');
                    deskripsi.value = editor.getData(); // Menyimpan konten editor ke textarea
                });
            })
            .catch(error => {
                console.error(error);
            });

        // Fungsi untuk menangani pengiriman form
        function handleFormSubmit() {
            const deskripsi = document.querySelector('#deskripsi');
            deskripsi.value = editor.getData(); // Menyimpan konten editor ke textarea sebelum form dikirim
            return true; // Lanjutkan pengiriman form
        }
    </script>
   
</body>
</html>