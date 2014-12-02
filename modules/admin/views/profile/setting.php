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
        <li class="active">Change Password</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">General Site Setting</h3>
                </div>
                <!-- /.box-header -->
                <form action="" method="post">
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
                        
                        $value          =   (form_error('email_from') != '') ? set_value( 'email_from' )  : $details->email_from;
                        $input_field    =   sprintf($input , 'email_from' , 'Enter...' , $value );
                        $field          =   (form_error('email_from') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Sender Email Id' , $input_field) ;
                        
                        $value          =   (form_error('from_name') != '') ? set_value( 'from_name' )  : $details->from_name;
                        $input_field    =   sprintf($input , 'from_name' , 'Enter...' , $value );
                        $field          =   (form_error('from_name') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Sender Full Name' , $input_field) ;
                        
                        $value          =   (form_error('site_title') != '') ? set_value( 'site_title' )  : $details->site_title;
                        $input_field    =   sprintf($input , 'site_title' , 'Enter...' , $value );
                        $field          =   (form_error('site_title') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Site Title' , $input_field) ;
                        
                        $value          =   (form_error('contact_email') != '') ? set_value( 'contact_email' )  : $details->contact_email;
                        $input_field    =   sprintf($input , 'contact_email' , 'Enter...' , $value );
                        $field          =   (form_error('contact_email') != '') ? $form_error  : $form ;
                        echo sprintf( $field , 'Contact Email Id' , $input_field) ;
                        
                        ?>
                        <input type="hidden" value="<?php echo $details->settings_id?>" name="settings_id">
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
