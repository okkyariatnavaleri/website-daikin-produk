<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- SEO tag -->
<meta name="author" content="PT. Mellisa Lestari Sinergi">
<meta name="language" content="Indonesia">
<meta name="robots" content="index, follow, max-image-preview:large">
<meta name="googlebot" content="index, follow, max-image-preview:large">
<meta name="keywords" content="ac, daikin indonesia, pt mellisa lestari sinergi, ac pekanbaru, pekanbaru, daikin pekanbaru">
<meta property="og:title" content="Daikin Pekanbaru">
<meta property="og:type" content="website">
<meta property="og:locale" content="id_ID">
<meta property="og:url" content="https://daikinpekanbaru.com/">
<meta property="og:site_name" content="AC Daikin Pekanbaru">
<meta property="og:image" content="image/icon_daikin.png">
<meta property="og:image:secure_url" content="image/icon_daikin.png">
<meta property="og:image:type" content="image/jpeg">
<link rel="canonical" href="https://daikinpekanbaru.com/">
<meta name="description" content="Selamat datang di situs web resmi Daikin. Temukan produk-produk berkualitas tinggi untuk kenyamanan rumah dan bisnis Anda." id="meta-description">
<link rel="icon" href="image/icon_daikin.png" type="png" size="16x16">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-tailwind.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<title id="page-title">Daikin | Home</title>
<!-- icon -->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script>
 // Mendapatkan judul halaman berdasarkan path URL
 var pageTitle = "";
 var metaDescription = "";
 var pathName = window.location.pathname;
 if (pathName.includes("produk" || "produk-detail")) {
  pageTitle = "Daikin | Produk";
  metaDescription = "Telusuri beragam produk Daikin terbaru untuk kebutuhan pendinginan dan pemanasan ruangan Anda. Dapatkan solusi yang efisien dan ramah lingkungan.";
 } else if (pathName.includes("tentang-kami")) {
  pageTitle = "Daikin | Tentang Kami";
  metaDescription = "Pelajari lebih lanjut tentang Daikin, pemimpin global dalam teknologi pendinginan dan pemanasan. Temukan visi, misi, dan nilai-nilai kami dalam memberikan solusi yang inovatif dan berkelanjutan.";
 } else {
  pageTitle = "Daikin | Home";
  metaDescription = "Selamat datang di situs web resmi Daikin. Temukan produk-produk berkualitas tinggi untuk kenyamanan rumah dan bisnis Anda.";
 }

 // Mengubah judul halaman
 document.title = pageTitle;
 // Mengubah meta description
 document.getElementById("meta-description").setAttribute("content", metaDescription);
</script>

<style>
 /* Atur animasi untuk underline */
 @keyframes hover-underline-animation {
  0% {
   width: 0;
  }

  100% {
   width: 100%;
  }
 }

 /* Terapkan animasi ke underline */
 .hover-underline-animation {
  position: relative;
  overflow: hidden;
 }

 .hover-underline-animation::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background-color: #3498db;
  /* Warna underline */
  transition: width 0.3s ease;
 }

 .hover-underline-animation:hover::after {
  width: 100%;
  animation: hover-underline-animation 0.3s forwards;
 }
</style>