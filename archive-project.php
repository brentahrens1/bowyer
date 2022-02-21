<?php 
/*
    Template Name: Project
*/
get_header();
?>


<div class="project">
    <div class="project-archive">
        <?php $pressPosts = new WP_Query(array(
            'post_type' => 'project'
        ));
    
        while($pressPosts->have_posts()) {
            $pressPosts->the_post(); ?>
            <?php if ( have_rows('blocks') ): ?>
                <?php while( have_rows('blocks') ): the_row(); ?>
                    <?php if (get_row_layout() == 'project_tease'):
                        $image = get_sub_field('image');
                        $bodyText = get_sub_field('bodytext');
                        $bt = get_sub_field('bt'); 
                        $br = get_sub_field('br'); 
                        $bb = get_sub_field('bb'); 
                        $bl = get_sub_field('bl');
                    ?>
                        <a class="project__tease" href="<?php the_permalink(); ?>" style="border-top: <?php echo $bt;?>; border-right: <?php echo $br;?>; border-bottom: <?php echo $bb;?>; border-left: <?php echo $bl;?>;">
                                <div class="tease--image">
                                    <img src="<?php echo $image; ?>" alt="Project | Image" />
                                </div>
                                <div class="tease--content">
                                    <p><?php echo $bodyText;?></p>
                                </div>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php }?>
        </div>
    </div>

<?php get_footer(); ?>