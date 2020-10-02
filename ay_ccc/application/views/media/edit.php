<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit <?php if($title){ echo $title; }else{ echo 'Admin';} ?></h1>
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
                        <?php echo anchor('media','<button class="btn btn-primary">Cancel</button>');?>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="panel-body">
                    <form action="" method="POST" id="data_form" enctype="multipart/form-data">
                        <input type="hidden" name="dataId" id="dataId" value="<?php echo $result[0]->id; ?>">						
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Device</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-device"></div>
                                <select class="form-control" name="device">
                                    <option value="desktop" <?php if($result[0]->device=='desktop'){ echo 'selected'; } ?>>Desktop (1600x600)</option>
                                    <option value="mobile" <?php if($result[0]->device=='mobile'){ echo 'selected'; } ?>>Mobile (500x500)</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Image (1200X655)</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-imagefile1"></div>
                                <?php
                                if(strlen($result[0]->imagefile1)>15 && file_exists('../images/media/'.$result[0]->imagefile1)){
                                    echo '<input type="hidden" name="imageexist1" id="imageexist1" value="'.$result[0]->imagefile1.'">';
                                    echo '<img src="../images/media/'.$result[0]->imagefile1.'" width="100">';
                                    echo '<span class="delete_file" data-id="'.$result[0]->id.'" data-image="'.$result[0]->imagefile1.'" data-field="imagefile1"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>';
                                }else{
                                    echo '<input type="file" name="imagefile1">';
                                }

                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alt</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-alt"></div>
                                <input type="text" name="alt" id="alt" class="form-control" placeholder="Alt" value="<?php echo $result[0]->alt; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Url</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-url"></div>
                                <input type="text" name="url" id="url" class="form-control" placeholder="Url" value="<?php echo $result[0]->url; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sort Order</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-sort_order"></div>
                                <input type="text" name="sort_order" id="sort_order" class="form-control" placeholder="Name" value="<?php echo $result[0]->sort_order; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-status"></div>
                                <select class="form-control" name="status">
                                    <option value="s_act" <?php if($result[0]->status=='s_act'){ echo 'selected'; } ?>>Active</option>
                                    <option value="s_deact" <?php if($result[0]->status=='s_deact'){ echo 'selected'; } ?>>Deactive</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-primary" id="submit" value="Submit">
                                <span id="loader"><img src="images/loader.gif" width="25" height="25"></span>
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
            url: "<?php echo base_url(); ?>index.php/media/store",
            data:  new FormData(this),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                location.href='<?php echo base_url(); ?>index.php/media';
            },
            error: function(data){
                var responseData = data.responseJSON;
                if(responseData.error.error_type=='file'){
                    $("#form-error-"+responseData.error.error_field).html(responseData.error.errors);
                }else{
                    jQuery.each( responseData.error.errors, function( i, val ) {
                        $("#form-error-"+i).html(val);
                    });
                }
              
            }
        });

    }));



  $(".delete_file").on('click',(function(){
    var data_id = $(this).data('id');
    var data_image = $(this).data('image');
    var data_field = $(this).data('field');

    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/media/delete_file/<?php echo $result[0]->id; ?>",
        data: {data_id:data_id,data_image:data_image,data_field:data_field},
        dataType: 'json',
        success: function(result) {
          location.reload(true);
        },
        error: function(data){
            var responseData = data.responseJSON;     
            jQuery.each( responseData.error.errors, function( i, val ) {
                $("#form-error-"+i).html(val);
            }); 
        }
    });

  }));


});
</script>
