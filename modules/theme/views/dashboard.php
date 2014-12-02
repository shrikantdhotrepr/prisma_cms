<?php echo doctype(); ?>

<html>
    <head>
        <?php $this->load->view('admin/media', compact($asset_path)); ?>
    </head>
    <body class="skin-blue">
        <header class="header">
            <?php $this->load->view('admin/header'); ?>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <?php $this->load->view($module . '/includes/left'); ?>
                </section>
            </aside>
            <aside class="right-side">
                <?php $this->load->view($module . '/' . $view_file); ?>
            </aside>
        </div> 
        <script>
            $('.back-btn').click(function () {
                history.back(1);
            });
        </script>
    </body> 
</html>