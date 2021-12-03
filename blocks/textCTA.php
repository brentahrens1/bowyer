<?php if ( have_rows('text_and_cta_module') ): ?>
    <?php while( have_rows('text_and_cta_module') ): the_row(); 
        if (get_row_layout() == 'text_and_cta'):
            $headline = get_sub_field('headline');
            $cta = get_sub_field('cta');
            $description = get_sub_field('description'); 
            $backgroundHex = get_sub_field('background_color'); 
            $backgroundColorScroll = get_sub_field('background_color_scroll');
            $headlineHex = get_sub_field('headline_color');
            $descriptionColor = get_sub_field('description_color');
            $ctaHex = get_sub_field('cta_color'); ?>
            <div class="text-cta section" style="background-color: 
                <?php echo (class_exists('scroll-into-view')) ? $backgroundColorScroll : $backgroundHex ?>">
                <div class="text-cta__headline">
                    <?php if ($headline): ?>
                        <h1 class="text-cta-headline" style="color: <?php echo $headlineHex; ?>"><?php echo $headline; ?></h1>
                    <?php endif; ?>
                </div>
                <div class="text-cta__content">
                    <?php if ($description): ?>
                        <p class="text-cta-description" style="color: <?php echo $descriptionColor; ?>"><?php echo $description; ?></p>
                    <?php endif; ?>
                    <?php if ($cta): ?>
                        <p class="text-cta-cta" style="color: <?php echo $ctaHex; ?>"><?php echo $cta; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>