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
        <?php get_header(); ?>
        <div id="main"> 
            <div id="content">
                <h1>Main Area</h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                        <p><?php the_content(); ?></p>
                        <hr> <?php endwhile;
        else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
            </div>
        <?php get_sidebar(); ?>
        </div>
        <div id="delimiter">
        </div>
        <?php get_footer(); ?>
    </body>
</html>
