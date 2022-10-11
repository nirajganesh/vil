
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-user"></i>&nbsp;&nbsp;Clientele</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Clientele</li>
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
                <h2 class="card-title col">List of Clients:</h2>
                <a href="<?=base_url()?>Add/Clientele" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#add">+ Add Client</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Client Logo</th>
                      <th>Client Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                        <tr>
                            <td>
                                <img src="<?=base_url()."assets/images/$d->img_src"?>" alt="Background" width="100" style="object-fit:cover !important;">
                            </td>
                            <td><?=$d->name?></td>
                            <td>
                                
                                <a href="<?=base_url('Delete/Clientele/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Clientele"><i class="fa fa-trash-alt"></i></a>
                                <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#edit<?=$d->id?>" title="Edit Clientele"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>

                      <!-- edit modal -->
                        <div class="modal fade" id="edit<?=$d->id?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Client:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?=base_url();?>Edit/Clientele/<?=$d->id?>" enctype="multipart/form-data">
                                      <div class="col">

                                        <div class="form-group">
                                          <label for="img<?=$d->id?>" class="m-0">Choose logo:</label>
                                          <p class="m-0 mb-1 text-muted">( Choose only if you want to change the current image ) ( Max image size : 300kb )</p>
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img<?=$d->id?>" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" onchange="checkPhoto(this,'photoLabel<?=$d->id?>', 'editBtn<?=$d->id?>')">
                                            <label class="custom-file-label" for="img<?=$d->id?>">Choose file</label>
                                          </div>
                                        </div>

                                        <div class="alert alert-danger py-1 m-0 mb-3 px-2 text-sm" id="photoLabel<?=$d->id?>" style="display:none;"></div>

                                        <div class="form-group">
                                            <label for="name" class="m-0">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" value="<?=$d->name?>" required>
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
                                <h4 class="modal-title"> <i class="fa fa-plus"></i> &nbsp; Add Client:</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="post" action="<?=base_url();?>Add/Clientele" enctype="multipart/form-data">
                                    <div class="col">

                                    <div class="form-group">
                                        <label for="img" class="m-0">Choose logo:</label>
                                        <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="img" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" required>
                                        <label class="custom-file-label" for="img">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="content" class="m-0">Name:</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
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

function checkPhoto(target, msg, btn) {
      // if(target.files[0].type != "jpg") {
      //     document.getElementById("photoLabel").innerHTML = "File not supported";
      //     document.getElementById("photoLabel").style.display = "initial";
      //     document.getElementById("addBtn").setAttribute('disabled','true');
      //     return false;
      // }
      if(target.files[0].size > 360000) {
          document.getElementById(msg).innerHTML = "Image size cannot be more than 300kb !";
          document.getElementById(msg).style.display = "inline-block";
          document.getElementById(btn).setAttribute('disabled','true');
          return false;
      }
      if(target.files[0].size < 360000) {
          document.getElementById(msg).innerHTML = "";
          document.getElementById(msg).style.display = "none";
          document.getElementById(btn).removeAttribute('disabled');
          return false;
      }
      // document.getElementById("photoLabel").innerHTML = "";
      return true;
  }


</script>
