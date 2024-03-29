@extends('app')

@section('content')

<!-- BEGIN PANEL DEMO -->
<div class="box-demo">
    <div class="inner-panel">
        <div class="cog-panel" id="demo-panel"><i class="fa fa-cog fa-spin"></i></div>
        <p class="text-muted small text-center">COLOR SCHEMES</p>
        <div class="row text-center">
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Default" id="color-reset">
                    <div class="half-tiles bg-dark"></div>
                    <div class="half-tiles bg-dark"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Light" id="change-color-light">
                    <div class="half-tiles bg-white"></div>
                    <div class="half-tiles bg-white"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Primary dark" id="change-primary-dark">
                    <div class="half-tiles bg-primary"></div>
                    <div class="half-tiles bg-dark"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Info dark" id="change-info-dark">
                    <div class="half-tiles bg-info"></div>
                    <div class="half-tiles bg-dark"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Success dark" id="change-success-dark">
                    <div class="half-tiles bg-success"></div>
                    <div class="half-tiles bg-dark"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Danger dark" id="change-danger-dark">
                    <div class="half-tiles bg-danger"></div>
                    <div class="half-tiles bg-dark"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Warning dark" id="change-warning-dark">
                    <div class="half-tiles bg-warning"></div>
                    <div class="half-tiles bg-dark"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Primary light" id="change-primary-light">
                    <div class="half-tiles bg-primary"></div>
                    <div class="half-tiles bg-white"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Info light" id="change-info-light">
                    <div class="half-tiles bg-info"></div>
                    <div class="half-tiles bg-white"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Success light" id="change-success-light">
                    <div class="half-tiles bg-success"></div>
                    <div class="half-tiles bg-white"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Danger light" id="change-danger-light">
                    <div class="half-tiles bg-danger"></div>
                    <div class="half-tiles bg-white"></div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="xs-tiles" data-toggle="tooltip" title="Warning light" id="change-warning-light">
                    <div class="half-tiles bg-warning"></div>
                    <div class="half-tiles bg-white"></div>
                </div>
            </div>
        </div>
        <button class="btn btn-block btn-primary btn-sm" id="btn-reset">Reset to default</button>
    </div>
</div>
<!-- END PANEL DEMO -->


<!--
===========================================================
BEGIN PAGE
===========================================================
-->
<div class="wrapper">
    <!-- BEGIN TOP NAV -->
    <div class="top-navbar">
        <div class="top-navbar-inner">

            <!-- Begin Logo brand -->
            <div class="logo-brand">
                <a href="#"><img src="https://omnepresent.com/wp-content/uploads/2014/12/Omnepresent-Logo-1212.svg" alt="Sentir logo"></a>
            </div><!-- /.logo-brand -->
            <!-- End Logo brand -->

            <div class="top-nav-content">

                <!-- Begin button sidebar left toggle -->
                <div class="btn-collapse-sidebar-left">
                    <i class="fa fa-long-arrow-right icon-dinamic"></i>
                </div><!-- /.btn-collapse-sidebar-left -->
                <!-- End button sidebar left toggle -->

                <!-- Begin button sidebar right toggle -->
                <div class="btn-collapse-sidebar-right">
                    <i class="fa fa-bullhorn"></i>
                </div><!-- /.btn-collapse-sidebar-right -->
                <!-- End button sidebar right toggle -->

                <!-- Begin button nav toggle -->
                <div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
                    <i class="fa fa-plus icon-plus"></i>
                </div><!-- /.btn-collapse-sidebar-right -->
                <!-- End button nav toggle -->


                <!-- Begin user session nav -->
                <ul class="nav-user navbar-right">
                    <li class="dropdown">
                        <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle" alt="Avatar">
                            Hi, <strong>{{ Auth::user()->name }}</strong>
                        </a>
                        <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                            <li><a href="#fakelink">Account setting</a></li>
                            <li><a href="#fakelink">Payment setting</a></li>
                            <li><a href="#fakelink">Change password</a></li>
                            <li><a href="#fakelink">My public profile</a></li>
                            <li class="divider"></li>
                            <li><a href="lock-screen.html">Lock screen</a></li>
                            <li><a href="{{ Auth::logout() }}">Log out</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- End user session nav -->

                <!-- Begin Collapse menu nav -->
                <div class="collapse navbar-collapse" id="main-fixed-nav">
                    <!-- Begin nav search form -->
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                    <!-- End nav search form -->
                    <ul class="nav navbar-nav navbar-left">
                        <!-- Begin nav notification -->
                        <li class="dropdown">
                            <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="badge badge-danger icon-count">7</span>
                                <i class="fa fa-bell"></i>
                            </a>
                            <ul class="dropdown-menu square with-triangle">
                                <li>
                                    <div class="nav-dropdown-heading">
                                        Notifications
                                    </div><!-- /.nav-dropdown-heading -->
                                    <div class="nav-dropdown-content scroll-nav-dropdown">
                                        <ul>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-2.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    <strong>Thomas White</strong> posted on your profile page
                                                    <span class="small-caps">17 seconds ago</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-3.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    <strong>Doina Slaivici</strong> uploaded photo
                                                    <span class="small-caps">10 minutes ago</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-4.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    <strong>Harry Nichols</strong> commented on your post
                                                    <span class="small-caps">40 minutes ago</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-5.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    <strong>Mihaela Cihac</strong> send you a message
                                                    <span class="small-caps">2 hours ago</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-6.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    <strong>Harold Chavez</strong> change his avatar
                                                    <span class="small-caps">Yesterday</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-7.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    <strong>Elizabeth Owens</strong> posted on your profile page
                                                    <span class="small-caps">Yesterday</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-8.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    <strong>Frank Oliver</strong> commented on your post
                                                    <span class="small-caps">A week ago</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-9.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    <strong>Mya Weastell</strong> send you a message
                                                    <span class="small-caps">April 15, 2014</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-10.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    <strong>Carl Rodriguez</strong> joined your weekend party
                                                    <span class="small-caps">April 01, 2014</span>
                                                </a></li>
                                        </ul>
                                    </div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
                                    <button class="btn btn-primary btn-square btn-block">See all notifications</button>
                                </li>
                            </ul>
                        </li>
                        <!-- End nav notification -->
                        <!-- Begin nav task -->
                        <li class="dropdown">
                            <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="badge badge-warning icon-count">3</span>
                                <i class="fa fa-tasks"></i>
                            </a>
                            <ul class="dropdown-menu square margin-list-rounded with-triangle">
                                <li>
                                    <div class="nav-dropdown-heading">
                                        Tasks
                                    </div><!-- /.nav-dropdown-heading -->
                                    <div class="nav-dropdown-content scroll-nav-dropdown">
                                        <ul>
                                            <li class="unread"><a href="#fakelink">
                                                    <i class="fa fa-check-circle-o absolute-left-content icon-task completed"></i>
                                                    Creating documentation
                                                    <span class="small-caps">Completed : Yesterday</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <i class="fa fa-clock-o absolute-left-content icon-task progress"></i>
                                                    Eating sands
                                                    <span class="small-caps">Deadline : Tomorrow</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <i class="fa fa-clock-o absolute-left-content icon-task progress"></i>
                                                    Sending payment
                                                    <span class="small-caps">Deadline : Next week</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <i class="fa fa-exclamation-circle absolute-left-content icon-task uncompleted"></i>
                                                    Uploading new version
                                                    <span class="small-caps">Deadline: 2 seconds ago</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <i class="fa fa-exclamation-circle absolute-left-content icon-task uncompleted"></i>
                                                    Drinking coffee
                                                    <span class="small-caps">Deadline : 2 hours ago</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <i class="fa fa-check-circle-o absolute-left-content icon-task completed"></i>
                                                    Walking to nowhere
                                                    <span class="small-caps">Completed : over a year ago</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <i class="fa fa-check-circle-o absolute-left-content icon-task completed"></i>
                                                    Sleeping under bridge
                                                    <span class="small-caps">Completed : Dec 31, 2013</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <i class="fa fa-check-circle-o absolute-left-content icon-task completed"></i>
                                                    Buying some cigarettes
                                                    <span class="small-caps">Completed : 2 days ago</span>
                                                </a></li>
                                        </ul>
                                    </div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
                                    <button class="btn btn-primary btn-square btn-block">See all notifications</button>
                                </li>
                            </ul>
                        </li>
                        <!-- End nav task -->
                        <!-- Begin nav message -->
                        <li class="dropdown">
                            <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="badge badge-success icon-count">9</span>
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu square margin-list-rounded with-triangle">
                                <li>
                                    <div class="nav-dropdown-heading">
                                        Messages
                                    </div><!-- /.nav-dropdown-heading -->
                                    <div class="nav-dropdown-content scroll-nav-dropdown">
                                        <ul>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-25.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                                    <span class="small-caps">17 seconds ago</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-24.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                    <span class="small-caps">10 minutes ago</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-23.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    I think so
                                                    <span class="small-caps">40 minutes ago</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-22.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    Yes, I'll be waiting
                                                    <span class="small-caps">2 hours ago</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-21.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    Thank you!
                                                    <span class="small-caps">Yesterday</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-20.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    No problem! I will never remember that
                                                    <span class="small-caps">Yesterday</span>
                                                </a></li>
                                            <li class="unread"><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-19.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    Tak gepuk ndasmu sisan lho dab!
                                                    <span class="small-caps">A week ago</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-18.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    Sorry bro, aku or atau sing jenenge ngono kui
                                                    <span class="small-caps">April 15, 2014</span>
                                                </a></li>
                                            <li><a href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-17.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                    Will you send me an invitation for your weeding party?
                                                    <span class="small-caps">April 01, 2014</span>
                                                </a></li>
                                        </ul>
                                    </div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
                                    <button class="btn btn-primary btn-square btn-block">See all message</button>
                                </li>
                            </ul>
                        </li>
                        <!-- End nav message -->
                        <!-- Begin nav friend requuest -->
                        <li class="dropdown">
                            <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="badge badge-info icon-count">2</span>
                                <i class="fa fa-users"></i>
                            </a>
                            <ul class="dropdown-menu square margin-list-rounded with-triangle">
                                <li>
                                    <div class="nav-dropdown-heading">
                                        Friend requests
                                    </div><!-- /.nav-dropdown-heading -->
                                    <div class="nav-dropdown-content static-list scroll-nav-dropdown">
                                        <ul>
                                            <li>
                                                <img src="assets/img/avatar/avatar-12.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Craig Dixon</strong>
                                                        <span class="small-caps">2 murtual friends</span>
                                                    </div>
                                                    <div class="col-xs-6 text-right btn-action">
                                                        <button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
                                                    </div><!-- /.col-xs-5 text-right btn-cation -->
                                                </div><!-- /.row -->
                                            </li>
                                            <li>
                                                <img src="assets/img/avatar/avatar-13.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Mikayla King</strong>
                                                        <span class="small-caps">20 murtual friends</span>
                                                    </div>
                                                    <div class="col-xs-6 text-right btn-action">
                                                        <button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
                                                    </div><!-- /.col-xs-5 text-right btn-cation -->
                                                </div><!-- /.row -->
                                            </li>
                                            <li>
                                                <img src="assets/img/avatar/avatar-14.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Richard Dixon</strong>
                                                        <span class="small-caps">1 murtual friend</span>
                                                    </div>
                                                    <div class="col-xs-6 text-right btn-action">
                                                        <button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
                                                    </div><!-- /.col-xs-5 text-right btn-cation -->
                                                </div><!-- /.row -->
                                            </li>
                                            <li>
                                                <img src="assets/img/avatar/avatar-15.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Brenda Fuller</strong>
                                                        <span class="small-caps">8 murtual friends</span>
                                                    </div>
                                                    <div class="col-xs-6 text-right btn-action">
                                                        <button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
                                                    </div><!-- /.col-xs-5 text-right btn-cation -->
                                                </div><!-- /.row -->
                                            </li>
                                            <li>
                                                <img src="assets/img/avatar/avatar-16.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Ryan Ortega</strong>
                                                        <span class="small-caps">122 murtual friends</span>
                                                    </div>
                                                    <div class="col-xs-6 text-right btn-action">
                                                        <button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
                                                    </div><!-- /.col-xs-5 text-right btn-cation -->
                                                </div><!-- /.row -->
                                            </li>
                                            <li>
                                                <img src="assets/img/avatar/avatar-17.jpg" class="absolute-left-content img-circle" alt="Avatar">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Jessica Gutierrez</strong>
                                                        <span class="small-caps">45 murtual friends</span>
                                                    </div>
                                                    <div class="col-xs-6 text-right btn-action">
                                                        <button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
                                                    </div><!-- /.col-xs-5 text-right btn-cation -->
                                                </div><!-- /.row -->
                                            </li>
                                        </ul>
                                    </div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
                                    <button class="btn btn-primary btn-square btn-block">See all request</button>
                                </li>
                            </ul>
                        </li>
                        <!-- End nav friend requuest -->
                    </ul>
                </div><!-- /.navbar-collapse -->
                <!-- End Collapse menu nav -->
            </div><!-- /.top-nav-content -->
        </div><!-- /.top-navbar-inner -->
    </div><!-- /.top-navbar -->
    <!-- END TOP NAV -->



    <!-- BEGIN SIDEBAR LEFT -->
    <div class="sidebar-left sidebar-nicescroller">
        <ul class="sidebar-menu">
            <li><a href="index.html"><i class="fa fa-dashboard icon-sidebar"></i>Dashboard</a></li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-desktop icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Layout template
                    <span class="badge badge-warning span-sidebar">3</span>
                </a>
                <ul class="submenu">
                    <li><a href="#fakelink">Default layout<span class="label label-success span-sidebar">CURRENT</span></a></li>
                    <li><a href="layout-no-sidebar-right.html">No sidebar right</a></li>
                    <li><a href="layout-profile-left.html">Profile summary left</a></li>
                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-flask icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Widget UI kits
                </a>
                <ul class="submenu">
                    <li><a href="widget-default.html">Default</a></li>
                    <li><a href="widget-store.html">Store</a></li>
                    <li><a href="widget-real-estate.html">Real estate <span class="label label-danger span-sidebar">HOT</span></a></li>
                    <li><a href="widget-blog.html">Blog</a></li>
                    <li><a href="widget-social.html">Social <span class="label label-danger span-sidebar">HOT</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-folder icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Basic elements
                    <span class="label label-info span-sidebar">BS3</span>
                </a>
                <ul class="submenu">
                    <li><a href="element-typography.html">Typography</a></li>
                    <li><a href="element-form.html">Form element</a></li>
                    <li><a href="element-form-example.html">Form example</a></li>
                    <li><a href="element-wyswyg.html">Form WYSWYG</a></li>
                    <li><a href="element-validation.html">Form validation</a></li>
                    <li><a href="element-button.html">Button</a></li>
                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-folder-open icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    More elements
                </a>
                <ul class="submenu">
                    <li><a href="element-icon.html">Icons <span class="badge badge-warning span-sidebar">3</span></a></li>
                    <li><a href="element-box-panel.html">Box &amp; panel</a></li>
                    <li><a href="element-nav-dropdown.html">Nav &amp; dropdown</a></li>
                    <li><a href="element-breadcrumb-pagination.html">Breadcrumb &amp; pagination</a></li>
                    <li><a href="element-thumbnail-jumbotron.html">Jumbotron &amp; thumbnail</a></li>
                    <li><a href="element-alert-progress-bar.html">Alert &amp; progress bar</a></li>
                    <li><a href="element-list-media.html">List group &amp; media object</a></li>
                    <li><a href="element-collapse.html">Collapse</a></li>
                    <li><a href="element-grid-masonry.html">Grid &amp; masonry</a></li>
                    <li><a href="element-extra.html">Extra custom elements</a></li>
                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-table icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Tables
                </a>
                <ul class="submenu">
                    <li><a href="table-static.html">Static table</a></li>
                    <li><a href="table-color.html">Table color</a></li>
                    <li><a href="table-datatable.html">Jquery datatable</a></li>
                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-bar-chart-o icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Chart or Graph
                </a>
                <ul class="submenu">
                    <li><a href="chart-morris.html">Morris chart</a></li>
                    <li><a href="chart-c3.html">C3 chart</a></li>
                    <li><a href="chart-flot.html">Flot chart</a></li>
                    <li><a href="chart-easy-knob.html">Easy pie chart &amp; knob</a></li>
                </ul>
            </li>
            <li class="static">EXTRA DESIGNS</li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-envelope icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Mail apps
                    <span class="label label-danger span-sidebar">HOT</span>
                </a>
                <ul class="submenu">
                    <li><a href="mail-inbox.html">Inbox <span class="badge badge-success span-sidebar">5</span></a></li>
                    <li><a href="mail-send.html">Sent mail</a></li>
                    <li><a href="mail-new.html">New mail</a></li>
                    <li><a href="mail-contact.html">Mail contact</a></li>
                    <li><a href="mail-read.html">Read mail</a></li>
                    <li><a href="mail-reply.html">Reply mail</a></li>
                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-shopping-cart icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Store apps
                </a>
                <ul class="submenu">
                    <li><a href="store-product-list.html">Product list</a></li>
                    <li><a href="store-product-column.html">Product column</a></li>
                    <li><a href="store-product-masonry.html">Product masonry</a></li>
                    <li><a href="store-product-detail.html">Product detail</a></li>
                    <li><a href="store-shopping-cart.html">Shopping cart</a></li>
                    <li><a href="store-checkout.html">Checkout</a></li>

                    <li><a href="store-orderlist.html">Order list</a></li>

                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-home icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Real estate apps
                </a>
                <ul class="submenu">
                    <li><a href="real-estate-property-list.html">Property list</a></li>
                    <li><a href="real-estate-property-column.html">Property column</a></li>
                    <li><a href="real-estate-property-masonry.html">Property masonry</a></li>
                    <li><a href="real-estate-property-detail.html">Property detail</a></li>
                    <li><a href="real-estate-property-search.html">Search property</a></li>
                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-comment icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    <span class="label label-success span-sidebar">TOP</span>
                    Blog apps
                </a>
                <ul class="submenu">
                    <li><a href="blog-list.html">Blog list</a></li>
                    <li><a href="blog-column.html">Blog column</a></li>
                    <li><a href="blog-masonry.html">Blog masonry</a></li>
                    <li><a href="blog-detail.html">Blog detail</a></li>
                    <li><a href="blog-home.html">Featured home</a></li>
                    <li><a href="blog-new.html">Add new blog</a></li>
                    <li><a href="blog-comments.html">Comments</a></li>
                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-users icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Social apps
                </a>
                <ul class="submenu">
                    <li><a href="social-home.html">Home activity</a></li>
                    <li><a href="social-my-profile.html">My profile</a></li>
                    <li><a href="social-friendlist.html">Friend list <span class="badge badge-info span-sidebar">5</span></a></li>
                    <li><a href="social-timeline.html">Timeline</a></li>
                    <li><a href="social-photos.html">Photos</a></li>
                </ul>
            </li>
            <li>
                <a href="#fakelink">
                    <i class="fa fa-heart icon-sidebar"></i>
                    <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                    Example pages
                </a>
                <ul class="submenu">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="lock-screen.html">Lock screen</a></li>
                    <li><a href="forgot-password.html">Forgot password</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="example-pricing-table.html">Pricing table</a></li>
                    <li><a href="example-invoice.html">Invoice</a></li>
                    <li><a href="example-faq.html">FAQ</a></li>
                    <li><a href="example-search.html">Search page</a></li>
                    <li><a href="404.html">404</a></li>
                    <li><a href="blank.html">Blank page</a></li>
                </ul>
            </li>

            <li class="static">SYSTEM SETTING</li>
            <li class="text-content">
                <div class="switch">
                    <div class="onoffswitch blank">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="alertme" checked>
                        <label class="onoffswitch-label" for="alertme">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
                Alert me when system down
            </li>
            <li class="text-content">
                <div class="switch">
                    <div class="onoffswitch blank">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="autoupdate">
                        <label class="onoffswitch-label" for="autoupdate">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
                Automatic update
            </li>
            <li class="text-content">
                <div class="switch">
                    <div class="onoffswitch blank">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="dailyreport">
                        <label class="onoffswitch-label" for="dailyreport">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
                Daily task report
            </li>
            <li class="text-content">
                <div class="switch">
                    <div class="onoffswitch blank">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="remembercomputer" checked>
                        <label class="onoffswitch-label" for="remembercomputer">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
                Remember this computer
            </li>
        </ul>
    </div><!-- /.sidebar-left -->
    <!-- END SIDEBAR LEFT -->



    <!-- BEGIN SIDEBAR RIGHT HEADING -->
    <div class="sidebar-right-heading">
        <ul class="nav nav-tabs square nav-justified">
            <li class="active"><a href="#online-user-sidebar" data-toggle="tab"><i class="fa fa-comments"></i></a></li>
            <li><a href="#notification-sidebar" data-toggle="tab"><i class="fa fa-bell"></i></a></li>
            <li><a href="#task-sidebar" data-toggle="tab"><i class="fa fa-tasks"></i></a></li>
            <li><a href="#setting-sidebar" data-toggle="tab"><i class="fa fa-cogs"></i></a></li>
        </ul>
    </div><!-- /.sidebar-right-heading -->
    <!-- END SIDEBAR RIGHT HEADING -->



    <!-- BEGIN SIDEBAR RIGHT -->
    <div class="sidebar-right sidebar-nicescroller">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="online-user-sidebar">
                <ul class="sidebar-menu online-user">
                    <li class="static">ONLINE USERS</li>
                    <li><a href="#fakelink">
                            <span class="user-status success"></span>
                            <img src="assets/img/avatar/avatar-2.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <i class="fa fa-mobile-phone device-status"></i>
                            Thomas White
                            <span class="small-caps">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status success"></span>
                            <img src="assets/img/avatar/avatar-3.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            Doina Slaivici
                            <span class="small-caps">Duis autem vel eum iriure dolor in hendrerit in </span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status success"></span>
                            <img src="assets/img/avatar/avatar-4.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <i class="fa fa-android device-status"></i>
                            Harry Nichols
                            <span class="small-caps">I think so</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status success"></span>
                            <img src="assets/img/avatar/avatar-5.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <i class="fa fa-mobile-phone device-status"></i>
                            Mihaela Cihac
                            <span class="small-caps">Yes, I'll be waiting</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status success"></span>
                            <img src="assets/img/avatar/avatar-6.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <i class="fa fa-apple device-status"></i>
                            Harold Chavez
                            <span class="small-caps">Thank you!</span>
                        </a></li>

                    <li class="static">IDLE USERS</li>
                    <li><a href="#fakelink">
                            <span class="user-status warning"></span>
                            <img src="assets/img/avatar/avatar-7.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <i class="fa fa-windows device-status"></i>
                            Elizabeth Owens
                            <span class="small-caps">2 hours</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status warning"></span>
                            <img src="assets/img/avatar/avatar-8.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <i class="fa fa-apple device-status"></i>
                            Frank Oliver
                            <span class="small-caps">4 hours</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status warning"></span>
                            <img src="assets/img/avatar/avatar-9.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            Mya Weastell
                            <span class="small-caps">15 minutes</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status warning"></span>
                            <img src="assets/img/avatar/avatar-10.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <i class="fa fa-mobile-phone device-status"></i>
                            Carl Rodriguez
                            <span class="small-caps">20 hours</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status warning"></span>
                            <img src="assets/img/avatar/avatar-11.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <i class="fa fa-mobile-phone device-status"></i>
                            Nikita Carter
                            <span class="small-caps">2 minutes</span>
                        </a></li>

                    <li class="static">OFFLINE USERS</li>
                    <li><a href="#fakelink">
                            <span class="user-status danger"></span>
                            <img src="assets/img/avatar/avatar-12.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            Craig Dixon
                            <span class="small-caps">Last seen 2 hours ago</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status danger"></span>
                            <img src="assets/img/avatar/avatar-13.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            Mikayla King
                            <span class="small-caps">Last seen yesterday</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status danger"></span>
                            <img src="assets/img/avatar/avatar-14.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            Richard Dixon
                            <span class="small-caps">Last seen Feb 20, 2014 05:45:50</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status danger"></span>
                            <img src="assets/img/avatar/avatar-15.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            Brenda Fuller
                            <span class="small-caps">Last seen Feb 15, 2014 11:35:50</span>
                        </a></li>
                    <li><a href="#fakelink">
                            <span class="user-status danger"></span>
                            <img src="assets/img/avatar/avatar-16.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            Ryan Ortega
                            <span class="small-caps">Last seen Jan 20, 2014 03:45:50</span>
                        </a></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="notification-sidebar">
                <ul class="sidebar-menu sidebar-notification">
                    <li class="static">TODAY</li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Karen Wallace" data-placement="left">
                            <img src="assets/img/avatar/avatar-25.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Posted something on your profile page</span>
                            <span class="small-caps">17 seconds ago</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Phillip Lucas" data-placement="left">
                            <img src="assets/img/avatar/avatar-24.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Uploaded a photo</span>
                            <span class="small-caps">2 hours ago</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Sandra Myers" data-placement="left">
                            <img src="assets/img/avatar/avatar-23.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Commented on your post</span>
                            <span class="small-caps">5 hours ago</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Charles Guerrero" data-placement="left">
                            <img src="assets/img/avatar/avatar-22.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Send you a message</span>
                            <span class="small-caps">17 hours ago</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Maria Simpson" data-placement="left">
                            <img src="assets/img/avatar/avatar-21.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Change her avatar</span>
                            <span class="small-caps">20 hours ago</span>
                        </a></li>

                    <li class="static">YESTERDAY</li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Jason Crawford" data-placement="left">
                            <img src="assets/img/avatar/avatar-20.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Posted something on your profile page</span>
                            <span class="small-caps">Yesterday 10:45:12</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Cynthia Mendez" data-placement="left">
                            <img src="assets/img/avatar/avatar-19.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Uploaded a photo</span>
                            <span class="small-caps">Yesterday 08:00:05</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Peter Ramirez" data-placement="left">
                            <img src="assets/img/avatar/avatar-18.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Commented on your post</span>
                            <span class="small-caps">Yesterday 07:49:08</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Jessica Gutierrez" data-placement="left">
                            <img src="assets/img/avatar/avatar-17.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Send you a message</span>
                            <span class="small-caps">Yesterday 07:35:19</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="Ryan Ortega" data-placement="left">
                            <img src="assets/img/avatar/avatar-16.jpg" class="ava-sidebar img-circle" alt="Avatar">
                            <span class="activity">Change her avatar</span>
                            <span class="small-caps">Yesterday 06:00:00</span>
                        </a></li>

                    <li class="static text-center"><button class="btn btn-primary btn-sm">See all notifications</button></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="task-sidebar">
                <ul class="sidebar-menu sidebar-task">
                    <li class="static">UNCOMPLETED</li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="in progress" data-placement="left">
                            <i class="fa fa-clock-o icon-task-sidebar progress"></i>
                            Creating documentation
                            <span class="small-caps">Deadline : Next week</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="uncompleted" data-placement="left">
                            <i class="fa fa-exclamation-circle icon-task-sidebar uncompleted"></i>
                            Eating sand
                            <span class="small-caps">Deadline : 2 hours ago</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="uncompleted" data-placement="left">
                            <i class="fa fa-exclamation-circle icon-task-sidebar uncompleted"></i>
                            Sending payment
                            <span class="small-caps">Deadline : 2 seconds ago</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="in progress" data-placement="left">
                            <i class="fa fa-clock-o icon-task-sidebar progress"></i>
                            Uploading new version
                            <span class="small-caps">Deadline : Tomorrow</span>
                        </a></li>

                    <li class="static">COMPLETED</li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="completed" data-placement="left">
                            <i class="fa fa-check-circle-o icon-task-sidebar completed"></i>
                            Drinking coffee
                            <span class="small-caps">Completed : 10 hours ago</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="completed" data-placement="left">
                            <i class="fa fa-check-circle-o icon-task-sidebar completed"></i>
                            Walking to nowhere
                            <span class="small-caps">Completed : Yesterday</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="completed" data-placement="left">
                            <i class="fa fa-check-circle-o icon-task-sidebar completed"></i>
                            Sleeping under bridge
                            <span class="small-caps">Completed : Feb 10 2014</span>
                        </a></li>
                    <li><a href="#fakelink" data-toggle="tooltip" title="completed" data-placement="left">
                            <i class="fa fa-check-circle-o icon-task-sidebar completed"></i>
                            Buying some cigarettes
                            <span class="small-caps">Completed : Jan 15 2014</span>
                        </a></li>

                    <li class="static text-center"><button class="btn btn-success btn-sm">See all tasks</button></li>
                </ul>
            </div><!-- /#task-sidebar -->
            <div class="tab-pane fade" id="setting-sidebar">
                <ul class="sidebar-menu">
                    <li class="static">ACCOUNT SETTING</li>
                    <li class="text-content">
                        <div class="switch">
                            <div class="onoffswitch blank">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="onlinestatus" checked>
                                <label class="onoffswitch-label" for="onlinestatus">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        Online status
                    </li>
                    <li class="text-content">
                        <div class="switch">
                            <div class="onoffswitch blank">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="offlinecontact" checked>
                                <label class="onoffswitch-label" for="offlinecontact">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        Show offline contact
                    </li>
                    <li class="text-content">
                        <div class="switch">
                            <div class="onoffswitch blank">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="invisiblemode">
                                <label class="onoffswitch-label" for="invisiblemode">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        Invisible mode
                    </li>
                    <li class="text-content">
                        <div class="switch">
                            <div class="onoffswitch blank">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="personalstatus" checked>
                                <label class="onoffswitch-label" for="personalstatus">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        Show my personal status
                    </li>
                    <li class="text-content">
                        <div class="switch">
                            <div class="onoffswitch blank">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="deviceicon">
                                <label class="onoffswitch-label" for="deviceicon">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        Show my device icon
                    </li>
                    <li class="text-content">
                        <div class="switch">
                            <div class="onoffswitch blank">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="logmessages">
                                <label class="onoffswitch-label" for="logmessages">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        Log all message
                    </li>
                </ul>
            </div><!-- /#setting-sidebar -->
        </div><!-- /.tab-content -->
    </div><!-- /.sidebar-right -->
    <!-- END SIDEBAR RIGHT -->



    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- Begin page heading -->
            <h1 class="page-heading">DASHBOARD <small>Sub heading here</small></h1>
            <!-- End page heading -->

            <!-- BEGIN EXAMPLE ALERT -->
            <div class="alert alert-warning alert-bold-border fade in alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><strong>Welcome!</strong></p>
                <p class="text-muted">You probably here cause wanna know how is <a class="alert-link" href="#fakelink">Sentir UI kits template</a>, or you have purchased it. But whatever! I just wanna
                    say thank you for viewing or purchasing my work. And let me know your feedback! <i class="fa fa-smile-o"></i></p>
            </div>
            <!-- END EXAMPLE ALERT -->


            <!-- BEGIN SiTE INFORMATIONS -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="the-box no-border bg-success tiles-information">
                        <i class="fa fa-users icon-bg"></i>
                        <div class="tiles-inner text-center">
                            <p>TODAY VISITORS</p>
                            <h1 class="bolded">12,254K</h1>
                            <div class="progress no-rounded progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div><!-- /.progress-bar .progress-bar-success -->
                            </div><!-- /.progress .no-rounded -->
                            <p><small>Better than yesterday ( 7,5% )</small></p>
                        </div><!-- /.tiles-inner -->
                    </div><!-- /.the-box no-border -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-3">
                    <div class="the-box no-border bg-primary tiles-information">
                        <i class="fa fa-shopping-cart icon-bg"></i>
                        <div class="tiles-inner text-center">
                            <p>TODAY SALES</p>
                            <h1 class="bolded">521</h1>
                            <div class="progress no-rounded progress-xs">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div><!-- /.progress-bar .progress-bar-primary -->
                            </div><!-- /.progress .no-rounded -->
                            <p><small>Better than yesterday ( 10,5% )</small></p>
                        </div><!-- /.tiles-inner -->
                    </div><!-- /.the-box no-border -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-3">
                    <div class="the-box no-border bg-danger tiles-information">
                        <i class="fa fa-comments icon-bg"></i>
                        <div class="tiles-inner text-center">
                            <p>TODAY FEEDBACK</p>
                            <h1 class="bolded">124</h1>
                            <div class="progress no-rounded progress-xs">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div><!-- /.progress-bar .progress-bar-danger -->
                            </div><!-- /.progress .no-rounded -->
                            <p><small>Less than yesterday ( <span class="text-danger">-7,5%</span> )</small></p>
                        </div><!-- /.tiles-inner -->
                    </div><!-- /.the-box no-border -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-3">
                    <div class="the-box no-border bg-warning tiles-information">
                        <i class="fa fa-money icon-bg"></i>
                        <div class="tiles-inner text-center">
                            <p>TODAY EARNINGS</p>
                            <h1 class="bolded">10,241</h1>
                            <div class="progress no-rounded progress-xs">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div><!-- /.progress-bar .progress-bar-warning -->
                            </div><!-- /.progress .no-rounded -->
                            <p><small>Better than yesterday ( 2,5% )</small></p>
                        </div><!-- /.tiles-inner -->
                    </div><!-- /.the-box no-border -->
                </div><!-- /.col-sm-3 -->
            </div><!-- /.row -->
            <!-- END SITE INFORMATIONS -->


            <div class="row">
                <div class="col-lg-8">

                    <!-- BEGIN CHART WIDGET 1 -->
                    <div class="panel panel-info panel-no-border panel-square">
                        <div class="panel-heading">
                            <div class="right-content">
                                <div class="btn-group">
                                    <button class="btn btn-info btn-sm active">
                                        Lifetime
                                    </button>
                                    <button class="btn btn-info btn-sm">
                                        This year
                                    </button>
                                </div>
                            </div>
                            <h3 class="panel-title">EARNINGS AND SALES CHART</h3>
                        </div><!-- /.panel-heading -->
                        <div class="the-box no-border full no-margin">
                            <div class="the-box no-border bg-info no-margin full">
                                <div id="morris-widget-1" style="height: 250px;"></div>
                            </div><!-- the-box no-border bg-info no-margin full -->
                            <div class="the-box no-border bg-dark no-margin chart-des">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <h3 class="bolded">LAST YEAR</h3>
                                        <p>Today May 20 2014</p>
                                    </div><!-- /.col-xs-7 -->
                                    <div class="col-xs-5 text-right">
                                        <h3 class="bolded text-success">+805.00</h3>
                                        <p>-10,1(11%)</p>
                                    </div><!-- /.col-xs-5 -->
                                </div><!-- /.row -->
                            </div><!-- the-box no-border bg-dark no-margin -->
                            <div class="the-box no-border no-margin">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <h1 class="bolded">50,024K</h1>
                                        <p class="text-muted">Lifetime earnings</p>
                                    </div><!-- /.col-xs-5 -->
                                    <div class="col-xs-5">
                                        <div id="morris-widget-2" style="height: 120px;"></div>
                                    </div><!-- /.col-xs-5 -->
                                </div><!-- /.row -->
                            </div><!-- the-box no-border no-margin -->
                        </div><!-- /.the-box no-border .full -->
                    </div><!-- /.the-box no-border .full -->
                    <!-- END CHART WIDGET 1 -->

                    <hr />
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- BEGIN PROPERTY CARD -->
                            <div class="panel panel-danger panel-square panel-no-border task-list-wrap">
                                <div class="panel-heading lg text-center">
                                    <h3 class="panel-title">SPECIAL OFFERS</h3>
                                </div>
                                <div class="the-box full no-border property-card">
                                    <div id="property-slide-8" class="owl-carousel">
                                        <div class="item full"><img src="assets/img/photo/small/img-15.jpg" alt="Image"></div>
                                        <div class="item full"><img src="assets/img/photo/small/img-16.jpg" alt="Image"></div>
                                        <div class="item full"><img src="assets/img/photo/small/img-17.jpg" alt="Image"></div>
                                    </div>
                                    <div class="the-box no-margin no-border bg-warning">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <p class="property-type-circle bg-danger">RENT</p>
                                            </div><!-- /.col-xs-3 -->
                                            <div class="col-xs-9">
                                                <h1>&#36;750/Wk</h1>
                                                <p>Bond : &#36;3,000</p>
                                            </div><!-- /.col-xs-9 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.the-box .no-margin .no-border .bg-warning -->
                                    <div class="the-box no-margin no-border">
                                        <p class="property-detail-wrap">
                                            <span class="item-detail"><i class="fa fa-inbox"></i> 2 bedroom</span>
                                            <span class="item-detail"><i class="fa fa-male"></i> 2 bathroom</span>
                                        </p>
                                        <p class="has-margin text-center">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="btn btn-danger btn-block">Favorite</button>
                                            </div><!-- /.col-xs-6 -->
                                            <div class="col-xs-6">
                                                <button class="btn btn-success btn-block">Apply rent</button>
                                            </div><!-- /.col-xs-6 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.the-box .no-margin .no-border .bg-warning -->
                                </div><!-- /.the-box no-margin -->
                            </div><!-- /.panel panel-danger panel-no-border panel-square task-list-wrap -->
                            <!-- END PROPERTY CARD -->
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-6">
                            <!-- BEGIN TASK LIST -->
                            <div class="panel panel-success panel-square panel-no-border task-list-wrap">
                                <div class="panel-heading lg">
                                    <h3 class="panel-title"><i class="fa fa-check-square-o"></i> Your current tasks</h3>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-1">
                                            <label for="task-1">Eating woods</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-2" checked />
                                            <label for="task-2">Washing my pets</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-3" checked />
                                            <label for="task-3">Uploading selfie photos</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-4" checked />
                                            <label for="task-4">Downloading movie</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-5">
                                            <label for="task-5">Updating my <i>alay</i> status</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-6" checked />
                                            <label for="task-6">Hunting cabe-cabean</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-7">
                                            <label for="task-7">Creating web template</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-8" checked />
                                            <label for="task-8">Walking to Malioboro</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-9" checked />
                                            <label for="task-9">Listening Alay songs</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <input type="checkbox" id="task-10" />
                                            <label for="task-10">Being an elite author</label>
                                        </div><!-- /.checkbox -->
                                    </li>
                                </ul>
                                <div class="panel-footer">
                                    <p><button class="btn btn-danger btn-perspective btn-block">See all tasks</button></p>
                                </div>
                            </div><!-- /.panel panel-success -->
                            <!-- END TASK LIST -->
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->

                </div><!-- /.col-sm-8 -->
                <div class="col-lg-4">

                    <!-- BEGIN WEATHER WIDGET 3 -->
                    <div class="the-box no-border" id="weather-widget-1">
                        <h4 class="text-center bolded white-text">YOGYAKARTA, ID</h4>
                        <p class="text-center white-text">TONIGHT</p>
                        <div class="weather-widget">
                            <div class="row">
                                <div class="col-xs-6 text-center">
                                    <canvas id="sleet" width="140" height="140"></canvas>
                                </div><!-- /.col-xs-6 -->
                                <div class="col-xs-6">
                                    <h1 class="bolded degrees white-text">28<i class="wi-degrees"></i></h1>
                                    <p class="white-text">Will rain at night</p>
                                </div><!-- /.col-xs-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.weather-widget -->
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <h4 class="white-text">SAT</h4>
                                <canvas id="clear-night" width="50" height="50"></canvas>
                                <h4 class="bolded white-text">27<i class="wi-degrees"></i></h4>
                            </div><!-- /.col-xs-4 -->
                            <div class="col-xs-4 text-center">
                                <h4 class="white-text">SUN</h4>
                                <canvas id="fog" width="50" height="50"></canvas>
                                <h4 class="bolded white-text">26<i class="wi-degrees"></i></h4>
                            </div><!-- /.col-xs-4 -->
                            <div class="col-xs-4 text-center">
                                <h4 class="white-text">MON</h4>
                                <canvas id="snow" width="50" height="50"></canvas>
                                <h4 class="bolded white-text">15<i class="wi-degrees"></i></h4>
                            </div><!-- /.col-xs-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.the-box bg-info no-border -->
                    <!-- END WEATHER WIDGET 2 -->

                    <!-- BEGIN SOCIAL TILES -->
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="tiles facebook-tile text-center">
                                <i class="fa fa-facebook icon-lg-size"></i>
                                <h4><a href="#fakelink">10K likes</a></h4>
                            </div><!-- /.tiles .facebook-tile -->
                        </div><!-- /.col-xs-6 -->
                        <div class="col-xs-6">
                            <div class="tiles twitter-tile text-center">
                                <i class="fa fa-twitter icon-lg-size"></i>
                                <h4><a href="#fakelink">2K followers</a></h4>
                            </div><!-- /.tiles .twitter-tile -->
                        </div><!-- /.col-xs-6 -->
                        <div class="col-xs-6">
                            <div class="tiles dribbble-tile text-center">
                                <i class="fa fa-dribbble icon-lg-size"></i>
                                <h4><a href="#fakelink">1K followers</a></h4>
                            </div><!-- /.tiles .dribbble-tile -->
                        </div><!-- /.col-xs-6 -->
                        <div class="col-xs-6">
                            <div class="tiles linkedin-tile text-center">
                                <i class="fa fa-linkedin icon-lg-size"></i>
                                <h4><a href="#fakelink">1K followers</a></h4>
                            </div><!-- /.tiles .dribbble-tile -->
                        </div><!-- /.col-xs-6 -->
                    </div><!-- /.row -->
                    <!-- END SOCIAL TILES -->


                    <h4 class="small-title"><strong><i class="fa fa-users"></i> FRIEND REQUESTS</strong></h4>

                    <!-- BEGIN USER CARD LONG -->
                    <div class="the-box bg-success no-border">
                        <div class="media user-card-sm">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object img-circle" src="assets/img/avatar/avatar-9.jpg" alt="Avatar">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Mya Weastell</h4>
                                <p class="text-success">@myaweastell</p>
                            </div>
                            <div class="right-button">
                                <button data-toggle="tooltip" title="Accepted" class="btn btn-success active"><i class="fa fa-check"></i></button>
                            </div><!-- /.right-button -->
                        </div>
                    </div><!-- /.the-box .no-border -->
                    <!-- BEGIN USER CARD LONG -->

                    <!-- BEGIN USER CARD LONG -->
                    <div class="the-box no-border">
                        <div class="media user-card-sm">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object img-circle" src="assets/img/avatar/avatar-7.jpg" alt="Avatar">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Elizabeth Owens</h4>
                                <p class="text-info">@elizabethowens</p>
                            </div>
                            <div class="right-button">
                                <button data-toggle="tooltip" title="Accept" class="btn btn-info"><i class="fa fa-check"></i></button>
                            </div><!-- /.right-button -->
                        </div>
                    </div><!-- /.the-box .no-border -->
                    <!-- BEGIN USER CARD LONG -->

                    <!-- BEGIN USER CARD LONG -->
                    <div class="the-box no-border">
                        <div class="media user-card-sm">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object img-circle" src="assets/img/avatar/avatar-6.jpg" alt="Avatar">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Harold Chavez</h4>
                                <p class="text-info">@haroldchaves</p>
                            </div>
                            <div class="right-button">
                                <button data-toggle="tooltip" title="Accept" class="btn btn-info"><i class="fa fa-check"></i></button>
                            </div><!-- /.right-button -->
                        </div>
                    </div><!-- /.the-box .no-border -->
                    <!-- BEGIN USER CARD LONG -->

                </div><!-- /.col-sm-4 -->
            </div><!-- /.row -->


            <div class="row">
                <div class="col-lg-4 col-md-12">

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-12">

                            <!-- BEGIN HEADLINE NEWS TILES -->
                            <div class="the-box bg-warning no-border full">
                                <div id="tiles-slide-2" class="owl-carousel tiles-carousel">
                                    <div class="item full">
                                        <img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle has-white-shadow" alt="avatar">
                                        <div class="des">
                                            <h4 class="bolded"><a href="#fakelink">Awesome headline news title</a></h4>
                                            <p class="small">02 MAY, 2014</p>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                                        </div>
                                        <img src="assets/img/photo/medium/img-14.jpg" alt="Image">
                                    </div><!-- /.item full -->
                                    <div class="item full">
                                        <img src="assets/img/avatar/avatar-2.jpg" class="avatar img-circle has-white-shadow" alt="avatar">
                                        <div class="des">
                                            <h4 class="bolded"><a href="#fakelink">Awesome headline news title</a></h4>
                                            <p class="small">01 MAY, 2014</p>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                                        </div>
                                        <img src="assets/img/photo/medium/img-12.jpg" alt="Image">
                                    </div><!-- /.item full -->
                                    <div class="item full">
                                        <img src="assets/img/avatar/avatar-3.jpg" class="avatar img-circle has-white-shadow" alt="avatar">
                                        <div class="des">
                                            <h4 class="bolded"><a href="#fakelink">Awesome headline news title</a></h4>
                                            <p class="small">29 APRIL, 2014</p>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                                        </div>
                                        <img src="assets/img/photo/medium/img-13.jpg" alt="Image">
                                    </div><!-- /.item full -->
                                </div><!-- /#tiles-slide-2 -->
                            </div><!-- /.the-box no-border full -->
                            <!-- END HEADLINE NEWS TILES -->

                        </div><!-- /.col-sm-6 col-md-12 -->
                        <div class="col-sm-6 col-md-6 col-lg-12">

                            <!-- BEGIN HEADLINE NEWS TILES -->
                            <div class="the-box no-border bg-info full">
                                <div id="tiles-slide-3" class="owl-carousel tiles-carousel-color">
                                    <div class="item full">
                                        <div class="avatar-wrap">
                                            <div class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle has-white-shadow media-object" alt="avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">@parishawker</h4>
                                                </div><!-- /.media-body -->
                                            </div><!-- /.media -->
                                        </div><!-- /.avatar-wrap -->
                                        <div class="des">
                                            <h4 class="bolded"><a href="#fakelink">Awesome life story title</a></h4>
                                            <p class="small">02 MAY, 2014</p>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                                            <button class="btn btn-info btn-sm">Read more</button>
                                        </div>
                                    </div><!-- /.item full -->
                                    <div class="item full">
                                        <div class="avatar-wrap">
                                            <div class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-2.jpg" class="avatar img-circle has-white-shadow media-object" alt="avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">@thomaswhite</h4>
                                                </div><!-- /.media-body -->
                                            </div><!-- /.media -->
                                        </div><!-- /.avatar-wrap -->
                                        <div class="des">
                                            <h4 class="bolded"><a href="#fakelink">Awesome life story title</a></h4>
                                            <p class="small">01 MAY, 2014</p>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                                            <button class="btn btn-info btn-sm">Read more</button>
                                        </div>
                                    </div><!-- /.item full -->
                                    <div class="item full">
                                        <div class="avatar-wrap">
                                            <div class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img src="assets/img/avatar/avatar-3.jpg" class="avatar img-circle has-white-shadow media-object" alt="avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">@doinaslaivici</h4>
                                                </div><!-- /.media-body -->
                                            </div><!-- /.media -->
                                        </div><!-- /.avatar-wrap -->
                                        <div class="des">
                                            <h4 class="bolded"><a href="#fakelink">Awesome life story title</a></h4>
                                            <p class="small">29 APRIL, 2014</p>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                                            <button class="btn btn-info btn-sm">Read more</button>
                                        </div>
                                    </div><!-- /.item full -->
                                </div><!-- /#tiles-slide-2 -->
                            </div><!-- /.the-box no-border full -->
                            <!-- END HEADLINE NEWS TILES -->

                        </div><!-- /.col-sm-6 col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-4 col-md-12 -->

                <div class="col-lg-8 col-md-12">

                    <!-- BEGIN SERVER STATUS WIDGET -->
                    <div class="panel panel-success panel-square panel-no-border">
                        <div class="panel-heading lg">
                            <div class="right-content">
                                <button class="btn btn-success to-collapse" data-toggle="collapse" data-target="#panel-chart-widget-1"><i class="fa fa-chevron-up"></i></button>
                            </div>
                            <h3 class="panel-title"><strong>YOUR SERVER STATUS</strong></h3>
                        </div>
                        <div id="panel-chart-widget-1" class="collapse in">
                            <div class="the-box no-border full bg-success no-margin">
                                <div id="realtime-chart-widget">
                                    <div id="realtime-chart-container-widget"></div>
                                </div><!-- /.realtime-chart -->
                            </div><!-- /.the-box .no-border -->
                            <div class="the-box no-border">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-xs-6 text-center">
                                                <h4 class="small-heading">Kernel memory</h4>
														<span class="chart chart-widget-pie widget-easy-pie-1" data-percent="45">
															<span class="percent"></span>
														</span>
                                            </div><!-- /.col-xs-6 -->
                                            <div class="col-xs-6 text-center">
                                                <h4 class="small-heading">Physical memory</h4>
														<span class="chart chart-widget-pie widget-easy-pie-2" data-percent="85">
															<span class="percent"></span>
														</span>
                                            </div><!-- /.col-xs-6 -->
                                        </div><!-- /.row -->
                                        <hr />
                                        <button class="btn btn-block btn-danger"><i class="fa fa-cogs"></i> Resource monitor</button>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <h4 class="small-heading">System status</h4>
                                        <p class="small">Handles - <span class="text-danger">80%</span></p>
                                        <div class="progress no-rounded progress-xs">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->
                                        <p class="small">Threads - <span class="text-warning">65%</span></p>
                                        <div class="progress no-rounded progress-xs">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            </div><!-- /.progress-bar .progress-bar-warning -->
                                        </div><!-- /.progress .no-rounded -->
                                        <p class="small">Proccess - <span class="text-success">40%</span></p>
                                        <div class="progress no-rounded progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            </div><!-- /.progress-bar .progress-bar-success -->
                                        </div><!-- /.progress .no-rounded -->
                                        <p class="small">Cached - <span class="text-info">70%</span></p>
                                        <div class="progress no-rounded progress-xs">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            </div><!-- /.progress-bar .progress-bar-info -->
                                        </div><!-- /.progress .no-rounded -->
                                    </div><!-- /.col-sm-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.the-box .no-border -->
                        </div><!-- /#panel-chart-widget-1 -->
                    </div><!-- /.the-box .no-border -->
                    <!-- END SERVER STATUS WIDGET -->
                </div>
            </div><!-- /.row -->



            <h4 class="text-center small-heading more-margin-bottom">YOUR FAVORITE PLACES WEATHER</h4>

            <div class="row">
                <div class="col-sm-3">
                    <!-- BEGIN WEATHER WIDGET 4 -->
                    <div class="the-box no-border full text-center">
                        <div class="the-box no-border bg-warning no-margin">
                            <canvas id="clear-day" width="140" height="140"></canvas>
                            <h1 class="bolded less-distance">27<i class="wi-degrees"></i></h1>
                            <h4>It's sunny</h4>
                        </div><!-- /.the-box no-border bg-warning no-margin -->
                        <div class="the-box no-border no-margin">
                            <h4 class="bolded less-distance">BOYOLALI, ID</h4>
                            <p class="small text-muted">My hometown</p>
                        </div><!-- /.the-box no-border no-margin -->
                    </div><!-- /.the-box .no-border .full -->
                    <!-- END WEATHER WIDGET 4 -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-3">
                    <!-- BEGIN WEATHER WIDGET 4 -->
                    <div class="the-box no-border full text-center">
                        <div class="the-box no-border bg-danger no-margin">
                            <canvas id="rain" width="140" height="140"></canvas>
                            <h1 class="bolded less-distance">27<i class="wi-degrees"></i></h1>
                            <h4>It's raining</h4>
                        </div><!-- /.the-box no-border bg-danger no-margin -->
                        <div class="the-box no-border no-margin">
                            <h4 class="bolded less-distance">PARIS, FRANCE</h4>
                            <p class="small text-muted">My dream city</p>
                        </div><!-- /.the-box no-border no-margin -->
                    </div><!-- /.the-box .no-border .full -->
                    <!-- END WEATHER WIDGET 4 -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-3">
                    <!-- BEGIN WEATHER WIDGET 4 -->
                    <div class="the-box no-border full text-center">
                        <div class="the-box no-border bg-success no-margin">
                            <canvas id="wind" width="140" height="140"></canvas>
                            <h1 class="bolded less-distance">27<i class="wi-degrees"></i></h1>
                            <h4>It's wind</h4>
                        </div><!-- /.the-box no-border bg-success no-margin -->
                        <div class="the-box no-border no-margin">
                            <h4 class="bolded less-distance">MECCA, KSA</h4>
                            <p class="small text-muted">Someday I'll be there</p>
                        </div><!-- /.the-box no-border no-margin -->
                    </div><!-- /.the-box .no-border .full -->
                    <!-- END WEATHER WIDGET 4 -->
                </div><!-- /.col-sm-3 -->
                <div class="col-sm-3">
                    <!-- BEGIN WEATHER WIDGET 4 -->
                    <div class="the-box no-border full text-center">
                        <div class="the-box no-border bg-primary no-margin">
                            <canvas id="partly-cloudy-night" width="140" height="140"></canvas>
                            <h1 class="bolded less-distance">27<i class="wi-degrees"></i></h1>
                            <h4>Cloudy night</h4>
                        </div><!-- /.the-box no-border bg-primary no-margin -->
                        <div class="the-box no-border no-margin">
                            <h4 class="bolded less-distance">TOKYO, JAPAN</h4>
                            <p class="small text-muted">I just wanna visit</p>
                        </div><!-- /.the-box no-border no-margin -->
                    </div><!-- /.the-box .no-border .full -->
                    <!-- END WEATHER WIDGET 4 -->
                </div><!-- /.col-sm-3 -->
            </div><!-- /.row -->


            <!-- BEGIN CAROUSEL ITEM -->
            <div class="the-box no-border">
                <h4 class="small-heading more-margin-bottom text-center">LAST WEEK POPULAR ITEM</h4>
                <div id="store-item-carousel-3" class="owl-carousel shop-carousel">
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-1.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-2.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-3.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-4.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-5.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-6.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-1.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-2.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-3.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="#fakelink">
                                <img class="media-object sm" src="assets/img/shop/img-shop-4.jpg" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
                                <p class="brand">BRAND NAME</p>
                                <p class="price text-danger"><strong>&#36;50.00</strong></p>
                            </div>
                        </div>
                    </div><!-- /.item -->
                </div><!-- /#store-item-carousel-1 -->
            </div><!-- /.the-box .no-border -->
            <!-- END CAROUSEL ITEM -->



            <div class="row">
                <div class="col-sm-8">

                    <!-- BEGIN ITEM SHOWCASE -->
                    <div class="the-box full no-border item-lg">
                        <div id="store-item-carousel-2" class="owl-carousel">
                            <div class="item full"><img src="assets/img/photo/large/img-7.jpg" class="item-image" alt="Image"></div>
                            <div class="item full"><img src="assets/img/photo/large/img-8.jpg" class="item-image" alt="Image"></div>
                        </div>
                        <div class="item-des">
                            <div class="the-box transparent no-margin">
                                <h4 class="small-heading more-margin-bottom">FEATURED PRODUCT</h4>
                                <h1><a href="#fakelink">You product name here</a></h1>
                                <h4 class="bolded">&#36;220.00</h4>
                                <p class="text-muted item-des-text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </p>
                                <p>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                                <button class="btn btn-success btn-block btn-add">Add to cart</button>
                            </div><!-- /.the-box .transparent .no-margin -->
                        </div><!-- /.item-des -->
                    </div><!-- /.the-box .full -->
                    <!-- END ITEM SHOWCASE -->

                </div><!-- /.col-sm-8 -->
                <div class="col-sm-4">

                    <!-- BEGIN REMINDER WIDGET -->
                    <div class="the-box no-border full">
                        <div class="the-box bg-dark no-border no-margin">
                            <p class="text-center"><i class="fa fa-clock-o icon-lg"></i></p>
                            <h4 class="bolded less-distance text-danger text-center">My personal reminder</h4>
                        </div><!-- /.the-box no-border no-margin -->
                        <div class="the-box no-border bg-danger no-margin">
                            <h4>Next week agenda</h4>
                            <hr />
                            <div id="tiles-slide-1" class="owl-carousel my-reminder">
                                <div class="item full text-left">
                                    <p>
                                        Eating some sand and listening alay songs in the small hole under bridge
                                    </p>
                                    <p class="small">Wrote about a month ago</p>
                                </div>
                                <div class="item full">
                                    <p>
                                        Go to school again, do homework again, meet some best friends again
                                    </p>
                                    <p class="small">Wrote about a week ago</p>
                                </div>
                                <div class="item full">
                                    <p>
                                        Finishing all my works, time to vacation, spending time with family and friends
                                    </p>
                                    <p class="small">Wrote 2 days ago</p>
                                </div>
                            </div><!-- /#tiles-slide-1 -->
                        </div><!-- /.the-box no-border bg-danger no-margin -->
                    </div><!-- /.the-box .no-border .full -->
                    <!-- END REMINDER WIDGET -->

                </div><!-- /.col-sm-4 -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->



        <!-- BEGIN FOOTER -->
        <footer>
            &copy; 2015 <a href="https://omnepresent.com">OmnePresent Technologies Pvt. Ltd.</a><br />
        </footer>
        <!-- END FOOTER -->


    </div><!-- /.page-content -->
</div><!-- /.wrapper -->
@endsection