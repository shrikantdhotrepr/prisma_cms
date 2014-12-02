<?php
/*
 * Profile view page
 */

$form_error     =   "<div class=\"form-group has-error\"><label class=\"control-label\" for=\"inputError\">%s <i class=\"fa fa-asterisk\"></i></label>%s</div>";
$input          =   "<input type=\"text\" class=\"form-control\" name=\"%s\" placeholder=\"%s\" value=\"%s\" >";
$form           =   "<div class=\"form-group\"><label>%s</label>%s</div>";
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>Edit your profile here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My Account</li>
        <li class="active">Profile</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
  
        <div class="col-md-8">
            <div class="box box-primary">
                
                <div class="box-header">
                    <h3 class="box-title">Update Your Profile</h3>
                </div><!-- /.box-header -->
                <form action="" method="post" >
                    <!-- Form -->
                    <div class="box-body">
                        <?php if ($this->session->flashdata('success') != ''): ?>
                                <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b>Success!</b> 
                                        <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            
                        <?php endif;  
                        
                        $value          =   (form_error('full_name') != '') ? set_value( 'full_name' )  : $details->full_name;
                        $input_field    =   sprintf($input , 'full_name' , 'Enter Full Name' , $value );
                        $field          =   (form_error('full_name') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Full Name' , $input_field) ;
                        
                        $value          =   (form_error('user_name') != '') ? set_value( 'user_name' )  : $details->user_name;
                        $input_field    =   sprintf($input , 'user_name' , 'Enter User Id' , $value);
                        $field          =   (form_error('user_name') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'User Id' , $input_field) ;
                        
                        $value          =   (form_error('full_name') != '') ? set_value( 'email' )  : $details->email;
                        $input_field    =   sprintf($input , 'email' , 'Enter Email Id' , $value );
                        $field          =   (form_error('email') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Email Id' , $input_field) ;
                        
                        ?>
                        <input type="hidden" value="<?php echo $details->admin_id?>" name="admin_id">
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                    </form>
                <!-- /.box-body -->
            </div>
        </div>

 
</section>
<!-- /.content -->
