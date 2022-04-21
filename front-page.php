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
            $bt = get_sub_field('bt'); 
            $br = get_sub_field('br'); 
            $bb = get_sub_field('bb'); 
            $bl = get_sub_field('bl'); 
            ?>
            <div class="text-module section" style="background-color: <?php echo $backgroundColor;?>;">
                <div class="text-module-inner" style="border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
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
            $bt = get_sub_field('bt'); 
            $br = get_sub_field('br'); 
            $bb = get_sub_field('bb'); 
            $bl = get_sub_field('bl');
        ?>
            <div class="image-block" style="background-color: <?php echo $backgroundColor; ?>;">
                <div class="image-block-content" style="border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
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
            $bt = get_sub_field('bt'); 
            $br = get_sub_field('br'); 
            $bb = get_sub_field('bb'); 
            $bl = get_sub_field('bl');          
            ?>
            <div class="text-image section" style="background-color: <?php echo $backgroundColor ?>">
                <div class="text-image-inner" style="border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
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
            $backgroundColorScroll = get_sub_field('background_color_scroll');
            $bt = get_sub_field('bt'); 
            $br = get_sub_field('br'); 
            $bb = get_sub_field('bb'); 
            $bl = get_sub_field('bl');
            ?>
            <div class="text-cta section" style="<?php echo $backgroundColor; ?>">
                <div class="text-cta-inner" style="border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
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
                            <div class="format-inner__block" style="background-color: <?php echo $block['background_color'];?>; border-top: <?php echo $block['bt'];?>; border-right: <?php echo $block['br'];?>; border-bottom: <?php echo $block['bb'];?>; border-left: <?php echo $block['bl'];?>;">
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
            <?php elseif (get_row_layout() == 'carousel'):
                $blocks = get_sub_field('carousel_blocks');
            ?>  
            <div class="carousel">
                <div class="carousel-inner">
                    <?php foreach($blocks as $block): ?>
                        <div class="carousel-inner__block" style="background-color: <?php echo $block['background_color'];?>; border-top: <?php echo $block['bt'];?>; border-right: <?php echo $block['br'];?>; border-bottom: <?php echo $block['bb'];?>; border-left: <?php echo $block['bl'];?>;">
                            <div class="carousel-image-container">
                                <?php if ($block['image']): ?>
                                    <img src="<?php echo $block['image'];?>" />
                                <?php endif; ?>
                                <?php if ($block['hovered_image']): ?>
                                    <img class="hovered-image" src="<?php echo $block['hovered_image'];?>" />
                                <?php endif; ?>
                            </div>
                            <div class="carousel-content">
                                <?php if ($block['title']): ?>
                                    <h2 style="color: <?php echo $block['title_color']; ?>"><?php echo $block['title'];?></h2>
                                <?php endif; ?>
                                <?php if ($block['description']): ?>
                                    <p style="color: <?php echo $block['description_color']; ?>"><?php echo $block['description'];?></p>
                                <?php endif; ?>
                            </div>                            
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-right">Right</button>
                <button class="carousel-left">Left</button>
            </div>
            <?php elseif (get_row_layout() == 'full_bleed_image'):
                $fullImage = get_sub_field('full_image');
            ?>  
                <div class="full-bleed-image" style="border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
                    <img src="<?php echo $fullImage; ?>" alt="" />
                </div>
            <?php elseif (get_row_layout() == 'contact_form'):
                $contact = get_sub_field('contact');
            ?>  
                <div class="contact-form">
                    <?php echo $contact; ?>
                </div>
            <?php endif; ?>
    <?php // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif; ?>

<?php get_footer(); ?>