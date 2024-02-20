// ===================== animasi untuk fade in =====================
// Ambil semua elemen yang ingin diberi efek scrollspy
const elements = document.querySelectorAll('.animasi');

// Fungsi untuk mengecek apakah elemen masuk dalam pandangan
function isInViewport(element) {
    const rect = element.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fungsi untuk menjalankan animasi fadeInDown
function runAnimation() {
    elements.forEach(element => {
        if (!element.dataset.animated && isInViewport(element)) {
            element.classList.add('animate__animated', 'animate__fadeInDown');
            element.dataset.animated = true; // Set data-animated menjadi true setelah animasi dijalankan
        }
        element.addEventListener('animationend', () => {
            element.classList.remove('d-none');
        });
    });
}

// Panggil fungsi saat halaman dimuat dan digulir
window.addEventListener('load', runAnimation);
window.addEventListener('scroll', runAnimation);


// ===================== js untuk mode dark mode =====================


// mode dark mode
 const darkToggle = document.querySelector('#dark-toggle');
 const html = document.querySelector('html');

 darkToggle.addEventListener('click', function() {
     // darkToggle.checked ? html.classList.add('dark'): html.classList.remove('dark')
     if (darkToggle.checked) {
         html.classList.add('dark');
         localStorage.theme = 'dark';
         console.log('Dark theme');
     } else {
         html.classList.remove('dark');
         localStorage.theme = 'light';
     }
 });
 if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
     darkToggle.checked = true;
 } else {
     darkToggle.checked = false;
 }

 if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
     document.documentElement.classList.add('dark')
 } else {
     document.documentElement.classList.remove('dark')
 }


 // ===================== animasi navbar agar nempel di atas terus =====================

 // animasi navbar scroll
 window.onscroll = function() {
  const header = document.querySelector('header');
  const nav = header.offsetTop;
  const toTop = document.querySelector('#to-top');

  if (window.pageYOffset > nav) {
      header.classList.add('navbar-fixed');
      toTop.classList.remove('hidden');
      toTop.classList.add('flex');
  } else {
      header.classList.remove('navbar-fixed');
      toTop.classList.remove('flex');
      toTop.classList.add('hidden');
  }
}