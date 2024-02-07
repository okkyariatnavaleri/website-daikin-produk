<?php
require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daikin | Home</title>
    <link rel="icon" href="image/icon_daikin.png" type="png" size="16x16">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-tailwind.css">

    <!-- icon -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <?php require "navbar.php"; ?>

    <!--banner-->

    <!-- Hero -->


    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class=" mx-auto px-4 min-h-[700px] sm:px-6 lg:px-8 py-10 sm:py-24 bg-[url('../image/banner.jpg')]" style="background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="mt-32 text-center md:mt-20">
                <h1 class="text-3xl font-bold sm:text-4xl text-slate-800 dark:text-slate-200">
                    Daikin Airconditioning Indonesia
                </h1>

                <p class="mt-3 text-xl text-slate-600 dark:text-slate-400">
                    AC Kelas Dunia.
                </p>

                <div class="relative max-w-xl mx-auto mt-7 sm:mt-12">
                    <!-- Form -->
                    <form method="get" action="produk.php">
                        <div class="relative z-10 flex space-x-3 p-1 bg-white border rounded-lg shadow-lg shadow-slate-100 dark:bg-slate-900 dark:border-gray-700 dark:shadow-gray-900/[.2]">
                            <div class="flex-[1_0_0%]">
                                <label for="hs-search-article-1" class="block text-sm font-medium text-slate-700 dark:text-white"><span class="sr-only">Tipe input</span></label>
                                <input type="text" name="produk" autocomplete="off" required id="hs-search-article-1" class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-transparent dark:text-slate-400 dark:focus:ring-slate-600" placeholder="Tipe input">
                            </div>
                            <div class="flex-[0_0_auto]">
                                <a class="w-[46px] h-[46px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-slate-600" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->

                    <!-- SVG Element -->
                    <div class="absolute top-0 hidden translate-x-20 -translate-y-12 md:block end-0">
                        <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                            <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                            <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                        </svg>
                    </div>
                    <!-- End SVG Element -->

                    <!-- SVG Element -->
                    <div class="absolute bottom-0 hidden -translate-x-32 translate-y-10 md:block start-0">
                        <svg class="w-40 h-auto text-cyan-500" width="347" height="188" viewBox="0 0 347 188" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426" stroke="currentColor" stroke-width="7" stroke-linecap="round" />
                        </svg>
                    </div>
                    <!-- End SVG Element -->
                </div>
            </div>
        </div>
    </div>

    <!-- End Hero -->

    <!-- Produk terlaris -->
    <div class="flex flex-col items-center justify-center min-h-screen ">
        <h3 class="my-4 text-3xl font-bold text-center text-slate-900">Produk Terlaris</h3>
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
            <div class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                <div class="h-72 w-96">
                    <img class="object-contain w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./image/breeze_series.png" alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h1 class="text-3xl font-bold text-white font-dmserif">Breeze Series</h1>
                    <p class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">Keseimbangan Sempurna Efisiensi Energi, Kemudahan Penggunaan, dan Ramah Lingkungan. AC kompak, ringan, dan mudah dioperasikan dengan fitur-fitur terbaik.</p>
                    <a href="produk.php?produk=BREEZE Series"><button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Selengkapnya</button></a>
                </div>
            </div>
            <div class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                <div class="h-72 w-96 ">
                    <img class="object-contain w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./image/ftv_series.png" alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h1 class="text-3xl font-bold text-white font-dmserif">FTV Series</h1>
                    <p class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">Pengalaman Pendinginan Terbaik yang Disesuaikan dengan Keseharian. Aktifkan Mode Sleep untuk Penyesuaian Suhu saat Tidur.</p>
                    <a href="produk.php?produk=FTV Series"><button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Selengkapnya</button></a>
                </div>
            </div>
            <div class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                <div class="h-72 w-96">
                    <img class="object-contain w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./image/ftc_series.png" alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h1 class="text-3xl font-bold text-white font-dmserif">FTC Series</h1>
                    <p class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">Aliran Canggih dan Bertenaga untuk Kenyamanan Maksimal. Mulai dari 0.5 PK hingga 2.5 PK, unit ini ringkas dan modis.</p>
                    <a href="produk.php?produk=FTC Series"><button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Selengkapnya</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- end Produk terlaris -->

    <!--footer-->
    <?php require "footer.php"; ?>
    <script src="./node_modules/preline/dist/preline.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>