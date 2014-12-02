<?php echo stylesheets('fileupload/css', 'style.css'); ?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><i class="fa  fa-cloud-upload"></i> Image Upload</h4>
        </div>
        <form action="" method="post">
            <div class="modal-body">
                <div class="col-xs-12">
                    <div class="feed-error"></div>
                    <span class="btn fileinput-button btn-success">
                        <span>Select files</span>
                        <input id="admin-fileupload" type="file" name="files" multiple>
                    </span>
                    <br>
                    <br>


                    <div id="uploded-image">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Thumb</th>
                                    <th>Filename</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody class="file-images" ></tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="modal-footer clearfix">

                <button href="<?php echo web('admin/media')?>" class="btn btn-defalut"><i class="fa fa-save"></i> Save</button>
                <!--<button type="button" class="btn btn-defalut" data-dismiss="modal"><i class="fa fa-save"></i> Save</button>-->
            </div>
        </form>
    </div>
</div>

<?php
$files = array('widget.js', 'fileupload.js');
echo scripts('fileupload/js', $files);
?>
<script>
    $(function () {
        'use strict';
        $('#admin-fileupload').fileupload({
            url: '<?php echo web('admin/media/upload') ?>',
            dataType: 'json',
            done: function (e, data) {
                var html = "<tr>";
                html = html + "<td><img width=\"100px\" src=\"<?php echo web('assets/uploads/general/thumbs') ?>/" + data.result.file_name + "\"/></td>";
                html = html + "<td>" + data.result.file_name + "</td>";
                html = html + "<td><button class=\"btn btn-danger delete-uploaded-file\" data-file-name=\"" + data.result.file_name + "\" >Remove</button></td>";
                html = html + "</tr>";
                $('.file-images').append(html);
                removefile();
            },
        }).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');
    });

    function removefile()
    {
        $(".delete-uploaded-file").unbind().bind('click', function (e) {
            var filename = $(this).attr("data-file-name");
            $.ajax({
                url: '<?php echo web('admin/media/delete') ?>',
                data: {filename: filename },
                type: 'post',
                success: function ( data ) {
                }
            });
            $(this).parent().parent().remove();
        });
    }

    removefile();
</script>