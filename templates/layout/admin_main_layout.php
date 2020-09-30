<?php
$this->start('mainheader');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Administrator    </title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


 <?php echo  $this->Html->css(['/admin_theme/assets/css/bootstrap.min.css', '/admin_theme/assets/css/font-awesome.min.css', '/admin_theme/assets/css/jquery-ui.min.css','/admin_theme/assets/css/jquery-ui.custom.min.css','/admin_theme/assets/css/chosen.css','/admin_theme/assets/css/datepicker.css','/admin_theme/assets/css/bootstrap-timepicker.css','/admin_theme/assets/css/daterangepicker.css','/admin_theme/assets/css/bootstrap-datetimepicker.css','/admin_theme/assets/css/colorpicker.css','/admin_theme/assets/css/fullcalendar.css','/admin_theme/assets/css/colorbox.css','/admin_theme/assets/css/ace-fonts.css','/admin_theme/assets/css/ace.min.css','/admin_theme/assets/css/ace-skins.min.css','/admin_theme/assets/css/ace-rtl.min.css','']); ?>
    </head>
<?php $this->end(); ?>


<?php
$this->start('notification');
?>
                <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                <span class="badge badge-important">+</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-exclamation-triangle"></i>
                                    View Company Notifications
                                </li>
                                    <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar">



<li><a href="allnotifications.php"><div class="clearfix"><span class="pull-left"><i class="btn btn-xs no-hover btn-info fa fa-bell"></i>Notify here</span><span class="pull-right badge badge-info">Date</span></div></a></li>




                                    

                                    </ul>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="allnotifications.php">
                                        See all notifications
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
            <?php $this->end(); ?>          
<?php
$this->start('topheader');
?>

        <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <!-- #section:basics/sidebar.mobile.toggle -->
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <!-- /section:basics/sidebar.mobile.toggle -->
                <div class="navbar-header pull-left">
                    <!-- #section:basics/navbar.layout.brand -->
                    <a href="" class="navbar-brand">
                        <small>
                        <img src="" height="25px">
                        Administrator
                        </small>
                    </a>

                    <!-- /section:basics/navbar.layout.brand -->

                    <!-- #section:basics/navbar.toggle -->

                    <!-- /section:basics/navbar.toggle -->
                </div>

                <!-- #section:basics/navbar.dropdown -->
                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">

                <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                <span class="badge badge-important">+</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-exclamation-triangle"></i>
                                    View Company Notifications
                                </li>
                                    <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar">



<li><a href="allnotifications.php"><div class="clearfix"><span class="pull-left"><i class="btn btn-xs no-hover btn-info fa fa-bell"></i>Notify here</span><span class="pull-right badge badge-info">Date</span></div></a></li>




                                    

                                    </ul>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="allnotifications.php">
                                        See all notifications
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- #section:basics/navbar.user_menu -->
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                         
                                 <?php echo $this->Html->image('/admin_theme/assets/avatars/user.jpg',array('class' => 'nav-user-photo')); ?>

                                <span class="user-info">
                                    <small>Welcome,</small>
                                Admin
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                                    <a href="<?php echo  $this->Common->get_url('/auth/changepassword');?>">
                                        <i class="ace-icon fa fa-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo  $this->Common->get_url('/auth/contactsettings');?>">
                                        <i class="ace-icon fa fa-user"></i>
                                        Contact
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?php echo  $this->Common->get_url('/auth/logout');?>">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- /section:basics/navbar.user_menu -->
                    </ul>
                </div>

                <!-- /section:basics/navbar.dropdown -->
            </div><!-- /.navbar-container -->

<?php $this->end(); ?>

<?php
$this->start('sidemenu');


$currentpage="home"
?>

            <div id="sidebar" class="sidebar                  responsive">
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                </script>

                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        

                        <!-- /section:basics/sidebar.layout.shortcuts -->
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                                <i class="menu-icon fa fa-globe"></i>
                    <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->

                <ul class="nav nav-list">
                    <li <?php if($currentpage=='home'){  ?> class="active" <?php } ?> >
                        <a href="<?php echo  $this->Common->get_url('/auth/dashboard');?>">
                            <i class="menu-icon fa fa-home"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>


    <li <?php if($currentpage=='page-content' || $currentpage=='page-create' || $currentpage=='page-update' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> Article Pages</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='page-create' ){  ?> class="active" <?php } ?>>
                                <a href="<?php echo  $this->Common->get_url('/articles/add');?>">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li <?php if($currentpage=='page-content' ){  ?> class="active" <?php } ?>>
                                <a href="<?php echo  $this->Common->get_url('/articles/index');?>">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>

    

    <li <?php if($currentpage=='banners.php' || $currentpage=='addbanner.php' || $currentpage=='editbanner.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-camera"></i>
                            <span class="menu-text"> Banners</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addbanner.php' ){  ?> class="active" <?php } ?>>
                                <a href="#">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='banners.php' ){  ?> class="active" <?php } ?>>
                                <a href="banners.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>

                

    <li <?php if($currentpage=='albums.php' || $currentpage=='addalbum.php' || $currentpage=='editalbum.php' || $currentpage=='imagelisting.php'  || $currentpage=='addphoto.php' ||  $currentpage=='editphoto.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-camera-retro"></i>
                            <span class="menu-text"> Photo Albums</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addalbum.php' ){  ?> class="active" <?php } ?>>
                                <a href="addalbum.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='albums.php' ){  ?> class="active" <?php } ?>>
                                <a href="albums.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>


                            <li <?php if($currentpage=='musicalbum.php' || $currentpage=='addmusicalbum.php' || $currentpage=='editmusicalbum.php' || $currentpage=='music.php'  || $currentpage=='addmusic.php' ||  $currentpage=='editmusic.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-bolt"></i>
                            <span class="menu-text"> Music Albums</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addmusicalbum.php' ){  ?> class="active" <?php } ?>>
                                <a href="addmusicalbum.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='musicalbum.php' ){  ?> class="active" <?php } ?>>
                                <a href="musicalbum.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List 
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>



                            <li <?php if($currentpage=='videoalbum.php' || $currentpage=='addvideoalbum.php' || $currentpage=='editvideoalbum.php' || $currentpage=='videos.php'  || $currentpage=='addvideo.php' ||  $currentpage=='editvideo.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-video-camera"></i>
                            <span class="menu-text"> Video Albums</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addvideoalbum.php' ){  ?> class="active" <?php } ?>>
                                <a href="addvideoalbum.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='videoalbum.php' ){  ?> class="active" <?php } ?>>
                                <a href="videoalbum.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List 
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>


        
                    <li <?php if($currentpage=='products-list.php' || $currentpage=='addproduct.php' || $currentpage=='editproduct.php'){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-gift"></i>
                            <span class="menu-text"> Products/Services</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">


                                    <li <?php if($currentpage=='addproduct.php' ){  ?> class="active" <?php } ?>>
                                <a href="addproduct.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>


                                            <li <?php if($currentpage=='products-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="products-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>



                                        <li <?php if($currentpage=='projects-list.php' || $currentpage=='addproject.php' || $currentpage=='editproject.php'){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-book"></i>
                            <span class="menu-text"> Portfolio/Projects</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">


                                    <li <?php if($currentpage=='addproject.php' ){  ?> class="active" <?php } ?>>
                                <a href="addproject.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>


                                            <li <?php if($currentpage=='projects-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="projects-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>


    <li <?php if($currentpage=='testimony-list.php' || $currentpage=='addtestimony.php' || $currentpage=='edittestimony.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-comments"></i>
                            <span class="menu-text"> Testimony</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addtestimony.php' ){  ?> class="active" <?php } ?>>
                                <a href="addtestimony.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='testimony-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="testimony-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>



    <li <?php if($currentpage=='clients-list.php' || $currentpage=='addclient.php' || $currentpage=='editclient.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-users"></i>
                            <span class="menu-text"> Clients</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addclient.php' ){  ?> class="active" <?php } ?>>
                                <a href="addclient.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='clients-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="clients-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>



    <li <?php if($currentpage=='brands-list.php' || $currentpage=='addbrand.php' || $currentpage=='editbrand.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-heart"></i>
                            <span class="menu-text"> Brands</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addbrand.php' ){  ?> class="active" <?php } ?>>
                                <a href="addbrand.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='brands-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="brands-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>



                        <li <?php if($currentpage=='calendar.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-calendar"></i>
                            <span class="menu-text"> Calendar</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

        

                                            <li <?php if($currentpage=='calendar.php' ){  ?> class="active" <?php } ?>>
                                <a href="calendar.php">
                                            <i class="menu-icon fa fa-list"></i>
                                Manage
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>



<li <?php if($currentpage=='news-list.php' || $currentpage=='addnews.php' || $currentpage=='editnews.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-bullhorn"></i>
                            <span class="menu-text"> News</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addnews.php' ){  ?> class="active" <?php } ?>>
                                <a href="addnews.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='news-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="news-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>





<li <?php if($currentpage=='events-list.php' || $currentpage=='addevent.php' || $currentpage=='editevent.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text"> Events </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addevent.php' ){  ?> class="active" <?php } ?>>
                                <a href="addevent.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='events-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="events-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>





                        <li <?php if($currentpage=='community-list.php' || $currentpage=='addcommunity.php' || $currentpage=='editcommunity.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-heart"></i>
                            <span class="menu-text"> Communities </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addcommunity.php' ){  ?> class="active" <?php } ?>>
                                <a href="addcommunity.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='community-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="community-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>



                        <li <?php if($currentpage=='schedule-list.php' || $currentpage=='addschedule.php' || $currentpage=='editschedule.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text"> Schedules </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addschedule.php' ){  ?> class="active" <?php } ?>>
                                <a href="addschedule.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='schedule-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="schedule-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>

    
                        <li <?php if($currentpage=='media-list.php' || $currentpage=='addmedia.php' || $currentpage=='editmedia.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-download"></i>
                            <span class="menu-text"> Media</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addmedia.php' ){  ?> class="active" <?php } ?>>
                                <a href="addmedia.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='media-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="media-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>


                        <li <?php if($currentpage=='career-list.php' || $currentpage=='addcareer.php' || $currentpage=='editcareer.php' || $currentpage=='applicants-list.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-briefcase"></i>
                            <span class="menu-text"> Careers </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                    <li <?php if($currentpage=='addcareer.php' ){  ?> class="active" <?php } ?>>
                                <a href="addcareer.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add Career
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li <?php if($currentpage=='career-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="career-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                Career List
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li <?php if($currentpage=='applicants-list.php' ){  ?> class="active" <?php } ?>>
                                <a href="applicants-list.php">
                                            <i class="menu-icon fa fa-list"></i>
                                Applicants List
                                </a>

                                <b class="arrow"></b>
                            </li>



                        </ul>

                        </li>



                    <li <?php if($currentpage=='users.php' || $currentpage=='adduser.php' || $currentpage=='edituser.php'){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-users"></i>
                            <span class="menu-text"> Users</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">


                                    <li <?php if($currentpage=='adduser.php' ){  ?> class="active" <?php } ?>>
                                <a href="adduser.php">
                                            <i class="menu-icon fa fa-pencil"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>


                                            <li <?php if($currentpage=='users.php' ){  ?> class="active" <?php } ?>>
                                <a href="users.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>


    <li <?php if($currentpage=='subscribers.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-user"></i>
                            <span class="menu-text"> Subscribers</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">


                                            <li <?php if($currentpage=='subscribers.php' ){  ?> class="active" <?php } ?>>
                                <a href="subscribers.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>

            
            
<li <?php if($currentpage=='editcountry.php' || $currentpage=='addcountry.php' || $currentpage=='country.php' || $currentpage=='editcurrency.php' || $currentpage=='addcurrency.php' || $currentpage=='currency.php' || $currentpage=='editstate.php' || $currentpage=='addstate.php' || $currentpage=='state.php' || $currentpage=='editcity.php' || $currentpage=='addcity.php' || $currentpage=='city.php' || $currentpage=='editlistcategory.php' || $currentpage=='addlistcategory.php' || $currentpage=='listcategory.php' || $currentpage=='editlistsubcategory.php' || $currentpage=='addlistsubcategory.php' || $currentpage=='listsubcategory.php' || $currentpage=='editlistsubcategory.php' || $currentpage=='editproductcategory.php' || $currentpage=='addproductcategory.php' || $currentpage=='productcategory.php' || $currentpage=='editproductsubcategory.php' || $currentpage=='addproductsubcategory.php' || $currentpage=='productsubcategory.php' || $currentpage=='editproductsubcategory.php' ||  $currentpage=='editalbumtype.php' || $currentpage=='addalbumtype.php' || $currentpage=='albumtypes.php' || $currentpage=='editmediatype.php' || $currentpage=='addmediatype.php' || $currentpage=='mediatypes.php' || $currentpage=='editgeneraltype.php' || $currentpage=='addgeneraltype.php' || $currentpage=='generaltypes.php' || $currentpage=='editcolour.php' || $currentpage=='addcolour.php' || $currentpage=='colour.php' || $currentpage=='editsellertype.php' || $currentpage=='addsellertype.php' || $currentpage=='sellertype.php' || $currentpage=='editfueltype.php' || $currentpage=='addfueltype.php' || $currentpage=='fueltype.php' || $currentpage=='editusage.php' || $currentpage=='addusage.php' || $currentpage=='usage.php' || $currentpage=='editbrand.php' || $currentpage=='addbrand.php' || $currentpage=='brand.php' || $currentpage=='editmailtemplate.php' || $currentpage=='addmailtemplate.php' || $currentpage=='mailtemplate.php' || $currentpage=='editbedroom.php' || $currentpage=='addbedroom.php' || $currentpage=='bedroom.php' || $currentpage=='editbathroom.php' || $currentpage=='addbathroom.php' || $currentpage=='bathroom.php' || $currentpage=='editemploymenttype.php' || $currentpage=='addemploymenttype.php' || $currentpage=='employmenttype.php' || $currentpage=='editcareer.php' || $currentpage=='addcareer.php' || $currentpage=='career.php' || $currentpage=='editeducation.php' || $currentpage=='addeducation.php' || $currentpage=='education.php' || $currentpage=='editexperience.php' || $currentpage=='addexperience.php' || $currentpage=='experience.php' || $currentpage=='editbankcategory.php' || $currentpage=='addbankcategory.php' || $currentpage=='bankcategory.php' || $currentpage=='editclothsize.php' || $currentpage=='addclothsize.php' || $currentpage=='clothsizes.php' || $currentpage=='editshoesize.php' || $currentpage=='addshoesize.php' || $currentpage=='shoesizes.php' || $currentpage=='editshipping.php' || $currentpage=='addshipping.php' || $currentpage=='shipping.php' || $currentpage=='importshipping.php' || $currentpage=='warehouse-edit.php' || $currentpage=='warehouse-add.php' || $currentpage=='warehouse.php' || $currentpage=='shelves-edit.php' || $currentpage=='shelves-add.php' || $currentpage=='shelves.php' || $currentpage=='slots-edit.php' || $currentpage=='slots-add.php' || $currentpage=='slots.php'){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-book"></i>
                            <span class="menu-text"> Masters</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

            

                <li <?php if( $currentpage=='editcountry.php' || $currentpage=='addcountry.php' || $currentpage=='country.php' || $currentpage=='editstate.php' || $currentpage=='addstate.php' || $currentpage=='state.php' || $currentpage=='editcity.php' || $currentpage=='addcity.php' || $currentpage=='city.php'){  ?> class="active" <?php } ?>>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                                    Location
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li <?php if($currentpage=='addcountry.php' ){  ?> class="active" <?php } ?>>
                                        <a href="addcountry.php">
                                            <i class="menu-icon fa fa-plus"></i>
                                            Add Country
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                        
                                        <li <?php if($currentpage=='country.php' || $currentpage=='editcountry.php'){  ?> class="active" <?php } ?>>
                                        <a href="country.php">
                                            <i class="menu-icon fa fa-list"></i>
                                            Country List
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

        <li <?php if($currentpage=='state.php' || $currentpage=='editstate.php' ){  ?> class="active" <?php } ?>>
                                        <a href="state.php">
                                            <i class="menu-icon fa fa-list"></i>
                                            State List
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

    <li <?php if($currentpage=='addstate.php' ){  ?> class="active" <?php } ?>>
                                        <a href="addstate.php">
                                            <i class="menu-icon fa fa-plus"></i>
                                            Add State
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

<li <?php if($currentpage=='city.php' || $currentpage=='editcity.php' ){  ?> class="active" <?php } ?>>
                                        <a href="city.php">
                                            <i class="menu-icon fa fa-list"></i>
                                            City List
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

    <li <?php if($currentpage=='addcity.php' ){  ?> class="active" <?php } ?>>
                                        <a href="addcity.php">
                                            <i class="menu-icon fa fa-plus"></i>
                                            Add City
                                        </a>

                                        <b class="arrow"></b>
                                    </li>




                                </ul>
                            </li>
    


    

    
                        <li <?php if( $currentpage=='editlistcategory.php' || $currentpage=='addlistcategory.php' || $currentpage=='listcategory.php' || $currentpage=='editlistsubcategory.php' || $currentpage=='addlistsubcategory.php' || $currentpage=='listsubcategory.php' || $currentpage=='editlistsubcategory.php' ){  ?> class="active" <?php } ?>>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                            Category
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">

                                <li <?php if( $currentpage=='editlistcategory.php' || $currentpage=='addlistcategory.php'  || $currentpage=='editlistsubcategory.php' || $currentpage=='addlistsubcategory.php'  || $currentpage=='editlistsubcategory.php' ){  ?> class="active" <?php } ?>>
                                <a href="addlistcategory.php">
                                            <i class="menu-icon fa fa-plus"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                                <li <?php if( $currentpage=='listcategory.php'  || $currentpage=='listsubcategory.php'  ){  ?> class="active" <?php } ?> >
                                <a href="listcategory.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                                </ul>
                            </li>
                    

                <li <?php if( $currentpage=='editproductcategory.php' || $currentpage=='addproductcategory.php' || $currentpage=='productcategory.php' || $currentpage=='editproductsubcategory.php' || $currentpage=='addproductsubcategory.php' || $currentpage=='productsubcategory.php' || $currentpage=='editproductsubcategory.php' ){  ?> class="active" <?php } ?>>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                            Sub  Category
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">

                                <li <?php if( $currentpage=='editproductcategory.php' || $currentpage=='addproductcategory.php'  || $currentpage=='editproductsubcategory.php' || $currentpage=='addproductsubcategory.php'  || $currentpage=='editproductsubcategory.php' ){  ?> class="active" <?php } ?>>
                                <a href="addproductcategory.php">
                                            <i class="menu-icon fa fa-plus"></i>
                                Add
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                                <li <?php if( $currentpage=='productcategory.php'  || $currentpage=='productsubcategory.php'  ){  ?> class="active" <?php } ?> >
                                <a href="productcategory.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                                </ul>
                            </li>

            


                    


                        <li <?php if( $currentpage=='editcurrency.php' || $currentpage=='addcurrency.php' || $currentpage=='currency.php' ){  ?> class="active" <?php } ?>>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                            Currency
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">

                                <li <?php if($currentpage=='addcurrency.php' ){  ?> class="active" <?php } ?> >
                                <a href="addcurrency.php">
                                            <i class="menu-icon fa fa-plus"></i>
                            Add
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                            <li <?php if( $currentpage=='editcurrency.php'  || $currentpage=='currency.php' ){  ?> class="active" <?php } ?>>
                                <a href="currency.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                                </ul>
                            </li>

                    

<li <?php if( $currentpage=='editmailtemplate.php' || $currentpage=='addmailtemplate.php' || $currentpage=='mailtemplate.php' ){  ?> class="active" <?php } ?>>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                        Mail Templates
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">

                                <li <?php if($currentpage=='addmailtemplate.php' ){  ?> class="active" <?php } ?> >
                                <a href="addmailtemplate.php">
                                            <i class="menu-icon fa fa-plus"></i>
                            Add
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                            <li <?php if( $currentpage=='editmailtemplate.php'  || $currentpage=='mailtemplate.php' ){  ?> class="active" <?php } ?>>
                                <a href="mailtemplate.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                                </ul>
                            </li>

                    


                    

<li <?php if( $currentpage=='editalbumtype.php' || $currentpage=='addalbumtype.php' || $currentpage=='albumtypes.php' ){  ?> class="active" <?php } ?>>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                        Album Types
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">

                                <li <?php if($currentpage=='addalbumtype.php' ){  ?> class="active" <?php } ?> >
                                <a href="addalbumtype.php">
                                            <i class="menu-icon fa fa-plus"></i>
                            Add
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                            <li <?php if( $currentpage=='editalbumtype.php'  || $currentpage=='albumtypes.php' ){  ?> class="active" <?php } ?>>
                                <a href="albumtypes.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                                </ul>
                            </li>

                    

                

<li <?php if( $currentpage=='editmediatype.php' || $currentpage=='addmediatype.php' || $currentpage=='mediatypes.php' ){  ?> class="active" <?php } ?>>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                        Media Types
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">

                                <li <?php if($currentpage=='addmediatype.php' ){  ?> class="active" <?php } ?> >
                                <a href="addmediatype.php">
                                            <i class="menu-icon fa fa-plus"></i>
                            Add
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                            <li <?php if( $currentpage=='editmediatype.php'  || $currentpage=='mediatypes.php' ){  ?> class="active" <?php } ?>>
                                <a href="mediatypes.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                                </ul>
                            </li>


                            <li <?php if( $currentpage=='editgeneraltype.php' || $currentpage=='addgeneraltype.php' || $currentpage=='generaltypes.php' ){  ?> class="active" <?php } ?>>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                        General Types
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">

                                <li <?php if($currentpage=='addgeneraltype.php' ){  ?> class="active" <?php } ?> >
                                <a href="addgeneraltype.php">
                                            <i class="menu-icon fa fa-plus"></i>
                            Add
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                            <li <?php if( $currentpage=='editgeneraltype.php'  || $currentpage=='generaltypes.php' ){  ?> class="active" <?php } ?>>
                                <a href="generaltypes.php">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>
        
                                </ul>
                            </li>

    




                                        
                        </ul>
                    </li>


                    <li <?php if($currentpage=='mailsettings.php' || $currentpage=='changepassword.php' || $currentpage=='contactsettings.php' || $currentpage=='authentication.php' || $currentpage=='sitesettings.php' ){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-cogs"></i>
                            <span class="menu-text"> Settings</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                                <li class="">
                                <a href="mailsettings.php">
                                            <i class="menu-icon fa fa-list"></i>
                                Mail settings
                                </a>

                                <b class="arrow"></b>
                            </li>
                        

                                            
        <li class="">
                                <a href="sitesettings.php">
                                            <i class="menu-icon fa fa-list"></i>
                                Site Settings
                                </a>

                                <b class="arrow"></b>
                            </li>
                                          <li class="">
                                <a href="changepassword.php">
                                            <i class="menu-icon fa fa-list"></i>
                                Change Password
                                </a>

                                <b class="arrow"></b>
                            </li>




           
                               <li class="">
                                <a href="authentication.php">
                                            <i class="menu-icon fa fa-list"></i>
                                2F Authentication
                                </a>

                                <b class="arrow"></b>
                            </li>
                                        <li class="">
                                <a href="contactsettings.php">
                                            <i class="menu-icon fa fa-list"></i>
                                Contact Settings
                                </a>

                                <b class="arrow"></b>
                            </li>
                



                        </ul>

                        </li>

                    
        <li <?php if($currentpage=='adminusers' || $currentpage=='addadminuser' || $currentpage=='editadminuser'){  ?> class="active open" <?php } ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa  fa-users"></i>
                            <span class="menu-text"> Admin Users</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
            <li <?php if($currentpage=='addadminuser' ){  ?> class="active" <?php } ?> >
                                <a href="<?php echo \Cake\Routing\Router::url(); ?>/auth/create_user">
                                            <i class="menu-icon fa fa-plus"></i>
                            Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                                            <li <?php if($currentpage=='adminusers' || $currentpage=='editadminuser' ){  ?> class="active" <?php } ?>>
                                <a href="<?php echo \Cake\Routing\Router::url(); ?>/auth/user_list">
                                            <i class="menu-icon fa fa-list"></i>
                                List
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>

                        </li>
    

                            <li class="">
                                <a href="auth/logout">
                                    <i class="menu-icon fa  fa-lock"></i>
                                    Logout
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul><!-- /.nav-list -->

                <!-- #section:basics/sidebar.layout.minimize -->
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <!-- /section:basics/sidebar.layout.minimize -->
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
<?php $this->end(); ?>




<?php
$this->start('footer');
?>


<div class="footer">
                <div class="footer-inner">
                    <!-- #section:basics/footer -->
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Admin</span>
                             Panel &copy; 2019-2020
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>

                    <!-- /section:basics/footer -->
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->



                </body>
</html>




<?php $this->end(); ?>

<?php  echo $this->fetch('mainheader');  ?>
    <body class="skin-1">
        <!-- #section:basics/navbar.layout -->
        <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <!-- #section:basics/sidebar.mobile.toggle -->
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <!-- /section:basics/sidebar.mobile.toggle -->
                <div class="navbar-header pull-left">
                    <!-- #section:basics/navbar.layout.brand -->
                    <a href="home.php" class="navbar-brand">
                        <small>

                    <?php echo $this->Html->image('/admin_theme/assets/avatars/logo.png',array('height' => '25px')); ?>

                            Administrator
                        </small>
                    </a>

                    <!-- /section:basics/navbar.layout.brand -->

                    <!-- #section:basics/navbar.toggle -->

                    <!-- /section:basics/navbar.toggle -->
                </div>

                <!-- #section:basics/navbar.dropdown -->
                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                       <?php  echo $this->fetch('notification');  ?>

                        <!-- #section:basics/navbar.user_menu -->
                    <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                
<?php echo $this->Html->image('/admin_theme/assets/avatars/user.jpg',array('height' => '25px','class'=>'nav-user-photo')); ?>

                                <span class="user-info">
                                    <small>Welcome,</small>
                       Admin
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="changepassword.php">
                                        <i class="ace-icon fa fa-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="contactsettings.php">
                                        <i class="ace-icon fa fa-user"></i>
                                        Contact
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="logout.php">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- /section:basics/navbar.user_menu -->
                    </ul>
                </div>

                <!-- /section:basics/navbar.dropdown -->
            </div><!-- /.navbar-container -->
        </div>

        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <!-- #section:basics/sidebar -->
  <?php  echo $this->fetch('sidemenu');  ?>
            </div>




    <?= $this->Flash->render() ?>
   <?= $this->fetch('content') ?>





            </div><!-- /.main-content -->
<?php 

echo $this->Html->script('/admin_theme/assets/js/jquery.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/jquery.mobile.custom.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/bootstrap.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/jquery-ui.custom.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/jquery.ui.touch-punch.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/fullcalendar.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/bootbox.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/jquery.easypiechart.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/jquery.sparkline.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/flot/jquery.flot.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/flot/jquery.flot.pie.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/flot/jquery.flot.resize.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/ace-elements.min.js'); 
echo $this->Html->script('/admin_theme/assets/js/ace.min.js'); 

?>

       

        <!-- inline scripts related to this page -->
    <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                $('.easy-pie-chart.percentage').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                    var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                    var size = parseInt($(this).data('size')) || 50;
                    $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size/10),
                        animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                        size: size
                    });
                })
            
                $('.sparkline').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                    $(this).sparkline('html',
                                     {
                                        tagValuesAttribute:'data-values',
                                        type: 'bar',
                                        barColor: barColor ,
                                        chartRangeMin:$(this).data('min') || 0
                                     });
                });
            
            
            
              var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
              var data = [
                { label: "social networks",  data: 38.7, color: "#68BC31"},
                { label: "search engines",  data: 24.5, color: "#2091CF"},
                { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
                { label: "direct traffic",  data: 18.6, color: "#DA5430"},
                { label: "other",  data: 10, color: "#FEE074"}
              ]
              function drawPieChart(placeholder, data, position) {
                  $.plot(placeholder, data, {
                    series: {
                        pie: {
                            show: true,
                            tilt:0.8,
                            highlight: {
                                opacity: 0.25
                            },
                            stroke: {
                                color: '#fff',
                                width: 2
                            },
                            startAngle: 2
                        }
                    },
                    legend: {
                        show: true,
                        position: position || "ne", 
                        labelBoxBorderColor: null,
                        margin:[-30,15]
                    }
                    ,
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                 })
             }
             drawPieChart(placeholder, data);
            
             /**
             we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
             so that's not needed actually.
             */
             placeholder.data('chart', data);
             placeholder.data('draw', drawPieChart);
            
            
              //pie chart tooltip example
              var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
              var previousPoint = null;
            
              placeholder.on('plothover', function (event, pos, item) {
                if(item) {
                    if (previousPoint != item.seriesIndex) {
                        previousPoint = item.seriesIndex;
                        var tip = item.series['label'] + " : " + item.series['percent']+'%';
                        $tooltip.show().children(0).text(tip);
                    }
                    $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
                } else {
                    $tooltip.hide();
                    previousPoint = null;
                }
                
             });
            
            
            
            
            
            
                var d1 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d1.push([i, Math.sin(i)]);
                }
            
                var d2 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d2.push([i, Math.cos(i)]);
                }
            
                var d3 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.2) {
                    d3.push([i, Math.tan(i)]);
                }
                
            
                var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
                $.plot("#sales-charts", [
                    { label: "Domains", data: d1 },
                    { label: "Hosting", data: d2 },
                    { label: "Services", data: d3 }
                ], {
                    hoverable: true,
                    shadowSize: 0,
                    series: {
                        lines: { show: true },
                        points: { show: true }
                    },
                    xaxis: {
                        tickLength: 0
                    },
                    yaxis: {
                        ticks: 10,
                        min: -2,
                        max: 2,
                        tickDecimals: 3
                    },
                    grid: {
                        backgroundColor: { colors: [ "#fff", "#fff" ] },
                        borderWidth: 1,
                        borderColor:'#555'
                    }
                });
            
            
                $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('.tab-content')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $source.offset();
                    //var w2 = $source.width();
            
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }
            
            
                $('.dialogs,.comments').ace_scroll({
                    size: 300
                });
                
                
                //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                //so disable dragging when clicking on label
                var agent = navigator.userAgent.toLowerCase();
                if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
                  $('#tasks').on('touchstart', function(e){
                    var li = $(e.target).closest('#tasks li');
                    if(li.length == 0)return;
                    var label = li.find('label.inline').get(0);
                    if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
                });
            
                $('#tasks').sortable({
                    opacity:0.8,
                    revert:true,
                    forceHelperSize:true,
                    placeholder: 'draggable-placeholder',
                    forcePlaceholderSize:true,
                    tolerance:'pointer',
                    stop: function( event, ui ) {
                        //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                        $(ui.item).css('z-index', 'auto');
                    }
                    }
                );
                $('#tasks').disableSelection();
                $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
                    if(this.checked) $(this).closest('li').addClass('selected');
                    else $(this).closest('li').removeClass('selected');
                });
            
            
                //show the dropdowns on top or bottom depending on window height and menu position
                $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
                    var offset = $(this).offset();
            
                    var $w = $(window)
                    if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
                        $(this).addClass('dropup');
                    else $(this).removeClass('dropup');
                });
            
            })
        </script>

