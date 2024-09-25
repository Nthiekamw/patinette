<?php wp_footer() ?>
</body>
</html>

<div class="footer-container">
<div class="footer-content">
<p>&copy; <?php echo date('Y'); ?> Patinette. All rights reserved.</p>
<nav>
<a href="<?php echo home_url('/about'); ?>">About Us</a> |
<a href="<?php echo home_url('/contact'); ?>">Contact</a> |
<a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a>
</nav>
</div>
<div class="footer-social">
<a href="https://facebook.com" target="_blank">Facebook</a> |
<a href="https://instagram.com" target="_blank">Instagram</a>
</div>
</div>
</footer>
 
<?php wp_footer(); ?>
</body>
</html>



<footer>
    <div class="footer-container">
        <!-- Colonne 1 : SAV -->
        <div class="footer-column">
            <h4>Service Après-Vente (SAV)</h4>
            <ul>
                <li><a href="sav.html">Assistance en ligne</a></li>
                <li><a href="sav.html">Téléphone : +33  615013694</a></li>
                <li><a href="sav.html">Email : support@trotinettes.com</a></li>
            </ul>
        </div>
 
        <!-- Colonne 2 : Réseaux sociaux -->
        <div class="footer-column">
            <h4>Suivez-nous</h4>
            <div class="social-icons">
                <a href="https://facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/images/face.jpeg"alt="Facebook"></a>
                <a href="https://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/images/twee.jpeg" alt="Twitter"></a>
                <a href="https://instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/images/insta.jpeg" alt="Instagram"></a>
                <a href="https://linkedin.com"><img src="<?php echo get_template_directory_uri(); ?>/images/ind.jpeg" alt="LinkedIn"></a>
            </div>
        </div>
 
        <!-- Colonne 3 : Contact -->
        <div class="footer-column">
            <h4>Contactez-nous</h4>
            <ul>
                <li><a href="contact.html">Formulaire de contact</a></li>
                <li><a href="contact.html">Téléphone : +33 615013694</a></li>
                <li><a href="contact.html">Email : info@trotinettes.com</a></li>
            </ul>
        </div>
 
        <!-- Colonne 4 : Informations légales -->
        <div class="footer-column">
            <h4>Informations</h4>
            <ul>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="mentions-legales.html">Mentions légales</a></li>
                <li><a href="conditions.html">Conditions générales</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
 
<div class="content">
    <!-- Contenu principal ici -->
</div>
 