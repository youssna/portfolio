<?php 
    $titre = "E-CAFET' - FOODTECH";
    $pageActuelle = "projets"; 
    include 'includes/header.php'; 
?>

<div style="padding-top: 120px; text-align: center; margin-bottom: 40px;">
    <h1 style="font-size: 3rem; color: #f1f5f9; font-weight: 800;">E-CAFET'</h1>
    <p style="color: #94a3b8; font-size: 1.2rem;">Application Full-Stack de commande en Click & Collect pour établissement scolaire.</p>
</div>

<div class="content-wrapper" style="padding-top: 0;">

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Présentation du projet</h2>
            <ul class="detail-list">
                <li>Plateforme e-commerce permettant aux étudiants de commander leur repas en ligne pour éviter les files d'attente.</li>
                <li>Interface fluide optimisée pour une prise de commande rapide entre deux cours.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Fonctionnalités principales</h2>
            <ul class="detail-list">
                <li>Catalogue dynamique avec gestion des stocks en temps réel.</li>
                <li>Système de panier intelligent avec calcul automatique des totaux.</li>
                <li>Génération de numéros de retrait uniques (CMD-XXXX) pour le guichet.</li>
                <li>Espace Gérant : CRUD complet (Ajout/Modif/Suppr) avec upload d'images.</li>
            </ul>
        </div>
    </div>

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Objectif du projet</h2>
            <ul class="detail-list">
                <li>Fluidifier le passage en caisse durant la pause déjeuner.</li>
                <li>Permettre une gestion rigoureuse des stocks pour le personnel.</li>
                <li>Offrir une expérience utilisateur (UX) moderne inspirée des leaders de la FoodTech.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Aspects Techniques</h2>
            <ul class="detail-list">
                <li>Architecture robuste <strong>MVC</strong> séparant strictement les données de l'affichage.</li>
                <li>Sécurisation des accès (Rôles : Étudiant vs Gérant).</li>
                <li>Utilisation de variables de session PHP pour la persistance du panier.</li>
                <li>Traitement d'images (Upload, renommage unique et stockage serveur).</li>
            </ul>
        </div>
    </div>
    
    <div class="detail-grid">
        <div class="detail-card" style="grid-column: 1 / span 2;"> 
            <h2 class="detail-title">Vision à long terme</h2>
            <ul class="detail-list">
                <li>Paiement intégré via API Stripe ou carte de cantine dématérialisée.</li>
                <li>Système de notifications "Push" quand la commande est prête à être récupérée.</li>
                <li>Statistiques de vente hebdomadaires pour aider le gérant dans ses prévisions de stocks.</li>
            </ul>
        </div>
    </div>

    <div class="detail-card tech-summary-card">
        <h3 style="color: #f1f5f9; margin-bottom: 15px;">Technologies utilisées</h3>
        <div class="tech-badges" style="justify-content: center;">
            <span class="tech-tag">PHP 8.2</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">MVC Architecture</span>
            <span class="tech-tag">CSS Grid/Flexbox</span>
            <span class="tech-tag">Session Management</span>
        </div>
    </div>

    <div class="project-footer-action">
        <a href="projets.php" class="btn-back">
            &larr; Retour aux projets
        </a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>