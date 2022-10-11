
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0 text-dark"><i class="fa fa-users"></i>&nbsp;&nbsp;Applications</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Applications</li>
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
                <h2 class="card-title col">List of applications:</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Date </th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Applied for</th>
                      <th>Resume</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($apps as $app){?>
                      <tr>
                        <td><?=date('d-m-Y',strtotime($app->date))?></td>
                        <td><?=$app->name?></td>
                        <td><?=$app->email?></td>
                        <td><?=$app->for_position?></td>
                        <td><a href="<?=base_url('assets/resumes/').$app->resume?>" target="_blank"><i class="far fa-file-pdf text-lg"></i> <?=$app->resume?></a></td>
                        <td>
                          <a href="<?=base_url('Delete/Application/'.$app->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete application"><i class="fa fa-trash-alt"></i></a>
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

<!-- Init Datatable -->
<script>
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
