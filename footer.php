            <div class="contact-form">
                <p>Sign up for our newsletter, packed with</p>
                <h1>Creative & Inspiring Things</h1>
                <?php echo apply_shortcodes( '[contact-form-7 id="378" title="Contact form 1contact-form-7 id=378 title=Contact form 1"]' ); ?>
            </div>
            <footer class="footer-nav">
                <div class="footer-nav__content">
                    <div class="footer--arrow">
                        <img src="<?php echo get_theme_file_uri('/images/arrow.png'); ?>" />
                    </div>
                    <div class="footer--links">
                        <p>About</p>
                        <p>Instagram</p>
                    </div>
                    <div class="footer--stamp">
                        <p>@ 2022 Bowyer</p>
                    </div>
                </div>
                <img class="footer-nav__pattern" src="<?php echo get_theme_file_uri('/images/footer-background.png'); ?>" />
            </footer>
        <?php wp_footer(); ?>
        </div>
    </body>
</html>