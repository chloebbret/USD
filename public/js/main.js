document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll('.item');

    function checkScroll() {
        items.forEach(item => {
            if (isElementInViewport(item)) {
                item.classList.add('show');
            }
        });
    }

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    window.addEventListener('scroll', checkScroll);
    checkScroll();
});




// ACCUEIL
$(document).ready(function() {
    // Fonction pour vérifier si l'élément est en vue
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Fonction pour gérer l'affichage des éléments lorsqu'ils sont en vue
    function handleVisibility() {
        var actualites = document.getElementById('actualites');
        var cards = document.querySelector('.cards');

        if (isElementInViewport(actualites) && !actualites.classList.contains('visible')) {
            actualites.classList.add('visible');
        }

        if (isElementInViewport(cards) && !cards.classList.contains('visible')) {
            cards.classList.add('visible');
        }
    }

    // Afficher les éléments au chargement initial si nécessaire
    handleVisibility();

    // Événement de défilement pour gérer la visibilité des éléments
    window.addEventListener('scroll', handleVisibility);
});

document.addEventListener('scroll', function() {
    const nodes = document.querySelectorAll('.content');

    nodes.forEach(node => {
        const rect = node.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
            node.style.opacity = '1';
        }
    });
});

