<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Change Password</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">                            
                    <div class="col-sm-8">Please fill up the form</div>
                    <div class="col-sm-4 buttons_panel float-right">
                        <?php echo anchor('dashboard','<button class="btn btn-primary">Cancel</button>');?>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="panel-body">
                    <?php 
                    if($this->session->flashdata('response')){ 
                        $response = $this->session->flashdata('response');
                        echo '<p class="alert '.$response['success']['class'].'">'.$response['success']['message'].'</p>';
                    }
                    ?>
                    <form action="" method="POST" id="data_form">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Old Password *</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-old_password"></div>
                                <input type="text" name="old_password" id="old_password" class="form-control"  placeholder="Old Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">New Password *</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-new_password"></div>
                                <input type="text" name="new_password" id="new_password" class="form-control"  placeholder="New Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Confirm Password *</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-confirm_password"></div>
                                <input type="text" name="confirm_password" id="confirm_password" class="form-control"  placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-primary" id="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<script type="text/javascript">
$(document).ready(function() {

  $("#data_form").on('submit',(function(e){
    e.preventDefault();  
    $(".form_error").html("");

    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/login/change_password_process",
        data:  new FormData(this),
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
            location.reload(true);
        },
        error: function(data){
            var responseData = data.responseJSON;
            if(responseData.error.error_type=='form'){
                jQuery.each( responseData.error.errors, function( i, val ) {
                    $("#form-error-"+i).html(val);
                });
            }else{
                $("#form-error-old_password").html(responseData.error.message);
            }
        }
    });

  }));

});
</script>