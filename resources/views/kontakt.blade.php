<!DOCTYPE html>
<html lang="hr">
<head>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontakt</title>

  <link rel="stylesheet" href="{{ asset('css/kontakt.css') }}">
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
    <h1>Kontaktirajte nas</h1>
    <p>Tu smo za sva vaša pitanja i sugestije</p>
  </header>

  <section>
    <h2>Kontakt informacije</h2>
    <p><strong>Telefon:</strong> +385 99 123 4567</p>
    <p><strong>Email:</strong> ssadamicmail@gmail.com</p>

    <h2>Ukoliko imate neku primjedbu kontaktirajte nas</h2>
    <form action="#" method="post" class="contact-form">
      <label for="name">Ime i prezime:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email adresa:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Poruka:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit" onclick="sendMail(event)">Pošalji</button>

    </form>
  </section>

  <footer>
    &copy; 2025. Sva prava pridržana.
  </footer>


  <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
(function(){
emailjs.init("a_rk3F_6AL_ykX3T9");
})();
</script>
<script src="kontakt.js"></script>

  
  

  <link rel="stylesheet" href="kontakt.css">

</body>
</html>
