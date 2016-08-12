<div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" data-toggle="sidebar-menu" class="toggle pull-right visible-xs"><i class="fa fa-comments"></i></a>
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url() ?>assets/images/black-logo.png" width="99" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">

            <ul class="nav navbar-nav  navbar-right ">
                <li class="hidden-xs">
                    <a href="#" data-toggle="sidebar-menu">
                        <i class="fa fa-comments"></i>
                    </a>
                </li>
                <!-- User -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                        <img src="<?php echo base_url() ?>assets/usertheme/images/guy-5.jpg" alt="Bill" class="img-circle" width="40"> Bill <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url() ?>users/users/edit_profile">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="<?php echo base_url() ?>users/users/logout">Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</div>