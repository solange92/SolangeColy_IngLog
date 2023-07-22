

function activateMenu(event, index) {
    event.preventDefault();
    const highlight = document.querySelector(".highlight");
    const menuItem = event.target.parentNode;
    const menuItemWidth = menuItem.offsetWidth;
    const menuItemLeftOffset = menuItem.offsetLeft;

    highlight.style.width = menuItemWidth + "px";
    highlight.style.transform = `translateX(${menuItemLeftOffset}px)`;
}

document.addEventListener('DOMContentLoaded', function() {
    // Récupérer le menu "Sport" par son ID ou autre sélecteur
    const menuSport = document.getElementById('menu-sport');

    // Ajouter un gestionnaire d'événement au clic sur le menu "Sport"
    menuSport.addEventListener('click', function() {
        // Effectuer une requête AJAX pour charger les résultats
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'chemin/vers/resultat_sport.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                // Insérer les résultats dans un élément de la page
                const resultatContainer = document.getElementById('resultat-container');
                resultatContainer.innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    });
});
