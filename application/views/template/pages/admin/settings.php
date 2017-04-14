<?php 
notify_added();
notify_updated();
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h4>Site Settings</h4>
              </div>

             
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 <hr>
                  <div class="x_content">
                    
                    <!-- Begin -->
                    <form method="POST" action="<?php echo base_url()?>execute/insert" class="form-horizontal form-label-left" novalidate>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="site_title" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Page Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="page_title" required="required" type="text">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-dark">Submit</button>
                        </div>
                      </div>
                    </form>


                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Site Title</th>
                          <th>Page Title</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  $i = 1; foreach ($result as $row): ?>
                          <tr>
                          <td><?php echo $i++?></td>
                          <td><?php echo $row->site_title?></td>
                          <td><?php echo $row->page_title?></td>
                          <td>
                            <a href="#" onClick="show_confirm('edit',<?php echo $row->id;?>)" class="btn btn-dark">Edit</a>
                            <a href="#" onClick="show_confirm('delete',<?php echo $row->id;?>)" class="btn btn-danger">Delete</a>
                          </td>
                          </tr>
                        <?php endforeach ?>
                        
                      </tbody>
                    </table>
                    <!-- End -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


