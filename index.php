<?php
require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <?php require "head.php" ?>
</head>


<body class="dark:bg-dark">
    <?php require "navbar.php"; ?>

    <!--banner-->

    <!-- Hero -->


    <!-- Hero -->
    <div class="relative overflow-hidden dark:saturate-50">
        <div class=" mx-auto px-4 min-h-[700px] sm:px-6 lg:px-8 py-10 sm:py-24 bg-[url('../image/banner.jpg')] " style="background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="mt-32 text-center md:mt-20 ">
                <h1 class="text-3xl font-bold sm:text-4xl text-slate-800 ">
                    Daikin Airconditioning Indonesia
                </h1>

                <p class="mt-3 text-xl text-slate-600">
                    AC Kelas Dunia.
                </p>

                <div class="relative max-w-xl mx-auto mt-7 sm:mt-12">
                    <!-- Form -->
                    <form method="get" action="produk.php">
                        <div class="relative z-10 flex space-x-3 p-1 bg-white border rounded-lg shadow-lg shadow-slate-100 dark:border-gray-700 dark:shadow-gray-900/[.2]">
                            <div class="flex-[1_0_0%]">
                                <label for="hs-search-article-1" class="block text-sm font-medium text-slate-700 dark:text-white"><span class="sr-only">Tipe input</span></label>
                                <input type="text" name="produk" autocomplete="off" required id="hs-search-article-1" class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500  dark:text-slate-200 dark:focus:ring-slate-600" placeholder="Tipe input">
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
    <!-- Icon Blocks -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Tentang Kami</h2>
            <p class="mt-1 text-slate-600 dark:text-slate-400">Dealer Resmi PT. DAIKIN AIRCONDITIONING INDONESIA untuk Penjualan AC dan Sparepart. Kami juga menyediakan Jasa Pemasangan dan Pemeliharaan AC dengan harga terbaik.</p>
        </div>
        <div class="grid md:gap-12 sm:grid-cols-2 lg:grid-cols-4 ">
            <!-- Icon Block -->
            <div class="flex flex-col justify-between h-64 ">
                <div class="relative flex justify-center items-center w-12 h-12 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-violet-600 before:rounded-xl bg-white">
                    <div class="relative flex justify-center items-center w-12 h-12 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-violet-600 before:rounded-xl dark:bg-slate-900">
                        <svg class="flex-shrink-0 w-6 h-6 text-blue-600 dark:text-blue-500" fill="#0284c7" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" stroke="#0284c7">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <g id="Certificate-file">
                                    <path d="M54.1076508,14.717124c-0.0053024-0.0955-0.0237999-0.1876001-0.0559006-0.2779007 c-0.0102005-0.0284996-0.0171013-0.0567999-0.0298004-0.0840998c-0.0480995-0.1046-0.1090012-0.2038994-0.1932983-0.2884998 c0,0-3.4248009-3.4394999-6.8535004-6.8759999c-1.7139015-1.7188001-3.4297028-3.4356-4.7187996-4.7227001 c-0.9531021-0.9511001-1.5810013-1.5781001-2.0234032-1.9677001c-0.006897-0.0098-0.0136986-0.0186-0.0205002-0.0284 c-0.0009995-0.0019-0.0019989-0.0029-0.0029984-0.0048l-0.0078011,0.0058c-0.6213989-0.5415-0.8670006-0.6004-1.1478996-0.4306 l-26.0746994,0.0009c-1.7079992,0-3.0977001,1.3907001-3.0977001,3.0996001v50.5655022 c0,0.8661995,0.3369007,1.6805992,0.9522009,2.2967987c0.6053991,0.6026001,1.4413996,0.9482994,2.2928991,0.9482994h13.1513996 c0.5527,0,1-0.4473,1-1c0-0.5527992-0.4473-1-1-1H13.1264496c-0.3270998,0-0.6483994-0.1338005-0.8799-0.3633003 c-0.2323999-0.232399-0.3652-0.5536995-0.3652-0.8817978V3.1427238c0-0.6064,0.4922009-1.0996001,1.0977001-1.0996001 l25.4626007-0.0009c0.0377007,2.2823002-0.0049019,8.6077995-0.0485992,12.7186995 c-0.002903,0.2676001,0.1016006,0.5244007,0.2891006,0.7139006c0.1875,0.1904001,0.4442978,0.2967997,0.7108994,0.2967997 h12.7255974v38.0997009c0,0.2851028-0.1152,0.5634003-0.3173981,0.7656021 c-0.2041016,0.2040977-0.4756012,0.3163986-0.7645988,0.3163986h-0.455101c-0.5527,0-1,0.4472008-1,1c0,0.5527,0.4473,1,1,1 h0.455101c0.8241997,0,1.5985985-0.3213005,2.1796989-0.9033012c0.5732002-0.5732994,0.902298-1.3671989,0.902298-2.1786995 V14.7716236C54.1186485,14.7523241,54.1087494,14.7362242,54.1076508,14.717124z M40.4038506,13.7716236 C40.45755,8.5080242,40.4741516,5.380024,40.4585495,3.4992237c2.3398018,2.3340001,6.6297989,6.6346998,10.2538986,10.2723999 H40.4038506z" />
                                    <path d="M46.4301491,49.4289246c-0.0370979-0.1273003-0.0993004-0.2401009-0.1764984-0.3384018 c1.4456978-1.7341003,2.3171997-3.9636993,2.3171997-6.3979988c0-5.5228004-4.4771996-10-10-10c-5.5228996,0-10,4.4771996-10,10 c0,2.5708008,0.9783993,4.9075012,2.5725002,6.6790009L27.7680492,60.942524 c-0.1103001,0.3779984,0.0117016,0.7862015,0.3116016,1.0419998c0.299799,0.2549019,0.7206993,0.3086014,1.0770988,0.1416016 l3.4014015-1.6162033l2.1376991,3.0996017c0.1884003,0.2734985,0.4980011,0.4326973,0.8232002,0.4326973 c0.0565987,0,0.1133003-0.0048981,0.169899-0.0146942c0.3848-0.0664024,0.6953011-0.3496017,0.7959023-0.7266045 l2.2945976-8.5613976l2.2943001,8.5613976c0.1006012,0.3760033,0.410202,0.6592026,0.7938995,0.7266045 c0.0577011,0.0097961,0.1152992,0.0146942,0.1719017,0.0146942c0.3241997,0,0.6319008-0.157299,0.8213005-0.4296989 l2.1436005-3.0839996l3.3993988,1.5996017c0.3554001,0.1660004,0.7753983,0.1102982,1.0760994-0.1455002 c0.2989006-0.2549019,0.4199982-0.6621017,0.3096008-1.0401001L46.4301491,49.4289246z M38.5708504,34.5973244 c4.4636993,0,8.0951996,3.6315002,8.0951996,8.0951996c0,4.4637985-3.6315002,8.0952988-8.0951996,8.0952988 c-4.4637985,0-8.0953007-3.6315002-8.0953007-8.0952988C30.4755497,38.2288246,34.1070518,34.5973244,38.5708504,34.5973244z M35.1137505,60.692524l-1.3925018-2.0185013c-0.2792969-0.4043007-0.809597-0.5478973-1.2519989-0.3359985l-2.1571999,1.024498 l2.4841995-8.5150986c1.3003006,0.9225998,2.8286018,1.5391998,4.4862022,1.7528992L35.1137505,60.692524z M45.0913506,58.3586235 c-0.4424019-0.2080994-0.9687996-0.0654984-1.2471008,0.3348999l-1.3964996,2.0088005l-2.1875992-8.1632004 c1.6489983-0.2812004,3.1576996-0.9631996,4.4260979-1.9464989l2.5623016,8.781601L45.0913506,58.3586235z" />
                                    <path d="M38.5708504,47.692524c2.7613983,0,5-2.2384987,5-5c0-2.7613983-2.2386017-5-5-5c-2.7614021,0-5,2.2386017-5,5 C33.5708504,45.4540253,35.8094482,47.692524,38.5708504,47.692524z M38.5708504,39.692524c1.6542015,0,3,1.3457985,3,3 c0,1.6543007-1.3457985,3-3,3c-1.6543007,0-3-1.3456993-3-3C35.5708504,41.0383224,36.9165497,39.692524,38.5708504,39.692524z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col h-40 mt-5 ">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Dealer Resmi Daikin</h3>
                    <p class="mt-1 text-slate-600 dark:text-slate-400">Kami menyediakan unit AC dan sparepart resmi berkualitas terbaik untuk kebutuhan pendinginan Anda.</p>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div class="flex flex-col justify-between h-64 ">
                <div class="relative flex justify-center items-center w-12 h-12 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-violet-600 before:rounded-xl bg-white">
                    <div class="relative flex justify-center items-center w-12 h-12 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-violet-600 before:rounded-xl dark:bg-slate-900">
                        <svg class="flex-shrink-0 w-6 h-6 text-blue-600 dark:text-blue-500" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#3b82f6">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="icomoon-ignore"> </g>
                                <path d="M29.532 25.76l-5.655-5.655 0.754-0.754-0.754-0.754-2.261 2.261-3.771-3.77 4.53-4.532c0.603 0.215 1.234 0.324 1.882 0.324 1.493 0 2.897-0.582 3.954-1.637 1.63-1.631 2.092-4.054 1.178-6.174l-0.311-0.722-2.43 2.43-1.956 0.027 0.026-1.866 2.477-2.477-0.72-0.312c-0.706-0.306-1.457-0.461-2.229-0.461-1.494 0-2.897 0.582-3.952 1.637-1.546 1.545-2.043 3.802-1.311 5.84l-4.529 4.529-6.409-6.408 0.754-0.754-4.145-4.146-2.264 2.261 4.147 4.147 0.753-0.754 6.409 6.408-4.529 4.529c-0.605-0.217-1.239-0.326-1.888-0.326-1.493 0-2.897 0.582-3.953 1.637-1.633 1.632-2.095 4.059-1.176 6.181l0.312 0.72 2.477-2.477 1.865-0.025-0.027 1.956-2.43 2.43 0.722 0.311c0.704 0.303 1.452 0.458 2.221 0.458 1.494 0 2.897-0.581 3.952-1.636 1.544-1.544 2.041-3.799 1.314-5.833l4.532-4.532 3.771 3.769-2.263 2.263 0.754 0.754 0.754-0.754 5.654 5.654c0.503 0.504 1.174 0.781 1.885 0.781s1.381-0.277 1.885-0.781c1.039-1.039 1.039-2.73-0-3.769zM3.899 4.648l0.754-0.753 2.638 2.638-0.754 0.754-2.639-2.639zM11.448 22.456c0.739 1.716 0.364 3.679-0.955 4.999-0.854 0.854-1.989 1.324-3.198 1.324-0.347 0-0.689-0.039-1.021-0.116l1.569-1.569 0.047-3.485-3.394 0.046-1.619 1.619c-0.356-1.51 0.081-3.103 1.208-4.229 0.854-0.854 1.99-1.325 3.199-1.325 0.626 0 1.233 0.125 1.806 0.373l0.333 0.144 10.819-10.819-0.144-0.333c-0.744-1.719-0.37-3.682 0.952-5.004 0.854-0.854 1.99-1.325 3.198-1.325 0.35 0 0.695 0.040 1.030 0.117l-1.618 1.618-0.047 3.394 3.485-0.047 1.57-1.57c0.352 1.507-0.086 3.097-1.209 4.221-0.855 0.854-1.991 1.325-3.2 1.325-0.624 0-1.23-0.125-1.801-0.371l-0.332-0.143-10.821 10.823 0.143 0.332zM28.779 28.775c-0.302 0.302-0.704 0.469-1.131 0.469s-0.829-0.167-1.131-0.469l-5.654-5.654 2.262-2.262 5.655 5.655c0.624 0.624 0.624 1.638 0.001 2.261z" fill="<svg viewBox=" 0="" 32="" 32"="" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g id="icomoon-ignore"> </g>
                                        <path d="M29.532 25.76l-5.655-5.655 0.754-0.754-0.754-0.754-2.261 2.261-3.771-3.77 4.53-4.532c0.603 0.215 1.234 0.324 1.882 0.324 1.493 0 2.897-0.582 3.954-1.637 1.63-1.631 2.092-4.054 1.178-6.174l-0.311-0.722-2.43 2.43-1.956 0.027 0.026-1.866 2.477-2.477-0.72-0.312c-0.706-0.306-1.457-0.461-2.229-0.461-1.494 0-2.897 0.582-3.952 1.637-1.546 1.545-2.043 3.802-1.311 5.84l-4.529 4.529-6.409-6.408 0.754-0.754-4.145-4.146-2.264 2.261 4.147 4.147 0.753-0.754 6.409 6.408-4.529 4.529c-0.605-0.217-1.239-0.326-1.888-0.326-1.493 0-2.897 0.582-3.953 1.637-1.633 1.632-2.095 4.059-1.176 6.181l0.312 0.72 2.477-2.477 1.865-0.025-0.027 1.956-2.43 2.43 0.722 0.311c0.704 0.303 1.452 0.458 2.221 0.458 1.494 0 2.897-0.581 3.952-1.636 1.544-1.544 2.041-3.799 1.314-5.833l4.532-4.532 3.771 3.769-2.263 2.263 0.754 0.754 0.754-0.754 5.654 5.654c0.503 0.504 1.174 0.781 1.885 0.781s1.381-0.277 1.885-0.781c1.039-1.039 1.039-2.73-0-3.769zM3.899 4.648l0.754-0.753 2.638 2.638-0.754 0.754-2.639-2.639zM11.448 22.456c0.739 1.716 0.364 3.679-0.955 4.999-0.854 0.854-1.989 1.324-3.198 1.324-0.347 0-0.689-0.039-1.021-0.116l1.569-1.569 0.047-3.485-3.394 0.046-1.619 1.619c-0.356-1.51 0.081-3.103 1.208-4.229 0.854-0.854 1.99-1.325 3.199-1.325 0.626 0 1.233 0.125 1.806 0.373l0.333 0.144 10.819-10.819-0.144-0.333c-0.744-1.719-0.37-3.682 0.952-5.004 0.854-0.854 1.99-1.325 3.198-1.325 0.35 0 0.695 0.040 1.030 0.117l-1.618 1.618-0.047 3.394 3.485-0.047 1.57-1.57c0.352 1.507-0.086 3.097-1.209 4.221-0.855 0.854-1.991 1.325-3.2 1.325-0.624 0-1.23-0.125-1.801-0.371l-0.332-0.143-10.821 10.823 0.143 0.332zM28.779 28.775c-0.302 0.302-0.704 0.469-1.131 0.469s-0.829-0.167-1.131-0.469l-5.654-5.654 2.262-2.262 5.655 5.655c0.624 0.624 0.624 1.638 0.001 2.261z" fill="#000000"> </path>
                                    </g>"&gt;
                                </path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col h-40 mt-5 ">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Pemasangan Profesional</h3>
                    <p class="mt-1 text-slate-600 dark:text-slate-400">Layanan pemasangan AC oleh tenaga ahli kami yang berpengalaman akan memastikan AC Anda dipasang dengan sempurna, sehingga Anda dapat menikmati udara sejuk tanpa khawatir.</p>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div class="flex flex-col justify-between h-64 ">
                <div class="relative flex justify-center items-center w-12 h-12 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-violet-600 before:rounded-xl bg-white">
                    <div class="relative flex justify-center items-center w-12 h-12 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-violet-600 before:rounded-xl dark:bg-slate-900">
                        <svg class="flex-shrink-0 w-6 h-6 text-blue-600 dark:text-blue-500" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#3b82f6" stroke="#3b82f6">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path fill="#3b82f6" d="M8,53c-1.656,0-3,1.344-3,3s1.344,3,3,3s3-1.344,3-3S9.657,53,8,53z M8,57c-0.553,0-1-0.447-1-1 s0.447-1,1-1s1,0.447,1,1S8.553,57,8,57z"></path>
                                    <path fill="#3b82f6" d="M63.652,14.49c-0.277-1.584-1.283-1.544-2.209-0.618s-9.787,9.786-9.787,9.786 c-3.123,3.123-8.189,3.123-11.312-0.001c-3.125-3.124-3.125-8.188,0-11.313c0,0,8.963-8.963,9.787-9.786 c0.822-0.823,0.9-1.901-0.621-2.21C48.375,0.117,47.201,0,46,0c-9.941,0-18,8.06-18,18c0,2.008,0.344,3.933,0.949,5.736 L2.342,50.344c-3.123,3.123-3.123,8.189,0.001,11.313s8.19,3.124,11.313,0.001l26.607-26.607C42.068,35.657,43.992,36,46,36 c9.941,0,18-8.06,18-18C64,16.799,63.852,15.631,63.652,14.49z M12.243,60.244c-2.342,2.342-6.143,2.342-8.485-0.001 s-2.343-6.142,0.001-8.485l7.793-7.793l8.486,8.485L12.243,60.244z M21.451,51.036l-8.486-8.485l16.806-16.806 c1.773,3.71,4.773,6.711,8.484,8.485L21.451,51.036z M46,34c-8.836,0-16-7.164-16-16S37.164,2,46,2c0.594,0,1.18,0.038,1.758,0.102 l-8.83,8.828c-3.904,3.904-3.904,10.236,0,14.143c3.906,3.906,10.238,3.904,14.143,0l8.83-8.828C61.963,16.82,62,17.406,62,18 C62,26.836,54.838,34,46,34z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col h-40 mt-5 ">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Pemeliharaan Berkala</h3>
                    <p class="mt-1 text-slate-600 dark:text-slate-400"> Kami menawarkan jasa pemeliharaan AC berkala untuk menjaga performa optimal AC Anda. Dengan perawatan yang tepat, AC Anda akan tetap berfungsi dengan baik dan awet.</p>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div class="flex flex-col justify-between h-64 ">
                <div class="relative flex justify-center items-center w-12 h-12 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-violet-600 before:rounded-xl bg-white">
                    <div class="relative flex justify-center items-center w-12 h-12 rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-blue-600 before:via-transparent before:to-violet-600 before:rounded-xl dark:bg-slate-900">
                        <svg class="flex-shrink-0 w-6 h-6 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#3b82f6" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col h-40 mt-5 ">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Komitmen Terhadap Kepuasan Pelanggan</h3>
                    <p class="mt-1 text-slate-600 dark:text-slate-400">Kami memprioritaskan kepuasan pelanggan sebagai misi utama kami. Dengan pelayanan terbaik dan produk berkualitas, kami berkomitmen untuk menjadi mitra terpercaya Anda dalam hal pendinginan udara.</p>
                </div>
            </div>
            <!-- End Icon Block -->
        </div>
    </div>
    <!-- End Icon Blocks -->


    <!-- Produk terlaris -->

    <div class="px-4 py-10 mx-auto mt-5 sm:px-6 lg:px-8 lg:py-14 bg-slate-100 dark:bg-slate-800">
        <!-- Title -->
        <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14 dark:bg-slate-800">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Pilihan Terbaik</h2>
            <p class="mt-1 text-slate-600 dark:text-slate-400">Temukan AC Daikin terbaik untuk rumah atau kantor Anda. Dibuat dengan teknologi terkini dan desain elegan, AC Daikin siap memberikan kesejukan yang Anda butuhkan.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 ">
            <!-- Card -->
            <div class="relative items-center justify-center overflow-hidden transition-shadow rounded-lg shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                <div class="h-64 mx-auto sm:h-72 sm:w-96 w-80 ">
                    <img class="object-contain w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./image/ftkq_series.png" alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h1 class="text-3xl font-bold text-white font-dmserif">FTKQ Series</h1>
                    <p class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">Dengan Super PCB untuk operasi stabil di tegangan listrik yang tidak stabil. Mode Low Watt hemat energi tanpa mengorbankan kenyamanan.</p>
                    <a href="produk.php?produk=FTKQ Series"><button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Selengkapnya</button></a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="relative items-center justify-center overflow-hidden transition-shadow rounded-lg shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                <div class="h-64 mx-auto sm:h-72 sm:w-96 w-80 ">
                    <img class="object-contain w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./image/ftkc_series.png" alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h1 class="text-3xl font-bold text-white font-dmserif">FTKC Series</h1>
                    <p class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100"> Performa tangguh, hemat energi. Dilengkapi mode low watt, econo, intelligent eye, PM 2.5 filter, dan smart Wi-Fi controller.</p>
                    <a href="produk.php?produk=FTKC Series"><button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Selengkapnya</button></a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="relative items-center justify-center overflow-hidden transition-shadow rounded-lg shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                <div class="h-64 mx-auto sm:h-72 sm:w-96 w-80 ">
                    <img class="object-contain w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./image/ftkf_series.png" alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h1 class="text-3xl font-bold text-white font-dmserif">FTKF Series</h1>
                    <p class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">Mendinginkan cepat, hemat energi dengan mode Econo. Super PCB tahan lonjakan listrik. Mode hening, kebisingan hanya 21 dBA.</p>
                    <a href="produk.php?produk=FTKF Series"><button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Selengkapnya</button></a>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->

        <!-- Card -->
        <div class="mt-5 text-center">
            <div class="inline-block border rounded-full shadow-sm dark:bg-slate-900 dark:border-gray-800">
                <div class="flex items-center px-4 py-3 gap-x-2">
                    <p class="text-slate-600 dark:text-slate-400">
                        Pilihan lebih banyak?
                    </p>
                    <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="produk.php">
                        Go here
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- end Produk terlaris -->

    <!--footer-->
    <?php require "footer.php"; ?>
</body>

</html>