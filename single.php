<?php get_header(); ?>
<single_template>
    <?php
    while (have_posts()) {
        the_post(); ?>
            

    <?php } ?>
    </single_template>