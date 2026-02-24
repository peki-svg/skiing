<!DOCTYPE html>
<html lang="hr">
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registracija</title>
  <link rel="stylesheet" href="{{ asset('css/registracija.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>
    <body>
        <h1>Registracija</h1>
        <a href="{{ route('welcome') }}" class="back-button">🏠 Početna</a>

  
    <script>
      function goHome() {
        // Zamijeni 'index.html' s pravom početnom stranicom ako je drugačije
        window.location.href = 'index.html';
      }
    </script>
        <form>
            <label for="name">Ime</label>
            <input type="text" id="name" required><br>

            <label for="surname">Prezime</label>
            <input type="text" id="surname" required><br>

            <label for="Email">E-mail</label>
            <input type="email" id="Email" required><br>

            <div class="input-group">
              <label for="password">Lozinka</label>
              <div class="tooltip-wrapper">
                <input
                  type="password"
                  id="password"
                  name="password"
                  required
                  pattern="(?=.*[A-Z])(?=.*\d).{8,}"
                />
                <i class="fa-solid fa-eye eye-icon" id="togglePassword"></i>
            
                <div class="custom-tooltip">
                  Lozinka mora sadržavati:
                  <ul>
                    <li>minimalno 8 znakova</li>
                    <li>barem jedno veliko slovo</li>
                    <li>barem jedan broj</li>
                  </ul>
                </div>
              </div>
            </div>
            
            </div><br>
            <label for="password" class="password-label">
              

            <label for="date-of-birth">Datum rođenja</label>
            <input type="date" id="date-of-birth" required>
                
      </select> <br><br>
<label class="checkbox-container">
    Prihvaćam 
    <a href="{{ route('uvijeti') }}" target="_blank">uvjete korištenja</a>
    <input type="checkbox" id="terms" required>
</label>


      <button type="button" onclick="window.location='{{ route('login') }}'">
    Registriraj se
</button>


      


      </form>
      <script src="{{ asset('js/registracija.js') }}"></script>
    </body>
    


</html>