@vite('resources/Style/Style.css')
@vite('resources/script/logic.js')

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
      <div class="separator"></div>
    </div>
  </div>  
</section>