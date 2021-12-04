<?php if ( have_rows('format_block') ): ?>
    <?php while( have_rows('format_block') ): the_row(); ?>
        <div class="format-container">
            <?php if (get_row_layout() == 'format_block_module'):
                $blocks = get_sub_field('block');
            ?>  
                <div class="format">
                    <?php foreach($blocks as $block): ?>
                        <div class="format__block" style="background-color: 
                        <?php echo (class_exists('scroll-into-view')) ? $block['background_color'] : $block['background_color']; ?>">
                            <?php if ($block['header']): ?>
                                <h2 style="color: <?php echo $block['header_color']; ?>"><?php echo $block['header'];?></h2>
                            <?php endif; ?>
                            <?php if ($block['cta']): ?>
                                <p style="color: <?php echo $block['cta_color']; ?>"><?php echo $block['cta'];?></p>
                            <?php endif; ?>
                            <?php if ($block['image']): ?>
                                <img src="<?php echo $block['image'];?>" />
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
