document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("reservationForm");

    // j'ajoute un événement de soumission du formulaire
    form.addEventListener("submit", function (event) {
        // Récupérer les valeurs des champs de date
        const start = document.getElementById("start_date").value;
        const end = document.getElementById("end_date").value;

        // Vérifier si la date de début est supérieure à la date de fin
        if (new Date(start) > new Date(end)) {
            // Empêcher la soumission du formulaire
            event.preventDefault();
            alert("Hata : Başlangıç ​​tarihi bitiş tarihinden büyük olamaz.");
        }
    });
});