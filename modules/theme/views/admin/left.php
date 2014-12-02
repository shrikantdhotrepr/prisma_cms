
<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="<?php echo BASE_AIMAGE ?>avatar3.png" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
        <p>Hello, <?php echo $this->session->userdata('full_name') ?></p>

                <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
    </div>
</div>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li class="active">
        <a href="<?php echo base_url('admin/') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="treeview <?php echo ( $nav == 2 ) ? ' active ' : '' ?> ">
        <a href="#">
            <i class="fa fa-user"></i>
            <span>My Account</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li <?php echo ( $nav == 2 && $inner_nav == 1 ) ? 'class="active"' : '' ?> >
                <a href="<?php echo base_url('admin/profile') ?>"><i class="fa fa-angle-double-right"></i>Profile</a>
            </li>
            <li <?php echo ( $nav == 2 && $inner_nav == 2 ) ? 'class="active"' : '' ?> >
                <a href="<?php echo base_url('admin/profile/changepassword') ?>"><i class="fa fa-angle-double-right"></i>Change Password</a>
            </li>
            <li <?php echo ( $nav == 2 && $inner_nav == 3 ) ? 'class="active"' : '' ?> >
                <a href="<?php echo base_url('admin/profile/setting') ?>"><i class="fa fa-angle-double-right"></i>Site Setting</a>
            </li>
            
        </ul>
    </li>

    
    <li class="treeview <?php echo ( $nav == 6 ) ? ' active ' : '' ?> ">
        <a href="#">
            <i class="fa fa-plane"></i>
            <span>Advertisements</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li <?php echo ( $nav == 3 && $inner_nav == 1 ) ? 'class="active"' : '' ?> >
                <a href="<?php echo base_url('admin/ads/category') ?>"><i class="fa fa-angle-double-right"></i>Categories</a>
            </li>
            <li <?php echo ( $nav == 3 && $inner_nav == 2 ) ? 'class="active"' : '' ?> >
                <a href="<?php echo base_url('admin/ads/') ?>"><i class="fa fa-angle-double-right"></i>Advertisement List</a>
            </li>
        </ul>
    </li>
</ul>