<?php

/*
 * Profile view page
 */

$form_error     =   "<div class=\"form-group has-error\"><label class=\"control-label\" for=\"inputError\">%s <i class=\"fa fa-asterisk\"></i></label>%s</div>";
$input          =   "<input type=\"password\" class=\"form-control\" name=\"%s\" placeholder=\"%s\" value=\"%s\" >";
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
        <li class="active">Change Password</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Change Your Password</h3>
                </div>
                <!-- /.box-header -->
                <form action="" method="post">
                     <div class="box-body">
                    <?php if ($this->session->flashdata('success') != ''): ?>
                                <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b>Success!</b> 
                                        <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error') != ''): ?>
                                <div class="alert alert-danger alert-dismissable">
                                        <i class="fa fa-ban"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b>Error!</b> 
                                        <?php echo $this->session->flashdata('error'); ?>
                                </div>
                    <?php endif; ?>
                        <!-- text input -->
                        <?php 
                            $value          =   set_value( 'password' );
                            $input_field    =   sprintf($input , 'password' , 'Enter Current Password' , $value );
                            $field          =   (form_error('password') != '') ? $form_error  : $form ;
                            echo sprintf( $field , 'Current Password' , $input_field) ;
                            
                            $value          =   set_value( 'new_password' );
                            $input_field    =   sprintf($input , 'new_password' , 'Enter New Password' , $value );
                            $field          =   (form_error('new_password') != '') ? $form_error  : $form ;
                            echo sprintf( $field , 'New Password' , $input_field) ;
                            
                            $value          =   set_value( 'confirm_password' );
                            $input_field    =   sprintf($input , 'confirm_password' , 'Confirm New Password...' , $value );
                            $field          =   (form_error('confirm_password') != '') ? $form_error  : $form ;
                            echo sprintf( $field , 'Confirm New Password' , $input_field) ;
                            
                        ?>
                    
                    </div>
                        <!-- text input -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
               <!-- /.box-body -->
            </div>
        </div>

    
</section>
<!-- /.content -->
