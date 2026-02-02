</main> 
<footer class="site-footer">
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Youssef Nasef - PORTFOLIO. Tous droits réservés.</p>
        <p>Développeur web & applications.</p>
    </div>

    <div class="footer-links">
        <div class="socials">
            <a href="mailto:nasefyoussef@outlook.com" class="footer-link">Contactez-moi (Email)</a>
            <a href="https://www.linkedin.com/in/youssefnasef/" target="_blank" class="footer-link">LinkedIn</a>
            <a href="https://github.com/youssna" target="_blank" class="footer-link">GitHub</a>
        </div>
        
        <div class="legal-links">
            <a href="mentions-legales.php" class="footer-link">Mentions Légales</a>
            </div>
    </div>
</footer>
<script>
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
<script src="assets/js/script.js"></script>
</body>
</html>