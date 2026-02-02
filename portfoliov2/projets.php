<?php 
    $titre = "Mes Projets";
    $pageActuelle = "projets"; 
    include 'includes/header.php'; 
?>

<header class="page-header" style="background-image: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.9)), url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070&auto=format&fit=crop');">
    <h1 class="page-title">Mes Réalisations</h1>
    <p class="page-subtitle">Développement Web, Applications & Infrastructure Réseau.</p>
</header>

<div class="content-wrapper">

    <div style="text-align: center; margin-bottom: 60px;">
        <p style="color: #94a3b8; max-width: 700px; margin: 0 auto;">
            Cliquez sur un projet pour accéder à sa page de présentation détaillée.
        </p>
    </div>

    <div class="projects-grid">
        
        <a href="vtc.php" class="project-card">
            <div class="card-image">
                <img src="assets/img/vtc.jpg" alt="Dashboard VTC">
            </div>
            <div class="card-info">
                <h3>Site Chauffeur VTC</h3>
                <p>Gestion de flotte en PHP/MVC.</p>
                <div class="tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
            </div>
        </a>

        <a href="almi.php" class="project-card">
            <div class="card-image">
                <img src="assets/img/gestionalmi.jpg" alt="Gestion stock Almi">
            </div>
            <div class="card-info">
                <h3>Gestion de Stock Vans</h3>
                <p>App Web interne ALMI Logistique.</p>
                <div class="tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
            </div>
        </a>

      <a href="biblio.php" class="project-card">
            <div class="card-image">
                <img src="assets/img/biblio.jpg" alt="Bibliothèque Communautaire">
            </div>
            <div class="card-info">
                <h3>BiblioShare</h3>
                <p>Plateforme collaborative de partage de livres.</p>
                <div class="tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
            </div>
        </a> 

<a href="todolist.php" class="project-card">
            <div class="card-image">
                <img src="assets/img/todolist.jpg" alt="Application To Do List">
            </div>
            <div class="card-info">
                <h3>To Do List</h3>
                <p>Application simple de gestion de tâches.</p>
                <div class="tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
            </div>
        </a> 
   <a href="free.php" class="project-card">
            <div class="card-image">
                <img src="assets/img/free.jpg" alt="Gestion Interventions Free">
            </div>
            <div class="card-info">
                <h3>Gestion Interventions Free</h3>
                <p>Automatisation du suivi clients et techniciens.</p>
                <div class="tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
            </div>
        </a>
   <a href="apprentissage.php" class="project-card">
            <div class="card-image">
                <img src="assets/img/apprentissage.jpg" alt="Plateforme E-learning">
            </div>
            <div class="card-info">
                <h3>Plateforme E-learning</h3>
                <p>Site de cours de développement Web.</p>
                <div class="tags">
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
            </div>
        </a>
   <a href="recette.php" class="project-card">
            <div class="card-image">
                <img src="assets/img/recette.jpg" alt="Application Cooksy Recettes">
            </div>
            <div class="card-info">
                <h3>COOKSY - Recettes</h3>
                <p>Plateforme pour trouver des idées de plats.</p>
                <div class="tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
            </div>
        </a>
    <a href="rdv.php" class="project-card">
            <div class="card-image">
                <img src="assets/img/rdv.jpg" alt="rdv medical">
            </div>
            <div class="card-info">
                <h3>Système de réservation</h3>
                <p>Plateforme complète de gestion de rendez-vous pour cabinet médical.</p>
                <div class="tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
            </div>
        </a>
    </div> </div> <?php include 'includes/footer.php'; ?>