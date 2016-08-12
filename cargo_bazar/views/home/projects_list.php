<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<style>
    .btn-import {
        background-color: #00adef;
        border-color: #00adef;
        color: #fff;
        margin-bottom: 5px;
    }
    .btn-export {
        background-color: #9b4449;
        border-color: #9b4449;
        color: #fff;
        margin-bottom: 5px;
    }
	.modal.large {
     width: 80%;
}
input[type="text"], select{
	padding:0px 2px !important;
	height: 30px !important;
}
.bid_table thead tr th{text-align:center;padding: 0px;font-size: 12px;}
.bid_table tbody tr td {padding: 5px;font-size: 12px;}
.center{text-align:center;}
</style>

<input type="hidden" value="<?php echo $logged_id;?>" id="logged_id">

<div class="cntr-con-top-mar">&nbsp;</div>
<div class="about-us"> 
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-8">
                <h4 class="section-title"><span>01</span>Open Shipment Inquiries</h4>
            </div>
            <div class="col-xs-4">
                <img src="<?=base_url("/assets/images/icons/color/aplane.png")?>"/>&nbsp;<button class="btn btn-import ">Import</button><br>
                <img src="<?=base_url("/assets/images/icons/color/aplane.png")?>"/>&nbsp;<button class="btn btn-export">Export</button><br>
                <img src="<?=base_url("/assets/images/icons/color/ship.png")?>"/>&nbsp;<button class="btn btn-import">Import</button><br>
                <img src="<?=base_url("/assets/images/icons/color/ship.png")?>"/>&nbsp;<button class="btn btn-export">Export</button><br>
            </div>


        </div>
        <!-- end col-12 -->
        <div class="col-md-12 col-sm-12">

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
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
				<tr>
                    <th>Transit Type</th>
                    <th>Import/Export</th>
                    <th>Origin - Destination</th>

                    <th>Commodity</th>
                    <th>Shipment Reach Date</th>
                    <th>Target Delivery Date</th>
                    <th>Bid Closing Date</th>
                    <th>Action</th>
				</tr>
				</thead>
				
				<tbody>

				<?php
				foreach ($records->result() as $row)
				{
                    $icon = "";
                    if($row->transit_type=="by_air"){
                    $icon="aplane.png";
                    }
                    else{
                     $icon="ship.png";
                    }
				?>
					<tr>
						<td style="text-align: center"><img src="<?=base_url("/assets/images/icons/color/$icon")?>"/> </td>
						<td><?=$row->import_export?></td>
						<td>From: <?=$row->origin_pickup_point?><br>
						To:<?=$row->deliver_pickup_point?></td>
						<td><?=$row->commodity?><br><?=$row->weight." KG"?></td>
						<td><?=date("d-M-Y",strtotime($row->shipment_ready_startdate))?></td>
						<td><?=date("d-M-Y",strtotime($row->shipment_target_startdate))?></td>
						<td><?=date("d-M-Y",strtotime($row->bid_closing_startdate))?></td>
						<td>
							<a href="<?=base_url("home/project_detail/$row->id")?>" title="Detail View"><img src="<?=base_url("assets/images/icons/black/32/single_document.png")?>" alt="details"/></a>
							
							<a href="#" data-project_id="<?php echo $row->id; ?>" class="open_dialog" data-toggle="modal" data-target="#Bid_Project" title="Bid Now"><img src="<?=base_url("assets/images/icons/black/32/single_document.png")?>" alt="Bid"/></a>
							
						</td>

					</tr>
					<?php }?>
				</tbody>
		</table> 
        </div>
        <!-- end col-8 -->
<!--        <div class="col-md-4">-->
<!--          <figure class="thumb-image"><img src="--><?php //echo base_url();?><!--assets/images/image1.jpg" alt="Image">-->
<!--            <figcaption>Member of the Road Haulage Association</figcaption>-->
<!--          </figure>-->
<!--          <div class="pdf-catalog"> <i class="icon-document"></i> <a href="#">DOWNLOAD PDF</a> </div>-->
<!--          <!-- end pdf-catalog --> 
<!--          <img src="--><?php //echo base_url();?><!--assets/images/delivery-trucks.jpg" alt="Image"> </div>-->
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
</div>

<div class="row">
        <div class="col-xs-12">
<div id="Bid_Project" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">
<form role="form" id="ffBidForm" method="post">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Bidding Form</h4>
      </div>
      <div class="modal-body" id="ff_body">
		 <table class="table table-bordered bid_table">
			<thead>
				<tr align="center">
					<th>Cost Entity</th>
					<th>Detail</th>
					<th>UOM</th>
					<th>QTY</th>
					<th>Currency</th>
					<th>Rate</th>
					<th>Converstion <br/><small style="font-size:8px;">(To PKR)</small></th>
					<th>Amount <br/><small style="font-size:8px;">(PKR)</small></th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			
			<tbody id="bid-tbody">
				<tr>
					<td>
						<select name="cost_entity[]"  class="form-control input-md">
							<option>Local Haulage</option>
							<option>Origin, Custom Clearance</option>
							<option>Ocean Freight</option>
							<option>B/L Charges</option>
							<option>Destination, Custom Clearance</option>
							<option>Destination, Inland Haulage</option>
							<option>DDP, DDU</option>
						</select>
					</td>
					<td><input type="text" name="details[]" class="form-control input-sm" placeholder="Details" ></td>
					<td><input type="text" name="uom[]" class="form-control input-sm center" style="width:50px;" value="Nil" placeholder="UOM" ></td>
					<td><input type="text" name="qty[]" class="form-control input-sm qty center" style="width:45px;" placeholder="QTY" onchange="update_price();" value="1" ></td>
					<td>
						<select name="currency[]"  class="form-control input-sm" style="width:60px;">
							<option>Rs.</option>
							<option>US$</option>
							<option>&pound;</option>
							<option>AUS$</option>
						</select>
					</td>
					<td><input type="text" name="rate[]" class="form-control input-sm price center" style="width:70px;" onchange="update_price();" placeholder="Rate" ></td>
					<td><input type="text" name="conversion_rate[]" class="form-control input-sm con_rate center" style="width:100px;" onchange="update_price();" placeholder="Conversion Rate" ></td>
					<td class="col_price center" style="width:100px;">0.00</td>
					<td><a href="#" class="add-more">Add</a></td>
				</tr>
			
			</tbody>
			<tfoot>
			<tr>
				<td colspan="7" style="text-align:right;">
				Total:
				</td >
				<td colspan="2" class="grand_total">
				Rs. 0.00 
				</td>
			</tr>
			</tfoot>
		 </table>
		  
		  
		  
		  
		  <div class="clearfix"></div>
		  
      </div>
      <div class="modal-footer">
	    <button type="submit" class="btn btn-default" >Bid Now</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</form>
  </div>
</div>
</div>
</div>

<div id="success" class="modal fade" role="dialog">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Bidding Done</h4>
      </div>
      <div class="modal-body">
		 <p>You have successfully Done the Bid, Go to your Dashboard for Bid Details</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
	
	function update_price(){
		$(".qty").each(function(){
			var qty = $(this).val();
			var current_price = $(this).parent().parent().find(".price").val();
			var conversion_rate = $(this).parent().parent().find(".con_rate").val();
			var total = current_price * conversion_rate * qty;
			//if(is_NAN(total)){total = 0;}
			$(this).parent().parent().find(".col_price").html(parseFloat(total));
		});
		
		update_grand_total();
	}
	
	function update_grand_total(){
		var total = 0;
		$(".col_price").each(function(){
			total = total + parseFloat($(this).html());
		});
		$('.grand_total').html("Rs. "+total);
	}
	
	$(document).on("click",".add-more",function(e){
		e.preventDefault();
		var html='<tr>'+
					'<td>'+
						'<select name="cost_entity[]"  class="form-control input-md">'+
							'<option>Local Haulage</option>'+
							'<option>Origin, Custom Clearance</option>'+
							'<option>Ocean Freight</option>'+
							'<option>B/L Charges</option>'+
							'<option>Destination, Custom Clearance</option>'+
							'<option>Destination, Inland Haulage</option>'+
							'<option>DDP, DDU</option>'+
						'</select>'+
					'</td>'+
					'<td><input type="text" name="details[]" class="form-control input-sm" placeholder="Details" ></td>'+
					'<td><input type="text" name="uom[]" class="form-control input-sm center" value="Nil" style="width:50px;" placeholder="UOM" ></td>'+
					'<td><input type="text" name="qty[]" class="form-control input-sm qty center" value="1" onchange="update_price()" style="width:45px;" placeholder="QTY" ></td>'+
					'<td>'+
						'<select name="currency[]"  class="form-control input-sm" style="width:60px;">'+
							'<option>Rs.</option>'+
							'<option>US$</option>'+
							'<option>&pound;</option>'+
							'<option>AUS$</option>'+
						'</select>'+
					'</td>'+
					'<td><input type="text" name="rate[]" class="form-control input-sm price center" style="width:70px;" placeholder="Rate" onchange="update_price()" ></td>'+
					'<td><input type="text" name="conversion_rate[]" class="form-control input-sm con_rate center" style="width:100px;" onchange="update_price()" placeholder="Conversion Rate" ></td>'+
					'<td class="col_price center" style="width:100px;">0.00</td>'+
					'<td><a href="#" class="add-more">Add</a></td>'+
				'</tr>';
		$('#bid-tbody').append(html);
	});
	
	$('#ffBidForm').submit(function(e){
		e.preventDefault();
		var data = $(this).serialize();
		
		$.ajax({
			 type: "POST",
			 url: "<?php echo base_url();?>bidding/bidding/save_bid",
			 data: data,
			 success: function (res) {
				$('#Bid_Project').modal("hide");
				$('#success').modal("show");
			 }
		 });
		 
	});
	
	$('.open_dialog').click(function(){
		if($('#logged_id').val() == "0"){
			alert("You are not logged-id! please login first to bid a project");
			return false;
		}
		var project_id = $(this).attr("data-project_id");
		if($('#current_selected_id').length > 0){
			$('#current_selected_id').val(project_id);
		}else{
			$('#ffBidForm').append("<input type='hidden' name='current_project_id' value='"+project_id+"' id='current_selected_id' />");
		}
		
	});
  </script>