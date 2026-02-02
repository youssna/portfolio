<?php 
    $titre = "BiblioShare";
    $pageActuelle = "projets"; 
    include 'includes/header.php'; 
?>

<div style="padding-top: 120px; text-align: center; margin-bottom: 40px;">
    <h1 style="font-size: 3rem; color: #f1f5f9; font-weight: 800;">BiblioShare : Bibliothèque Communautaire</h1>
    <p style="color: #94a3b8; font-size: 1.2rem;">Plateforme collaborative de partage de collections de livres.</p>
</div>

<div class="content-wrapper" style="padding-top: 0;">


    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Ce que permet l'application</h2>
            <ul class="detail-list">
                <li>Espace membre pour contribuer au catalogue commun.</li>
                <li>Ajout facile de livres pour enrichir la base de données partagée.</li>
                <li>Consultation des résumés pour trouver sa prochaine lecture.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">L'objectif du projet</h2>
            <ul class="detail-list">
                <li>Créer un espace d'échange littéraire entre utilisateurs.</li>
                <li>Centraliser les bibliothèques personnelles en un seul endroit.</li>
                <li>Aider les indécis à trouver quoi lire grâce aux ajouts des autres.</li>
            </ul>
        </div>
    </div>

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Pourquoi ce projet ?</h2>
            <ul class="detail-list">
                <li>Partager sa passion de la lecture simplement.</li>
                <li>Une interface épurée focalisée sur le contenu (le livre).</li>
                <li>Une base de données structurée qui grandit avec la communauté.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Évolutions futures (Vision)</h2>
            <ul class="detail-list">
                <li>Système de réservation et d'emprunt entre membres.</li>
                <li>Espace 'Avis et Notes' pour recommander des lectures.</li>
                <li>Moteur de recommandation basé sur les catégories préférées.</li>
            </ul>
        </div>
    </div>

    <div class="detail-card" style="text-align: center; margin-top: 20px;">
        <h3 style="color: #f1f5f9; margin-bottom: 15px;">Technologies utilisées</h3>
        <div class="tech-badges" style="justify-content: center;">
            <span class="tech-tag">HTML</span>
            <span class="tech-tag">CSS</span>
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">MySQL</span>
        </div>
    </div>

    <div class="project-footer-action">
        <a href="projets.php" class="btn-back">
            &larr; Retour aux projets
        </a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>