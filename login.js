
const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");


togglePassword.addEventListener("click", () => {

    const isHidden = passwordInput.type === "password";

    passwordInput.type = isHidden ? "text" : "password";

    togglePassword.classList.toggle("fa-eye");
    togglePassword.classList.toggle("fa-eye-slash");
});
document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault();
  
    const emailInput = document.getElementById("Email").value;
    const passwordInput = document.getElementById("password").value;
  
    const storedUser = JSON.parse(localStorage.getItem("user"));
  
    if (
      storedUser &&
      storedUser.email === emailInput &&
      storedUser.password === passwordInput
    ) {
      alert("Uspješna prijava! ✅");
      window.location.href = "index.html";
    } else {
      alert("Pogrešan e-mail ili lozinka ❌");
    }
  });