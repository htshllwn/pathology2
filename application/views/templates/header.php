<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pathology</title>

    
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/print.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <style>
      .navbar{
        margin-bottom:0;
        border-radius:0;
      }
    </style>
    
    
  </head>
  <body>
    
  	<nav class="navbar navbar-inverse MarginBottom">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Pathology</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>patients">Patients</a></li>
            <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
            <li><a href="<?php echo base_url(); ?>text_based">Text Based</a></li>
            <li><a href="<?php echo base_url(); ?>labs">Labs</a></li>
          </ul>

          

          <ul class="nav navbar-nav navbar-right">
            <?php if($this->session->userdata('logged_in')): ?>
            <li><a href="<?php echo base_url(); ?>accounts">Accounts</a></li>
            <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  
  	
      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<div class="alert alert-warning alert-dismissible custom-alert" role="alert"><button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>'.$this->session->flashdata('login_failed').'</div>'; ?> 
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<div class="alert alert-warning alert-dismissible custom-alert" role="alert"><button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>'.$this->session->flashdata('user_loggedin').'</div>'; ?> 
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<div class="alert alert-warning alert-dismissible custom-alert" role="alert"><button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>'.$this->session->flashdata('user_loggedout').'</div>'; ?> 
      <?php endif; ?>

      <?php if($this->session->flashdata('patient_reg')): ?>
        <?php echo '<div class="alert alert-warning alert-dismissible custom-alert" role="alert"><button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>'.$this->session->flashdata('patient_reg').'</div>'; ?> 
      <?php endif; ?>