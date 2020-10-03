		<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo_admin.png"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
				
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><?php echo anchor('login/change_password','<i class="fa fa-key fa-fw"></i> Change Password');?>
                        </li>
                        <li class="divider"></li>
                        <li><?php echo anchor('login/logout','<i class="fa fa-sign-out fa-fw"></i> Logout');?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="menu_header">
                            <div class="user_profile">
                                <span class="user_icon"><img src="images/user.png" width="40"></span>
                                <span class="user_name">Welcome Admin</span>
                            </div>
                        </li>

                        <!--<?php //if(in_array($this->session->userdata('admin_role'), array('super_admin','admin'))){ ?>-->
                            <!--<li <?php //if($selected_menu=='dashboard'){ //echo 'class="active"'; } ?>><?php //echo anchor('dashboard','<i class="fa fa-dot-circle-o fa-fw"></i>Dashboard');?></li>   -->
                        <?php //} ?>

                        <?php if(in_array($this->session->userdata('admin_role'), array('super_admin'))){ ?>
                            <li <?php if($selected_menu=='users'){ echo 'class="active"'; } ?>><?php echo anchor('users','<i class="fa fa-dot-circle-o fa-fw"></i>Admin');?></li>
                        <?php } ?>

                         <?php if(in_array($this->session->userdata('admin_role'), array('super_admin','admin','blog_admin'))){ ?>
                            <li>
                                <a><i class="fa fa-dot-circle-o fa-fw"></i> Blogs<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li <?php if($selected_menu=='posts'){ echo 'class="active"'; } ?>><?php echo anchor('posts','Posts');?></li>
                                    <li <?php if($selected_menu=='media'){ echo 'class="active"'; } ?>><?php echo anchor('media','Media');?></li>
									<li <?php if($selected_menu=='thumbnail'){ echo 'class="active"'; } ?>><?php echo anchor('thumbnail','Thumbnail');?></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
