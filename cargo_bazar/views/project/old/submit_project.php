<script type="text/javascript" src="<?php echo base_url() ?>assets/js/fileinput.min.js"></script>
<link type="text/css" rel="stylesheet" src="<?php echo base_url() ?>assets/css/fileinput.min.css" />
<div class="form-top">
    <div class="form-top-left">
        <h3>Post Shipment</h3>
       
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
        <div class="panel-body padding">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin-both text-center"><button class="cstm-btn" onclick="window.location.href='<?php echo base_url() ?>project/project/postProjectByAir'">By Air</button></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin-both text-center"><button class="cstm-btn" onclick="window.location.href='<?php echo base_url() ?>project/project/postProjectBySea'">By Sea</button></div>
            
        </div>
    </div>