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
                                <div class="image-text-content">
                                    <h1 style="color: <?php echo $headingColor; ?>"><?php echo $heading; ?></h1>
                                    <?php echo $bodyText; ?>
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