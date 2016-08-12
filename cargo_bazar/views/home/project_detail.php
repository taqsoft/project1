<style>
    .detail {
        display: block;
        padding-top: 8px;
    }
    .detail-row{
        font-weight: bold;display: block;
    }
</style>
<div class="cntr-con-top-mar">&nbsp;</div>
<div class="about-us"> 
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h4 class="section-title"><span>01</span>SHIPMENT DETAIL</h4>
        </div>
        <!-- end col-12 -->
        <div class="col-md-12 col-sm-12">

            <div class="col-md-12 col-sm-12 border col-customize12 mright">
               <div class="col-md-6 col-sm-6  col-customize mright" >
                   <h5 class="details_heading">Origin Location</h5>
                  <span><?=$project->origin_pickup_point?></span>
                   <h5 class="details_heading">Origin Pickup Point</h5>
                  <span><?=$project->origin_pickup?></span>
               </div>

               <div class="col-md-6 col-sm-6  col-customize" >
                   <h5 class="details_heading">Destination Location</h5>
                  <span><?=$project->deliver_pickup_point?></span>
                   <h5 class="details_heading">Destination Pickup Point</h5>
                  <span><?=$project->deliver_pickup?></span>
               </div>
                </div>

            <div class="col-md-12 col-sm-12 border col-customize12 mright">

                <div class="col-md-6 col-sm-6 col-customize" >
                    <h5 class="details_heading">Commodity</h5>
                    <span><?=$project->commodity?>,<?=$project->weight?> KGs (<?=$project->num_of_packages?> Packages)</span>

                </div>

                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12 " style="margin-top: 15px">

                    <?php if($project->shipment_type=="FCL"){?>


                            <?php foreach($fcl_details->result() as $key=>$row) {

                                ?>
                                <span class="detail-row"><?=$row->container_size?>   x   <?=$row->no_of_container?>   x   <?=$row->container_weight?></span>
                                <br>

                            <?php }?>



                    <?php } else{?>

                            <?php foreach($project_details->result() as $row) {

                                ?>
                                <span class="detail-row"><?=$row->length.$row->unit_of_measurement." x ".$row->width.$row->unit_of_measurement." x ".$row->height?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$row->no_of_boxes?>  Package &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Volumetric Weight : <?=$row->volumetric_weight?></span>
                                <br>

                        </table>
                    <?php }}?>

                </div>

            </div>
            <div class="col-md-12 col-sm-12 border col-customize12 mright">
                <div class="clearfix"></div>
                <div class="col-customize mright" >
                    <h5 class="details_heading col-md-5">Shipment Ready Date</h5>
                   <span class="detail"><?=date("d-m-Y",strtotime($project->shipment_ready_startdate))?>&nbsp;<?=date("h:i A",strtotime($project->shipment_ready_starttime))?></span>
                    <div class="clearfix"></div>

                    <h5 class="details_heading col-md-5">Target Delivery Date</h5>
                   <span class="detail"><?=date("d-m-Y",strtotime($project->shipment_target_startdate))?>&nbsp;<?=date("h:i A",strtotime($project->shipment_target_starttime))?></span>
                    <div class="clearfix"></div>

                    <h5 class="details_heading col-md-5">Bid Closing Startdate</h5>
                   <span class="detail"><?=date("d-m-Y",strtotime($project->bid_closing_startdate))?>&nbsp;<?=date("h:i A",strtotime($project->bid_closing_starttime))?></span>

                    </div>
                </div>
            <div class="col-md-12 col-sm-12 border col-customize12 mright">


                <div class="col-md-12 col-sm-12 " >
                    <h5 class="details_heading">Remarks</h5>
                   <span><?=$project->remarks?></span>

                </div>

                <div class="clearfix"></div>

            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 border">
                <h1>Qeustions</h1>

                <div id="disqus_thread"></div>
                <script>
                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                     */

                    var disqus_config = function () {
                        this.page.url = "http://www.cargobazar.avragontech.com/";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = "http://www.cargobazar.avragontech.com"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };

                    (function() {  // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');

                        s.src = '//cargobazar.disqus.com/embed.js';

                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
            </div>
		  

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

        </div>
        <!-- end col-8 -->
    <!--        <div class="col-md-4">-->
    <!--          <figure class="thumb-image"><img src="--><?php //echo base_url();?><!--assets/images/image1.jpg" alt="Image">-->
    <!--            <figcaption>Member of the Road Haulage Association</figcaption>-->
    <!--          </figure>-->
    <!--          <div class="pdf-catalog"> <i class="icon-document"></i> <a href="#">DOWNLOAD PDF</a> </div>-->
    <!--          <!-- end pdf-catalog --> -->
    <!--          <img src="--><?php //echo base_url();?><!--assets/images/delivery-trucks.jpg" alt="Image"> </div>-->
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
</div>
  