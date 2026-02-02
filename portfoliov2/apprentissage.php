<?php 
    $titre = "E-learning";
    $pageActuelle = "projets"; 
    include 'includes/header.php'; 
?>

<div style="padding-top: 120px; text-align: center; margin-bottom: 40px;">
    <h1 style="font-size: 3rem; color: #f1f5f9; font-weight: 800;">Plateforme d'E-learning</h1>
    <p style="color: #94a3b8; font-size: 1.2rem;">Un site web centralisant des cours de développement pour faciliter l'apprentissage.</p>
</div>

<div class="content-wrapper" style="padding-top: 0;">

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Contenu des cours</h2>
            <ul class="detail-list">
                <li>Développement Front-end : HTML & CSS.</li>
                <li>Développement Back-end : PHP & MySQL.</li>
                <li>Cours découpés en chapitres pour une lecture facile.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Approche pédagogique</h2>
            <ul class="detail-list">
                <li>Explications claires pour une bonne compréhension.</li>
                <li>Exemples de code concrets pour illustrer la théorie.</li>
                <li>Mise en forme soignée pour faciliter la mémorisation.</li>
            </ul>
        </div>
    </div>
    
    <div class="detail-grid">

        <div class="detail-card">
            <h2 class="detail-title">Objectifs du projet</h2>
            <ul class="detail-list">
                <li>Centraliser les ressources de cours au même endroit.</li>
                <li>Offrir un support de révision accessible 24h/24.</li>
                <li>Mettre en pratique mes compétences en développement web.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Interface & Navigation</h2>
            <ul class="detail-list">
                <li>Design épuré pour se concentrer sur la lecture.</li>
                <li>Navigation intuitive entre les différentes matières (Sommaire).</li>
                <li>Site adapté aux ordinateurs (Non mobile-first).</li>
            </ul>
        </div>
    </div>
    
    <div class="detail-grid">

        <div class="detail-card">
            <h2 class="detail-title">Pourquoi ce projet ?</h2>
            <ul class="detail-list">
                <li>Répondre au besoin d'avoir des fiches de synthèse claires.</li>
                <li>Faciliter l'accès à l'information technique.</li>
                <li>Créer un outil durable et évolutif pour les étudiants.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Évolutions possibles</h2>
            <ul class="detail-list">
                <li>Ajout de nouveaux langages (JavaScript, Python...).</li>
                <li>Intégration d'un moteur de recherche interne.</li>
                <li>Ajout d'un mode sombre pour le confort de lecture.</li>
            </ul>
        </div>
    </div>


    <div class="detail-card tech-summary-card">
        <h3 style="color: #f1f5f9; margin-bottom: 15px;">Technologies utilisées</h3>
        <div class="tech-badges" style="justify-content: center;">
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