<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dasboard</title>
  @vite('resources/Style/Style.css')
  <link href="/Style/Style.css";>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  
    <header class ="header">
      <a href="#" class="icon">Website Streaming</a>

      <i class="bx bx-menu" id="menu-icon"></i>

      <!--Header Atas Untuk Navigasi-->
      <nav class="navigasi">
        <a href="Dashboard">HOME</a>
        <a href="#">DAFTAR</a>
        <a href="#">GENRE</a>
        <a href="Rekomendasi">REKOMENDASI</a>
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

    <!--Tampilan Awal Solo Leveling-->
    <main>
      <section class="hero">
        <div class="hero-content">
          
            <img src="image\POSTERLANDSCAPE\Solo Leveling.jpg"
            srcset="image\POSTERLANDSCAPE\Solo Leveling.jpg 600w,
                    image\POSTERLANDSCAPE\Solo Leveling.jpg 1000w,
                    image\POSTERLANDSCAPE\Solo Leveling.jpg 1500w"
            sizes="(max-width: 600px) 100vw, (max-width: 1000px) 50vw, 33vw"
            alt="Solo Leveling Poster">
         </div>
         
          <div class="hero-text">
            <a> 
            <img src="\image\Text\Solo Leveling.png">
          </a>
            <p> Solo Leveling Adalah salah satu judul yang paling di tunggu-tunggu dalam dunia Anime, Dengan Cerita yang kuat, karakter-karakter yang menarik dengan sistem leveling yang inovatif.</p>
            <!--Buttom Play-->
            <button class="play" onclick="playFungsion()"><i class='bx bx-play'></i>Play
            </button>
            <!--Buttom Add-->
            <button class="add" onclick="addFungsion()"><i class='bx bx-plus'></i>Add To My List
              
            </button>
          </div>
          <!--Rekoemdasi Di Awal-->
          <div class="rekomendasi">
            <a href="#">Rekomendasi :</a>
          </div>
        </div>  
      </section>

    <!--News Update Anime-->
    <section class="news-update">
    <i class='bx bx-plus'></i><h2>NEWS UPDATE</h2>
    <div class="poster">
      <!--Gambar 1 -->
      <a href="#">
        <div class="posterlandscape">
        <i class='bx bx-play-circle'></i>
        <img src="image\POSTERLANDSCAPE\One Piece.jpeg">
        </div>
      </a>

      <!--Gambar 2 -->
      <a href="#">
        <div class="posterlandscape">
        <i class='bx bx-play-circle'></i>
        <img src="image\POSTERLANDSCAPE\Blue lock 1.jpeg">
      </div>
      </a>

      <!--Gambar 3 -->
      <a href="#">
        <div class="posterlandscape">
        <i class='bx bx-play-circle'></i>
        <img src="image\POSTERLANDSCAPE\hunter x hunter.jpeg">
      </div>
      </a>

      <!--Gambar 4 -->
      <a href="#">
        <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
        <img src="image\POSTERLANDSCAPE\jujutsu kaisen.jpeg">
      </div>
      </a>

    </div>
    </section>

    <!--Movie Anime-->
    <section class="movie">
      <i class='bx bx-plus'></i><h2>MOVIE</h2>
      <div class="poster1">
        <!--Gambar Untuk Class Movie Anime-->

        <!--Gambar 1 -->
        <a href="#">
          <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
          <img src="/image/POSTERLANDSCAPE/Black Clover.jpg">
        </div>
        </a>

        <!--Gambar 2 -->
        <a href="#">
          <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
          <img src="image\POSTERLANDSCAPE\Kimi No Na Wa.jpg">
        </div>
        </a>
        
        <!--Gambar 3 -->
        <a href="#">
          <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
          <img src="image\POSTERLANDSCAPE\Suzume no tojimari.jpg">
        </div>
        </a>

        <!--Gambar 4 -->
        <a href="#">
          <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
          <img src="image\POSTERLANDSCAPE\spyxfamily.jpg">
        </div>
        </a>
      </div>
    </section>

  <section class="on-going">
    <i class='bx bx-plus'></i><h2>ON GOING</h2>
    <div class="poster 2">
      <!--Gambar Untuk Class On Going Anime-->

      <!--Gambar 1 -->
      <a href="#">
        <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
        <img src="image\POSTERLANDSCAPE\BOCCHI THE ROCK.jpeg">
      </div>
      </a>

      <!--Gambar 2 -->
      <a href="#">
        <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
        <img src="image\POSTERLANDSCAPE\Tsue to rugi.jpeg">
      </div>
      </a>

      <!--Gambar 3 -->
      <a href="#" >
        <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
        <img src="image\POSTERLANDSCAPE\WindBreaker.jpg">
      </div>
      </a>

      <!--Gambar 4 -->
      <a href="#" >
        <div class="posterlandscape">
          <i class='bx bx-play-circle'></i>
        <img src="image\POSTERLANDSCAPE\the promised neverland.jpg">
      </div>
      </a>

    </div>
  </section>

  <!--footer-->
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

      </div>
    </section>

    </main>

    <!--logic js-->
    @vite('resources/script/logic.js')
    <link rel="stylesheet" href="/script/logic.js">
</body>
</html>