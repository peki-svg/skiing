<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Početna stranica</title>

  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
</head>

<body>

<nav class="navbar">
  <div class="menu">
    <a href="{{ route('welcome') }}">Početna</a>
    <a href="{{ route('onama') }}">O nama</a>
    <a href="{{ route('kontakt') }}">Kontakt</a>
  </div>

  <div class="right-section">
    <input type="text" class="search-input" placeholder="Pretraži...">
    <button class="search-btn">Traži</button>
    <button type="button" onclick="window.location.href='{{ route('login') }}'">
      Login
    </button>
  </div>
</nav>

<div id="mapaContainer">
  <div id="map"></div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="{{ asset('js/index.js') }}"></script>

</body>
</html>
