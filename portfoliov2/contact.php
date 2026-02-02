<?php 
    $titre = "Contact";
    $pageActuelle = "contact"; 
    include 'includes/header.php'; 
?>


</br>
<div class="contact-container">

    <div class="contact-visual">
        <div class="avatar-glow"></div>
        <img src="assets/img/moi.png" alt="Youssef" class="avatar-3d">
    </div>

    <div class="contact-content">
        <h2 class="contact-title">Me contacter</h2>
        <p class="contact-text">
            Je suis actuellement à la recherche d'opportunités en développement.
            N'hésitez pas à me contacter par email ou via LinkedIn.
        </p>

<div class="contact-links">
    
    <a href="mailto:nasefyoussef@outlook.com" class="big-link-card">
        <div class="link-icon">📧</div>
        <div class="link-details">
            <h4>M'envoyer un email</h4>
            <span>nasefyoussef@outlook.com</span>
        </div>
    </a>

    <a href="https://www.linkedin.com/in/youssefnasef/" target="_blank" class="big-link-card">
        <div class="link-icon">💼</div>
        <div class="link-details">
            <h4>Mon LinkedIn</h4>
            <span>linkedin.com/in/youssefnasef</span>
        </div>
    </a>

    <div class="big-link-card" style="cursor: default;">
        <div class="link-icon">📍</div>
        <div class="link-details">
            <h4>Basé à</h4>
            <span>Paris & Île-de-France</span>
        </div>
    </div>

</div>

</div>

<?php include 'includes/footer.php'; ?>