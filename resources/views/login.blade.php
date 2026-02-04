<!DOCTYPE html>
<html lang="hr">
     <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>
    <body>
        <h1>Login</h1>
        <a href="{{ route('welcome') }}" class="back-button">🏠 Početna</a>
  
    <script>
      function goHome() {
        // Zamijeni 'index.html' s pravom početnom stranicom ako je drugačije
        window.location.href = 'welcome';
      }
    </script>
        <form>

            <label for="Email">E-mail</label>
            <input type="email" id="Email" required><br>

            <div class="input-group">
                <label for="password">Lozinka</label>
                <div class="password-wrapper">
                  <input type="password" id="password" required>
                  <i class="fa-solid fa-eye eye-icon" id="togglePassword"></i>
                </div>
            </div><br>

            <a href="{{ route('registracija') }}" class="register-label">
    Nemate račun? Registriraj se ovdje.
</a>              
                
      </select> <br><br>


      <button class="dugmeregistr"> Prijavi se </button>


      <script src="login.js"></script>


      </form>
    </body>