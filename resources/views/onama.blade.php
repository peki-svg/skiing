<!DOCTYPE html>
<html lang="hr">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>O nama</title>

  <link rel="stylesheet" href="{{ asset('css/onama.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>
<nav class="navbar">
  <div class="menu">
    <a href="{{ route('welcome') }}">Početna</a>
    <a href="{{ route('onama') }}">O nama</a>
    <a href="{{ route('kontakt') }}">Kontakt</a>
  </div>
  <div class="right-section">
<label for="countrySelect">Odaberi državu:</label>
<select id="countrySelect" onchange="handleCountryChange()">
  <option value="">-- Odaberi --</option>
  <option value="austrija">Austrija</option>
  <option value="italija">Italija</option>
  <option value="švicarska">Švicarska</option>
  <option value="bugarska">Bugarska</option>
  <option value="francuska">Francuska</option>
  <option value="njemačka">Njemačka</option>
  <option value="slovenija">Slovenija</option>
  <option value="slovačka">Slovačka</option>
  <option value="češka">Češka</option>
  <option value="poljska">Poljska</option>
  <option value="rumunjska">Rumunjska</option>
  <option value="španjolska">Španjolska</option>
  <option value="andora">Andora</option>
  <option value="norveška">Norveška</option>
  <option value="švedska">Švedska</option>
  <option value="finska">Finska</option>
  <option value="bosna i herzegovina">Bosna i Herzegovina</option>
  <option value="crna gora">Crna Gora</option>
  <option value="srbija">Srbija</option>
  <option value="hrvatska">Hrvatska</option>
</select>
    <button type="button" class="login-btn"
    onclick="window.location='{{ route('login') }}'">
Login
</button>
  </div>
</nav>

<div id="mapaContainer">
  <div id="map"></div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="search.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<body>

  <header>
    <h1>O nama</h1>
    <p>Upoznajte naš tim i našu misiju</p>

  </header>

 
  <section>
    <h2>Naša misija</h2>
    <p>Naša strast je skijanje, a naš cilj je pomoći skijašima svih nivoa da pronađu savršeno skijalište prilagođeno njihovim željama i potrebama. Bilo da tražite porodične staze, adrenalinske spusteve, netaknuti puder ili vrhunske après-ski sadržaje, mi vam olakšavamo izbor.

      Kroz detaljne informacije, recenzije i preporuke, činimo pretragu jednostavnijom i efikasnijom, kako biste manje vremena trošili na istraživanje, a više uživali na snegu. Bez obzira na to da li ste početnik ili iskusni skijaš, tu smo da vas povežemo s idealnim mestima za nezaboravan zimski doživljaj.
      
      Vaše savršeno skijalište je samo nekoliko klikova daleko – krenimo zajedno u potragu!
    </p>

    <h2>Naše vrijednosti</h2>
    <ul>
      <li>⛷ Personalizacija – Svaki skijaš je drugačiji, zato nudimo preporuke prilagođene vašim željama, veštinama i stilu skijanja.

      </li>
      <li>🏔 Pouzdanost – Delimo tačne, ažurirane i objektivne informacije kako biste doneli najbolje odluke pri odabiru skijališta.</li>
      <li>❄ Strast prema skijanju – Skijanje je više od sporta, to je način života. Naša misija je preneti tu strast i pomoći vam da pronađete savršene staze za nezaboravna iskustva.</li>
    </ul>

    <h2>Naš tim</h2>
    <div class="team">
      <div class="member">
        <h3>Jakov Lazinica</h3>
        <p>Web designer i Web Developer</p>
      </div>
      <div class="member">
        <h3>Leo Petrović</h3>
        <p>Web Developer</p>
      </div>
      <div class="member">
        <h3>Ian Bogdesić</h3>
        <p>Web Developer</p>
      </div>
    </div>
  </section>
</body>

  <footer>
    &copy; 2025 Vaša Tvrtka. Sva prava pridržana.
  </footer>

 



</html>
