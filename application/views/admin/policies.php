<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-newspaper"></i>&nbsp;&nbsp;Policies</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Policies</li>
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
                <h2 class="card-title col">List of Policies:</h2>
                <a href="<?=base_url()?>Add/Policies" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#add">+ Add Policy</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Heading</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                        <tr>
                            <td><?=$d->heading?></td>
                            <td>
                                <a href="<?=base_url('Delete/Policies/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Slider"><i class="fa fa-trash-alt"></i></a>
                                <button class="btn btn-primary mb-1 editbtn" data-id="<?=$d->id?>" data-toggle="modal" data-target="#edit<?=$d->id?>" title="Edit Policy"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>

                      <!-- edit modal -->
                        <div class="modal fade" id="edit<?=$d->id?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Policy:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?=base_url();?>Edit/Policies/<?=$d->id?>" enctype="multipart/form-data">
                                      <div class="col">

                                        <div class="form-group">
                                            <label for="heading" class="m-0">Heading:</label>
                                            <input type="text" name="heading" id="heading" class="form-control" value="<?=$d->heading?>">
                                        </div>

                                        <div class="form-group">
                                        <label for="content" class="m-0">Content:</label>
                                        <textarea class="form-control" name="descr" id="textarea<?=$d->id?>" cols="30" rows="10"><?=$d->descr ? $d->descr : null?></textarea>
                                        </div>

                                      </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" id="editBtn<?=$d->id?>"><i class="fa fa-recycle"></i>&nbsp; Update</button>
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

                <!-- Add modal -->
                    <div class="modal fade" id="add">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Add Policy:</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="post" action="<?=base_url();?>Add/Policies" enctype="multipart/form-data">
                                    <div class="col">

                                    <div class="form-group">
                                        <label for="content" class="m-0">Heading:</label>
                                        <input type="text" name="heading" id="heading" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="content" class="m-0">Content:</label>
                                        <textarea class="form-control" name="descr" id="textarea" cols="30" rows="10"></textarea>
                                    </div>

                                    </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" id="editBtn"><i class="fa fa-plus"></i>&nbsp; Add</button>
                                </form>
                            </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <!-- /Add modal -->

            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->



<!-- DataTable assets -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>

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


  $(document).ready(function() {
    $('.editbtn').click(function() {
        id = $(this).data('id');
        $('#textarea'+id).summernote({
            height:300
        });
    })

    $('#textarea').summernote({
            height:300
    });
  });


</script>
