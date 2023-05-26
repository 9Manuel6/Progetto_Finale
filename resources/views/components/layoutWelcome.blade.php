<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>YOeS</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <x-navbar />
    <x-homeHeader />
    <div>
        {{$slot}}
    </div>      
    <x-footer />
    @livewireScripts
    {{-- JS swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>