<?php if ( have_rows('text_module') ): ?>
    <?php while( have_rows('text_module') ): the_row(); 
        if (get_row_layout() == 'text_module_content'):
            $headline = get_sub_field('headline');
            $bodyText = get_sub_field('body_text');
            $backgroundImage = get_sub_field('background_image'); ?>
            <div class="text-module">
                <?php if ($backgroundImage): ?>
                    <div class="text-module__image">
                        <img class="background-image" src="<?php echo $backgroundImage; ?>" alt="<?php echo $headline; ?>" /> 
                    </div>
                <?php endif; ?>
                <h1 class="text-module__headline"><?php echo $headline; ?></h1>
                <p class="text-module__body-text"><?php echo $bodyText; ?></p>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>