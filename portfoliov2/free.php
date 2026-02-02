<?php 
    $titre = "Plateforme Gestion Free";
    $pageActuelle = "projets"; 
    include 'includes/header.php'; 
?>

<div style="padding-top: 120px; text-align: center; margin-bottom: 40px;">
    <h1 style="font-size: 3rem; color: #f1f5f9; font-weight: 800;">Plateforme Gestion pour Free</h1>
    <p style="color: #94a3b8; font-size: 1.2rem;">Application pour automatiser et simplifier la gestion des techniciens, clients et interventions.</p>
</div>

<div class="content-wrapper" style="padding-top: 0;">


    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">🧑‍🔧 Onglet Techniciens</h2>
            <ul class="detail-list">
                <li>Liste complète des techniciens avec nom, prénom et coordonnées.</li>
                <li>Recherche rapide par nom ou zone géographique.</li>
                <li>Ajout de techniciens via formulaire dynamique.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">👤 Onglet Clients</h2>
            <ul class="detail-list">
                <li>Tableau complet des clients avec nom, adresse et coordonnées.</li>
                <li>Ajout rapide de clients via formulaire.</li>
                <li>Recherche simplifiée et filtres rapides.</li>
            </ul>
        </div>
    </div>
    
    <div class="detail-grid">
        
        <div class="detail-card">
            <h2 class="detail-title">🛠️ Onglet Interventions</h2>
            <ul class="detail-list">
                <li>Tableau des interventions avec technicien, client, date et statut.</li>
                <li>Ajout et mise à jour des interventions en temps réel.</li>
                <li>Suivi et coordination efficace des rendez-vous.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">🎯 Objectif du projet</h2>
            <ul class="detail-list">
                <li>Simplifier la gestion administrative pour managers et techniciens.</li>
                <li>Automatiser les tâches répétitives et réduire les erreurs.</li>
                <li>Optimiser le suivi des interventions et améliorer la coordination.</li>
            </ul>
        </div>
    </div>
    
    <div class="detail-grid">

        <div class="detail-card">
            <h2 class="detail-title">💡 Pourquoi ce projet est essentiel ?</h2>
            <ul class="detail-list">
                <li>Optimiser la coordination des équipes sur le terrain.</li>
                <li>Assurer une traçabilité complète de toutes les actions.</li>
                <li>Faciliter le travail d'équipe et centraliser les données.</li>
            </ul>
        </div>

        <div class="detail-card">
            <h2 class="detail-title">🚀 Vision pour l'avenir</h2>
            <ul class="detail-list">
                <li>Notifications automatiques pour clients et techniciens.</li>
                <li>Statistiques et rapports sur les interventions et performances.</li>
                <li>Application mobile pour accéder aux plannings en déplacement.</li>
            </ul>
        </div>
    </div>


    <div class="detail-card tech-summary-card">
        <h3 style="color: #f1f5f9; margin-bottom: 15px;">Technologies utilisées</h3>
        <div class="tech-badges" style="justify-content: center;">
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">MySQL</span>
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