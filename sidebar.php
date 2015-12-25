<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="sidebar">
            <h2 ><?php _e('Categories'); ?></h2>
            <ul >
                <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
            </ul>
            <h2 ><?php _e('Archives'); ?></h2>
            <ul >
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>
    </body>
</html>
