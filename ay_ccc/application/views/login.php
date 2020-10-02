
<!DOCTYPE html>
<html lang="en">

<head>    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<base href="<?php echo base_url();?>">
<title>Login - Admin</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="css/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/sb-admin-2.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/form_elements.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>

    <div id="wrapper">        

    	<div class="container">
		    <div class="row">
		        <div class="col-md-4 col-md-offset-4">
		            <div class="login-panel panel panel-default">
		                <div class="panel-heading">
		                    <h3 class="panel-title">Admin Login</h3>
		                </div>
		                <div class="panel-body">
		                    <div class="form-horizontal">
		                    	<form action="" method="POST" id="login_form" enctype="multipart/form-data">
		                        <fieldset>
		                            <div class="form-group">
		                                <div class="col-md-12">
		                                	<div class="error form_error" id="form-error-username"></div>
		                                    <input id="username" type="text" placeholder="Username" class="form-control" name="username" value="" required autofocus>
		                                </div>
		                            </div>
		                            <div class="form-group">
		                                <div class="col-md-12">
		                                	<div class="error form_error" id="form-error-passcode"></div>
		                                    <input id="passcode" type="password" placeholder="Password" class="form-control" name="passcode" required>
		                                </div>
		                            </div>

		                            <div class="form-group">
		                                <div class="col-md-12">
		                                    <input type="submit" class="btn btn-block btn-primary" id="submit" value="Login">
		                                </div>
		                            </div>
		                        </fieldset>
		                        </form>
		                    </div>
		                </div>
		            </div>
		            <div id="form_login_notification"></div>
		        </div>
		    </div>
		</div>

    </div>

<script type="text/javascript">
$(document).ready(function() {	
	$("#login_form").on('submit',(function(e){
    	e.preventDefault();
    	$(".form_error").html();
	    $("#form_login_notification").removeClass('form_login_error');
	    $("#form_login_notification").removeClass('form_login_success');

	    $.ajax({
	        type: "POST",
	        url: "<?php echo base_url();?>index.php/login/authentication",
	        data:  new FormData(this),
	        dataType: 'json',
	        cache: false,
	        contentType: false,
	        processData: false,
	        success: function(result) {            
	            $("#form_login_notification").addClass('form_login_success');
	            $("#form_login_notification").html("Login successful");
	            location.href="<?php echo base_url();?>index.php/posts";
	        },
	        error: function(data){
	            var responseData = data.responseJSON;	            
	            if(responseData.error.error_type=='login'){
	            	$("#form_login_notification").addClass('form_login_error');
	            	$("#form_login_notification").html(responseData.error.message);
	            }else if(responseData.error.error_type=='form'){
	            	jQuery.each( responseData.error.errors, function( i, val ) {
				    	$("#form-error-"+i).html(val);
					});
	            }
	        }
	    });

	}));
});
</script>


</body>

</html>


