
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-receipt"></i>&nbsp;&nbsp;Reports</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Reports</li>
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
                <h2 class="card-title col">List of reports:</h2>
                <a href="<?=base_url()?>Add/Reports" class="btn btn-primary ml-auto">+ Add report</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>PDF</th>
                      <th>Heading</th>
                      <th>Descr</th>
                      <th>Thumbnail</th>
                      <th>Section</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                        <tr>
                            <td>
                                <a href="<?=base_url()."assets/reports/$d->pdf_url"?>"><?=$d->pdf_url?></a>
                            </td>
                            <td>
                              <?php if($d->featured){?>
                                <span class="badge badge-primary">Featured</span> <br>
                              <?}?>
                              <?=$d->head?>
                            </td>
                            <td><?=$d->descr?></td>
                            <td>
                              <?php if($d->thumb!=null){ ?>
                              <img src="<?=base_url()."assets/images/$d->thumb"?>" alt="Background" width="100" style="object-fit:cover !important;">
                              <?php } ?>
                            </td>
                            <td><?=$d->section?></td>
                            <td>
                                <a href="<?=base_url('Delete/Reports/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Reports"><i class="fa fa-trash-alt"></i></a>

                                <a href="<?=base_url('Edit/Reports/'.$d->id)?>" class="btn btn-primary mb-1" title="Edit Reports"><i class="fa fa-edit"></i></a>

                            </td>
                        </tr>

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
