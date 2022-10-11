
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 ml-2 text-dark"> <i class="fa fa-list">&nbsp;</i>Enquiries</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="Admin" class="primary">Dashboard</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">


        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Your enquiries:</h2> <br>
                <!-- <p class="text-muted">( click on the status button to mark it as seen )</p> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Enq. No.</th>
                      <th>Enq. Date</th>
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Phone</th>
                      <th>Purpose</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Enquiries-->
                    <?php foreach($enq as $enqui){?>
                      <tr>
                        <td><?=$enqui->id?></td>
                        <td><?=date("d-m-Y",strtotime("$enqui->date"))?></td>
                        <td><?=$enqui->name?></td>
                        <td><?=$enqui->email?></td>
                        <td><?=$enqui->phone?></td>
                        <td><?=$enqui->message?></td>
                        <td><a href="<?=base_url('Delete/Enquiry/'.$enqui->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete"><i class="fa fa-trash-alt"></i></a></td>
                        <!-- <td><?= $enqui->status=='new' ? '<a href="'.base_url('Edit/enqStatus/').$enqui->id.'" class="badge badge-danger">'.$enqui->status.'</a>' : $enqui->status?></td> -->
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
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Init Datatable -->
<script>
  $(function () {
    $('#bookdt').DataTable({
        dom: 'Bflrtip',
      buttons: [
            {
                extend: 'excelHtml5',
                title: 'Ramraj Services enquiries - <?=date("d-m-Y")?>',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                title: 'Ramraj Services enquiries - <?=date("d-m-Y")?>',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'colvis'
            }
    ],
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true
    });
  });


  // page redirection
  function redirectTo(sUrl) {
            window.location = sUrl
        }

</script>
