<?php 
    $titre = "COOKSY - Recettes";
    $pageActuelle = "projets"; 
    include 'includes/header.php'; 
?>

<div style="padding-top: 120px; text-align: center; margin-bottom: 40px;">
    <h1 style="font-size: 3rem; color: #f1f5f9; font-weight: 800;">COOKSY : Idées Recettes</h1>
    <p style="color: #94a3b8; font-size: 1.2rem;">Un projet pour trouver des idées de plats à partir des ingrédients disponibles.</p>
</div>

<div class="content-wrapper" style="padding-top: 0;">

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Présentation du projet</h2>
            <ul class="detail-list">
                <li>Site web interactif pour trouver rapidement des idées de recettes selon les ingrédients disponibles.</li>
                <li>Projet destiné aux particuliers et aux professionnels (restauration/traiteur).</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Objectif du projet</h2>
            <ul class="detail-list">
                <li>Faciliter l'accès aux idées de repas en quelques secondes.</li>
                <li>Gagner du temps : plus besoin de chercher longuement.</li>
                <li>S'inspirer rapidement et passer directement à l'action.</li>
            </ul>
        </div>
    </div>
    
    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Page principale : Sélection de recettes</h2>
            <ul class="detail-list">
                <li>Affichage clair d'une liste de plats disponibles.</li>
                <li>Titre clair et appétissant pour chaque plat.</li>
                <li>Bouton "Voir la recette" pour accéder aux instructions détaillées.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Pourquoi ce projet ?</h2>
            <ul class="detail-list">
                <li>Accès rapide aux recettes sans menus compliqués.</li>
                <li>Expérience fluide avec navigation intuitive.</li>
                <li>Inspiration instantanée dès l'ouverture du site.</li>
            </ul>
        </div>
    </div>
    
    <div class="detail-grid">

        <div class="detail-card">
            <h2 class="detail-title">Ce que j'ai appris</h2>
            <ul class="detail-list">
                <li>Renforcer mes compétences en développement web (PHP/MySQL).</li>
                <li>Relier deux tables dans MySQL pour structurer les données (Recettes/Ingrédients).</li>
                <li>Améliorer l'efficacité du site et la gestion des données.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Vision à long terme</h2>
            <ul class="detail-list">
                <li>Plus de recettes régulièrement mises à jour.</li>
                <li>Système de favoris pour les utilisateurs.</li>
                <li>Fonction de tri et recherche avancée pour affiner les choix.</li>
            </ul>
        </div>
    </div>


    <div class="detail-card tech-summary-card">
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