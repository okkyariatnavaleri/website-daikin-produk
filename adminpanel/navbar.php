<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <style>
            .navbar-brand{
                max-width: 200px; 
                height: auto;
                margin-left: 20px;
            }

            .navbar-nav .nav-link {
                font-weight: bold;
            }

            .navbar-nav .nav-link.active,
            .navbar-nav .nav-link.active:focus,
            .navbar-nav .nav-link.active:hover,
            .navbar-nav .nav-link.active:visited {
                color: #0d6efd;
            }

            .nav-link:active {
                transform: translateY(2px); /* Efek ketika tombol ditekan */
            }

        </style>
        <nav class="navbar-brand">
        <img class="navbar-brand" src="../image/logo_i_shop_putih.png" alt="navbar-brand" />

        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-4 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?> " href="../adminpanel">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4 <?php echo basename($_SERVER['PHP_SELF']) == 'kategori.php' ? 'active' : ''; ?>" href="kategori.php">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4 <?php echo basename($_SERVER['PHP_SELF']) == 'produk.php' ? 'active' : ''; ?>" href="produk.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4 <?php echo basename($_SERVER['PHP_SELF']) == 'logout.php' ? 'active' : ''; ?>" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>