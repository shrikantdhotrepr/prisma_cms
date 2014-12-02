<?php ?>
<section class="content-header">
    <h1>
        <?php echo 'Slider' ?>
        <small>List Of Pages</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Page List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Page</h3>
                <div class="box-tools pull-right">
                    <a href="<?php echo base_url('admin/page/add')?>"><button type="button" class="btn btn-info">Add Page</button></a>
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
                <?php endif;  ?>
                <table class="table table-hover">
                    <tbody><tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Created</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                        <?php 
                        $i = 1;
                        $td     =   "<td>%s</td>";
                        $img     =   "<td><img src=\"".base_url('media/%s')."\" width=\"150px\" ></td>";
                        $action =   "<td>
                            <a href=\"".base_url('admin/page/edit/%s')."\"><i class=\"fa fa-edit\"></i></a>
                            <a href=\"".base_url('admin/page/delete/%s')."\"><i class=\"fa fa-times\"></i></a></td>";
                        foreach ($details as $row): 
                            $id     =   base64_encode( ENCRYPT_KEY .".". $row->page_id );
                            echo    "<tr>";
                            echo    sprintf($td,        $i++);
                            echo    sprintf($td,        $row->title);
                            echo    sprintf($td,        date("d M Y" , strtotime($row->created_at)));
                            echo    sprintf($action,    $id ,$id);
                            echo    "</tr>";
                        endforeach;?>
                    </tbody></table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>


</section>
<!-- /.content -->
<script>
        $('.fa-times').click(function (){
            var ans = confirm("Are you sure, You want to delete this");
            if(ans )
                return true;
            else
                return false;
            
        });
</script>