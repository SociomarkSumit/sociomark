<!DOCTYPE html>
<html lang="en">

<head>    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<base href="<?php echo base_url();?>">
<title><?php if($title){ echo $title; }else{ echo 'Admin';} ?></title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="css/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/sb-admin-2.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/form_elements.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  

<!-- Custom Fonts -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!--Datepicker-->
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Custom -->
<script src="js/custom.js"></script>

<!-- Venobox -->
<link rel="stylesheet" href="venobox/venobox.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>

	<!-- Start Wrapper-->
    <div id="wrapper">

    	<?php $this->load->view('layout/navigation'); ?>