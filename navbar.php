<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <style>
            .navbar-brand{
                max-width: 200px; 
                height: auto;
                margin-left: 20px;
            }

            .navbar-nav{
                white-space: nowrap;

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
        <img class="navbar-brand" src="image/logo_i_shop_putih.png" alt="navbar-brand" />

        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-4 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4 <?php echo basename($_SERVER['PHP_SELF']) == 'produk.php' ? 'active' : ''; ?>" href="produk.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4 <?php echo basename($_SERVER['PHP_SELF']) == 'tentang-kami.php' ? 'active' : ''; ?>" href="tentang-kami.php">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-slate-900 text-sm py-4 dark:bg-gray-800">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex  items-center justify-between" aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none" href="#">
                <img class="w-48 h-auto" src="image/logo_i_shop_putih.png" alt="Logo">
            </a>
            <div class="sm:hidden">
                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-slate-900 bg-white text-gray-800 shadow-sm hover:bg-slate-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-gray-700 dark:text-slate-900 dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-collapse="#navbar-image-2" aria-controls="navbar-image-2" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-image-2" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                <a class="font-medium <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-blue-500' : 'text-slate-400'; ?> dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="index.php">Home</a>
                <a class="font-medium <?php echo basename($_SERVER['PHP_SELF']) == 'produk.php' ? 'text-blue-500' : 'text-slate-400'; ?> dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="produk.php">Produk</a>
                <a class="font-medium <?php echo basename($_SERVER['PHP_SELF']) == 'tentang-kami.php' ? 'text-blue-500' : 'text-slate-400'; ?> dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="tentang-kami.php">Tentang Kami</a>
            </div>
        </div>
    </nav>
</header>