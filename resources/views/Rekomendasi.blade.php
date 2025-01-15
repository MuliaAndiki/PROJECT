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
  
  <section class="line-1">
    <!-- Poster3 -->
    <div class="poster3">
        <a href="#">
          <div class='posterlandscape'>
            <i class='bx bx-play-circle'></i>
            <img src='image\POSTERLANDSCAPE\One Piece.jpeg'>
          </div>
        </a>

        <a href="#">
          <div class='posterlandscape'>
            <i class='bx bx-play-circle'></i>
            <img src='image\POSTERLANDSCAPE\Bluelock.jpeg'>
          </div>  
        </a>

        <a href="#">
          <div class='posterlandscape'>
            <i class='bx bx-play-circle'></i>
            <img src='image\POSTERLANDSCAPE\hunter x hunter.jpeg'>
          </div>
        </a>

        <a href="#">
          <div class="posterlandscape">
            <i class="bx bx-play-circle"></i>
            <img src='image\POSTERLANDSCAPE\jujutsu kaisen.jpeg'>
          </div>
        </a>
    </div>
  </section>

  <section class="line-2">
    <div class="poster4">
      <a href="#">
        <div class="posterlandscape">
          <i class="bx bx-play-circle"></i>
          <img src="image\POSTERPOTRAIT\DANDANDAN.jpeg">
        </div>
      </a>

      <a href="#">
        <div class='posterlandscape'>
          <i class='bx bx-play-circle'></i>
          <img src='image\POSTERPOTRAIT\Haikyuu.jpeg'>
        </div>
      </a>

      <a href="#">
        <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
          <img src="image\POSTERPOTRAIT\Attack on titan.jpeg">
        </div>
      </a>

      <a href="#">
        <div class="posterlandscape">
          <i class="bx bx-play-circle"></i>
          <img src="image\POSTERPOTRAIT\chainsaw man.jpeg">
        </div>
      </a>
      
    </div>
  </section>

  <section class="laman">
    <h1>Halaman</h1>
    <button class='laman1' onclick="#">1</button>
    <button class='laman1' onclick="#">2</button>
    <button class='laman1' onclick="#">3</button>
    <button class='laman1' onclick="#">4</button>
    <button class='laman1' onclick="#">5</button>
    <div class="separator"></div>
  </section>
  
  @vite('resources/script/logic.js')
  <link rel="Stylesheet" href="/script/logic.js">
</body>
</html>