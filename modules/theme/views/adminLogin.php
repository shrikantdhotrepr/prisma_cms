<?php echo doctype(); ?>
<html  class="bg-black">
    <head>
        <?php
        echo tag('meta', array('charset' => 'UTF-8'), null, FALSE);
        echo head_title(ADMIN . " - Login");
        echo tag('meta', array('content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no', 'name' => 'viewport'), null, FALSE);
        $files = array('bootstrap.min.css', 'font-awesome.min.css', 'AdminLTE.css');
        echo stylesheets($asset_path . 'css', $files);
        ?>
    </head>
    <body  class="bg-black">

        <?php
        $this->load->view($module . '/' . $view_file);
        $files = array('jquery.min.js', 'bootstrap.min.js');
        echo scripts($asset_path . 'js', $files);
        ?>       

    </body>
</html>