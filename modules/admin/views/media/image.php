<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" style="word-wrap: break-word;">
                <?php echo __web('uploads/general/' . $name) ?>
            </h4>
        </div>
        <form action="" method="post">
            <div class="modal-body">
                <div class="col-xs-12">
                    <img width="100%" src="<?php echo __web('uploads/general/' . $name) ?>" >
                </div>
            </div>
            <div class="modal-footer clearfix">
                <a class="btn btn-danger" href="<?php echo  web('admin/media/img_delete/'.base64_encode($name))?>" >Delete</a>
                <button type="button" class="btn btn-defalut" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
