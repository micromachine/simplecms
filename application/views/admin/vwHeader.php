<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

     <title></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    <!-- Add custom CSS here -->
    <link href="<?php echo HTTP_CSS_PATH; ?>arkadmin.css" rel="stylesheet">
      <!-- JavaScript -->
    <script src="<?php echo HTTP_JS_PATH; ?>jquery-1.10.2.js"></script>
    <script src="<?php echo HTTP_JS_PATH; ?>bootstrap.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
   

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>admin"></a>
        </div>
 <?php 
// Define a default Page
  $pg = isset($page) && $page != '' ?  $page :'dash'  ;    
?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li <?php echo  $pg =='dash' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
<li <?php echo  $pg =='cms' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/cms"><i class="fa fa-file"></i> Strony statyczne</a></li>              
            <li <?php echo  $pg =='art' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/art"><i class="fa fa-file"></i> Artykuły</a></li>
            <li <?php echo  $pg =='artcategory' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/artcategory"><i class="fa fa-file"></i> Artykuły - kategorie</a></li>
            <li <?php echo  $pg =='ads' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/ads"><i class="fa fa-file"></i> Reklamy</a></li>
            <li <?php echo  $pg =='voivodeship' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/voivodeship"><i class="fa fa-file"></i> Województwa</a></li>
            <li <?php echo  $pg =='town' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/town"><i class="fa fa-file"></i> Miasta</a></li>
            <li <?php echo  $pg =='database' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>admin/database"><i class="fa fa-file"></i> Zarządzanie DB</a></li>
           
 
        
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
                           <li class="divider"></li>
                       <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username') ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profil</a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Ustawienia</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>admin/home/logout"><i class="fa fa-power-off"></i> Wyloguj</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
