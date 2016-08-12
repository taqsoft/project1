<script type="text/javascript" src="<?php echo base_url() ?>assets/js/fileinput.min.js"></script>
<link type="text/css" rel="stylesheet" src="<?php echo base_url() ?>assets/css/fileinput.min.css" />
<div class="form-top">
    <div class="form-top-left">
        <h3>Submit Shipment By Sea</h3>
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
            <form action="<?php echo base_url() ?>project/project/project_add_process" method="post" enctype="multipart/form-data">
                <input type="hidden" value="sea" name="type" />
                <h4>General Details</h4>  
              <div class="row">
                    <div class="col-md-6">
                         
                      <div class="form-group form-control-default">
                            <label for="exampleInputFirstName" class="">Import / Export</label>
                            <select name="ie" class="form-control selectpicker">
                                <option value="impoter">Importer</option>
                                <option value="exporter">Exporter</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="form-last-name" class=" ">City</label>
                            <input type="text" name="city" required placeholder="City" maxlength="255" value="<?php echo @$this->session->flashdata('ntn'); ?>" class="form-last-name form-control" id="form-last-name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="exampleInputEmail1" class="">Country</label>
                            <input type="text" name="Country" required placeholder="Country" maxlength="255" value="<?php echo @$this->session->flashdata('ntn'); ?>" class="form-last-name form-control" id="form-last-name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="form-last-name" class="">Pick Up Point</label>
                            <textarea  name="pick_up_point" required placeholder="Pick Up Point" class="form-last-name form-control" id="form-last-name"></textarea>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="exampleInputFirstName" class="">Destination City</label>
                            <input type="text" class="form-control" required name="destination_city_id" placeholder="Destination City">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="exampleInputFirstName" class="">Destination Country</label>
                            <input type="text" required class="form-control" name="destination_country" id="exampleInputFirstName" placeholder="Destination Country">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="form-last-name" class="">Delivery Point</label>
                            <textarea required  name="delivery_point" placeholder="Delivery Point" class="form-last-name form-control" id="form-last-name"></textarea>
                        </div>
                    </div>
               </div>
                
                <div class="row">
                 <h4>Commodity Details</h4> 
                  <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="exampleInputEmail1" class="">Category of Goods</label>
                            <select name="c_o_g" class="form-control selectpicker">
                                <option value="1">Sports</option>
                                <option value="2">House Holds</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="form-last-name" class="">Commodity</label>
                            <input  name="commodity" required placeholder="Commodity" class="form-last-name form-control" id="form-last-name" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="form-last-name" class="">No Of Packages</label>
                            <input  name="no_of_packages" required placeholder="No Of Packages" class="form-last-name form-control" id="form-last-name" />

                        </div>
                    </div>

                </div>

                <div class="row">
                 <h4>Shipments Details</h4>  
                  <div class="col-md-6">
                        <div class="form-group form-control-default">
                            <label for="form-last-name" class="">Weight (In KGs)</label>
                            <input  name="weight_in_kg" placeholder="Weight (In KGs)" class="form-last-name form-control" id="form-last-name" />
                        </div>
                    </div>
                   <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="exampleInputFirstName" class="">CHB Required </label>
                            <select name="chb" class="form-control selectpicker">
                                <option value="yesy">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="exampleInputFirstName" class="">Shipment Ready Time </label>
                            <input type="text" name="s_r_t" required placeholder="Shipment Ready Time" maxlength="255" value="<?php echo @$this->session->flashdata('ntn'); ?>" class="form-last-name form-control" id="ship_ready_time">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="form-last-name" class="">Shipment Ready Date</label>
                            <input type="text" name="s_r_d" id="ship_ready_date" required placeholder="Shipment Ready Date" maxlength="255" value="<?php echo @$this->session->flashdata('ntn'); ?>" class="form-last-name form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="form-last-name" class="">Target Delivery Date</label>
                            <input type="text" name="t_d_d" required placeholder="Target Delivery Date" maxlength="255" value="<?php echo @$this->session->flashdata('ntn'); ?>" class="form-last-name form-control" id="t_d_d">
                        </div>
                    </div>
                  <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="exampleInputFirstName" class="">Bid Closing Date </label>
                            <input type="text" name="b_c_d" required placeholder="Bid Closing Date" maxlength="255" value="<?php echo @$this->session->flashdata('ntn'); ?>" class="form-last-name form-control" id="b_c_d">
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="form-last-name" class="">Bid Closing Time</label>
                            <input type="text" name="b_c_t" required placeholder="Bid Closing Time" maxlength="255" value="<?php echo @$this->session->flashdata('ntn'); ?>" class="form-last-name form-control" id="b_c_t">
                        </div>
                    </div>
                <div class="col-md-6">
                        <div class="form-group form-control-default">
                            <label for="exampleInputFirstName" class="">Priority  </label>
                            <select name="priority" class="form-control selectpicker">
                                <option value="impoter">Yes</option>
                                <option value="exporter">No</option>
                            </select>
                        </div>
                    </div>
             
              </div>
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group form-control-default required">
                            <label for="form-last-name" class="">Service Type</label>
                            <select name="s_t" class="form-control selectpicker">
                                <option value="impoter">Yes</option>
                                <option value="exporter">No</option>
                            </select>
                        </div>
                    </div>
                <div class="col-md-6">
                        <div class="form-group form-control-default">
                            <label for="exampleInputFirstName" class="">Inco Terms </label>
                            <select name="i_t" class="form-control selectpicker">
                                <option value="impoter">Yes</option>
                                <option value="exporter">No</option>
                            </select>
                        </div>
                    </div>
              </div>
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group form-control-default">
                            <label for="form-last-name" class="">Remarks</label>
                            <textarea  name="remarks" placeholder="Delivery Point" class="form-last-name form-control" id="form-last-name"></textarea>

                        </div>
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
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
     
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
       <script src="<?php echo base_url() ?>assets/usertheme/js/jquery.timepicker.js"></script>
     
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/usertheme/css/jquery.timepicker.css">
    <script>

        $(document).ready(function () {
            $("#ship_ready_date").datepicker({
             dateFormat: "yy-mm-dd"   
            });
                
            $("#b_c_d").datepicker({
                dateFormat: "yy-mm-dd"
            });
            
            $("#t_d_d").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $('#ship_ready_time').timepicker({'timeFormat': 'H:i:s'});
            $('#b_c_t').timepicker({'timeFormat': 'H:i:s'});
        });
    </script>