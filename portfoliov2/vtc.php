<?php 
    $titre = "Projet VTC";
    $pageActuelle = "projets"; 
    include 'includes/header.php'; 
?>

<div style="padding-top: 120px; text-align: center; margin-bottom: 40px;">
    <h1 style="font-size: 3rem; color: #f1f5f9; font-weight: 800;">Site Chauffeur VTC</h1>
    <p style="color: #94a3b8; font-size: 1.2rem;">Application de gestion de chauffeur et vehicule en architecture MVC.</p>
</div>

<div class="content-wrapper" style="padding-top: 0;">

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Présentation du projet</h2>
            <p style="color: #cbd5e1; line-height: 1.7;">
                Développement d'un outil interne pour gérer facilement les chauffeurs et les véhicules d'une flotte VTC.
                L'objectif était de centraliser les données dans une interface ergonomique.
            </p>
            <br>
            <ul class="detail-list">
                <li>Gestion centralisée des chauffeurs et véhicules.</li>
                <li>Interface moderne (Dark Mode) et intuitive.</li>
                <li>Architecture stricte MVC pour la maintenabilité.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Fonctionnalités principales</h2>
            <ul class="detail-list">
                <li>Ajout, Modification, Suppression (CRUD) de chauffeurs.</li>
                <li>Gestion des véhicules (Marque, Modèle, Immatriculation).</li>
                <li>Système d'association Chauffeur <-> Véhicule.</li>
                <li>Tableaux de bord dynamiques avec tris.</li>
                <li>Espace Admin sécurisé (Inscription/Connexion).</li>
            </ul>
        </div>
    </div>

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Structure Technique (MVC)</h2>
            <ul class="detail-list">
                <li><strong>Modèle :</strong> Gestion des requêtes SQL via PDO. Sécurisation des entrées.</li>
                <li><strong>Vue :</strong> Pages HTML/CSS découpées (Header, Footer, Tableaux).</li>
                <li><strong>Contrôleur :</strong> Routeur central (`index.php`) qui dirige vers les bonnes actions.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Base de Données MySQL</h2>
            <ul class="detail-list">
                <li>Table <strong>Chauffeur</strong> : Nom, Prénom, Permis, Email.</li>
                <li>Table <strong>Vehicule</strong> : Marque, Modèle, Année, Plaque.</li>
                <li>Table <strong>Utilisateur</strong> : Gestion des accès admin (Hashage password).</li>
            </ul>
        </div>

    </div>

    <div class="detail-card" style="text-align: center;">
        <h2 class="detail-title" style="border: none; margin-bottom: 20px;">Ce que j'ai appris</h2>
        <p style="color: #cbd5e1; max-width: 800px; margin: 0 auto 30px auto;">
            Ce projet m'a permis de maîtriser l'architecture MVC, essentielle dans le développement professionnel. 
            J'ai également renforcé mes compétences en SQL (Jointures, CRUD) et en sécurité PHP (Sessions, Hashage).
        </p>

        <h3 style="color: #f1f5f9; margin-bottom: 15px;">Technologies utilisées</h3>
        <div class="tech-badges" style="justify-content: center;">
            <span class="tech-tag">PHP 8</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">HTML5 / CSS3</span>
            <span class="tech-tag">Architecture MVC</span>
            <span class="tech-tag">Git</span>
        </div>
    </div>

</div>

<div class="project-footer-action">
        <a href="projets.php" class="btn-back">
            &larr; Retour aux projets
        </a>
    </div>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) navbar.classList.add('scrolled');
        else navbar.classList.remove('scrolled');
    });
</script>

<?php include 'includes/footer.php'; ?>