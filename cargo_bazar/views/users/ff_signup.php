<!--  Fluid Grid System -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/fluid.css" media="screen" />

<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/validate/jquery.validate.js"></script>

<!-- Wizard Plugin -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/plugins/dandelion.wizard.min.js"></script>

<!-- jQuery-UI JavaScript Files -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui-1.8.20.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/moment.js"></script>



<!--  Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dandelion.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.ui/jquery.ui.all.css" media="screen" />

<style>
.da-wizard-nav ul{padding:0px !important;}
.wizard__title {
    font-weight: 300;
    margin-bottom: 6px;
    text-align: center;
}
.wizard__subtitle, .wizard__subtitle--success {
    color: #969696;
    line-height: 1.3;
    margin: 0 auto;
    max-width: 100%;
    text-align: center;
}

.ui-button-text-only .ui-button-text {
    padding: 16px !important;
}

.da-form .da-form-row #da-ex-buttons-radio label{width:30% !important;}
.ui-button.ui-state-active{background-color:#FFBA00 !important;}
.da-wizard-nav ul li span.da-wizard-label{position: relative;left: 15px;}
.right-section{width: 47%; margin-left:25px;}
.left-section{width: 47%;}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.min.css" media="screen" />

<div class="cntr-con-top-mar">&nbsp;</div>

<?php //$this->load->view("users/dashboard_header"); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h4 class="section-title">Sign Up as Freight Forwarder</h4>
      <div class="form-top">
                    <div class="form-top-left">
                        <p>Fill in the form below to get instant access: Fields with * are required</p>
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
        </div>
        <!-- end col-12 -->
        <div class="col-sm-12">

       <div class="panel panel-default">
        <div class="panel-body">
    <div class="da-content-area">
           <div class="grid_4">
      <div class="da-panel">
        <div class="da-panel-header">
          <span class="da-panel-title">
            <img src="<?php echo base_url() ?>assets/images/icons/color/wand.png" alt="" />
            Sign Up as Freight Forwarder
           </span>
        </div>
        <div class="da-panel-content">
          <form id="da-ex-wizard-form" class="da-form" enctype="multipart/form-data" method="post" action="<?=base_url()?>users/users/ff_process_update" class="registration-form">
            <fieldset class="da-form-inline">
              <legend>Profile</legend>
              
              <div class="da-form-row">
                
                  <label>Company Name<span class="required">*</label>
                  <div class="da-form-item large">
                    <div id="import_export">
                      <input type="text" class="form-control required" placeholder="Company Name" name="company_name" autocomplete="off">
                    </div>
                  </div>
                
                
                
              </div>
                    
              
              
              <div class="da-form-row">
                
                <div class="pull-left left-section" >
                  <label>NTN Number<span class="required">*</span></label>
                  <div class="da-form-item large">
                    <div id="ntn_number">
                      <input type="text" class="form-control required" placeholder="NTN No" name="ntn" autocomplete="off">
                    </div>
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>Chamber of Commerce Registration No</label>
                  <div class="da-form-item large">
                    <div id="import_export">
                      <input type="text" class="form-control" placeholder="Chember of Commerce No" name="chember_of_commerce_no" autocomplete="off">
                    </div>
                  </div>
                </div>
                
                
              </div>
              
              <div class="da-form-row">
              
                <div class="pull-left left-section">
                  <label>Business Address <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <textarea name="business_address" class="form-control required"></textarea>
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>City <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <select name="city" class="form-control required">
                      <option value="">Select</option>
                      <option value="lahore">Lahore</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <div class="da-form-row">
                <div class="pull-left left-section">
                  <label>Telephone # <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <input name="telephone_no" type="text" class="form-control required" placeholder="Phone Number" value="">
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>Company Website </label>
                  <div class="da-form-item large">
                    <input name="company_website" class="form-control" type="text" placeholder="company website" value="">
                  </div>
                </div>
                
              </div>
              
              
              <div class="da-form-row">
                <div class="pull-left left-section">                
                  <label>About Company </label>
                  <div class="da-form-item large">
                    <textarea name="about_company" placeholder="About Company" class="form-control"></textarea>
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>From Where did you hear about cargo bazar</label>
                  <div class="da-form-item large">
                    <select name="hear_about" class="form-control">
                      <option>Select</option>
                      <option>Website Referral</option>
                      <option>Search Engine</option>
                      <option>Email</option>
                      <option>Sale Person</option>
                      <option>Word of Mouth</option>
                      <option>Other</option>
                    </select>
                  </div>
                </div>
                
                
                
                
              </div>
              
              
              
            </fieldset>
            <fieldset class="da-form-inline">
              <legend>Contact Information</legend>
              <div class="da-form-row">
                <div class="pull-left left-section">
                  <label>Contact Person <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <input name="contact_person" class="form-control required" value="" type="text">
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>Designation <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <input name="contact_designation" class="form-control required" value="" type="text">
                  </div>
                </div>
              </div>
              
              
              <div class="da-form-row">
                <div class="pull-left left-section">
                  <label>Phone No (with Ext)</label>
                  <div class="da-form-item large">
                    <input name="contact_phone_no" class="form-control" value="" type="text">
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>Mobile <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <input name="contact_mobile_no" maxlength="11" class="form-control required" value="" type="text">
                  </div>
                </div>
              </div>
              
              <div class="da-form-row">
                <div class="pull-left left-section">
                  <label>Email <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <input name="primary_email" class="form-control required" value="" type="text">
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  
                  <label>User Name <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <input name="user_name" class="form-control required" value="" type="text">
                    
                  </div>
                
                </div>
                
              </div>
              
              
              <div class="da-form-row">
                <div class="pull-left left-section">
                  <label>Password <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <input name="password" id="password" class="form-control required" value="" type="password">
                    
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>Confirm Password <span class="required">*</span></label>
                  <div class="da-form-item large">
                    <input name="re_password" class="form-control required" value="" type="password">
                    
                  </div>
                
                </div>
              </div>
              
            </fieldset>
            
            <fieldset class="da-form-inline">
              <legend>Document Upload</legend>
              
              <div class="da-form-row">
                <div class="pull-left left-section">
                  <label>PIFFA </label>
                  <div class="da-form-item large">
                    <input name="piffa" class="form-control" value="" type="file">
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>IATA </label>
                  <div class="da-form-item large">
                    <input name="iata" class="form-control" value="" type="file">
                  </div>
                </div>
              </div>
              
              <div class="da-form-row">
                <div class="pull-left left-section">
                  <label>FIATA </label>
                  <div class="da-form-item large">
                    <input name="fiata" class="form-control" value="" type="file">
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>Chamber of Commerce </label>
                  <div class="da-form-item large">
                    <input name="doc_chemeber_commerce" class="form-control" value="" type="file">
                  </div>
                </div>
              </div>
              
              <div class="da-form-row">
                <div class="pull-left left-section">
                  <label>NTN </label>
                  <div class="da-form-item large">
                    <input name="doc_ntn" class="form-control" value="" type="file">
                  </div>
                </div>
                
                <div class="pull-left right-section">
                  <label>CNIC </label>
                  <div class="da-form-item large">
                    <input name="doc_cnic" class="form-control" value="" type="file">
                  </div>
                </div>
              </div>
              
              
            </fieldset>
            <input type="hidden" name="user_type" value="freight_forwarder" />
          </form>
        </div>
      </div>
    </div>
    </div>
        </div>
    </div>

        </div>
    
    </div>
    <!-- end row --> 
</div>
<script>
$(document).ready(function(e) {
    var v = $("#da-ex-wizard-form").validate({ 
      onsubmit: false,
      rules: {
        telephone_no: {
          
        },
        contact_mobile_no: {
          number: true,
          required: true
        },
        contact_phone_no:{
          
        },
        user_name:{
			required: true,
			remote: {
			url: "<?php echo base_url() ?>users/users/CheckUsername",
			type: "post",
			data: {
			  user_name: function() {
				return $("input[name=user_name]").val();
			  }
			}
		  }
		},
        primary_email:{
          email: true,
          required: true,
		  remote: {
			url: "<?php echo base_url() ?>users/users/CheckEmail",
			type: "post",
			data: {
			  user_email: function() {
				return $("input[name=primary_email]").val();
			  }
			}
		  }
        },
        company_website: {
          url: true
        },
        password : {
                    minlength : 6
                },
                re_password : {
                    minlength : 6,
                    equalTo : "#password"
                }
      }
    });
    $("#da-ex-wizard-form").daWizard({
      onLeaveStep: function(index, elem) {
        return v.form();
      }, 
      onBeforeSubmit: function() {
        return v.form();
      },
      forwardOnly: false,
      nextButtonClass: "da-button orange",
            prevButtonClass: "da-button red left"
    });
  });
</script>

<?php  $this->load->view('chat_tawk/chat_tawk'); ?>

<?php  $this->load->view('google_analytics/google_analytics'); ?>