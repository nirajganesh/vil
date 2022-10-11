
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fas fa-briefcase"></i>&nbsp;&nbsp;Careers</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Careers</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">

        <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header row">
                <h2 class="card-title col">List of careers:</h2>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addCareer">+Add new Career</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Post name</th>
                      <th>Subtitle</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($careers as $career){?>
                      <tr>
                        <td>
                          <p clasa="mb-3"><?=$career->position?></p>
                        </td>
                        <td><?=$career->experience?></td>
                        <td><ul><?php $arr=explode('|',$career->descr); foreach($arr as $a){echo '<li>'.$a.'</li>';}?></ul></td>
                        <td>
                          <?php if($career->visibility=='1'){
                                  echo '<p class="badge badge-success">Active</p>';
                          }
                          else{
                            echo '<p class="badge badge-danger">Inactive</p>';
                          }
                          ?>
                        </td>
                        <td>
                          <a href="<?=base_url('Delete/Career/'.$career->career_id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Career"><i class="fa fa-trash-alt"></i></a>
                          <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#editCareer<?=$career->career_id?>" title="Edit Career"><i class="fa fa-edit"></i></button>
                        </td>
                      </tr>

                      <!-- edit Career modal -->
                        <div class="modal fade" id="editCareer<?=$career->career_id?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit career:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?php echo base_url();?>Edit/Career/<?=$career->career_id?>">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="position">Post name:</label>
                                                <input type="text" class="form-control" name="position" id="position" value="<?=$career->position?>" required>
                                            </div>
                                          </div>
  
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="experience">Subtitle:</label>
                                                <input type="text" class="form-control" name="experience" value="<?=$career->experience?>" id="experience">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="descr">Description:</label>
                                                <p class="text-muted text-sm">( Use pipe separated (" | ") sentences for each bullet point)</p>
                                                <textarea class="form-control" name="descr" id="descr" rows="8" required><?=$career->descr?></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Visibility">Status:</label>
                                                <select name="visibility" id="visibility" class="form-control">
                                                  <option <?php if($career->visibility == '1'){echo ' selected ';}?> value="1">Active on website</option>
                                                  <option <?php if($career->visibility == '0'){echo ' selected ';}?>  value="0">Inactive on website</option>
                                                </select>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-recycle"></i>&nbsp; Update</button>
                                    </form>
                                </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                      <!-- /edit career modal -->
                    <?php }?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->


<!-- new Career modal -->
  <div class="modal fade" id="addCareer">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">+ Add new career:</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form role="form" method="post" action="<?php echo base_url();?>Add/Career" class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="position">Post name:</label>
                        <input type="text" class="form-control" name="position" id="position" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="experience">Subtitle:</label>
                        <input type="text" class="form-control" name="experience" id="experience">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="descr">Description:</label>
                      <p class="text-muted text-sm">( Use pipe separated (" | ") sentences for each bullet point)</p>
                      <textarea class="form-control" name="descr" id="descr" rows="6" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="Visibility">Status:</label>
                        <select name="visibility" id="visibility" class="form-control">
                          <option value="1">Active on website</option>
                          <option value="0">Inactive on website</option>
                        </select>
                    </div>
                  </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">+ Add</button>
              </form>
          </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
<!-- /new career modal -->

<!-- DataTable assets -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script type='text/javascript'>
  var baseURL= "<?php echo base_url();?>";
    
  $(function () {
    $('#bookdt').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true,
      "order": [[ 0, "desc" ]]
    });
  });
</script>
