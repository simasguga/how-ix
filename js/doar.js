const form = document.getElementById("form_doar");

form.addEventListener("submit", (event) => {
    event.preventDefault();
    form.classList.add("was-validated")
})


