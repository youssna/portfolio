// Fonction pour ouvrir le modal avec les infos dynamiques
function openModal(title, level, desc, logoUrl) {
    const modal = document.getElementById('skillModal');
    
    // Remplir les infos
    document.getElementById('modal-title').innerText = title;
    document.getElementById('modal-desc').innerText = desc;
    document.getElementById('modal-level-text').innerText = level;
    document.getElementById('modal-img').src = logoUrl;
    
    // Afficher le modal
    modal.style.display = 'flex';
    
    // Petite animation de la barre de progression (après un court délai pour l'effet visuel)
    setTimeout(() => {
        document.getElementById('modal-progress').style.width = level + '%';
    }, 100);
}

// Fonction pour fermer le modal
function closeModal() {
    const modal = document.getElementById('skillModal');
    modal.style.display = 'none';
    
    // Reset barre
    document.getElementById('modal-progress').style.width = '0%';
}

// Fermer si on clique en dehors de la boîte
window.onclick = function(event) {
    const modal = document.getElementById('skillModal');
    if (event.target == modal) {
        closeModal();
    }
}
/* =========================================
   1. GESTION NAVBAR (Transparent -> Solide)
   ========================================= */
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    // Si on descend de plus de 50px, on ajoute la classe 'scrolled'
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

/* =========================================
   2. FORCE SCROLL TOP (Au chargement)
   ========================================= */
// Empêche le navigateur de se souvenir de la position précédente
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}
// Force le retour en haut
window.onload = function() {
    window.scrollTo(0, 0);
    setTimeout(() => window.scrollTo(0, 0), 10);
};

/* =========================================
   3. SCROLL DOUX (Flèche vers le bas)
   ========================================= */
const arrowDown = document.getElementById('arrowDown');
if (arrowDown) {
    arrowDown.addEventListener('click', function(e) {
        e.preventDefault(); 
        const target = document.querySelector('#skills');
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
}

/* =========================================
   4. MODAL COMPETENCES
   ========================================= */
// Fonction pour ouvrir
function openModal(title, level, desc, logo) {
    const modal = document.getElementById('skillModal');
    if (modal) {
        modal.style.display = 'flex';
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-desc').innerText = desc;
        document.getElementById('modal-img').src = logo;
        document.getElementById('modal-level-text').innerText = level;
        
        // Animation de la barre
        setTimeout(() => {
            document.getElementById('modal-progress').style.width = level + '%';
        }, 100);
    }
}

// Fonction pour fermer
function closeModal() {
    const modal = document.getElementById('skillModal');
    if (modal) {
        modal.style.display = 'none';
        document.getElementById('modal-progress').style.width = '0%';
    }
}

// Fermer si on clique en dehors
window.onclick = function(e) {
    const modal = document.getElementById('skillModal');
    if (e.target == modal) {
        closeModal();
    }
}