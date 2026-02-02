<?php 
    $titre = "Veille Technologique - PHP";
    $pageActuelle = "veille"; 
    include 'includes/header.php'; 
?>

<header class="page-header header-veille">
    <h1 class="page-title">Veille Technologique</h1>
    <p class="page-subtitle">L'évolution du langage PHP : du code "brouillon" aux standards professionnels modernes.</p>
</header>

<div class="content-wrapper">

    <section class="school-card section-methodology">
        <div class="school-logo-wrapper methodology-icon-wrapper">
             <span class="methodology-icon">📡</span>
        </div>
        
        <div class="school-info">
            <h2>Ma Méthodologie de Veille</h2>
            <p>
                Pour mes projets (ALMI, Système de Réservation), je surveille l'actualité de PHP via des médias techniques français. Cela me permet d'anticiper les mises à jour et de garantir la sécurité de mes applications.
            </p>
            <div class="school-features">
                <a href="https://www.journaldunet.com/web-tech/developpement/" target="_blank" class="badge">Le Journal du Net</a>
                <a href="https://www.developpez.com/" target="_blank" class="badge">Developpez.com</a>
                <a href="https://afup.org/" target="_blank" class="badge">AFUP (Association PHP France)</a>
            </div>
        </div>
    </section>

    <section class="bts-section">
        <h2 class="section-title">L'évolution technique : Avant vs Aujourd'hui</h2>
        <p class="bts-desc">Comprendre pourquoi PHP est devenu un langage robuste et rapide.</p>
        
        <div class="table-responsive">
            <table class="tech-table">
                <thead>
                    <tr>
                        <th>Époque</th>
                        <th>L'ancien problème</th>
                        <th>La solution moderne</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Années 2000 (PHP 5)</strong></td>
                        <td>Code mélangeant tout et failles SQL faciles.</td>
                        <td>Arrivée du <strong>PDO</strong> : un traducteur qui sécurise les accès à la base de données.</td>
                    </tr>
                    <tr>
                        <td><strong>Années 2015 (PHP 7)</strong></td>
                        <td>Sites lents qui consomment beaucoup de ressources serveur.</td>
                        <td><strong>Refonte du moteur</strong> : La vitesse est doublée, rendant le web plus fluide.</td>
                    </tr>
                    <tr>
                        <td><strong>Aujourd'hui (PHP 8)</strong></td>
                        <td>Calculs répétitifs qui ralentissent l'exécution.</td>
                        <td>Le <strong>JIT (Just-In-Time)</strong> : PHP apprend le code par cœur pour l'exécuter instantanément.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="bts-section section-concepts">
        <h2 class="section-title">Concepts clés expliqués simplement</h2>
        <p class="bts-desc">
            Voici comment j'explique les innovations de PHP que j'utilise dans mes projets.
        </p>

        <div class="options-grid">
            <div class="option-card">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop" alt="Performance" class="option-img">
                <div class="option-content">
                    <h3>Le JIT (Just-In-Time)</h3>
                    <span class="option-subtitle">L'analogie du cuisinier</span>
                    <p>
                        C'est comme un cuisinier qui apprend ses recettes par cœur au lieu de les relire à chaque commande. Le code devient un "réflexe" pour l'ordinateur, ce qui booste la rapidité.
                    </p>
                </div>
            </div>

            <div class="option-card">
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=1000&auto=format&fit=crop" alt="Sécurité" class="option-img">
                <div class="option-content">
                    <h3>Le PDO (Sécurité)</h3>
                    <span class="option-subtitle">Le traducteur garde du corps</span>
                    <p>
                        C'est un outil qui nettoie tout ce que l'utilisateur tape. Il empêche les pirates d'envoyer des commandes malveillantes à ma base de données (Injections SQL).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-card conclusion-card">
        <h2 class="detail-title">Pourquoi cette veille est essentielle ?</h2>
        <p class="conclusion-text">
            Suivre l'évolution de PHP me permet de ne pas utiliser de vieilles méthodes dépassées. Par exemple, sur mon <strong>Système de Réservation</strong>, j'utilise la programmation objet (POO) et PDO pour que le code soit facile à modifier et totalement sécurisé pour les patients.
        </p>
    </section>

    <div class="project-footer-action">
        <a href="index.php" class="btn-back">
            &larr; Retour à l'accueil
        </a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
