
const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");


togglePassword.addEventListener("click", () => {

    const isHidden = passwordInput.type === "password";

    passwordInput.type = isHidden ? "text" : "password";

    togglePassword.classList.toggle("fa-eye");
    togglePassword.classList.toggle("fa-eye-slash");
});


document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault(); // sprječava reload
  
    // Dohvaćanje vrijednosti iz inputa
    const name = document.getElementById("name").value;
    const surname = document.getElementById("surname").value;
    const email = document.getElementById("Email").value;
    const password = document.getElementById("password").value;
    const birthdate = document.getElementById("date-of-birth").value;
    const accepted = document.getElementById("uvjeti").checked;
  
    // Provjera je li checkbox označen
    if (!accepted) {
      alert("Morate prihvatiti uvjete korištenja.");
      return;
    }
  
    // Spremanje korisnika u LocalStorage kao JSON
    const user = {
      name,
      surname,
      email,
      password,
      birthdate
    };
  
    localStorage.setItem("user", JSON.stringify(user));
    window.location.href = "login.html";
  });
  