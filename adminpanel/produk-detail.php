<?php 
    require "session.php";
    require "../koneksi.php";

    $id = $_GET['p'];

    $query = mysqli_query($con, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a.kategori_id=b.id WHERE a.id='$id'");
    $data = mysqli_fetch_array($query);

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori WHERE id!='$data[kategori_id]'");

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
    <title>Produk Detail</title>
    <link rel ="icon" href="../image/icon_daikin.png" type="png" size="16x16">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<style>
    form div{
        margin-bottom: 10px;
    }
    p{
        margin-bottom: 0px;
    }
</style>

<body>
    <?php require "navbar.php"; ?>

    <div class="container mt-5">
    <h2>Detail Produk</h2>

        <div class="col-12 col-md-6" >
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" autocomplete="off" required >
                </div>

                <div>
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="<?php echo $data['kategori_id']; ?>"><?php echo $data['nama_kategori']; ?></option>
                        <?php 
                        while($dataKategori=mysqli_fetch_array($queryKategori)){
                        ?>
                            <option value="<?php echo $dataKategori['id']; ?>"><?php echo $dataKategori['nama']; ?></option>
                        <?php 
                        }
                        ?>
                    </select>
                </div>

                <div >
                    <p><label for="currentFoto">Foto Produk Sekarang</label></p>
                   <img src="../image/<?php echo $data['foto']; ?>" alt="" width="300px">
                </div>

                <div>
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" >
                </div>

                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" required>
                        <?php echo $data['deskripsi']; ?>
                    </textarea>
                </div>

                <div >
                    <p><label for="currentSpesifikasi">Spesifikasi Produk Sekarang</label></p>
                   <img src="../image/<?php echo $data['spesifikasi']; ?>" alt="" width="700px">
                </div>

                <div>
                    <label for="spesifikasi">Spesifikasi</label>
                    <input type="file" name="spesifikasi" id="spesifikasi" class="form-control" >
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
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
                        $queryUpdate = mysqli_query($con, "UPDATE produk SET kategori_id='$kategori', nama='$nama', deskripsi='$deskripsi' WHERE id=$id");

                        if($nama_file!=''){
                            if($image_size > 3000000){ //dalam satuan byte
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

                                    $queryUpdate = mysqli_query($con, "UPDATE produk SET foto='$new_name', spesifikasi='$new2_name' WHERE id='$id'");

                                    if($queryUpdate){
            ?>
                                        <div class="alert alert-primary mt-3" role="alert">
                                            Produk Berhasil Diupdate
                                        </div>
                                        <meta http-equiv="refresh" content="2; url=produk.php" />
            <?php
                                    }
                                    else{
                                        echo mysqli_error($con);
                                    }
                                }
                            }
                        }
                    }
                }

                if(isset($_POST['delete'])){
                    $queryHapus = mysqli_query($con, "DELETE FROM produk WHERE id='$id'");

                    if($queryHapus){
            ?>
                            <div class="alert alert-primary mt-3" role="alert">
                                Produk Berhasil Dihapus
                            </div>
                            
                            <meta http-equiv="refresh" content="2; url=produk.php" />
            <?php
                    }
                }
            ?>
        </div>
    </div>
 
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#deskripsi' ) )
            .catch( error => {
                console.error( error );
            } 
            );
    </script>
 
</body>
</html>