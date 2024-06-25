const form = document.getElementById("form_receber");

form.addEventListener("submit", (event) => {
    event.preventDefault();
    form.classList.add("was-validated")
})

