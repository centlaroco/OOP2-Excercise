function openModal(file, exerciseName) {
    document.getElementById("exerciseModal").classList.remove("hidden");
    document.getElementById("modalFrame").src = file;
}

function closeModal() {
    document.getElementById("exerciseModal").classList.add("hidden");

    // clear the iframe if it's close
    document.getElementById("modalFrame").src = "";

}

