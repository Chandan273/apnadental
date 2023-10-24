<?php 
    get_header(); 
?>
<?php if(have_posts()): the_post(); ?>
    <span class="title-bg"><?php the_title(); ?></span>
    <?php the_content(); ?>
<?php endif; ?>    
<?php 
    get_footer(); 
?>
