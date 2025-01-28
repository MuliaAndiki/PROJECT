<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rekomendasi</title>
  @vite('resources/Style/Style.css')
  @vite('resources/script/logic.js')
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
  <!-- Header-->
  <div class="container mt-7">
    <x-header />
  </div>
  
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

  <!-- Navigasi Arah-->
  <section class="laman">
    <h1>Halaman</h1>
    <button class='laman1' onclick="#">1</button>
    <button class='laman1' onclick="#">2</button>
    <button class='laman1' onclick="#">3</button>
    <button class='laman1' onclick="#">4</button>
    <button class='laman1' onclick="#">5</button>
    <div class="separator"></div>
  </section>

  <!-- Isi Kolom Komentar -->
  <section class="komentar">
    <h2>Komentar:</h2>
    <div class="komentar1">
        <form action="/Rekomendasii/{id}" method="post">
            @csrf
            <div class="form-group">
                <p>Nama</p> 
                <input class="form-control" type="text" name="Nama">
            </div>
            <div class="form-group">
                <p>Komentar</p>
                <input class="form-control" type="text" name="komentar">
            </div> 
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <div id="komentarlist" class="komentar-list">
        <!-- Komentar per item -->
    </div>
</section>

<!-- Share -->
<section>

</section>

  
  <section class="footer">
    <div class="footer-content">

      <!--tentang -->
      <div class="about">
        <h3>Tentang</h3>
        <p>AAAA adalah situs nonton anime gratis (Download) terbaru dengan nyaman dan aman</p>
      </div>

      <!--apa aja yang baru-->
      <div class="what news">
        <h3>Apa Yang Baru?</h3>
        <p>Banyak varian anime baru yang di rilis lho! mulai dari musim spring, summer, fail dan winter lho! segera nonton di situs AAAA</p>
      </div>

      <!-- laporakan -->
      <div class="report">
        <h3>Laporkan</h3>
        <div class="laporkan">
        <p>Laporkan Error</p>
        </div>

      </div>
    </div>
  </section>
  
  
</body>
</html>