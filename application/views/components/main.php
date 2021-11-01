<?php $this->load->view('components/headerHTML'); ?>

<body class="skin-blue">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <?php if (mobile()) { ?>
                <a href="<?= base_url('Home'); ?>" class="logo" style="width: 230px;"><b>Herbal</b></a>
            <?php } else { ?>
                <a href="<?= base_url('Home'); ?>" class="logo"><b>Herbal</b></a>
            <?php } ?>
            <!-- Header Navbar: style can be found in header.less -->
            <?php if (mobile()) { ?>
                <nav class="navbar navbar-static-top header-info top-header-info" style="height: 0px;margin-top: -51px;" role="navigation">
            <?php } else { ?>
                    <nav class="navbar navbar-static-top header-info top-header-info" style="height: 0px;" role="navigation">
            <?php } ?>
                    <!-- Sidebar toggle button-->
                    <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a> -->
                    <!-- <a href="#" class="sidebar-toggle" id="toggle-menu" style="display: block;">
                <i class="fa fa-bars" aria-hidden="true" style="color: white;"></i>
                </a> -->
                    <button class="button-tombol-menu show-sidebar" style="height: 50px;">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php if (!empty(auth())) : ?>
                                        <span class="hidden-xs"><?= user()->nama_toko; ?></span>
                                    <?php else : ?>
                                        <a style="margin-top: -39px;" href="<?= base_url('Login'); ?>"><button class="btn btn-success">Login</button></a>
                                        <!-- <span class="hidden-xs"><a href="<?= base_url('Login'); ?>"><button class="btn btn-primary">Login</button></a></span> -->
                                    <?php endif; ?>
                                </a>
                                <?php if (!empty(auth())) : ?>
                                    <ul class="dropdown-menu">
                                        <!-- User image -->
                                        <li class="user-header">
                                            <!-- <img src="<?= base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" /> -->
                                            <img src="<?= base_url('uploads/img/' . user()->image_name); ?>" class="img-circle" alt="User Image" />
                                            <p>
                                                <?= user()->nama_toko; ?>
                                                <!-- <small>Member since Nov. 2012</small> -->
                                            </p>
                                        </li>
                                        <li class="user-footer">
                                            <div class="pull-right">
                                                <a href="<?= base_url('Login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                            </div>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <!-- <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div> -->
                <!-- search form -->
                <!-- <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..." />
                        <span class="input-group-btn">
                            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form> -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" <?php if(mobile()): ?> style="margin-left:230px;width: 100%;margin-top: -48px;" <?php endif; ?>>
                    <?php if (!empty(auth())) : ?>
                        <li class="header">MAIN NAVIGATION</li>
                        <li <?php if ($active == 'list-barang-toko') {
                                echo "class='active'";
                            } ?>>
                            <a href="<?= base_url('Home/listBarangToko'); ?>">
                                <i class="fa fa-th"></i>List Barang Toko
                            </a>
                        </li>
                        <?php if (user()->access == 'admin') : ?>
                            <li <?php if ($active == 'list-toko') {
                                    echo "class='active'";
                                } ?>>
                                <a href="<?= base_url('Home/listToko'); ?>">
                                    <i class="fa fa-th"></i>List Toko
                                </a>
                            </li>
                            <li <?php if ($active == 'master-barang' || $active == 'master-kota') {
                                    echo "class='treeview active'";
                                } else {
                                    echo "class='treeview'";
                                } ?>>
                                <a href="#">
                                    <i class="fa fa-dashboard"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li <?php if ($active == 'master-kota') {
                                            echo "class='active'";
                                        } ?>><a href="<?= base_url('Home/masterKota'); ?>"><i class="fa fa-circle-o"></i>Master Kota</a></li>
                                    <li <?php if ($active == 'master-barang') {
                                            echo "class='active'";
                                        } ?>><a href="<?= base_url('Home/masterBarang'); ?>"><i class="fa fa-circle-o"></i>Master Barang</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <!-- <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Layout Options</span>
                            <span class="label label-primary pull-right">4</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/widgets.html">
                            <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>Charts</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>UI Elements</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Forms</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Tables</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/calendar.html">
                            <i class="fa fa-calendar"></i> <span>Calendar</span>
                            <small class="label pull-right bg-red">3</small>
                        </a>
                    </li>
                    <li>
                        <a href="pages/mailbox/mailbox.html">
                            <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            <small class="label pull-right bg-yellow">12</small>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Examples</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share"></i> <span>Multilevel</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        </ul>
                    </li>
                    <li><a href="documentation/index.html"><i class="fa fa-book"></i> Documentation</a></li>
                    <li class="header">LABELS</li>
                    <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li> -->
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section> -->

            <?php $this->load->view($content) ?>

        </div><!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>
    </div><!-- ./wrapper -->
    <?php $this->load->view('components/footerHTML'); ?>
</body>

</html>