<?php get_header(); 

    while(have_posts()) {
        the_post(); ?>
        <div class="project">
            <div>
                <?php if ( have_rows('text_block') ): ?>
                    <?php while( have_rows('text_block') ): the_row(); ?>
                        <?php if (get_row_layout() == 'text_block_module'):
                            $header = get_sub_field('header');
                            $headerColor = get_sub_field('header_color');
                            $bodyText = get_sub_field('body_text');
                            $bodyTextColor = get_sub_field('body_text_color');
                            $backgroundImage = get_sub_field('background_image');
                        ?>
                            <div class="project__text-block" style="background-image: url(<?php echo $backgroundImage; ?>);">
                                <div class="inner">
                                    <h1 style="color: <?php echo $headerColor; ?>"><?php echo $header; ?></h1>
                                    <p style="color: <?php echo $bodyText; ?>"><?php echo $bodyText; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows('image_text_block') ): ?>
                    <?php while( have_rows('image_text_block') ): the_row(); ?>
                        <?php if (get_row_layout() == 'image_text_block_module'):
                            $header = get_sub_field('header');
                            $headerColor = get_sub_field('header_color');
                            $bodyText = get_sub_field('body_text');
                            $bodyTextColor = get_sub_field('body_text_color');
                            $imageRight = get_sub_field('right_image');
                            $backgroundColor = get_sub_field('background_color');
                        ?>
                            <div class="project__image-text" style="background-color: <?php echo $backgroundColor; ?>;">
                                <div class="image-text-content">
                                    <h1 style="color: <?php echo $headerColor; ?>"><?php echo $header; ?></h1>
                                    <p style="color: <?php echo $bodyTextColor; ?>"><?php echo $bodyText; ?></p>
                                </div>
                                <div class="image-text-image">
                                    <img src="<?php echo $imageRight; ?>" alt="" />
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