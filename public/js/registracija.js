
const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");


togglePassword.addEventListener("click", () => {

    const isHidden = passwordInput.type === "password";

    passwordInput.type = isHidden ? "text" : "password";

    togglePassword.classList.toggle("fa-eye");
    togglePassword.classList.toggle("fa-eye-slash");
});


document.querySelector("form").addEventListener("submit", function (e) {
    
  
    const name = document.getElementById("name").value;
    /*const surname = document.getElementById("surname").value;*/
    const email = document.getElementById("Email").value;
    const password = document.getElementById("password").value;
    /*const birthdate = document.getElementById("date-of-birth").value;*/
    const accepted = document.getElementById("terms").checked;
  
    if (!accepted) {
      alert("Morate prihvatiti uvjete korištenja.");
      return;
    }
  
    const user = {
      name,
       /*surname,*/
      email,
      password
       /*birthdate*/
    };
  
    
  });

  const togglePasswordConfirmation = document.querySelector("#togglePasswordConfirmation");
const passwordConfirmation = document.querySelector("#password_confirmation");

togglePasswordConfirmation.addEventListener("click", function () {
    const type = passwordConfirmation.getAttribute("type") === "password" ? "text" : "password";
    passwordConfirmation.setAttribute("type", type);
    this.classList.toggle("fa-eye-slash");
});
  

