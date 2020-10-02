<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php if($title){ echo $title; }else{ echo 'Admin';} ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="col-sm-8">Records</div>
                    <div class="col-sm-4 buttons_panel float-right">
                        <?php echo anchor('thumbnail/create','<button class="btn btn-primary">Add New</button>');?>
                        <?php echo '<button type="button" class="btn btn-primary" id="delete_records">Delete</button>';?>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="panel-body">
                    <?php 
                    if($this->session->flashdata('response')){ 
                        $response = $this->session->flashdata('response');
                        
                        if(array_key_exists('error', $response)){
                            echo '<p class="alert '.$response['error']['class'].'">'.$response['error']['message'].'</p>';
                        }else{
                            echo '<p class="alert '.$response['success']['class'].'">'.$response['success']['message'].'</p>';
                        }
                    }
                    ?>  
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th class="col-sm-2">Image</th>
                            <th class="col-sm-2">Title</th>
                            <th class="col-sm-4">Path</th>
                            <th class="col-sm-1">Action</th>
                        </tr>
                        <?php foreach($result as $row){ ?>
                        <tr>
                            <td><img src="../images/uploads/media/<?php echo $row->imagefile1; ?>" width="100"></td>
                            <td><?php echo $row->title; ?></td>
                            <td>images/uploads/media/<?php echo $row->imagefile1; ?></td>
                            <td>
                                <span class="checkbox">
                                    <input name="dataId" class="styled" type="checkbox" value="<?php echo $row->id; ?>">
                                    <label></label>
                                </span>
                            </td>
                        </tr>                               
                        <?php } ?>
                    </table>
                </div>
                <!-- /.panel-body -->
                <div class="col-sm-12">
                   <div class="pagination"><?php echo $links; ?></div>                       
                </div>
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

  $("#delete_records").on('click',(function(){
    var dataId = [];
    $.each($("input[name='dataId']:checked"), function(){            
        dataId.push($(this).val());
    });

    console.log(dataId);

    if (confirm('Are you sure you want to delete these records?')) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>media/delete',
            data: {dataId:dataId},
            dataType: 'json',
            success: function(response) {
				location.href='<?php echo base_url(); ?>index.php/media';
            }
        });
    }

  }));

});
</script>
