<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rekomendasi</title>
  @vite('resources/Style/Style.css')
  <link rel="stylesheet" href="/Style/Style.css"">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
  <header class ="header">
    <a href="#" class="icon"target="_blank">Website Streaming</a>

    <i class="bx bx-menu" id="menu-icon"></i>

    <!--Header Atas Untuk Navigasi-->
    <nav class="navigasi">
      <a href="Dashboard">HOME</a>
      <a href="#">DAFTAR</a>
      <a href="#">GENRE</a>
      <a href="#">REKOMENDASI</a>
    </nav>
    <!--Boks search-->
    <div class="search-icon">
      <i class="bx bx-search" id="search-icon"></i>
    </div>
    <div id="search" class="search">
      <input type="text" placeholder="Search">
    </div>
  <div>
  </header>
  
  @vite('resources/script/logic.js')
  <link rel="Stylesheet" href="/script/logic.js">
</body>
</html>