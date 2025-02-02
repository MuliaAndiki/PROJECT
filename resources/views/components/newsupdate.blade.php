@vite('resources/Style/Style.css')
@vite('resources/script/logic.js')

<section class="news-update">
  <i class='bx bx-plus'></i><h2>NEWS UPDATE</h2>
  <div class="poster">
    <!--Gambar 1 -->
    <a href="#">
      <div class="posterlandscape">
      <i class='bx bx-play-circle'></i>
      @foreach ($Dashboardpict as $pict)
      <img src="{{ asset('storage/' . $pict->foto) }}" alt="One Piece"/>
      @endforeach
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