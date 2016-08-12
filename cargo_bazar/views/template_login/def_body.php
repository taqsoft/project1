
<!DOCTYPE html>
<!-- saved from url=(0062)http://themekit-v4.themekit.io/dist/themes/social-3/index.html -->
<html class="st-layout ls-top-navbar ls-bottom-footer hide-sidebar sidebar-r2" lang="en">
    <head>
        <?php $this->load->view('template_login/head'); ?>
    <body class="breakpoint-1024">

        <!-- Wrapper required for sidebar transitions -->
        <div class="st-container">

            <!-- Fixed navbar -->
            <?php $this->load->view('template_login/top'); ?>

            <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
            <?php $this->load->view('template_login/left'); ?>
            

            <div class="chat-window-container"></div>

            <!-- sidebar effects OUTSIDE of st-pusher: -->
            <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

            <!-- content push wrapper -->
            <div class="st-pusher" id="content">

                <!-- sidebar effects INSIDE of st-pusher: -->
                <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

                <!-- this is the wrapper for the content -->
                <div class="st-content">

                    <!-- extra div for emulating position:fixed of the menu -->
                    <div class="st-content-inner">

                        <?php $this->load->view('template_login/slider'); ?>

                        <div class="container">

                            <?php echo $default_content; ?>

                        </div>

                    </div>
                    <!-- /st-content-inner -->

                </div>
                <!-- /st-content -->

            </div>
            <!-- /st-pusher -->

            <!-- Footer -->

            <?php $this->load->view('template_login/footer'); ?>
            <!-- // Footer -->

        </div>
        <!-- /st-container -->

        <!-- Inline Script for colors and config objects; used by various external scripts; -->
        <script>
            var colors = {
                "danger-color": "#e74c3c",
                "success-color": "#81b53e",
                "warning-color": "#f0ad4e",
                "inverse-color": "#2c3e50",
                "info-color": "#2d7cb5",
                "default-color": "#6e7882",
                "default-light-color": "#cfd9db",
                "purple-color": "#9D8AC7",
                "mustard-color": "#d4d171",
                "lightred-color": "#e15258",
                "body-bg": "#f6f6f6"
            };
            var config = {
                theme: "social-3",
                skins: {
                    "default": {
                        "primary-color": "#16ae9f"
                    },
                    "orange": {
                        "primary-color": "#e74c3c"
                    },
                    "blue": {
                        "primary-color": "#4687ce"
                    },
                    "purple": {
                        "primary-color": "#af86b9"
                    },
                    "brown": {
                        "primary-color": "#c3a961"
                    },
                    "default-nav-inverse": {
                        "color-block": "#242424"
                    }
                }
            };
        </script>

        <script src="<?php echo base_url() ?>assets/usertheme/images/all.js"></script>
        <script src="<?php echo base_url() ?>assets/usertheme/images/app.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/usertheme/images/js"></script></body></html>