
<?php echo html_comment('Sidebar user panel'); ?> 
<div class="user-panel">
    <div class="pull-left image">
        <img src="<?php echo assets('backend/img/avatar3.png') ?>" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
        <p>Hello, <?php echo $this->session->userdata('full_name') ?></p>
    </div>
</div>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li>
        <a href="<?php echo web() ?>" target="_blank">
            <i class="fa fa-plane"></i>
            <span>Visit Site</span>
        </a>
    </li>
    <li class="treeview <?php echo ( $nav == 2 ) ? ' active ' : '' ?> ">
        <a href="#">
            <i class="fa fa-cog"></i>
            <span>My Account</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li <?php echo ( $nav == 2 && $inner_nav == 1 ) ? 'class="active"' : '' ?> >
                <a href="<?php echo web('admin/profile') ?>"><i class="fa fa-angle-double-right"></i>Profile</a>
            </li>
            <li <?php echo ( $nav == 2 && $inner_nav == 2 ) ? 'class="active"' : '' ?> >
                <a href="<?php echo web('admin/profile/changepassword') ?>"><i class="fa fa-angle-double-right"></i>Change Password</a>
            </li>
            <li <?php echo ( $nav == 2 && $inner_nav == 2 ) ? 'class="active"' : '' ?> >
                <a href="<?php echo web('admin/profile/setting') ?>"><i class="fa fa-angle-double-right"></i>Setting</a>
            </li>
        </ul>
    </li>
    <li<?php echo ( $nav == 3 ) ? ' class="active"' : '' ?>><a href="<?php echo web('admin/media') ?>"><i class="fa fa-picture-o"></i><span>Media</span></a></li>
    <li<?php echo ( $nav == 4 ) ? ' class="active"' : '' ?>><a href="<?php echo web('admin/page') ?>"><i class="fa fa-book"></i><span>Pages</span></a></li>
</ul>