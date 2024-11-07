document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".contactfieldlabel").forEach(function(label) {
        if (label.innerText === "Другое") {
            label.innerText = "Получатель";
        }
        if (label.innerText === "Работа") {
            label.innerText = "Псевдоним";
        }
    });
});
