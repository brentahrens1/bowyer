<?php if ( have_rows('text_module') ): ?>
    <?php while( have_rows('text_module') ): the_row(); 
        if (get_row_layout() == 'text_module_content'):
            $headline = get_sub_field('headline');
            $bodyText = get_sub_field('body_text');
            $backgroundImage = get_sub_field('background_image'); 
            $backgroundHex = get_sub_field('background_hex_color');
            $headlineHex = get_sub_field('headline_text_color');
            $bodyTextHex = get_sub_field('body_text_color');
            $backgroundColorScroll = get_sub_field('background_color_scroll'); ?>
            <div class="text-module section" style="background-color: 
                <?php echo (class_exists('scroll-into-view')) ? $backgroundColorScroll : $backgroundHex ?>">
                <?php if ($backgroundImage): ?>
                    <div class="text-module__image">
                        <img class="background-image" src="<?php echo $backgroundImage; ?>" alt="<?php echo $headline; ?>" /> 
                    </div>
                <?php endif; ?>
                <?php if ($headline): ?>
                    <h1 class="text-module__headline" style="color: <?php echo $headlineHex; ?>"><?php echo $headline; ?></h1>
                <?php endif; ?>
                <?php if ($bodyText): ?>
                    <p class="text-module__body-text" style="color: <?php echo $bodyTextHex; ?>"><?php echo $bodyText; ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>