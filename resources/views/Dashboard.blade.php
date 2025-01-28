<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dasboard</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  
  <div class="container mt-1">
    <!-- Pemangilan Component -->
    <x-header />  
</div>

    <!--Tampilan Awal Solo Leveling-->
    <main>
      <div class="container mt-2">
        <!-- Pemangilan Component -->
        <x-hero />
      </div>

    <!--News Update Anime-->
    <div class="container mt-3">
      <!-- Pemangilan Component -->
      <x-newsupdate />
    </div>
    

    <!--Movie Anime-->
    <div class="container mt-3">
      <x-movie />
    </div>

    <!--on-going-->
  <div class="container mt-4">
    <x-ongoing />
  </div>

  <!--footer-->
  <div class="container mt-6">
    <x-footer />
  </div>

    </main>

</body>
</html>