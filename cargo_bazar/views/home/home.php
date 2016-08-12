<style>
    .col-md-2-a{
        width: 10%;
    }
    .col-md-1-a{
        width: 5%;
    }
    .col-md-2-b{
        width: 17.67%;
    }
    .col-md-3-a{
        width: 30%;
    }
</style>
<?php  $this->load->view('template/slider'); ?>
<section class="featured-services">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="left-side">
                    <h3 class="section-title">About Cargobazar</h3>
                    <p>Need to Export or Import something or, Relocate your personal belongings? 
                        CargoBazar helps you find reliable service providers across Pakistan conveniently from 
                        your computer or smartphones. We help you compare their rate offerings and securely book
                        and ship your cargo with ease.</p><br/>
                  <p>CargoBazar’s extensive directory of service providers ensures that you receive the most competitive quotes
                    for all your shipments. Ratings and Reviews from past customers of CargoBazar help you select the most 
                    reliable service providers. 
                    </p>

                </div>
                <!-- end left-side --> 
            </div>
            <!-- end col-5 -->
            <div class="col-md-5">
                <div class="right-side">
                    <div class="service-box pull-right">
                        <figure><img src="<?php echo base_url() ?>assets/images/icon01.png" alt="Image">
                            <figcaption>Sea Freight</figcaption>
                        </figure>
                        <div class="desc"> 90% of the world trade is through sea routes<br /> <a href="<?php echo base_url();?>home/seaFreight">Read More</a></div>
                        <!-- end desc --> 
                    </div>
                    <!-- end service-box -->
                    <div class="service-box spacing pull-right">
                        <figure><img src="<?php echo base_url() ?>assets/images/icon02.png" alt="Image">
                            <figcaption>Air Freight</figcaption>
                        </figure>
                        <div class="desc"> Air Transport carry 35% of world trade Value ,<br /> <a href="<?php echo base_url();?>home/airFreight">Read More</a></div>
                        <!-- end desc --> 
                    </div>
                    <!-- end service-box -->

                    <!-- end service-box --> 
                </div>
                <!-- end right-side --> 
            </div>
            <!-- end col-7 --> 
        </div>
        <!-- end row --> 
    </div>
    <!-- end container --> 
    <div class="clearfix"></div>
    <section class="steps-features">
    <div class="container">
      <div class="row spacing">
        <div class="col-md-4 col-sm-4 spacing">
          <div class="step-box bg-1"> <span></span>
            <h3>Importer / Exporter</h3>
             <h5></h5>
            <a href="<?php echo base_url();?>home/howitworkIM">How it Works</a> </div>
          <!-- end step-box --> 
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-4 spacing">
          <div class="step-box bg-2 featured"> <span></span>
            <h3></h3>
            <h5></h5>
            <a href="#">About Us</a> </div>
          <!-- end step-box --> 
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-4 spacing">
          <div class="step-box bg-3"> <span></span>
            <h3>Freight Forwarder</h3>
            <h5></h5>
            <a href="<?php echo base_url();?>home/howitworkFF">How it Works</a> </div>
          <!-- end step-box --> 
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
</section>

<section class="latest-news">
    <div class="container">
        <div class="row spacing">
            <div class="col-xs-12 spacing">
                <h3 class="section-title"><br>Recent Shipments</h3>
            </div>
            <div class="clearfix"></div>
            <div class="margin-both">
                                
                <?php foreach ($records->result() as $row)
                {
                $temp =$row->origin_pickup_point."/".$row->deliver_pickup_point;
                    $address = strlen($temp)>41?substr($temp,0,40)."..":$temp;
                ?>
                <div class="row  grid-body">
                    <div class="col-md-2 col-md-2-a"><?=ucwords(str_replace("_"," ",$row->transit_type))?></div>
                    <div class="col-md-1"><?=$row->import_export?></div>
                    <div class="col-md-3 col-md-3-a"><?=$address?></div>
                    <div class="col-md-2"><?=$row->commodity?> / <?=$row->weight?></div>
                    <div class="col-md-2 col-md-2-b"><?=intval($row->shipment_ready_startdate)!=1970?date("d-m-Y",strtotime($row->shipment_ready_startdate)):""?> / <?=intval($row->shipment_target_startdate)!=1970?date("d-m-Y",strtotime($row->shipment_target_startdate)):""?></div>
                    <div class="col-md-2 col-md-2-a"><?=intval($row->bid_closing_startdate)!=1970?date("d-m-Y",strtotime($row->bid_closing_startdate)):""?></div>
              <div class="col-md-1 col-md-1-a"><a href=""><img src="<?=base_url("assets/images/icons/black/16/single_document_small.png")?>" alt="details"/></a> </div>
                </div>
                <?php }?>
                <div class="row" style="float: right">                    
                    <a class="btn btn-success" href="<?php echo base_url();?>home/projects">Show More</a>                    
                </div>
<!--                <div class="row  grid-body">-->
<!--                    <div class="col-md-2">Shipment Mode</div>-->
<!--                    <div class="col-md-2">Bid</div>-->
<!--                    <div class="col-md-2">Origin / Destination</div>-->
<!--                    <div class="col-md-2">Commodity / Weight</div>-->
<!--                    <div class="col-md-2">Shipments / Dates</div>-->
<!--                    <div class="col-md-2">Bid Closing Date</div>-->
<!--                </div>-->
<!--                <div class="row  grid-body">-->
<!--                    <div class="col-md-2">Shipment Mode</div>-->
<!--                    <div class="col-md-2">Bid</div>-->
<!--                    <div class="col-md-2">Origin / Destination</div>-->
<!--                    <div class="col-md-2">Commodity / Weight</div>-->
<!--                    <div class="col-md-2">Shipments / Dates</div>-->
<!--                    <div class="col-md-2">Bid Closing Date</div>-->
<!--                </div>-->
<!--                <div class="row  grid-body">-->
<!--                    <div class="col-md-2">Shipment Mode</div>-->
<!--                    <div class="col-md-2">Bid</div>-->
<!--                    <div class="col-md-2">Origin / Destination</div>-->
<!--                    <div class="col-md-2">Commodity / Weight</div>-->
<!--                    <div class="col-md-2">Shipments / Dates</div>-->
<!--                    <div class="col-md-2">Bid Closing Date</div>-->
<!--                </div>-->
              
        </div>
        <!-- end row --> 
    </div>
    <!-- end container --> 
</section>
<!-- end featured-services -->

<!-- end calculate-shipping -->
<!--<section class="steps-features">
    <div class="container">
        <div class="row spacing">
            <div class="col-md-4 col-sm-4 spacing">
                <div class="step-box bg-1"> <span>01</span>
                    <h3>PACKING </h3>
                    <h5>STORAGES</h5>
                    <a href="#">READ MORE</a> </div>
                 end step-box  
            </div>
             end col-4 
            <div class="col-md-4 col-sm-4 spacing">
                <div class="step-box bg-2 featured"> <span>02</span>
                    <h3>LANDING</h3>
                    <h5>FEATURES</h5>
                    <a href="#">READ MORE</a> </div>
                 end step-box  
            </div>
             end col-4 
            <div class="col-md-4 col-sm-4 spacing">
                <div class="step-box bg-3"> <span>03</span>
                    <h3>DELIVERY</h3>
                    <h5>SERVICES</h5>
                    <a href="#">READ MORE</a> </div>
                 end step-box  
            </div>
             end col-4  
        </div>
         end row  
    </div>
     end container  
</section>-->
<!-- end steps-features -->

<!-- end testimonials -->
<div class="hr" style="margin-top: 20px;"> &nbsp;</div>
<section class="latest-news">
    <div class="container">
        <div class="row spacing">
            <div id="blog" class="col-xs-12 spacing">
                <h3 class="section-title">Blogs</h3>
            </div>
            <!-- end col-12 -->
            <div class="col-md-4 col-sm-6 spacing">
                <div class="news-box">
                    <figure><img src="<?php echo base_url() ?>assets/images/aircargo_3.jpg" alt="Image" height="246" ></figure>
                    <div class="news-caption">
                        <h4>Analysis of Airfreight Bid</h4>
                        <p>An airfreight bid explains the price structure for a freight shipment</p>
                        <a href="<?php echo base_url();?>home/analysisfs">READ MORE</a> </div>
                    <!-- end news-caption --> 
                </div>
                <!-- end news-box --> 
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-6 hidden-xs spacing">
                <div class="news-box">
                    <div class="news-caption">
                        <h4>How to package for different type of Transports?</h4>
                        <p>There are big fear you face when you moved your goods - weather</p>
                        <a href="<?php echo base_url();?>home/transporttype">READ MORE</a> </div>
                    <!-- end news-caption -->
                    <figure><img src="<?php echo base_url() ?>assets/images/ship1.jpeg" alt="Image" height="220"></figure>
                </div>
                <!-- end news-box --> 
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 hidden-sm spacing">
                <div class="news-box">
                    <figure><img src="<?php echo base_url() ?>assets/images/ship2.jpeg" alt="Image" height="246"></figure>
                    <div class="news-caption">
                        <h4>Get best rate for your freight</h4>
                        <p>Cost control is required while importing or exporting to increase the GP of your company</p>
                        <a href="<?php echo base_url();?>home/bestRate">READ MORE</a> </div>
                    <!-- end news-caption --> 
                </div>
                <!-- end news-box --> 
            </div>
            <!-- end col-4 --> 
        </div>
        <!-- end row --> 
    </div>
    <!-- end container --> 
</section>
<!-- end latest-news -->

<?php  $this->load->view('chat_tawk/chat_tawk'); ?>

<?php  $this->load->view('google_analytics/google_analytics'); ?>