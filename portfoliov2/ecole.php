<?php 
    $titre = "Mon École";
    $pageActuelle = "ecole"; 
    include 'includes/header.php'; 
?>
<header class="page-header" style="margin-top: 0 !important; background-image: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.9)), url('https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=2070&auto=format&fit=crop');">
    <h1 class="page-title">Mon École</h1>
    <p class="page-subtitle">Acquisition des compétences fondamentales en développement et réseaux (BTS SIO).</p>
</header>

<div class="content-wrapper">

<section class="school-card">
        
        <div class="school-logo-wrapper">
            <img src="assets/img/logo-cfa.png" alt="Logo CFA Insta" class="real-logo">
        </div>
        
        <div class="school-info">
             <h2>
                <a href="https://cfa-insta.fr//" target="_blank" class="company-link" title="Visiter le site officiel">
                    CFA INSTA
                </a>
            </h2>
            <p>
                Située à Paris, le CFA Insta est une école spécialisée dans le numérique et l'informatique en <strong>alternance</strong>. 
                L'école privilégie une approche concrète : on apprend en faisant, avec des intervenants issus du monde professionnel.
            </p>
            <div class="school-features">
                <span class="badge">📍 Paris</span>
                <span class="badge">🎓 Diplôme d'État</span>
                <span class="badge">💼 100% Alternance</span>
            </div>
        </div>
    </section>

    <section class="bts-section">
        <h2>BTS SIO</h2>
        <p class="bts-desc">
            Le Brevet de Technicien Supérieur aux <strong>Services Informatiques aux Organisations</strong> prépare aux métiers de l'informatique d'entreprise. 
            Il se divise en deux spécialités distinctes :
        </p>

        <div class="options-grid">
            
            <div class="option-card">
                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=1000&auto=format&fit=crop" alt="Code" class="option-img">
                <div class="option-content">
                    <h3>Option SLAM</h3>
                    <span class="option-subtitle">Solutions Logicielles & Applications Métiers</span>
                    <p>
                        C'est l'option "Développement". On apprend à concevoir des programmes, des sites web et des applications mobiles. On écrit du code pour créer des solutions.
                    </p>
                    <ul class="job-list">
                        <li>Développeur Web / Mobile</li>
                        <li>Analyste Programmeur</li>
                        <li>Intégrateur Web</li>
                    </ul>
                </div>
            </div>

            <div class="option-card">
                <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1000&auto=format&fit=crop" alt="Réseau" class="option-img">
                <div class="option-content">
                    <h3>Option SISR</h3>
                    <span class="option-subtitle">Solutions d'Infrastructure, Systèmes & Réseaux</span>
                    <p>
                        C'est l'option "Réseau". On apprend à gérer des serveurs, configurer des routeurs, assurer la cybersécurité et la maintenance du parc informatique.
                    </p>
                    <ul class="job-list">
                        <li>Administrateur Réseaux</li>
                        <li>Technicien Support</li>
                        <li>Expert Cybersécurité</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

<section class="school-card" style="margin-bottom: 0;">
        <div class="school-info" style="width: 100%;">
            <h2 style="color: #f1f5f9; font-size: 1.8rem;">Pourquoi l'option SLAM ?</h2>
            <p>
                J'ai choisi cette spécialisation par pure passion pour la <strong>création</strong>. 
                Le développement est pour moi le meilleur moyen de transformer une idée abstraite en un outil concret et utile.
            </p>
            <p style="margin-top: 15px;">
                J'aime la logique de programmation, la résolution de problèmes et le défi technique que représente la construction d'un site ou d'une application.
                Mon objectif est de maîtriser les technologies modernes pour devenir un développeur complet capable de concevoir des solutions performantes.
            </p>
        </div>
    </section>

</div>

<?php include 'includes/footer.php'; ?>