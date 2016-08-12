<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/validate/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui-1.8.20.min.js"></script>

<footer class="dark-footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="col-lg-12 col-md-12 hidden-sm hidden-xs"> 

                    </div>
                    <div class="col-lg-12 col-md-12 footer-link">
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs height-cstm">

                            <img src="<?php echo base_url() ?>assets/images/black-logo.png" alt="Image" class="logo">
                        </div>
                        <div class="col-lg-3 col-md-3 border-cstm">
                            <h6>Tools</h6>
                            <ul>
                                <li>Freight Glossary</li>
                                <li>CBM Calculator</li>
                                <li>&nbsp</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 border-cstm">
                            <h6>Company</h6>
                            <ul>
                                <li>About Cargo Bazar</li>
                              <li>Blog</li>

                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 ">
                            <h6>Community & Support</h6>
                            <ul>
                                <li>FAQ</li>
                                <li>Safe Shipping Guide</li>
                                <li>&nbsp</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-lg-12 col-md-12 hidden-sm hidden-xs socialmedia-top">

                        <ul class="social-media">
                            <li><a href="https://www.facebook.com/CargoBazarpk-983528198406499/"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="https://twitter.com/CargoBazarPk"><i class="ion-social-twitter"></i></a></li>
                           
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                        </ul>
                    </div>

                </div>

                <!-- end col-5 -->

                <!-- end col-2 -->

                <!-- end col-2 -->
                <div class="col-md-4">
                    <div class="newsletter">
                        <h4 class="title">Subscribe to our Newsletter</h4>
                        <!--<p>If you would like more information about our services.</p>-->
                        <form id="myform" enctype="multipart/form-data" method="post" action="<?=base_url()?>users/users/newsletter_subscription">
                            <input type="text" name="email" placeholder="Type your e-mail">
                            <button type="submit">JOIN</button>
                        </form>
                         </div>
                    <!-- end newsletter --> 
                </div>
                <!-- end col-2 --> 
            </div>
            <!-- end row -->

            <!-- end row --> 
        </div>
        <!-- end container --> 
    </div>
    <!-- end footer-content -->
    <div class="sub-footer margin-top">
        <div class="container text-center"> <span class="copyright">Copyright © 2015 , All Rights Reserved by CargoBazar.pk </span></div>
        <!-- end container --> 
    </div>
    <!-- end sub-footer --> 
</footer>

<script>
$(document).ready(function() {
    $("#myform").validate({
  rules: {
    email: {
      required: true,
      email: true
    }
  }
});
});
</script>