<?php get_header(); ?>

<?php
if( have_rows('blocks') ):
    while ( have_rows('blocks') ) : the_row();
        if( get_row_layout() == 'text_module' ):
            $heading = get_sub_field('heading'); 
            $bodyText = get_sub_field('body_text'); 
            $backgroundImage = get_sub_field('background_image'); 
            $backgroundColor = get_sub_field('background_color'); 
            $headingColor = get_sub_field('heading_color'); 
            $bodyTextColor = get_sub_field('body_text_color'); 
            ?>
            <div class="text-module section" style="background-color: <?php echo $backgroundColor; ?>">
                <div class="text-module-inner">
                    <?php if ($backgroundImage): ?>
                        <div class="text-module-inner__image">
                            <img class="background-image" src="<?php echo $backgroundImage; ?>" alt="<?php echo $heading; ?>" /> 
                        </div>
                    <?php endif; ?>
                    <?php if ($heading): ?>
                        <h1 class="text-module-inner__headline" style="color: <?php echo $headlineColor; ?>"><?php echo $heading; ?></h1>
                    <?php endif; ?>
                    <?php if ($bodyText): ?>
                        <p class="text-module-inner__body-text" style="color: <?php echo $bodyTextColor; ?>"><?php echo $bodyText; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php elseif(get_row_layout() == 'image_block'):
            $image = get_sub_field('image');
            $backgroundColor = get_sub_field('background_color');
        ?>
            <div class="image-block" style="background-color: <?php echo $backgroundColor; ?>">
                <div class="image-block-content">
                    <img src="<?php echo $image; ?>" alt="" />
                </div>
            </div>
        <?php elseif( get_row_layout() == 'text_and_image' ): 
            $heading = get_sub_field('heading'); 
            $cta = get_sub_field('cta'); 
            $imageRight = get_sub_field('image_right'); 
            $imageLeft = get_sub_field('image_left'); 
            $headingColor = get_sub_field('heading_color'); 
            $ctaColor = get_sub_field('cta_color'); 
            $backgroundColor = get_sub_field('background_color');            
            ?>
            <div class="text-image section" style="background-color: <?php echo $backgroundColor ?>">
                <div class="text-image-inner">
                    <?php if ($imageLeft): ?>
                        <div class="text-image-inner__left" style="background-image: url(<?php echo $imageLeft; ?>);">
                        </div>
                    <?php endif; ?>
                    <div class="text-image-inner__content">
                        <div class="text-image-inner-container">
                            <?php if ($heading): ?>
                                <h1 class="text-image-inner-headline" style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                            <?php endif; ?>
                            <?php if ($cta): ?>
                                <p class="text-image-inner-cta" style="color: <?php echo $ctaColor; ?>"><?php echo $cta; ?>
                                    <span><img src="<?php echo get_theme_file_uri('/images/right-arrow.png'); ?>" alt="" /></span>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($imageRight): ?>
                        <div class="text-image-inner__right" style="background-image: url(<?php echo $imageRight; ?>);">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php elseif( get_row_layout() == 'text_and_cta' ): 
            $heading = get_sub_field('heading'); 
            $headingColor = get_sub_field('heading_color'); 
            $cta = get_sub_field('cta'); 
            $ctaColor = get_sub_field('cta_color'); 
            $bodyText = get_sub_field('body_text'); 
            $bodyTextColor = get_sub_field('body_text_color'); 
            $backgroundColor = get_sub_field('background_color'); 
            ?>
            <div class="text-cta section" style="<?php echo $backgroundColor; ?>">
                <div class="text-cta-inner">
                    <div class="text-cta-inner__headline">
                        <?php if ($heading): ?>
                            <h1 class="text-cta-inner-headline" style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                        <?php endif; ?>
                    </div>
                    <div class="text-cta-inner__content">
                        <?php if ($bodyText): ?>
                            <p class="text-cta-inner-description" style="color: <?php echo $bodyTextColor; ?>"><?php echo $bodyText; ?></p>
                        <?php endif; ?>
                        <?php if ($cta): ?>
                            <p class="text-cta-inner-cta" style="color: <?php echo $ctaColor; ?>"><?php echo $cta; ?>
                                <span><img src="<?php echo get_theme_file_uri('/images/right-arrow.png'); ?>" alt="" /></span>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php elseif (get_row_layout() == 'image_hover_grid'):
                $blocks = get_sub_field('image_block');
            ?>  
            <div class="format-container">
                <div class="format">
                    <div class="format-inner">
                        <?php foreach($blocks as $block): ?>
                            <div class="format-inner__block" style="background-color: <?php echo $block['background_color']; ?>">
                                <?php if ($block['heading']): ?>
                                    <h2 style="color: <?php echo $block['heading_color']; ?>"><?php echo $block['heading'];?></h2>
                                <?php endif; ?>
                                <?php if ($block['cta']): ?>
                                    <p style="color: <?php echo $block['cta_color']; ?>"><?php echo $block['cta'];?>
                                        <span><img src="<?php echo get_theme_file_uri('/images/right-arrow.png'); ?>" alt="" /></span>
                                    </p>
                                <?php endif; ?>
                                <?php if ($block['image']): ?>
                                    <img src="<?php echo $block['image'];?>" />
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
    <?php // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif; ?>

<?php get_footer(); ?>