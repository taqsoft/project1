<div class="cntr-con-top-mar">&nbsp;</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h4 class="section-title">Login</h4>
        </div>
        <!-- end col-12 -->
        <div class="col-sm-5">

            <div class="form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Login</h3>
<!--                        <p>Fill in the form below to get instant access: All Fields are required</p>-->
                        <?php if($this->session->flashdata('error')){ ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Error!</strong> <?php echo $this->session->flashdata('error') ?>
                        </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success" role="alert">
                            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php } ?>
                         
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-pencil"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" action="<?php echo base_url() ?>users/users/loginProcess" method="post" class="registration-form">
                        <div class="form-group">
                            <label class="sr-only" for="form-first-name">Username</label>
                            <input type="text" name="user_name" placeholder="User Name" maxlength="255" required value="<?php echo @$this->session->flashdata('company_name'); ?>" class="form-first-name form-control" id="form-first-name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-last-name">Password</label>
                            <input type="password" name="password" placeholder="Password" maxlength="255" required value="<?php echo @$this->session->flashdata('email'); ?>" class="form-last-name form-control" id="form-last-name">
                        </div>
                        <button type="submit" class="btn">Log in</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- end row --> 
</div>