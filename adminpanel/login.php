<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daikin Login</title>
    <link rel ="icon" href="../image/icon_daikin.png" type="png" size="16x16">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-sm-8 col-md-6 col-lg-4 ">
                <div class="card shadow" style="border-radius: 15px">
                    <div class="card-body p-4">
                        <form action="" method="post">
                            <div class="text-center mb-4">
                                <img src="../image/logo_daikin.png" alt="Logo" class="img-fluid" style="max-width: 200px;">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" type="submit" name="loginbtn">Login</button>
                            </div>
                        </form>
                        <?php 
                            if(isset($_POST['loginbtn'])){
                                $username = htmlspecialchars($_POST['username']);
                                $password = htmlspecialchars($_POST['password']);
                                
                                $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
                                $countdata = mysqli_num_rows($query);
                                $data = mysqli_fetch_array($query);

                                if($countdata>0){
                                    if (password_verify($password, $data['password'])){
                                        $_SESSION['username'] = $data['username'];
                                        $_SESSION['login'] = true;
                                        header('location: ../adminpanel');
                                    }
                                    else{
                                        ?>
                                        <div class="alert alert-warning mt-3" role="alert">
                                            Password salah
                                        </div>
                                        <?php    
                                    }
                                    
                                }
                                else{
                                    ?>
                                    <div class="alert alert-warning mt-3" role="alert">
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
</body>
</html>
