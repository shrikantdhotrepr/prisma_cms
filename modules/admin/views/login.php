<div class="form-box" id="login-box">
    <?php
        if ($this->session->flashdata('error') != ''): 
            
        endif;
    ?>
    <div class="header"><?php echo  ADMIN . " - Login"  ?></div>
    <form action="<?php echo web('admin/login/auth')?>" method="post">
        <div class="body bg-gray">
            
            <?php if ($this->session->flashdata('error') != ''): ?>
            <br />
            <div class="alert alert-danger alert-dismissable">
                <i class="fa fa-ban"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b><?php echo $this->session->flashdata('error'); ?></b> 
            </div>
            <?php  endif; ?>
            
            <div class="form-group">
                <input type="text" name="userid" class="form-control" placeholder="User ID"/>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password"/>
            </div>          
        </div>
        <div class="footer">                                                               
            <button type="submit" class="btn btn-info btn-block">
                Sign me in
            </button>  
        </div>
    </form>
</div>