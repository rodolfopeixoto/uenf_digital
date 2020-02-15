<?php
	$columns = univero_get_config('blog_columns', 1);
	$bcol = floor( 12 / $columns );
	$class = 'col-md-'.$bcol.($columns > 1 ? ' col-sm-6' : '');
?>
<div class="style-grid">
    <div class="row">
        <?php $count = 1; while ( have_posts() ) : the_post(); ?>
            <div class="<?php echo esc_attr($class); ?> <?php echo esc_attr($count%$columns == 1 ? ' md-clearfix':''); ?> <?php echo esc_attr(($columns > 1 && $count%2 == 1) ? ' sm-clearfix' : ''); ?>">
                <?php get_template_part( 'post-formats/loop/inner-grid' ); ?>
            </div>
        <?php $count++; endwhile; ?>
    </div>
</div>
