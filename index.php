<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <title></title>
    </head>
    <body>
        <div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <p class="first-iloveyou"><?php the_title(); ?></p>
                        <p><?php the_content(); ?></p>
                        <hr> <?php endwhile;
           else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        </div>   
    </body>
</html>
