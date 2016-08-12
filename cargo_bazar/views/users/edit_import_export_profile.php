<script type="text/javascript" src="<?php echo base_url() ?>assets/js/fileinput.min.js"></script>
<link type="text/css" rel="stylesheet" src="<?php echo base_url() ?>assets/css/fileinput.min.css" />
<div class="form-top">
    <div class="form-top-left">
        <h3>Update Profile</h3>
        <p>Fill in the form below to get instant access: All Fields are required</p>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger" role="alert">
                <strong>Error!</strong> <?php echo $this->session->flashdata('error') ?>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success" role="alert">
                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="<?php echo base_url() ?>users/users/editProfileExporterImporter" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-control-default">
                            <label for="exampleInputFirstName" class="sr-only">First name</label>
                            <input type="text" class="form-control disabled text-headline" disabled value="<?php echo logedInCompanyName(); ?>" id="exampleInputFirstName" placeholder="Your first name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-control-default">
                            <label for="form-last-name" class="sr-only">NTN</label>
                            <input type="text" name="ntn" placeholder="NTN" maxlength="255" value="<?php echo @$this->session->flashdata('ntn'); ?>" class="form-last-name form-control" id="form-last-name">
                        </div>
                    </div>
                </div>

                <div class="form-group form-control-default required">
                    <label for="exampleInputEmail1" class="sr-only">Company Description</label>
                    <textarea class="form-control" placeholder="Company Description" name="description" rows="5"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-control-default">
                            <label for="exampleInputFirstName" class="sr-only">Email</label>
                            <input type="email" class="form-control" name="email"name="email" id="exampleInputFirstName" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-control-default">
                            <label for="form-last-name" class="sr-only">Phone</label>
                            <input type="text" name="phone" placeholder="phone" maxlength="255" value="<?php echo @$this->session->flashdata('phone'); ?>" class="form-last-name form-control" id="form-last-name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <script>
                            $(document).on('ready', function () {
                                $("#input-4").fileinput({
                                    showCaption: false,
                                    //$("#input-4").fileinput({showCaption: false});
                                    showRemove: false,
                                    showUpload: false
                                });
                            });
                        </script>
                        <label class="control-label">Upload Logo</label>
                        <input id="input-4" name="input4[]" type="file" multiple class="file-loading">

                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>