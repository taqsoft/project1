<nav class="navbar navbar-subnav navbar-static-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-ellipsis-h"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="subnav" aria-expanded="false">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo base_url() ?>users/users/dashboard"><i class="fa fa-fw icon-ship-wheel"></i> My Timeline</a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>users/users/edit_profile"><i class="fa fa-fw icon-user-1"></i> Edit Profile</a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>project/project/postProject"><i class="fa fa-fw fa-group"></i> Post Project</a>
                </li>
                <!--
				<li>
                    <a href="#"><i class="fa fa-fw icon-comment-fill-1"></i> Messages</a>
                </li>
				-->
            </ul>
            <ul class="nav navbar-nav hidden-xs navbar-right">
                <li><a href="#">Logout  <i class="fa fa-fw icon-unlock-fill"></i></a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->

    </div>
</nav>