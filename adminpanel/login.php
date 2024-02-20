<?php
session_start();
require "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daikin Login</title>
    <link rel="icon" href="../image/icon_daikin.png" type="png" size="16x16">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9068109a15.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-sm-8 col-md-6 col-lg-4 ">
                <div class="shadow card" style="border-radius: 15px">
                    <div class="p-4 card-body">
                        <form action="" method="post">
                            <div class="mb-4 text-center">
                                <img src="../image/logo_daikin.png" alt="Logo" class="img-fluid" style="max-width: 200px;">
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <label for="password" class="form-label">Password</label>
                            <div class="mb-3 input-group">
                                <input type="password" class="form-control" name="password" id="password">
                                <span class="btn" id="show-password"><i id="eye-icon-baru" class="far fa-eye-slash"></i></span>
                            </div>
                            <div class="gap-2 d-grid">
                                <button class="btn btn-success" type="submit" name="loginbtn">Login</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['loginbtn'])) {
                            $username = htmlspecialchars($_POST['username']);
                            $password = htmlspecialchars($_POST['password']);

                            $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
                            $countdata = mysqli_num_rows($query);
                            $data = mysqli_fetch_array($query);

                            if ($countdata > 0) {
                                if (password_verify($password, $data['password'])) {
                                    $_SESSION['username'] = $data['username'];
                                    $_SESSION['login'] = true;
                                    header('location: ../adminpanel');
                                } else {
                        ?>
                                    <div class="mt-3 alert alert-warning" role="alert">
                                        Password salah
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <div class="mt-3 alert alert-warning" role="alert">
                                    Akun tidak tersedia
                                </div>
                        <?php

                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
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
        document.getElementById("show-password").addEventListener("click", function() {
            togglePasswordVisibility("password", "eye-icon-lama");
        });
    </script>
</body>

</html>