function sendMail(event){
    event.preventDefault(); 

    let parms = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        message : document.getElementById("message").value,
    };

    emailjs.send("service_5ys8wa9", "template_piton8p", parms)
    .then(() => {
        alert("Email sent successfully!");
    })
    .catch((error) => {
        console.error("Email sending failed:", error);
        alert("Došlo je do pogreške pri slanju emaila.");
    });    
}

