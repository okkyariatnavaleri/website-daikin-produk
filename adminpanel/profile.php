<?php
require "session.php";
require "../koneksi.php";

$query = mysqli_query($con, "SELECT * FROM user WHERE username = '" . $_SESSION['username'] . "' ");
$user = mysqli_fetch_assoc($query);


if (isset($_POST['simpan'])) {
 $password_lama = $_POST['password_lama'];
 $password_baru = $_POST['password_baru'];
 $konfirmasi_password_baru = $_POST['konfirmasi_password_baru'];

 // Periksa apakah password lama sesuai
 if (password_verify($password_lama, $user['password'])) {
  // Periksa apakah password baru dan konfirmasi password baru cocok
  if ($password_baru === $konfirmasi_password_baru) {
   // Enkripsi password baru
   $password_baru_hash = password_hash($password_baru, PASSWORD_DEFAULT);

   // Update password pengguna
   $update_password = mysqli_query($con, "UPDATE user SET password = '$password_baru_hash' WHERE username = '" . $_SESSION['username'] . "' ");
   if ($update_password) {
    echo "<script>alert('Password berhasil diubah');</script>";
   } else {
    echo "<script>alert('Gagal mengubah password');</script>";
   }
  } else {
   echo "<script>alert('Password baru dan konfirmasi password baru tidak cocok');</script>";
  }
 } else {
  echo "<script>alert('Password lama salah');</script>";
 }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Profile</title>
 <link rel="icon" href="../image/icon_daikin.png" type="png" size="16x16">
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">

</head>

<style>
 .no-decoration {
  text-decoration: none;
 }

 form div {
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
     Profile
    </li>
   </ol>
  </nav>

  <!-- mengganti password -->
  <div class="my-5 col-12 col-md-6">
   <h3>Ganti Password</h3>

   <form action="" method="post">
    <div>
     <label for="username">Username</label>
     <input type="text" id="username" name="username" class="form-control" value="<?php echo $user['username']; ?>" autocomplete="off" readonly>
    </div>
    <label for="password_lama">Password Lama</label>
    <div class="input-group">
     <input type="password" id="password_lama" name="password_lama" class="form-control" autocomplete="off" required>
     <span class="btn " id="show-password-lama"><i id="eye-icon-lama" class="far fa-eye-slash"></i></span>
    </div>
    <label for="password_baru">Password Baru</label>
    <div class="input-group">
     <input type="password" id="password_baru" name="password_baru" class="form-control" autocomplete="off" required>
     <span class="btn" id="show-password-baru"><i id="eye-icon-baru" class="far fa-eye-slash"></i></span>
    </div>
    <label for="konfirmasi_password_baru">Konfirmasi Password Baru</label>
    <div class="input-group">
     <input type="password" id="konfirmasi_password_baru" name="konfirmasi_password_baru" class="form-control" autocomplete="off" required>
     <span id="show-konfirmasi-password-baru" class="btn"> <i id="eye-icon-konfirmasi" class="far fa-eye-slash"></i></span>
     <div id="password-match-error" class="invalid-feedback">
     </div>
    </div>
    <div>
     <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
    </div>
   </form>

  </div>
 </div>

 <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="../fontawesome/js/all.min.js"></script>
 <script>
  function validatePassword() {
   var password = document.getElementById("password_baru").value;
   var confirmPassword = document.getElementById("konfirmasi_password_baru").value;
   var errorDiv = document.getElementById("password-match-error");

   // Periksa apakah kedua password memiliki nilai
   if (password.length > 0 && confirmPassword.length > 0) {
    if (password !== confirmPassword) {
     errorDiv.textContent = "Password baru dan konfirmasi password baru tidak cocok";
     document.getElementById("konfirmasi_password_baru").classList.add("is-invalid");
     return false;
    } else {
     errorDiv.textContent = "";
     document.getElementById("konfirmasi_password_baru").classList.remove("is-invalid");
     document.getElementById("konfirmasi_password_baru").classList.add("is-valid");
     return true;
    }
   } else {
    errorDiv.textContent = ""; // Menghapus pesan kesalahan jika salah satu input masih kosong
    document.getElementById("konfirmasi_password_baru").classList.remove("is-invalid");
    document.getElementById("konfirmasi_password_baru").classList.remove("is-valid");
    return false;
   }
  }

  document.getElementById("konfirmasi_password_baru").addEventListener("keyup", validatePassword);

  // Fungsi untuk menampilkan atau menyembunyikan password
  function togglePasswordVisibility(inputId, eyeIconId) {
   var input = document.getElementById(inputId);
   var eyeIcon = document.getElementById(eyeIconId);
   if (input.type === "password") {
    input.type = "text";
    eyeIcon.classList.remove("fa-eye-slash");
    eyeIcon.classList.add("fa-eye");
   } else {
    input.type = "password";
    eyeIcon.classList.remove("fa-eye");
    eyeIcon.classList.add("fa-eye-slash");
   }

  }
  document.getElementById("show-password-lama").addEventListener("click", function() {
   togglePasswordVisibility("password_lama", "eye-icon-lama");
  });

  document.getElementById("show-password-baru").addEventListener("click", function() {
   togglePasswordVisibility("password_baru", "eye-icon-baru");
  });

  document.getElementById("show-konfirmasi-password-baru").addEventListener("click", function() {
   togglePasswordVisibility("konfirmasi_password_baru", "eye-icon-konfirmasi");
  });
 </script>



</body>

</html>