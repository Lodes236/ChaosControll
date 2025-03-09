// Für die aufklappbaren Elemente
document.querySelectorAll('.accordion').forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('active');
    });
});

// TODO: Add room name and regal name info

function searchData() {
    let query = document.getElementById("search-input").value;

    if (query.length > 0) {
        fetch("https://chaoscontrol.lodes.net/suche.php?query=" + encodeURIComponent(query))
            .then(response => response.text())
            .then(data => {
                document.getElementById("results-body").innerHTML = data;
                document.getElementById("search-results").style.display = "block";
            })
            .catch(error => console.error("Fehler:", error));
    } else {
        document.getElementById("search-results").style.display = "none";
    }
}
