<?php 
    $titre = "PROJECT OSTEO";
    $pageActuelle = "projets"; 
    include 'includes/header.php'; 
?>

<div style="padding-top: 120px; text-align: center; margin-bottom: 40px;">
    <h1 style="font-size: 3rem; color: #f1f5f9; font-weight: 800;">SYSTÈME DE RÉSERVATION</h1>
    <p style="color: #94a3b8; font-size: 1.2rem;">Plateforme complète de gestion de rendez-vous pour cabinet médical.</p>
</div>

<div class="content-wrapper" style="padding-top: 0;">

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Présentation du projet</h2>
            <ul class="detail-list">
                <li>Application web permettant aux patients de prendre rendez-vous en ligne 24h/24.</li>
                <li>Espace administrateur dédié pour que le praticien gère son agenda en temps réel.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Fonctionnalités principales</h2>
            <ul class="detail-list">
                <li>Calendrier dynamique avec gestion des créneaux horaires (ouverture/fermeture).</li>
                <li>Système d'authentification sécurisé (Patients & Admin).</li>
                <li>Gestion intelligente des annulations (règle stricte des 48h).</li>
                <li>Dashboard Admin : Vue globale des RDV à venir et historique.</li>
            </ul>
        </div>
    </div>

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Objectif du projet</h2>
            <ul class="detail-list">
                <li>Digitaliser entièrement le carnet de rendez-vous papier.</li>
                <li>Réduire le temps de gestion téléphonique pour le praticien.</li>
                <li>Offrir une interface moderne, sombre et reposante (Dark Mode).</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Aspects Techniques</h2>
            <ul class="detail-list">
                <li>Architecture <strong>MVC</strong> (Modèle-Vue-Contrôleur) pour un code maintenable.</li>
                <li>Sécurité renforcée : Hachage des mots de passe et requêtes préparées (SQL).</li>
                <li>Design Responsive adapté aux mobiles et ordinateurs.</li>
            </ul>
        </div>
    </div>
    
    <div class="detail-grid">
        <div class="detail-card" style="grid-column: 1 / span 2;"> 
            <h2 class="detail-title">Vision à long terme</h2>
            <ul class="detail-list">
                <li>Envoi automatique d'emails ou SMS de rappel de rendez-vous.</li>
                <li>Intégration du paiement en ligne (Stripe/PayPal) pour les acomptes.</li>
                <li>Génération automatique de factures PDF pour les patients.</li>
            </ul>
        </div>
    </div>

    <div class="detail-card tech-summary-card">
        <h3 style="color: #f1f5f9; margin-bottom: 15px;">Technologies utilisées</h3>
        <div class="tech-badges" style="justify-content: center;">
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">MVC</span>
            <span class="tech-tag">HTML</span>
            <span class="tech-tag">CSS</span>
        </div>
    </div>

    <div class="project-footer-action">
        <a href="projets.php" class="btn-back">
            &larr; Retour aux projets
        </a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>