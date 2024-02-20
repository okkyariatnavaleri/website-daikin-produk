<header class="z-50 flex flex-wrap w-full py-1 text-sm bg-dark sm:justify-start sm:flex-nowrap ">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:pb-5 md:pb-0  items-center justify-between" aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none" href="#">
                <img class="w-48 h-auto" src="image/logo_i_shop_putih.png" alt="Logo">
            </a>
            <div class="sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 text-gray-800 bg-white border rounded-lg shadow-sm hs-collapse-toggle gap-x-2 border-slate-900 hover:bg-slate-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-gray-700 dark:text-slate-900 dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-collapse="#navbar-image-2" aria-controls="navbar-image-2" aria-label="Toggle navigation">
                    <svg class="flex-shrink-0 w-4 h-4 hs-collapse-open:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="flex-shrink-0 hidden w-4 h-4 hs-collapse-open:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-image-2" class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow sm:block">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-end sm:mt-2 sm:ps-5">
                <a class="font-medium <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-blue-500' : 'text-slate-400'; ?> dark:focus:outline-none hover-underline-animation dark:focus:ring-1 dark:focus:ring-gray-600" href="index.php">Home</a>
                <a class="font-medium <?php echo (basename($_SERVER['PHP_SELF']) == 'produk.php' || basename($_SERVER['PHP_SELF']) == 'produk-detail.php') ? 'text-blue-500' : 'text-slate-400'; ?> dark:focus:outline-none hover-underline-animation dark:focus:ring-1 dark:focus:ring-gray-600" href="produk.php">Produk</a>
                <a class="font-medium <?php echo basename($_SERVER['PHP_SELF']) == 'tentang-kami.php' ? 'text-blue-500' : 'text-slate-400'; ?> dark:focus:outline-none hover-underline-animation dark:focus:ring-1 dark:focus:ring-gray-600" href="tentang-kami.php">Tentang Kami</a>

                <div class="flex">
                    <span class="mr-2 text-sm text-slate-500">Light</span>
                    <input type="checkbox" class="hidden" id="dark-toggle">
                    <label for="dark-toggle">
                        <div class="flex items-center h-5 p-1 rounded-full cursor-pointer w-9 bg-slate-500">
                            <div class="w-4 h-4 transition duration-300 ease-in-out bg-white rounded-full toggle-circle">
                            </div>
                        </div>
                    </label>
                    <span class="ml-2 text-sm text-slate-500">Dark</span>
                </div>
            </div>
        </div>
    </nav>
</header>