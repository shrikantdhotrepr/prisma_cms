<?php echo scripts('backend/js' , 'ckeditor/ckeditor.js')?>
<?php
$form_error     =   "<div class=\"form-group has-error\"><label class=\"control-label\" for=\"inputError\">%s <i class=\"fa fa-asterisk\"></i></label>%s</div>";
$input          =   "<input type=\"text\" class=\"form-control\" name=\"%s\" placeholder=\"%s\" value=\"%s\" >";
$file           =   "<input type=\"file\" class=\"form-control\" name=\"%s\" placeholder=\"%s\" value=\"%s\" >";
$textarea       =   "<textarea class=\"textarea %s\" name=\"%s\" placeholder=\"%s\">%s</textarea>";
$form           =   "<div class=\"form-group\"><label>%s</label>%s</div>";
$select         =   "<select type=\"text\" class=\"form-control\" name=\"%s\" >%s</select>";
?>
<style>
    .textarea{ 
            width: 100%; 
            height: 100px; 
            font-size: 14px; 
            line-height: 18px; 
            border: 1px solid #dddddd; 
            padding: 10px; 
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo $title . "<small>Edit ".$title."</small>"; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active"><?php echo $title ?></li>
        <li class="active">Edit <?php echo $title ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit <?php echo $title ?></h3>
                </div>
                <!-- /.box-header -->
                <?php echo form_open_multipart(); ?>
                    <div class="box-body">
                  <?php 
                        $value          =   (set_value( 'title' )) ? set_value( 'title' ) : $details->title ;
                        $input_field    =   sprintf($input , 'title' , 'Enter...' , $value );
                        $field          =   (form_error('title') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Title' , $input_field) ;
                        
                        $value          =   (set_value( 'description' )) ? set_value( 'description' ) : $details->description ;
                        $input_field    =   sprintf($textarea , 'ckeditor' , 'description' , 'Enter...' , $value );
                        $field          =   (form_error('description') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Description' , $input_field) ; 
                        
                        
                        $value          =   (set_value( 'meta_keywords' )) ? set_value( 'meta_keywords' ) : $details->meta_keywords;
                        $input_field    =   sprintf($textarea , '' , 'meta_keywords' , 'Enter...' , $value );
                        $field          =   (form_error('meta_keywords') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Meta Keywords' , $input_field) ; 
                        
                        
                        $value          =   (set_value( 'meta_description' )) ? set_value( 'meta_description' ) : $details->meta_description ;
                        $input_field    =   sprintf($textarea , '' , 'meta_description' , 'Enter...' , $value );
                        $field          =   (form_error('meta_description') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Meta Description' , $input_field) ; 
                        
                        ?>
                        
                    </div>
                    
                    <!-- text input -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-primary back-btn">Back</button>
                    </div>
               </form>
               <!-- /.box-body -->
            </div>
        </div>

    
</section>

