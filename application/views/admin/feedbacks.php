
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-comment-dots"></i>&nbsp;&nbsp;Feedbacks</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Feedbacks</li>
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
                <h2 class="card-title col">List of Feedbacks:</h2>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#add">+ Add new Feedback</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Feedback</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Rating</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td><?=$d->content?></td>
                        <td><?=$d->name?></td>
                        <td><?=$d->designation?></td>
                        <td><?=$d->rating?></td>
                        <td>
                          <a href="<?=base_url('Delete/Feedback/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Feedback"><i class="fa fa-trash-alt"></i></a>
                          <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#edit<?=$d->id?>" title="Edit Feedback"><i class="fa fa-edit"></i></button>
                        </td>
                      </tr>

                      <!-- edit modal -->
                        <div class="modal fade" id="edit<?=$d->id?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Feedback:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?php echo base_url();?>Edit/Feedback/<?=$d->id?>" enctype="multipart/form-data">
                                      <div class="col">
                                        <div class="form-group px-0 col-md-4 col-sm-12">
                                            <label for="rating" class="m-0">Rating (out of 5 stars): *</label>
                                            <select name="rating" id="rating" class="form-control m-0">
                                              <option value="1" <?=$d->rating=='1'?' selected':''?> >1 star</option>
                                              <option value="2" <?=$d->rating=='2'?' selected':''?>>2 star</option>
                                              <option value="3" <?=$d->rating=='3'?' selected':''?>>3 star</option>
                                              <option value="4" <?=$d->rating=='4'?' selected':''?>>4 star</option>
                                              <option value="5" <?=$d->rating=='5'?' selected':''?>>5 star</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="content" class="m-0">Feedback:</label>
                                            <p class="m-0 text-sm text-muted">(Max. 200 Characters)</p>
                                            <textarea name="content" id="content" minlength="1" maxlength="200" class="form-control mt-2" rows="5" required><?=$d->content?></textarea>
                                        </div>
                                        <div class="row">
                                          <div class="form-group col-md-6 col-sm-12">
                                              <label for="name" class="m-0">Name:</label>
                                              <p class="text-sm text-muted m-0">(Max. 20 Characters)</p>
                                              <input type="text" class="form-control mt-2" minlength="1" maxlength="20" name="name" value="<?=$d->name?>" id="name" required>
                                          </div>
                                          <div class="form-group col-md-6 col-sm-12">
                                              <label for="designation" class="m-0">Designation:</label>
                                              <p class="text-sm text-muted m-0">(Max. 30 Characters)</p>
                                              <input type="text" class="form-control mt-2" minlength="1" maxlength="30" name="designation" value="<?=$d->designation?>" id="designation" required>
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
                      <!-- /edit modal -->

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


 <!-- Add modal -->
  <div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">+ Add Feedback:</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form role="form" method="post" action="<?=base_url();?>Add/Feedback">
              <div class="col">
                <div class="form-group px-0 col-md-4 col-sm-12">
                    <label for="rating" class="m-0">Rating (out of 5 stars): *</label>
                    <select name="rating" id="rating" class="form-control m-0">
                      <option value="1">1 star</option>
                      <option value="2">2 star</option>
                      <option value="3">3 star</option>
                      <option value="4">4 star</option>
                      <option value="5" selected>5 star</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content" class="m-0">Feedback: *</label>
                    <p class="text-sm text-muted mt-0 mb-2">(Max. 300 Characters)</p>
                    <textarea name="content" id="content" class="form-control" minlength="1" maxlength="300" rows="5" required></textarea>
                </div>
                <div class="row mt-5">
                  <div class="form-group col-md-4 col-sm-12">
                      <label for="name" class="m-0">Name: *</label>
                      <p class="text-sm text-muted mb-1">(Max. 20 Characters)</p>
                      <input type="text" class="form-control m-0" name="name" maxlength="20" id="name" required>
                  </div>
                  <div class="form-group col-md-4 col-sm-12">
                      <label for="designation" class="m-0">Designation: *</label>
                      <p class="text-sm text-muted mb-1">(Max. 30 Characters)</p>
                      <input type="text" class="form-control m-0" name="designation" maxlength="30" id="designation" required>
                  </div>
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
<!-- /Add modal -->

<!-- DataTable assets -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>


<script>

// Init Datatable
  $(function () {
    $('#bookdt').DataTable({
      "pageLength": 10,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      // "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true
    });
  });


// Name of the file appearing on selecting image
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

</script>
