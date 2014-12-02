
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Sub Categories Of category</h4>
        </div>
        <form action="" method="post">
            <div class="modal-body">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-info add-subcategories " data-url="<?php echo web('admin/category/sub_add/' . $cat_rid) ?>" >Add <?php echo $title ?></button>
                </div>

                <table class="table table-hover">
                    <tbody><tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Created</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                        <?php
                        $i = 1;
                        $td = "<td>%s</td>";
                        $img = "<td><img src=\"" . base_url('media/%s') . "\" width=\"150px\" ></td>";
                        $action = "<td>
                            <a href=\"" . base_url('admin/category/edit/%s') . "\"><i class=\"fa fa-edit\"></i></a>
                            <a href=\"" . base_url('admin/category/delete/%s') . "\"><i class=\"fa fa-times\"></i></a></td>";
                        foreach ($details as $row):
                            $id = base64_encode(ENCRYPT_KEY . "." . $row->category_id);
                            echo "<tr>";
                            echo sprintf($td, $i++);
                            echo sprintf($td, $row->name);
                            echo sprintf($td, date("d M Y", strtotime($row->created_at)));
                            echo sprintf($action, $id, $id);
                            echo "</tr>";
                        endforeach;
                        ?>
                    </tbody></table>

            </div>
            <div class="modal-footer clearfix">

                <?php echo $this->pagination->create_links(); ?>

                <button type="button" class="btn btn-defalut" data-dismiss="modal"><i class="fa fa-close`"></i> Close</button>
            </div>
        </form>
    </div>
</div>

<script>

    $('.fa-times').click(function () {
        var ans = confirm("Are you sure, You want to delete this");
        if (ans)
            return true;
        else
            return false;

    });

    function removefile()
    {
        $(".delete-uploaded-file").unbind().bind('click', function (e) {
            var filename = $(this).attr("data-file-name");
            $.ajax({
                url: '<?php echo web('admin/media/delete') ?>',
                data: {filename: filename},
                type: 'post',
                success: function (data) {
                }
            });
            $(this).parent().parent().remove();
        });
    }

    removefile();
</script>
