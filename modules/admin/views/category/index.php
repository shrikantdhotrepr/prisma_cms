<?php echo stylesheets('bootstrap-modal/css', 'bootstrap-modal.css'); ?>
<section class="content-header">
    <h1>
        <?php echo $title . "<small>List Of " . $title . "</small>"; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active"><?php echo $title ?> List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $title ?></h3>
                <div class="box-tools pull-right">
                    <a href="<?php echo base_url('admin/category/add') ?>"><button type="button" class="btn btn-info">Add <?php echo $title ?></button></a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <?php if ($this->session->flashdata('success') != ''): ?>
                    <div class="alert alert-success alert-dismissable">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Success!</b> 
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <table class="table table-hover">
                    <tbody><tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Sub Categories</th>
                            <th>Created</th>
                            <th style="width: 40px">Action</th>


                        </tr>
                        <?php
                        $i = 1;
                        $td = "<td>%s</td>";

                        $subcat = "<td><button type=\"button\" class=\"btn btn-defalut show-subcategories\" data-url=\"" . web('admin/category/sub/%s') . "\">Sub Categories</button></td>";
                        $action = "<td>
                            <a href=\"" . base_url('admin/category/edit/%s') . "\"><i class=\"fa fa-edit\"></i></a>
                            <a href=\"" . base_url('admin/category/delete/%s') . "\"><i class=\"fa fa-times\"></i></a></td>";
                        foreach ($details as $row):
                            $id = base64_encode(ENCRYPT_KEY . "." . $row->category_id);
                            echo "<tr>";
                            echo sprintf($td, $i++);
                            echo sprintf($td, $row->name);
                            echo sprintf($subcat, $id);
                            echo sprintf($td, date("d M Y", strtotime($row->created_at)));
                            echo sprintf($action, $id, $id);
                            echo "</tr>";
                        endforeach;
                        ?>
                    </tbody></table>
            </div>
            <div class="box-footer clearfix">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</section>
<div id="full-width" class="general-modal modal fade" tabindex="-1"></div>
<div id="full-width" class="another-general-modal modal fade" tabindex="-1"></div>
<?php
$scripts = array('bootstrap-modalmanager.js', 'bootstrap-modal.js', 'modal.js');
echo scripts('bootstrap-modal/js', $scripts);
?>
<script>
    $('.fa-times').click(function () {
        var ans = confirm("Are you sure, You want to delete this");
        if (ans)
            return true;
        else
            return false;

    });

    show_subcategories();
    function show_subcategories(){
        $('.show-subcategories').on('click', function () {
            var url = $(this).attr("data-url");
            $('body').modalmanager('loading');
            setTimeout(function () {
                $('.general-modal').load(url, '', function () {
                    $('.general-modal').modal();
                });
            }, 1000);
            return false;
        });
        $('.general-modal').on('click', '.add-subcategories', function () {
            $('.general-modal').modal('toggle');
            $('body').modalmanager('loading');
            var url = $(this).attr("data-url");
            $('.general-modal').modal('loading');
            setTimeout(function () {
                $('.general-modal').load(url, '', function () {
                    $('.general-modal').modal();
                });
            }, 1000);
        });
    }




</script>