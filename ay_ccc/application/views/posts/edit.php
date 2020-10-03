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
                        <?php echo anchor('posts','<button class="btn btn-primary">Cancel</button>');?>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="panel-body">
                    <form action="" method="POST" id="data_form" enctype="multipart/form-data">
                        <input type="hidden" name="dataId" id="dataId" value="<?php echo $result[0]->id; ?>">
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-title"></div>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Title" value='<?php echo str_replace('\'','\'',$result[0]->title) ; ?>'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-content"></div>
                                <textarea type="text" name="content" id="content" class="form-control toolbar"><?php echo $result[0]->content; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Meta Title (English only)</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-meta_title"></div>
                                <textarea type="text" name="meta_title" id="meta_title" class="form-control"><?php echo $result[0]->meta_title; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Meta Description (English only)</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-meta_description"></div>
                                <textarea type="text" name="meta_description" id="meta_description" class="form-control"><?php echo $result[0]->meta_description; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Meta Keywords (English only)</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-meta_keywords"></div>
                                <textarea type="text" name="meta_keywords" id="meta_keywords" class="form-control"><?php echo $result[0]->meta_keywords; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tags</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-tags"></div>
                                <textarea type="text" name="tags" id="tags" placeholder="example tag1,tag2,tag3" class="form-control"><?php echo $result[0]->tags; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Display on Home?</label>
                            <div class="col-sm-10">
                                <div class="error form_error" id="form-error-display_on_home"></div>
                                <select class="form-control" name="display_on_home">
                                    <option value="no" <?php if($result[0]->display_on_home=='no'){ echo 'selected'; } ?>>No</option>
                                    <option value="yes" <?php if($result[0]->display_on_home=='yes'){ echo 'selected'; } ?>>Yes</option>                                       
                                </select>
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
        $(".form_error").html();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>posts/store",
            data:  new FormData(this),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                location.href="<?php echo base_url();?>index.php/posts";
            },
            error: function(data){
                var responseData = data.responseJSON;
                if(responseData.error.error_type=='form'){
                    jQuery.each( responseData.error.errors, function( i, val ) {
                        $("#form-error-"+i).html(val);
                    });
                }else if(responseData.error.error_type=='file'){
                    $("#form-error-"+responseData.error.error_field).html(responseData.error.errors);
                }else{
                    $("#code_error").html(responseData.error.message);
                    $("#code_error").addClass('alert-danger');
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
            url: "<?php echo base_url(); ?>index.php/posts/delete_file/<?php echo $result[0]->id; ?>",
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
