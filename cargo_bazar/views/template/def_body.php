<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('template/head'); ?>
</head>
<body>
<div class="soft-transition"></div>
<!-- end soft-transition -->
<div class="transition-overlay"></div>
<!-- end transition-overlay -->
<main>
  <?php  $this->load->view('template/top'); ?>
  <!-- end full-header -->
  
  <!-- end slider -->
  <?php echo $default_content; ?>
  <!-- end about-intro -->
  
  <!-- end application -->
  <?php $this->load->view('template/footer'); ?>
  <!-- end footer --> 
</main>
</body>
</html>