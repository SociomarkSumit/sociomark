
<style>
    .count-heading strong{
        font-size:1.6em;
    }
    .panel-primary .panel-heading, .panel-info .panel-heading,.panel-warning .panel-heading{
        background-color:#013302!important;
        color:#fff!important;
    }
    .form-group{
        position:relative!important;
    }
    .form-group img{
        vertical-align: middle;
        position: absolute!important;
        right: 1%!important;
        top: 60%!important;
        transform: translateY(0%)!important;
    }
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Admin Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <!--<div class="col-lg-12">-->
        <!--    <div class="panel panel-default">-->
        <!--        <div class="panel-heading">-->
        <!--            Welcome Admin-->
        <!--        </div>-->
        <!--        <div class="panel-body">  -->
        <!--            <p>Welcome to the Administration area. To manipulate the data, please make selection from the links on your left.</p>-->
        <!--        </div>-->
                <!-- /.panel-body -->
        <!--    </div>-->
            <!-- /.panel -->
        <!--</div>-->
        <!-- /.col-lg-12 -->
        
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-4 col-md-2 col-md-offset-3">
                            <form method="post" action="<?php echo base_url('dashboard/check') ?>">
                                <input type="hidden" value="7" name="val" />
                                <button type="submit" class="btn btn-success seven_days">Last 7 days</button>
                            </form>
                        </div>
                        
                        <div class="col-xs-4 col-md-2">
                            <form method="post" action="<?php echo base_url('dashboard/check') ?>">
                                <input type="hidden" value="30" name="val" />
                                <button type="submit" class="btn btn-success one_month">Last 1 month</button>    
                            </form>
                        </div>
                        
                        <div class="col-xs-4 col-md-2">
                            <button type="button" class="btn btn-success one_month" data-toggle="modal" data-target="#myModal">Custom</button>    
                        </div>
                    </div>
                </div>
                <div class="panel-body">  
                    <div class="row">
                        <!-- Total order card start -->
                            <div class="panel panel-default panel-primary col-md-3 col-sm-6 col-12" style="border-top:0px!important">
                              <div class="panel-heading">Total <strong>Orders</strong></div>
                              <div class="panel-body" style="border: 1px solid #f3f3f3;border-radius: 0px 0px 4px 4px;">
                                <div class="row">
                                    <span class="col-md-10 col-xs-9 count-heading">
                                        <strong><?php echo $order_count ?></strong>
                                    </span>    
                                    <span class="col-md-2 col-xs-3">
                                        <?php
                                            // echo "<span class='text text-danger'>$older_order_count</span>";
                                            if($older_order_count > $order_count ){
                                                echo "<i class='fa fa-arrow-down text text-danger'></i>";        
                                            }
                                            else{
                                                echo "<i class='fa fa-arrow-up text text-success'></i>";        
                                            }
                                        ?>
                                    </span>
                                </div>
                              </div>
                            </div>
                        <!--Total order card end-->
                        
                        <!-- Total sales card start -->
                            <div class="panel panel-default panel-info col-md-3 col-sm-6 col-12" style="border-top:0px!important">
                              <div class="panel-heading">Total <strong>Sells</strong></div>
                              <div class="panel-body" style="border: 1px solid #f3f3f3;border-radius: 0px 0px 4px 4px;">
                                <div class="row">
                                    <span class="col-md-10 col-xs-9 count-heading">
                                        <strong><i class="fa fa-inr"> </i>&nbsp;&nbsp;<?php echo $sales_count ?> </strong>
                                    </span>    
                                    <span class="col-md-2 col-xs-3">
                                        <?php
                                            // echo "<span class='text text-danger'>$older_sales_count</span>";
                                            if($older_sales_count > $sales_count ){
                                                echo "<i class='fa fa-arrow-down text text-danger'></i>";        
                                            }
                                            else{
                                                echo "<i class='fa fa-arrow-up text text-success'></i>";        
                                            }
                                        ?>
                                    </span>
                                </div>
                              </div>
                            </div>
                        <!--Total sales card end-->
                        
                        <!-- Total appointments card start -->
                            <div class="panel panel-default panel-warning col-md-3 col-sm-6 col-12" style="border-top:0px!important">
                              <div class="panel-heading">Total <strong>Appointments</strong></div>
                              <div class="panel-body" style="border: 1px solid #f3f3f3;border-radius: 0px 0px 4px 4px;">
                                <div class="row">
                                    <span class="col-md-10 col-xs-9 count-heading">
                                        <strong><?php echo $appointment_count ?></strong>
                                    </span>  
                                    <span class="col-md-2 col-xs-3">
                                        <?php
                                            if($older_appointment_count > $appointment_count ){
                                                echo "<i class='fa fa-arrow-down text text-danger'></i>";        
                                            }
                                            else{
                                                echo "<i class='fa fa-arrow-up text text-success'></i>";        
                                            }
                                        ?>
                                    </span>
                                </div>
                              </div>
                            </div>
                        <!--Total appointments card end-->
                        
                        <!-- Total new consumers card start -->
                            <div class="panel panel-default panel-warning col-md-3 col-sm-6 col-12" style="border-top:0px!important">
                              <div class="panel-heading">New <strong>Customers</strong></div>
                              <div class="panel-body" style="border: 1px solid #f3f3f3;border-radius: 0px 0px 4px 4px;">
                                <div class="row">
                                    <span class="col-md-10 col-xs-9 count-heading">
                                        <strong><?php echo $customer_count ?></strong>
                                    </span>    
                                    <span class="col-md-2 col-xs-3">
                                        <?php
                                            if($older_customer_count > $customer_count ){
                                                echo "<i class='fa fa-arrow-down text text-danger'></i>";        
                                            }
                                            else{
                                                echo "<i class='fa fa-arrow-up text text-success'></i>";        
                                            }
                                        ?>
                                    </span>
                                </div>
                              </div>
                            </div>
                        <!--Total new consumers card end-->
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
        
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Orders
                        </div>
                        <div class="panel-body">  
                            <div class="row">
                                <div class="">
                                    <div id="seven_chart1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>        
                </div>
                <div class="col-12 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Sell
                        </div>
                        <div class="panel-body">  
                            <div class="row">
                                <div class="">
                                    <div id="seven_chart2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>        
                </div>
                
                <div class="col-12 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Appointments
                        </div>
                        <div class="panel-body">  
                            <div class="row">
                                <div class="">
                                    <div id="seven_chart3"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>        
                </div>
                
                <div class="col-12 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Customers
                        </div>
                        <div class="panel-body">  
                            <div class="row">
                                <div class="">
                                    <div id="seven_chart4"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>        
                </div>
                
                <div class="col-12 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Top 5 Products
                        </div>
                        <div class="panel-body">  
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=0;
                                            foreach($top_five_prods as $key => $value ){
                                                $i++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $value->product_name ?></td>
                                                    <td><?php echo $value->quantity ?></td>
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>        
                </div>
                
                <div class="col-12 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Top 5 Cities
                        </div>
                        <div class="panel-body">  
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>City Name</th>
                                            <th>Total Orders</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=0;
                                            foreach($top_five_cities as $key => $value ){
                                                $i++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $value->delivery_city ?></td>
                                                    <td><?php echo $value->count ?></td>
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>        
                </div>
                
            </div>
            
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Select Dates</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url('dashboard/custom_dates') ?>">
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="text" class="form-control" id="start_date" name="start_date">
                        </div>
                        
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="text" class="form-control" id="end_date" name="end_date">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success custom">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>