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
                        ?>
                            <div class="project__text-block" style="background-color: <?php echo $backgroundColor; ?>; background-image: url(<?php echo $backgroundImage; ?>);">
                                <div class="inner">
                                    <h1 style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                                    <p style="color: <?php echo $bodyText; ?>"><?php echo $bodyText; ?></p>
                                </div>
                            </div>
                        <?php elseif(get_row_layout() == 'image_and_text_block'):
                            $header = get_sub_field('heading');
                            $headerColor = get_sub_field('heading_color');
                            $bodyText = get_sub_field('body_text');
                            $bodyTextColor = get_sub_field('body_text_color');
                            $imageRight = get_sub_field('image_right');
                            $imageLeft = get_sub_field('image_left');
                            $backgroundColor = get_sub_field('background_color');
                        ?>
                            <div class="project__image-text" style="background-color: <?php echo $backgroundColor; ?>;">
                                <?php if ($imageLeft): ?>
                                    <div class="image-text-image">
                                        <img src="<?php echo $imageLeft; ?>" alt="" />
                                    </div>
                                <?php endif; ?>
                                <div class="image-text-content">
                                    <h1 style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                                    <?php echo $bodyText; ?>
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
                        ?>
                            <div class="project__image-block" style="background-color: <?php echo $backgroundColor; ?>">
                                <div class="image-block-content">
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
                        ?>
                            <div class="project__text-block-2" style="background-color: <?php echo $backgroundColor; ?>">
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
                        ?>
                            <div class="project__gallery-grid" style="<?php echo $backgroundColor; ?>">
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
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php }
?>

<?php get_footer(); ?>