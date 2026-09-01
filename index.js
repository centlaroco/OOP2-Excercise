function openModal(file,title) {
    document.getElementById("exerciseModal").classList.remove("hidden");
    document.getElementById("exerciseTitle").textContent = title;
    document.getElementById("modalFrame").src = file;
}

function closeModal() {
    document.getElementById("exerciseModal").classList.add("hidden");

    // clear the iframe if it's close
    document.getElementById("modalFrame").src = "";

}

