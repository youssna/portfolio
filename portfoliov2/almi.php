<?php 
    $titre = "ALMI";
    $pageActuelle = "projets"; 
    include 'includes/header.php'; 
?>

<div style="padding-top: 120px; text-align: center; margin-bottom: 40px;">
    <h1 style="font-size: 3rem; color: #f1f5f9; font-weight: 800;">Gestion de Stock - ALMI</h1>
    <p style="color: #94a3b8; font-size: 1.2rem;">Application interne en architecture MVC (Logistique).</p>
</div>

<div class="content-wrapper" style="padding-top: 0;">


    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Présentation du projet</h2>
            <ul class="detail-list">
                <li>Projet développé pour l'entreprise <strong>ALMI Logistique</strong>, spécialisée dans le transport et la livraison.</li>
                <li><strong>Objectif :</strong> Centraliser la gestion du matériel (pièces, accessoires, téléphones, outils).</li>
                <li>Application interne sécurisée avec authentification utilisateur.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Fonctionnalités principales</h2>
            <ul class="detail-list">
                <li><strong>CRUD complet</strong> sur les produits et les types de produits.</li>
                <li>Gestion des utilisateurs avec inscription, connexion et déconnexion.</li>
                <li>Interface d'administration simplifiée pour ajouter, modifier et supprimer des entrées.</li>
            </ul>
        </div>
    </div>

    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">Structure Technique (MVC)</h2>
            <ul class="detail-list">
                <li><strong>Modèle :</strong> Gestion des requêtes SQL via PDO (produits, types, utilisateurs).</li>
                <li><strong>Vue :</strong> Affichage clair et responsive avec interface utilisateur soignée.</li>
                <li><strong>Contrôleur :</strong> Traitement des actions et redirection via switch centralisé.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Base de Données MySQL</h2>
            <ul class="detail-list">
                <li>Table <strong>utilisateurs</strong> : gestion des comptes et accès sécurisés.</li>
                <li>Table <strong>types_produits</strong> : classification du matériel par catégorie.</li>
                <li>Table <strong>produits</strong> : suivi détaillé des articles en stock.</li>
            </ul>
        </div>

    </div>

    <div class="detail-grid">
        <div class="detail-card">
            <h2 class="detail-title">Ce que j'ai appris</h2>
            <ul class="detail-list">
                <li>Mettre en œuvre une <strong>architecture MVC</strong> complète.</li>
                <li>Sécuriser les connexions et les accès utilisateurs.</li>
                <li>Concevoir une base de données relationnelle fonctionnelle et cohérente.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">Vision d'évolution</h2>
            <ul class="detail-list">
                <li>Mise en place d'un rôle administrateur distinct.</li>
                <li>Ajout d'un tableau de bord statistique avec indicateurs de stock.</li>
                <li>Gestion des mouvements d'entrée et de sortie de matériel.</li>
            </ul>
        </div>
    </div>

    <div class="detail-card" style="text-align: center; margin-top: 20px;">
        <h3 style="color: #f1f5f9; margin-bottom: 15px;">Technologies utilisées</h3>
        <div class="tech-badges" style="justify-content: center;">
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">HTML</span>
            <span class="tech-tag">CSS</span>
            <span class="tech-tag">Architecture MVC</span>
        </div>
    </div>

    <div class="project-footer-action">
        <a href="projets.php" class="btn-back">
            &larr; Retour aux projets
        </a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>