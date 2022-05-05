<nav class="bowyer-nav">
    <div class="bowyer-nav__logo">
        <a href="/">
            <img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" />
            <img class="logo-o" src="<?php echo get_theme_file_uri('/images/logo-o.png'); ?>" />
        </a>
    </div>
    <div class="bowyer-nav__burger">
        <img class="target-norm" src="<?php echo get_theme_file_uri('/images/target-norm.png'); ?>" />
        <img class="target-clicked" src="<?php echo get_theme_file_uri('/images/target-click.png'); ?>" />
    </div>
    <div class="bowyer-nav__overlay">
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
            ));
        ?>
    </div>
</nav>