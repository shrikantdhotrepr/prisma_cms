<section class="content-header no-margin">
    <h1 class="text-center">
        Uploads Images
    </h1>
</section>
<?php echo stylesheets('bootstrap-modal/css', 'bootstrap-modal.css'); ?>
<section class="content">
    <div class="mailbox row">
        <div class="col-xs-12">
            <div class="box box-solid">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="box-header">
                                <i class="fa fa-inbox"></i>
                                <h3 class="box-title">Media</h3>
                            </div>
                            <a class="btn btn-block btn-primary" data-toggle="modal"  id="media-upload" >
                                <i class="fa fa-upload"></i> 
                                Upload Media
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="row pad">
                                <div class="callout callout-info">
                                        <h4>Notice!</h4>
                                        <p>Click on image to enlarge / get image url</p>
                                    </div>
                            </div>
                            <?php
                            $map = directory_map('./assets/uploads/general', false);
                            foreach ($map as $key => $value):
                                if (!is_array($value)):
                                    ?>
                                    <div class="col-lg-3 col-xs-6">
                                        <div class="small-box bg-aqua">
                                            <div class="inner">
                                                <p  style="overflow: hidden; height: 150px; width: 150px">
                                                    <a href="<?php echo web('admin/media/image/' . base64_encode($value)) ?>" class="show-image">
                                                       <img width="100%" src="<?php echo __web('uploads/general/thumbs/') . "/" . $value; ?>" />
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="icon">
                                            </div>
                                            <a href="<?php echo web('admin/media/image/' . base64_encode($value)) ?>" class="show-image small-box-footer">
                                                More info <i class="fa fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                endif;
                            endforeach;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer clearfix">
                <div class="pull-right">
                    <!--Pagination-->
<!--                    <div class="dataTables_paginate paging_bootstrap">
                        <ul class="pagination">
                            <li class="prev disabled"><a href="#">Previous</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#">Next</a></li>
                        </ul>
                    </div>-->
                    <!-- End Pagination-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<div id="full-width" class="general-modal modal fade" tabindex="-1"></div>
<?php
$scripts = array('bootstrap-modalmanager.js', 'bootstrap-modal.js', 'modal.js');
echo scripts('bootstrap-modal/js', $scripts);
?>




