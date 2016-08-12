<!--  Fluid Grid System -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/fluid.css" media="screen" />

<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/validate/jquery.validate.js"></script>

<!-- Wizard Plugin -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/plugins/dandelion.wizard.min.js"></script>

<!-- jQuery-UI JavaScript Files -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui-1.8.20.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>


<!--  Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dandelion.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.ui/jquery.ui.all.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker.min.css" media="screen" />

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
		padding: 8px !important;
	}

	.da-form .da-form-row #da-ex-buttons-radio label{width:37% !important;}
    .da-form .da-form-row .da-form-item > *, .da-form .da-form-row .da-form-item.default > *{
        width: 100%;
    }
	.ui-button.ui-state-active{background-color:#FFBA00 !important;}
	.da-wizard-nav ul li span.da-wizard-label{position: relative;left: 15px;}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.min.css" media="screen" />
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
		<div class="panel-body">
			<div class="da-content-area">
				<div class="grid_4">
					<div class="da-panel">
						<div class="da-panel-header">
					<span class="da-panel-title">
						<img src="<?php echo base_url() ?>assets/images/icons/color/wand.png" alt="" id="wand_image"/>
						<img src="<?php echo base_url() ?>assets/images/icons/color/ship.png" alt="" id="ship_image" style="display: none"/>
						<img src="<?php echo base_url() ?>assets/images/icons/color/aplane.png" alt="" id="plane_image"  style="display: none"/>
						CargoBazar quote request
 					</span>
						</div>
						<div class="da-panel-content">
							<form id="da-ex-wizard-form" class="da-form" method="post" action="<?=base_url()?>project/project/project_add_process" >
								<fieldset class="da-form-inline">
									<legend>Transportation</legend>
									<section class="wizard section--with-pad"><h2 class="wizard__title">Transit Type &amp; Terms</h2><p class="wizard__subtitle">Let’s start with your shipment’s mode of transit and service details.</p></section>
                                    <div style="width: 60%;float: left">
                                        <div class="da-form-row" style="padding-right: 0px !important;">
                                            <label>TRANSIT TYPE <span class="required">*</span></label>
                                            <div class="da-form-item " style="margin-left: 10px;">
                                                <div id="da-ex-buttons-radio" style="width: 100% !important">
                                                    <input type="radio" id="radio1" name="radio" value="by_air" class="required transit_type" /><label for="radio1">By Air</label>
                                                    <input type="radio" id="radio2" name="radio" value="by_sea" class="required transit_type" /><label for="radio2">By Sea</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width: 40%;float: left">
                                        <div class="da-form-row">
                                            <label>Import/Export</label>
                                            <div class="da-form-item large">
                                                <div id="import_export">
                                                    <select name="import_export">
                                                        <option value="import">Import</option>
                                                        <option value="export">Export</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




								</fieldset>
								<fieldset class="da-form-inline">
									<legend>Where &amp; When</legend>

									<div class="grid_2">
										<div class="da-panel">
											<div class="da-panel-header">
										<span class="da-panel-title">
											<img src="<?php echo base_url() ?>assets/images/icons/black/16/computer_imac.png" alt="Panel">
											<strong>Origin </strong> <br/><small>(This is the location where your shipment will be picked up)</small>
										</span>

											</div>
											<div class="da-panel-content with-padding">
												<div class="input-group">
													<input type="text" class="form-control point_input valid" id="origin_pickup_point" placeholder="Pick Address with Google Map" name="origin_pickup_point" autocomplete="off">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-map-marker"></span>
											</span>
												</div>

												<div class="form-group">
													<label for="origin_pickup_point" class="control-label">Pickup Point</label>
													<div class="">
														<input type="text" class="form-control point_input" id="origin_pickup" placeholder="type here" name="origin_pickup">

													</div>
												</div>

											</div>
										</div>
									</div>

									<div class="grid_2">
										<div class="da-panel">
											<div class="da-panel-header">
										<span class="da-panel-title">
											<img src="<?php echo base_url() ?>assets/images/icons/black/16/computer_imac.png" alt="Panel">
											<strong>Destination </strong> <br/><small>(This is the location where your shipment will be delivered)</small>
										</span>
											</div>
											<div class="da-panel-content with-padding">
												<div class="input-group">
													<input type="text" class="form-control point_input valid" id="deliver_pickup_point" placeholder="Pick Address with Google Map" name="deliver_pickup_point" autocomplete="off">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-map-marker"></span>
											</span>
												</div>

												<div class="form-group">
													<label for="origin_pickup_point" class="control-label">Delivery Point</label>
													<div class="">
														<input type="text" class="form-control point_input" id="origin_pickup" placeholder="type here" name="deliver_pickup">

													</div>
												</div>

											</div>
										</div>
									</div>


									<div class="grid_2">
										<div class="da-panel">
											<div class="da-panel-header">
										<span class="da-panel-title">
											<img src="<?php echo base_url() ?>assets/images/icons/black/16/computer_imac.png" alt="Panel">
											<strong>Shipment Ready Date-Time </strong> <br/><small>(This is the location where your shipment will be delivered)</small>
										</span>
											</div>
											<div class="da-panel-content with-padding">
                                                <label for="shipment_ready_startdate" class="control-label">Select Date & Time</label>
												<div class="input-group date">
													<input type="text" class="form-control dateOnly hasDatepicker datetimepicker"  id="shipment_ready_startdate" name="shipment_ready_startdate">
											<span class="input-group-addon" onclick="$('#shipment_ready_startdate').focus()" style="cursor:pointer;">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>

												</div>
<!--												<div class="form-group time">-->
<!---->
<!--													<label for="shipment_ready_startdate" class="control-label">Select Time</label>-->
<!--													<div class="input-group time">-->
<!--														<input type="text" class="form-control dateOnly hasDatepicker timepicker"  id="shipment_ready_starttime" name="shipment_ready_starttime">-->
<!--												<span class="input-group-addon" onclick="$('#shipment_ready_starttime').focus()" style="cursor:pointer;">-->
<!--													<span class="glyphicon glyphicon-time"></span>-->
<!--												</span>-->
<!--													</div>-->
<!--												</div>-->

											</div>
										</div>
									</div>

									<div class="grid_2">
										<div class="da-panel">
											<div class="da-panel-header">
										<span class="da-panel-title">
											<img src="<?php echo base_url() ?>assets/images/icons/black/16/computer_imac.png" alt="Panel">
											<strong>Target Delivery Date-Time </strong> <br/><small>(This is the location where your shipment will be delivered)</small>
										</span>
											</div>
											<div class="da-panel-content with-padding">
                                                <label for="shipment_ready_startdate" class="control-label">Select Date & Time</label>
												<div class="input-group date">
													<input type="text" class="form-control datetimepicker"  id="shipment_target_startdate" name="shipment_target_startdate">
											<span class="input-group-addon" style="cursor:pointer;" onclick="$('#shipment_target_startdate').focus()">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
												</div>

<!--												<div class="form-group time">-->
<!--													<label for="shipment_ready_startdate" class="control-label">Select Time</label>-->
<!--													<div class="input-group time">-->
<!--														<input type="text" class="form-control timepicker"  id="shipment_target_starttime" name="shipment_target_starttime">-->
<!--												<span class="input-group-addon" style="cursor:pointer;" onclick="$('#shipment_target_starttime').focus()">-->
<!--													<span class="glyphicon glyphicon-time"></span>-->
<!--												</span>-->
<!--													</div>-->
<!--												</div>-->

											</div>
										</div>
									</div>

									<div class="grid_4">
										<div class="da-panel">
											<div class="da-panel-header">
										<span class="da-panel-title">
											<img src="<?php echo base_url() ?>assets/images/icons/black/16/computer_imac.png" alt="Panel">
											<strong>Bid Closing Date-Time</strong> <br/><small>(The time when the bid will be closed)</small>
										</span>
											</div>
											<div class="da-panel-content with-padding">
                                                <label for="shipment_ready_startdate" class="control-label">Select Date & Time</label>
												<div class="input-group date">

													<input type="text" class="form-control datetimepicker"  id="bid_closing_startdate" name="bid_closing_startdate">
											<span class="input-group-addon" style="cursor:pointer;" onclick="$('#bid_closing_startdate').focus()">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
												</div>

<!--												<div class="form-group time">-->
<!--													<label for="shipment_ready_startdate" class="control-label">Select Time</label>-->
<!--													<div class="input-group time">-->
<!--														<input type="text" class="form-control timepicker" id="bid_closing_starttime" name="bid_closing_starttime">-->
<!--												<span class="input-group-addon" style="cursor:pointer;" onclick="$('#bid_closing_starttime').focus()">-->
<!--													<span class="glyphicon glyphicon-time"></span>-->
<!--												</span>-->
<!--													</div>-->
<!--												</div>-->

											</div>
										</div>
									</div>
								</fieldset>

								<fieldset class="da-form-inline">
									<legend>Shipment Detail</legend>

									<section class="wizard section--with-pad"><h2 class="wizard__title">What are you shipping?</h2><p class="wizard__subtitle">Enter you shipment’s commodity type and packaging details. Shipping more than one commodity ? No problem! You can add many as you need. Please note that Fleet currently does not handle any hazardous or restricted items.</p></section>

									<div class="clearfix"></div>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<div class="form-group required">
											<label for="Commodity" class="control-label">Shiptmeny Type</label>

											<select name="shipment_type" id="shipment_type" class="form-control">
                                                <option value="FCL">FCL</option>
                                                <option value="LCL">LCL</option>

											</select>
										</div>

									</div>
									<div class="clearfix"></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group required">
                                            <label for="Commodity" class="control-label">Commodity</label>
                                            <input type="text" class="form-control valid" id="Commodity" name="commodity">
                                        </div>

                                    </div>


                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group required">
                                            <label for="num_of_packages" class="control-label">No Of Packages</label>
                                            <input type="text" class="form-control" id="num_of_packages" name="num_of_packages">
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group required">
                                            <label for="wght" class="control-label">Weight(KGs)</label>
                                            <input type="text" class="form-control" id="wght" name="weight">

                                        </div>
                                    </div>
									<div id="lcl_div">



										<div class="panel-default padtop10">
											<div id="gridsCont">
												<div class="panel-default padtop10 gridsconts">
													<div class="row panel-heading" style="padding-top: 20px;">
														<div class="col-lg-1 col-md-1 col-sm-1">
															<div class="form-group">
																<label style="margin:35px;" class="gridNum">1</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-2">
															<div class="form-group required">
																<label class="control-label">Unit of Measurement</label>
																<select class="form-control valid" id="unit_of_measurement_1" onchange="calculateVweight(1);" name="data[ShipmentDetail][1][unit_of_measurement]">
																	<option value="Inch">Inch</option>
																	<option value="CM">CM</option>
																</select>
															</div>
														</div>
														<div class="col-lg-1 col-md-1 col-sm-1">
															<div class="form-group required">
																<label class="control-label">Length</label>
																<input type="text" class="form-control valid" id="length_1" onchange="calculateVweight(1);" name="data[ShipmentDetail][1][length]">
															</div>
														</div>
														<div class="col-lg-1 col-md-1 col-sm-1">
															<div class="form-group required">
																<label class="control-label">Width</label>
																<input type="text" class="form-control valid" id="width_1" onchange="calculateVweight(1);" name="data[ShipmentDetail][1][width]">
															</div>
														</div>
														<div class="col-lg-1 col-md-1 col-sm-1">
															<div class="form-group required">
																<label class="control-label">Height</label>
																<input type="text" class="form-control valid" id="height_1" onchange="calculateVweight(1);" name="data[ShipmentDetail][1][height]">
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-2">
															<div class="form-group required">
																<label class="control-label">No Of Packages</label>
																<input type="text" class="form-control no_of_boxes valid" id="no_of_boxes_1" onchange="calculateVweight(1);" name="data[ShipmentDetail][1][no_of_boxes]">
															</div>
														</div>

														<div class="col-lg-2 col-md-2 col-sm-2">
															<div class="form-group required">
																<label>Volumetric Weight</label>
																<input type="text" class="form-control volumetric_weight valid" id="volumetric_weight_1" readonly="readonly" name="data[ShipmentDetail][1][volumetric_weight]">
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="row panel-heading padtop10">
												<div class="col-lg-4 col-md-4 col-sm-4 pull-right">
													<div class="form-group">
														<label>No Of Packages (Total) : <span id="total_no_of_boxes">0</span></label> <br>
														<label>Volumetric Weight (Total) : <span id="total_vweight">0.00</span></label>
													</div>
												</div>
											</div>

											<div class="row panel-heading padtop10">
												<div class="col-lg-2 col-md-2 col-sm-2 pull-right">
													<div class="form-group">

														<button type="button" class="btn btn-block" onclick="AddGrid();">Add</button>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div id="fcl_div">
										<div class="panel-default padtop10">
											<div id="gridsContFCL">
												<div class="panel-default padtop10 fclgridsconts">
													<div class="row panel-heading" style="padding-top: 20px;">
														<div class="col-lg-1 col-md-1 col-sm-1">
															<div class="form-group">
																<label style="margin:35px;" class="gridNumFcl">1</label>
															</div>
														</div>


														<div class="col-lg-2 col-md-2 col-sm-2">
															<div class="form-group required">
																<label class="control-label">Container Size</label>
																<select class="form-control container_size valid" id="container_size_1"  name="data[FclDetail][1][container_size]">
																	<option value="20 Ft">20 Feet</option>
																	<option value="40 Ft">40 Feet</option>
																	<option value="40 Ft Hc">40 Feet HC</option>
																	<option value="45 Ft Hc">45 Feet HC</option>
																</select>

															</div>
														</div>

														<div class="col-lg-2 col-md-2 col-sm-2">
															<div class="form-group required">
																<label>No of Container</label>
																<input type="text" class="form-control no_of_container valid" id="no_of_container_1"  name="data[FclDetail][1][no_of_container]">
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-2">
															<div class="form-group required">
																<label>Weight</label>
																<input type="text" class="form-control container_weight valid" id="container_weight_1"  name="data[FclDetail][1][container_weight]"/>


															</div>
														</div>
													</div>
												</div>
											</div>


											<div class="row panel-heading padtop10">
												<div class="col-lg-2 col-md-2 col-sm-2 pull-right">
													<div class="form-group">

														<button type="button" class="btn btn-block" onclick="AddFCLGrid();">Add</button>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group required">
											<label>CHB Required </label>
											<input type="radio" name="chb_required" value="yes" /> Yes
											<input type="radio" name="chb_required" value="no" /> No
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group required">
											<label for="service_type" class="control-label">Service Type</label>
											<select class="form-control valid" id="service_type" name="service_type">
												<option value="">Select</option>
												<option value="Door to Door">Door to Door</option>
												<option value="Door to Airport">Door to Airport</option>
												<option value="Airport to Door">Airport to Door</option>
												<option value="Airport to Airport">Airport to Airport</option>
											</select>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label for="inco_terms">INCO Terms</label>
											<select class="form-control valid" id="inco_terms" name="inco_terms">
												<option value="">Select</option>
												<option value="EXW - Ex Works">EXW - Ex Works</option>
												<option value="FCA - Free Carrier">FCA - Free Carrier</option>
												<option value="CPT - Carriage Paid To">CPT - Carriage Paid To</option>
												<option value="CIP - Carriage and Insurance Paid to">CIP - Carriage and Insurance Paid to</option>
												<option value="DAT - Delivered At Terminal">DAT - Delivered At Terminal</option>
												<option value="DAP - Delivered At Place">DAP - Delivered At Place</option>
												<option value="DDP - Delivered Duty Paid">DDP - Delivered Duty Paid</option>
											</select>

										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label for="remarks">Remarks</label>
											<textarea class="form-control" id="remarks" name="remarks" style="resize:none;" rows="4"></textarea>
										</div>
									</div>
								</fieldset>

								<fieldset class="da-form-inline">
									<legend>Review &amp; Confirmation</legend>
									<section class="wizard-form--review section--with-pad"><h2 class="wizard__title">Your Shipment</h2><p class="wizard__subtitle">Almost Done! Please double check your shipment details before submitting your quote request.</p></section>


									<div class="da-form-row">
										<div class="da-form-item large">
											<ul class="da-form-list inline">
												<li><input type="checkbox" name="tos" class="required" /> <label>I agree to the terms of service <span class="required">*</span></label></li>
											</ul>
											<label for="tos" class="error" generated="true" style="display:none"></label>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="grid_html" style="display:none;">
		<div id="grid_div_{{num}}" class="panel-default padtop10 gridsconts">
			<div class="row panel-heading" style="padding-top: 20px;">

				<div class="col-lg-1 col-md-1 col-sm-1">
					<div class="form-group">
						<label style="margin:35px;" class="gridNum">{{num}})</label>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="form-group required">
						<label class="control-label">Unit of Measurement</label>
						<select class="form-control" name="data[ShipmentDetail][{{num}}][unit_of_measurement]" id="unit_of_measurement_{{num}}" onchange="calculateVweight({{num}});">
							<option value="Inch">Inch</option>
							<option value="CM">CM</option>
						</select>
					</div>
				</div>

				<div class="col-lg-1 col-md-1 col-sm-1">
					<div class="form-group required">
						<label class="control-label">Length</label>
						<input type="text" class="form-control" name="data[ShipmentDetail][{{num}}][length]" id="length_{{num}}" onchange="calculateVweight({{num}});" />
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1">
					<div class="form-group required">
						<label class="control-label">Width</label>
						<input type="text" class="form-control" name="data[ShipmentDetail][{{num}}][width]" id="width_{{num}}" onchange="calculateVweight({{num}});" />
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1">
					<div class="form-group required">
						<label class="control-label">Height</label>
						<input type="text" class="form-control" name="data[ShipmentDetail][{{num}}][height]" id="height_{{num}}" onchange="calculateVweight({{num}});" />
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="form-group required">
						<label class="control-label">No Of Packages</label>
						<input type="text" class="form-control no_of_boxes" name="data[ShipmentDetail][{{num}}][no_of_boxes]" id="no_of_boxes_{{num}}" onchange="calculateVweight({{num}});" />
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="form-group required">
						<label>Volumetric Weight</label>
						<input type="text" class="form-control volumetric_weight" id="volumetric_weight_{{num}}" readonly="readonly" name="data[ShipmentDetail][1][volumetric_weight]" />
					</div>
				</div>

				<div class="col-lg-1 col-md-1 col-sm-1">
					<div class="form-group">
						<label>&nbsp;</label>
						<button type="button" class="btn btn-block" onclick="RemoveGrid({{num}});" style="padding: 8px 4px;"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="grid_html_fcl" style="display:none;">
		<div id="grid_div_fcl_{{num}}" class="panel-default padtop10 fclgridsconts">
			<div class="row panel-heading" style="padding-top: 20px;">

				<div class="col-lg-1 col-md-1 col-sm-1">
					<div class="form-group">
						<label style="margin:35px;" class="fclgridNum">{{num}})</label>
					</div>
				</div>


				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="form-group required">
						<label class="control-label">Container Size</label>

						<select class="form-control container_size" name="data[FclDetail][{{num}}][container_size]" id="container_size_{{num}}"  >
							<option value="20 Ft">20 Feet</option>
							<option value="40 Ft">40 Feet</option>
							<option value="40 Ft Hc">40 Feet HC</option>
							<option value="45 Ft Hc">45 Feet HC</option>
						</select>

					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="form-group required">
						<label>No of Container</label>
						<input type="text" class="form-control no_of_container" id="no_of_container_{{num}}" name="data[FclDetail][{{num}}][no_of_container]" />
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="form-group required">
						<label>Weight</label>
						<input type="text" class="form-control container_weight valid" id="container_weight_{{num}}"  name="data[FclDetail][{{num}}][container_weight]">
					</div>
				</div>

				<div class="col-lg-1 col-md-1 col-sm-1">
					<div class="form-group">
						<label>&nbsp;</label>
						<button type="button" class="btn btn-block" onclick="RemoveFCLGrid({{num}});" style="padding: 8px 4px;"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script>

		(function($) {
			$(document).ready(function(e) {


                $('#shipment_ready_startdate').change(function(){
                    alert("hi");
                });


				$(".ui-button-text").click(function() {

					var html = $(this).html();
					$('#lcl_div').show();
					$('#fcl_div').hide();

					if(html=="By Air"){


						$('#shipment_type').hide();
                        $('#ship_image').hide();
                        $('#wand_image').hide();
                        $('#plane_image').show();

					}
					if(html =="By Sea"){
						$('#shipment_type').show();
                        $('#ship_image').show();
                        $('#plane_image').hide();
                        $('#wand_image').hide();
                        $('#lcl_div').hide();
                        $('#fcl_div').show();
					}

				});

				$('#shipment_type').on('change',function(){

					var val =$(this).val();

					if(val=="LCL"){
						$('#lcl_div').show();
						$('#fcl_div').hide();

					}
					else{
						if(val=="FCL"){
							$('#lcl_div').hide();
							$('#fcl_div').show();
						}
					}

				});


				var v = $("#da-ex-wizard-form").validate({ onsubmit: false });
				$("#da-ex-wizard-form").daWizard({
					onLeaveStep: function(index, elem) {
						return v.form();
					},
					onBeforeSubmit: function() {
						return v.form();
					}
				});
				$('.datepicker').datetimepicker({
					viewMode: 'days',
					format: 'DD/MM/YYYY',keepOpen:true
				});

                $('#shipment_ready_startdate').datetimepicker();
                $('#shipment_target_startdate').datetimepicker({
                    useCurrent: false //Important! See issue #1075
                });
                $('#bid_closing_startdate').datetimepicker({
                    useCurrent: false //Important! See issue #1075
                });
                $("#shipment_ready_startdate").on("dp.change", function (e) {
                    $('#shipment_target_startdate').data("DateTimePicker").minDate(e.date);
                    $('#bid_closing_startdate').data("DateTimePicker").minDate(e.date);
                });
                $("#shipment_target_startdate").on("dp.change", function (e) {
                    $('#shipment_ready_startdate').data("DateTimePicker").maxDate(e.date);
                });
                $("#bid_closing_startdate").on("dp.change", function (e) {
                    $('#shipment_ready_startdate').data("DateTimePicker").maxDate(e.date);
                });
				$('.timepicker').datetimepicker({ format: 'LT',
					stepping:1});
			});

			$("#da-ex-buttons-radio, #import_export").buttonset({ icons: { primary: 'ui-icon-triangle-1-ne'} });

		}) (jQuery);


		function calculateVweight(rowno){

			var no_of_boxes = $('#no_of_boxes_'+rowno).val();
			var height = $('#height_'+rowno).val();
			var width = $('#width_'+rowno).val();
			var length = $('#length_'+rowno).val();
			var unit_of_measurement = $('#unit_of_measurement_'+rowno).val().toLowerCase();

			if(no_of_boxes == '' || height == '' || width == '' || length == '' || unit_of_measurement == ''){
				$('#volumetric_weight_'+rowno).val('');
				return;
			}
			var vweight = 0;
			if( unit_of_measurement == 'inch'){
				vweight = (length * width * height * no_of_boxes) / 366
			}else{
				vweight = (length * width * height * no_of_boxes) / 6000
			}
			$('#volumetric_weight_'+rowno).val(vweight.toFixed(2));

			updateSumValues();
		}

		function updateSumValues(){

			var total_vweight = 0;
			$('.volumetric_weight').each( function(){
				var vw =$(this).val();
				if(vw == ''){
					return;
				}

				total_vweight = total_vweight + parseFloat(vw);
			});

			var total_no_of_boxes = 0;
			$('.no_of_boxes').each( function(){
				var nob =$(this).val();
				if(nob == ''){
					return;
				}

				total_no_of_boxes = total_no_of_boxes + parseFloat(nob);
			});

			$('#total_no_of_boxes').html(total_no_of_boxes);
			$('#total_vweight').html(total_vweight.toFixed(2));

		}

		var AddGrid = function(){

			var gridsContNum = $("#gridsCont .gridsconts").length + 1;
			var gridHtml = $("#grid_html").html();
			gridHtml = gridHtml.replace(/{{num}}/g, gridsContNum);
			$("#gridsCont").append(gridHtml);
			count_grids();
			$("input[name='data[ShipmentDetail]["+gridsContNum+"][length]']").rules("add", "required number");
			$("input[name='data[ShipmentDetail]["+gridsContNum+"][width]']").rules("add", "required number");
			$("input[name='data[ShipmentDetail]["+gridsContNum+"][height]']").rules("add", "required number");
			$("input[name='data[ShipmentDetail]["+gridsContNum+"][no_of_boxes]']").rules("add", "required digits");
		}

		var RemoveGrid = function(num){
			if( confirm("Are you sure to remove?") ){
				$("input[name='data[ShipmentDetail]["+num+"][length]']").rules("remove");
				$("input[name='data[ShipmentDetail]["+num+"][width]']").rules("remove");
				$("input[name='data[ShipmentDetail]["+num+"][height]']").rules("remove");
				$("input[name='data[ShipmentDetail]["+num+"][no_of_boxes]']").rules("remove");
				$("#gridsCont #grid_div_"+num).remove();
				count_grids();

				updateSumValues();
			}
		}

		var count_grids = function(){
			$("#gridsCont .gridNum").each(function(index, val){
				$(this).html(parseInt(index)+1);
			});
		}
		var AddFCLGrid = function(){

			var gridsContNum = $("#gridsContFCL .fclgridsconts").length + 1;

			var gridHtml = $("#grid_html_fcl").html();
			gridHtml = gridHtml.replace(/{{num}}/g, gridsContNum);
			$("#gridsContFCL").append(gridHtml);
			count_fcl_grids();

			//$("input[name='data[ShipmentDetail]["+gridsContNum+"][container_size]']").rules("add", "required number");
			//$("input[name='data[ShipmentDetail]["+gridsContNum+"][no_of_container]']").rules("add", "required number");

		}

		var RemoveFCLGrid = function(num){
			if( confirm("Are you sure to remove?") ){
				//$("input[name='data[ShipmentDetail]["+num+"][container_size]']").rules("remove");
				//$("input[name='data[ShipmentDetail]["+num+"][no_of_container]']").rules("remove");

				$("#gridsContFCL #grid_div_"+num).remove();
				count_fcl_grids();


			}
		}

		var count_fcl_grids = function(){
			$("#gridsContFCL .gridNum").each(function(index, val){
				$(this).html(parseInt(index)+1);
			});
		}

	</script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyB8J0UbRkuz3f1wJrPSAfUACAD_bNOQOMY "></script>
	<script>
		function initialize(){
			var address = (document.getElementById('deliver_pickup_point'));
			var my_address = new google.maps.places.Autocomplete(address);
			var address_2 = (document.getElementById('origin_pickup_point'));
			var my_address_2 = new google.maps.places.Autocomplete(address_2);

		}


		google.maps.event.addDomListener(window, 'load', initialize);
	</script>