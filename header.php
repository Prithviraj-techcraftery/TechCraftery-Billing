<?php
	//check login
	include("session.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TechCraftery Billing System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.css">
 
  <link rel="stylesheet" href="css/skin-green.css">
  
  	<!-- JS -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="js/scripts.js"></script>
	
	<!-- AdminLTE App -->
	<script src="js/app.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

     <!--Logo -->
    <a href="dashboard.php" class="logo">
       <!--mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>TE</b>CH</span> -->
      <span class="logo-mini"><img class="logo-mini-img" src="https://techcraftery.com/wp-content/uploads/2023/09/Colorful-Artificial-Intelligence-Logo-2.png" alt="logo TechCraftery"></span>
       <!--logo for regular state and mobile devices -->
      <span style="text-decoration:none;" class="logo-lg"><b>TechCraftery</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAMAAzAMBIgACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAAAQMEBQIGB//EAC8QAQACAQIFAgUDBAMAAAAAAAABAgMEERIhMUFRBXETIjJhkRQjoUJSU4FyweH/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AP3EAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAV3y1r05yqtltP/AIDRvEd3mctY7s0ygGj41fP8J+LWe/8ADMA1Res9JeondjeotMc4kGsUVzT0tC6totHKQSG4AAAAAAAAAAADze0VruBaeGN92e+Sb8t9oRa3FO+8vKAAAAAAAAAmJmJ3idpQA0YssW5TylaxrcWT+mewLwFAAAAAAAAETO3VmyXm08uizPblwwoBKAQAJ5RuCVGTU4sfKbbz4jmyavVTk+THO1O895ZQdCdfX/Hbb3TXXY5n5omseXO7Co7VLVvXipaLR9kuNjvbHbipO0unptRXNTxeOsIq4ABPbl1QA04r8Ubd4WMdbTW3FHVrid4iYUSAAAAAATO0bivNO1PcFFp3mZeU90IAADJ6hl4axirPO/X2a3L1s76i2/bkooAEAAHvDknFlrkjt1+8PBsDtxMTETHSeYp0VuLTU37cl6KgABfgnrHhQ94p4bxINQCgAAAAp1E9IXM+f649gVAIAADla2JjUX387uqxeo4/pyf6n/pRhAEAADsJpWb3ilesztAOpoa8Omr95mV7zSvBStI7RslFAAEx1QkGuvSEvNPor7PSgAAAAz5/rj2aFGeOkgpAQAAEWrW1bVtzieqQHK1GC2C3mvaVLtWrFq8NqxMT1iWXJoaWneluH7dYUc8a50OTfaLV2TXQWmfnvG326iMcbzMRETMz2h0tHpvhRN7/AFT/AAtw6fHi50rG/meq1FEAAAAlCY6g1U+ivs9Ir0hKgAAAAqzx8m/3WomN42kGRCZjaZiUIAJAeL3pjje9ohj1Os/pw8vNmOZ4p3tMzKjpTrMP90/hH63D5t+HNAdL9bh82/B+tw+bfhzQHT/W4fMx/p7pqsN52i/55OSA7iHJwZ74Z+W0zHeJ7ulgzVzV3rynvHhBYAA9Y44rxDyv09etgXAKAAAAAAKM9dvm/KlsmN+U9GW1Zrbbt5BDHrs/DHwqzzn6vs17xG8z0hxslpvkteesyDyAIAAAAAAPeHJbFki9eTwA7WO8ZMdb16T0Sx+m33panjo2opWOKYiGusbRsqw02+ae65QAAAAAAAAeMlItGz2AwamJphyb9olxn0mfFXNjmk8t423cLU6TJprTxRvXtbsCgAQAAAAAABMVm0xFYmZntANPp0/vzHmrr4se/O3Rk9P0M4p+Jlna0xtwukKAAAAAAAAAAAAItWLRMWiJie0pAc3U+mVvM2wTwT/bPSXOy6bNhn9zHMR56vowHy4+hyaXDk+vHXfz0Z7el4Lc4m9faQcYdafScX+W/wDCY9Jwx1yZJ/AOQmtbWnasTM/aN3cp6fp6z9M2/wCU7tFMdKR8lYj2gHHwem5r7fE2x18zzl09PpcWnj9uvzT1tPVoARCQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//Z" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['login_username'];?></span>
            </a>
            <ul class="dropdown-menu">
             <!-- Drop down list-->
             <li><a href="user-edit.php?id=1" class="btn btn-default btn-flat">Edit Profile</a></li>
              <li><a href="logout.php" class="btn btn-default btn-flat">Log out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        
        <!-- Menu 0.1 -->
        <li class="treeview">
          <a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <!-- Menu 1 -->
         <li class="treeview">
          <a href="#"><i class="fa fa-file-text"></i> <span>Invoices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="invoice-create.php"><i class="fa fa-plus"></i>Create Invoice</a></li>
            <li><a href="invoice-list.php"><i class="fa fa-cog"></i>Manage Invoices</a></li>
            <li><a href="#" class="download-csv"><i class="fa fa-download"></i>Download CSV</a></li>
          </ul>
        </li>
        <!-- Menu 2 -->
         <li class="treeview">
          <a href="#"><i class="fa fa-archive"></i><span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="product-add.php"><i class="fa fa-plus"></i>Add Products</a></li>
            <li><a href="product-list.php"><i class="fa fa-cog"></i>Manage Products</a></li>
            <li><a href="add-category.php"><i class="fa fa-plus"></i>Add Product Category</a></li>
          </ul>
        </li>
        <!-- Menu 3 -->
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i><span>Customers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer-add.php"><i class="fa fa-user-plus"></i>Add Customer</a></li>
            <li><a href="customer-list.php"><i class="fa fa-cog"></i>Manage Customers</a></li>
          </ul>
        </li>
        
        <!-- Menu 4 -->
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i><span>System Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="user-add.php"><i class="fa fa-plus"></i>Add User</a></li>
            <li><a href="user-list.php"><i class="fa fa-cog"></i>Manage Users</a></li>
          </ul>
        </li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->


