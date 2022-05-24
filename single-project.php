<?php get_header(); 

    while(have_posts()) {
        the_post(); ?>
        <div class="project">
            <div>
                <?php if ( have_rows('blocks') ): ?>
                    <?php while( have_rows('blocks') ): the_row(); ?>
                        <?php if (get_row_layout() == 'text_block'):
                            $heading = get_sub_field('heading');
                            $headingColor = get_sub_field('heading_color');
                            $bodyText = get_sub_field('body_text');
                            $bodyTextColor = get_sub_field('body_text_color');
                            $backgroundImage = get_sub_field('background_image');
                            $backgroundColor = get_sub_field('background_color');
                            $bt = get_sub_field('bt'); 
                            $br = get_sub_field('br'); 
                            $bb = get_sub_field('bb'); 
                            $bl = get_sub_field('bl');
                        ?>
                            <div class="project__text-block" style="background-color: <?php echo $backgroundColor; ?>; background-image: url(<?php echo $backgroundImage; ?>); border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
                                <div class="inner">
                                    <h1 style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                                    <p style="color: <?php echo $bodyTextColor; ?>"><?php echo $bodyText; ?></p>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'image_and_text_block'):
                            $heading = get_sub_field('heading');
                            $headingColor = get_sub_field('heading_color');
                            $bodyText = get_sub_field('body_text');
                            $bodyTextColor = get_sub_field('body_text_color');
                            $imageRight = get_sub_field('image_right');
                            $imageLeft = get_sub_field('image_left');
                            $backgroundColor = get_sub_field('background_color');
                            $bt = get_sub_field('bt'); 
                            $br = get_sub_field('br'); 
                            $bb = get_sub_field('bb'); 
                            $bl = get_sub_field('bl');
                            $cta = get_sub_field('cta');
                            $ctaLink = get_sub_field('cta_link');
                        ?>
                            <div class="project__image-text" style="background-color: <?php echo $backgroundColor; ?>; border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
                                <?php if ($imageLeft): ?>
                                    <div class="image-text-image">
                                        <img src="<?php echo $imageLeft; ?>" alt="" />
                                    </div>
                                <?php endif; ?>
                                <div class="image-text-content">
                                    <h1 style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                                    <div style="<?php echo $bodyTextColor; ?>"><?php echo $bodyText; ?></div>
                                    <?php if ($cta): ?>
                                        <a href="<?php echo $ctaLink; ?>">
                                            <p class="project-cta"><?php echo $cta;?>
                                                <span><img src="<?php echo get_theme_file_uri('/images/right-arrow.png'); ?>" alt="" /></span>
                                            </p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <?php if ($imageRight): ?>
                                    <div class="image-text-image">
                                        <img src="<?php echo $imageRight; ?>" alt="" />
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php elseif(get_row_layout() == 'image_block'):
                            $image = get_sub_field('image');
                            $backgroundColor = get_sub_field('background_color');
                            $bt = get_sub_field('bt'); 
                            $br = get_sub_field('br'); 
                            $bb = get_sub_field('bb'); 
                            $bl = get_sub_field('bl');
                        ?>
                            <div class="project__image-block" style="background-color: <?php echo $backgroundColor; ?>">
                                <div class="image-block-content" style="border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
                                    <img src="<?php echo $image; ?>" alt="" />
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'text_block_2'):
                            $content = get_sub_field('content');
                            $textColor = get_sub_field('text_color');
                            $backgroundColor = get_sub_field('background_color');
                            $textAlignment = get_sub_field('text_alignment');
                            $bt = get_sub_field('bt'); 
                            $br = get_sub_field('br'); 
                            $bb = get_sub_field('bb'); 
                            $bl = get_sub_field('bl');
                        ?>
                            <div class="project__text-block-2" style="background-color: <?php echo $backgroundColor; ?>; border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
                                <div class="text-block-2-content">
                                    <?php if ($textAlignment === 'left'): ?>
                                    <div class="text-block-2-content__inner-left" style="color: <?php echo $textColor; ?>">
                                        <?php echo $content; ?>
                                    </div>
                                    <?php elseif ($textAlignment === 'center'): ?>
                                    <div class="text-block-2-content__inner-center" style="color: <?php echo $textColor; ?>">
                                        <?php echo $content; ?>
                                    </div>
                                    <?php elseif ($textAlignment === 'right'): ?>
                                    <div class="text-block-2-content__inner-right" style="color: <?php echo $textColor; ?>">
                                        <?php echo $content; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'gallery_grid'):
                            $image1 = get_sub_field('image_1');
                            $image2 = get_sub_field('image_2');
                            $image3 = get_sub_field('image_3');
                            $image4 = get_sub_field('image_4');
                            $image5 = get_sub_field('image_5');
                            $image6 = get_sub_field('image_6');
                            $backgroundColor = get_sub_field('background_color');
                            $bt = get_sub_field('bt'); 
                            $br = get_sub_field('br'); 
                            $bb = get_sub_field('bb'); 
                            $bl = get_sub_field('bl');
                        ?>
                            <div class="project__gallery-grid" style="<?php echo $backgroundColor; ?>; border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
                                <div class="gallery-img gallery-img-1">
                                    <img src="<?php echo $image1 ?>" alt="" />
                                </div>
                                <div class="gallery-img gallery-img-2">
                                    <img src="<?php echo $image2 ?>" alt="" />
                                </div>
                                <div class="gallery-img gallery-img-3">
                                    <img src="<?php echo $image3 ?>" alt="" />
                                </div>
                                <div class="gallery-img gallery-img-4">
                                    <img src="<?php echo $image4 ?>" alt="" />
                                </div>
                                <div class="gallery-img gallery-img-5">
                                    <img src="<?php echo $image5 ?>" alt="" />
                                </div>
                                <div class="gallery-img gallery-img-6">
                                    <img src="<?php echo $image6 ?>" alt="" />
                                </div>
                            </div>
                            <?php elseif (get_row_layout() == 'carousel'):
                            $blocks = get_sub_field('carousel_blocks');
                        ?>  
                        <div class="carousel">
                            <div class="carousel-inner">
                                <?php foreach($blocks as $block): ?>
                                    <a href="<?php echo $block['link']; ?>" target="_blank" class="carousel-inner__block" style="background-color: <?php echo $block['background_color'];?>; border-top: <?php echo $block['bt'];?>; border-right: <?php echo $block['br'];?>; border-bottom: <?php echo $block['bb'];?>; border-left: <?php echo $block['bl'];?>;">
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
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <img class="carousel-right" src="<?php echo get_theme_file_uri('/images/arrow.png'); ?>" />
                            <img class="carousel-left" src="<?php echo get_theme_file_uri('/images/arrow.png'); ?>" />
                        </div>
                        <?php elseif (get_row_layout() == 'image_hover_grid'):
                            $blocks = get_sub_field('image_block');
                        ?>  
                        <div class="format-container">
                            <div class="format">
                                <div class="format-inner">
                                    <?php foreach($blocks as $block): ?>
                                        <a href="<?php echo $block['cta_link'] ?>" class="format-inner__block" style="background-color: <?php echo $block['background_color'];?>; border-top: <?php echo $block['bt'];?>; border-right: <?php echo $block['br'];?>; border-bottom: <?php echo $block['bb'];?>; border-left: <?php echo $block['bl'];?>;">
                                            <?php if ($block['heading']): ?>
                                                <h2 style="color: <?php echo $block['heading_color']; ?>"><?php echo $block['heading'];?></h2>
                                            <?php endif; ?>
                                            <?php if ($block['image']): ?>
                                                <img src="<?php echo $block['image'];?>" />
                                            <?php endif; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <?php elseif (get_row_layout() == 'full_bleed_image'):
                            $fullImage = get_sub_field('full_image');
                            $bt = get_sub_field('bt');
                            $br = get_sub_field('br');
                            $bb = get_sub_field('bb');
                            $bl = get_sub_field('bl');
                        ?>  
                        <div class="full-bleed-image" style="border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
                            <img src="<?php echo $fullImage; ?>" alt="" />
                        </div>
                        <?php elseif( get_row_layout() == 'text_home_module' ):
                            $heading = get_sub_field('heading'); 
                            $bodyText = get_sub_field('body_text'); 
                            $backgroundImage = get_sub_field('background_image'); 
                            $backgroundColor = get_sub_field('background_color'); 
                            $headlineColor = get_sub_field('heading_color'); 
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
                        <?php elseif( get_row_layout() == 'text_and_cta' ): 
                            $heading = get_sub_field('heading'); 
                            $headingColor = get_sub_field('heading_color'); 
                            $cta = get_sub_field('cta'); 
                            $ctaLink = get_sub_field('cta_link'); 
                            $bodyText = get_sub_field('body_text'); 
                            $bodyTextColor = get_sub_field('body_text_color'); 
                            $backgroundColor = get_sub_field('background_color'); 
                            $bt = get_sub_field('bt');
                            $br = get_sub_field('br'); 
                            $bb = get_sub_field('bb'); 
                            $bl = get_sub_field('bl');
                            ?>
                            <div class="text-cta section" style="background-color: <?php echo $backgroundColor; ?>;">
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
                                            <a href="<?php echo $ctaLink ?>">
                                                <p class="text-cta-inner-cta"><?php echo $cta; ?>
                                                    <span><img src="<?php echo get_theme_file_uri('/images/right-arrow.png'); ?>" alt="" /></span>
                                                </p>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php elseif (get_row_layout() == 'contact_form'):
                            $contact = get_sub_field('contact');
                        ?>  
                            <div class="contact-form">
                                <?php echo $contact; ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php }
?>

<?php get_footer(); ?>