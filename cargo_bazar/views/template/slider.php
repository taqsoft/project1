<section class="slider">
    <div class="fixed-form">
      <div class="container">
        <h3 style="color:#525356;">Cargobazar.pk</h3>
        <h5>Connecting Importers/Exporters with Freight Forwarders</h5>
		<!--
		  <button type="submit"><a href="<?php //echo base_url() ?>users/users/ff_signup" data-toggle="modal" data-target="#Registration_modal">Join as Freight Forwarder</a></button>
          &nbsp;
           <button type="submit"><a href="<?php //echo base_url() ?>users/users/signupIE" data-toggle="modal" data-target="#Registration_modal">Join as Importer/Exporter</a></button>
           -->
       
           <button type="button" style='background:#f1f1f1;'><a href="#" data-toggle="modal" data-user_type="freight_forwarder" class="user_reg" data-target="#Registration_modal">Join as Freight Forwarder</a></button>
          &nbsp;
           <button type="button" style='background:#f1f1f1;'><a href="#" data-toggle="modal" data-user_type="importer_exporter" class="user_reg" data-target="#Registration_modal">Join as Importer/Exporter</a></button>
          
       
      </div>
      <!-- end container --> 
    </div>
    <!-- end fixed-form -->
    <div class="main-slider">
      <div class="slide2"> </div>
      
      <!-- end slider1 -->
     <div class="slide1"> </div>
      <!-- end slider2 -->
     <div class="slide3"> </div>
      <!-- end slider3 --> 
    </div>
  </section>
  
  
<div id="Registration_modal" class="modal fade" role="dialog">
<div class="modal-dialog">
<form role="form" id="ffmyform" action="<?php echo base_url();?>users/users/ff_process" method="post">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Freight Forwarder Signup</h4>
      </div>
      <div class="modal-body" id="ff_body">
        
		  <div class="form-group">
			<input type="text" name="company_name" class="form-control required" placeholder="Company Name (Required)" required="required" id="ffname1">
		  </div>
		  
		  <div class="form-group">
			<input type="text" name="contact_mobile_no" class="form-control" placeholder="Contact No">
		  </div>
		  
		  
		  <div class="form-group">
			<input type="text" name="user_name" class="form-control required" placeholder="Username (Required)" required="required" id="ffusername">
		  </div>
		  
		  <div class="form-group">
			<input type="email" name="primary_email" class="form-control required" placeholder="Email Address (Required)" required="required" id="ffemail">
		  </div>
		  
		  <div class="form-group">
			<input type="password" name="password" class="form-control required" placeholder="Password (Required)" required="required" id="ffpwd">
		  </div>
		<input type="hidden" name="user_type" value="">
      </div>
      <div class="modal-footer">
	    <button type="submit" class="btn btn-default" >Signup</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</form>
  </div>
</div>

<script type="text/javascript">
$("#ffmyform").validate({
	 rules: {
		user_name:{
				required: true,
				minlength : 3,
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
		password : {
			minlength : 6
		}
	 },
	 messages: {
        user_name: {
            required: "Enter a username",
            minlength: jQuery.format("Enter at least {0} characters"),
            remote: jQuery.format("{0} is already in use")
        },
		primary_email: {
            remote: jQuery.format("{0} is already in use")
        }
    },
	 submitHandler: function (form) {
		 $.ajax({
			 type: "POST",
			 url: "<?php echo base_url();?>users/users/ff_process",
			 data: $(form).serialize(),
			 success: function (res) {
				 $('#ff_body').html("<div id='message'></div>");
				 $('#message').html("<h2>Your request is on the way!</h2>")
					 .hide()
					 .fadeIn(2000, function () {
					 $('#message').html(res);
				 });
			 }
		 });
		 return false; // required to block normal submit since you used ajax
	 }
});

$('.user_reg').click(function(){
	var user_type = $(this).attr("data-user_type");
	$('input[name=user_type]').val(user_type);
	switch(user_type){
		case "freight_forwarder":
			$('#Registration_modal .modal-title').html("Freight Forwarder Signup");
		break;
		
		case "importer_exporter":
			$('#Registration_modal .modal-title').html("Importer/Exporter Signup");
		break;
	}
});

</script>