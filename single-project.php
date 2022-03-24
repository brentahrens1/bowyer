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
                            <div class="project__text-block" style="background-color: <?php echo $backgroundColor; ?>; background-image: url(<?php echo $backgroundImage; ?>);">
                                <div class="inner" style="border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
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
                        ?>
                            <div class="project__image-text" style="background-color: <?php echo $backgroundColor; ?>; border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
                                <?php if ($imageLeft): ?>
                                    <div class="image-text-image">
                                        <img src="<?php echo $imageLeft; ?>" alt="" />
                                    </div>
                                <?php endif; ?>
                                <div class="image-text-content">
                                    <h1 style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                                    <?php echo $bodyText; ?>
                                    <?php if ($cta): ?>
                                        <p class="project-cta" style="color: <?php echo $headingColor; ?>"><?php echo $cta;?>
                                            <span><img src="<?php echo get_theme_file_uri('/images/right-arrow.png'); ?>" alt="" /></span>
                                        </p>
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
                            $heading = get_sub_field('heading');
                            $bodyText = get_sub_field('body_text');
                            $headingColor = get_sub_field('heading_color');
                            $bodyTextColor = get_sub_field('body_text_color');
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
                                    <div class="text-block-2-content__inner-left">
                                        <h1 style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                                        <p style="color: <?php echo $bodyTextColor; ?>"><?php echo $bodyText; ?></p>
                                    </div>
                                    <?php elseif ($textAlignment === 'center'): ?>
                                        <div class="text-block-2-content__inner-center">
                                        <h1 style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                                        <p style="color: <?php echo $bodyTextColor; ?>"><?php echo $bodyText; ?></p>
                                    </div>
                                    <?php elseif ($textAlignment === 'right'): ?>
                                        <div class="text-block-2-content__inner-right">
                                        <h1 style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                                        <p style="color: <?php echo $bodyTextColor; ?>"><?php echo $bodyText; ?></p>
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
                        <?php elseif (get_row_layout() == 'full_bleed_image'):
                            $fullImage = get_sub_field('full_image');
                        ?>  
                        <div class="full-bleed-image">
                            <img src="<?php echo $fullImage; ?>" alt="" />
                        </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php }
?>

<?php get_footer(); ?>