<?php if ( have_rows('text_and_image') ): ?>
    <?php while( have_rows('text_and_image') ): the_row(); 
        if (get_row_layout() == 'text_and_image_module'):
            $headline = get_sub_field('headline');
            $cta = get_sub_field('cta');
            $imageRight = get_sub_field('image_right'); 
            $imageLeft = get_sub_field('image_left'); 
            $backgroundHex = get_sub_field('background_color'); 
            $backgroundColorScroll = get_sub_field('background_color_scroll');
            $headlineHex = get_sub_field('headline_text_color');
            $ctaHex = get_sub_field('cta_text_color'); ?>
            <div class="text-image section" style="background-color: 
                <?php echo (class_exists('scroll-into-view')) ? $backgroundColorScroll : $backgroundHex ?>">
                <?php if ($imageLeft): ?>
                    <div class="text-image__left" style="background-image: url(<?php echo $imageLeft; ?>);">
                    </div>
                <?php endif; ?>
                <div class="text-image__content">
                    <?php if ($headline): ?>
                        <h1 class="text-image-headline" style="color: <?php echo $headlineHex; ?>"><?php echo $headline; ?></h1>
                    <?php endif; ?>
                    <?php if ($cta): ?>
                        <p class="text-image-cta" style="color: <?php echo $ctaHex; ?>"><?php echo $cta; ?></p>
                    <?php endif; ?>
                </div>
                <?php if ($imageRight): ?>
                    <div class="text-image__right" style="background-image: url(<?php echo $imageRight; ?>);">
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>