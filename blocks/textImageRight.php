<?php if ( have_rows('text_and_image_right') ): ?>
    <?php while( have_rows('text_and_image_right') ): the_row(); 
        if (get_row_layout() == 'text_and_image_right_module'):
            $headline = get_sub_field('headline');
            $cta = get_sub_field('cta');
            $image = get_sub_field('image'); 
            $backgroundHex = get_sub_field('background_color'); 
            $backgroundColorScroll = get_sub_field('background_color_scroll');
            $headlineHex = get_sub_field('headline_text_color');
            $ctaHex = get_sub_field('cta_text_color'); ?>
            <div class="text-image-right section" style="background-color: 
                <?php echo (class_exists('scroll-into-view')) ? $backgroundColorScroll : $backgroundHex ?>">
                <div class="text-image-right__content">
                    <?php if ($headline): ?>
                        <h1 class="text-image-right-headline" style="color: <?php echo $headlineHex; ?>"><?php echo $headline; ?></h1>
                    <?php endif; ?>
                    <?php if ($cta): ?>
                        <p class="text-image-right-cta" style="color: <?php echo $ctaHex; ?>"><?php echo $cta; ?></p>
                    <?php endif; ?>
                </div>
                <?php if ($image): ?>
                    <div class="text-image-right__image" style="background-image: url(<?php echo $image; ?>);">
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>