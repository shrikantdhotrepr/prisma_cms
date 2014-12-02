<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><i class="fa  fa-cloud-upload"></i> Image Upload</h4>
        </div>
        <form action="" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                        <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Check me out
                    </label>
                </div>
            </div>
            <div class="modal-footer clearfix">
                <button type="button" class="btn btn-defalut save-subcategory" data-url="<?php echo web('admin/category/sub/' . $cat_rid) ?>"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-defalut show-subcategories" data-url="<?php echo web('admin/category/sub/' . $cat_rid) ?>">Close</button>
            </div>
        </form>
    </div>
</div>
<script>
    show_subcategories();
</script>