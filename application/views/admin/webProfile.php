
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fa fa-globe"></i>&nbsp; VIL web profile:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Home</a></li>
              <li class="breadcrumb-item active">web profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container fluid -->
    </div><!-- /.Content Header -->

      <!-- Content Main -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row mb-2">
          <div class="col">
                <div class="card"><div class="card-header">
                  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#webproedit-modal"><i class="fa fa-edit" aria-hidden="true"></i> &nbsp; Edit Web profile </button>
                </div>
                <div class="card-body d-flex flex-wrap">
                    <div class="col">
                      <label class="label">E-mail:</label><br>
                      <span><?=$profile->email1; ?></span> <br>
                      <span><?=$profile->email2; ?></span> <br>
                      <span><?=$profile->email3; ?></span> <br> <br>

                      <label class="label">Contact no. :</label><br>
                      <span><?=$profile->phone1; ?></span> <br>
                      <span><?=$profile->phone2; ?></span> <br>
                      <span><?=$profile->phone3; ?></span> <br> <br>

                      <label class="label">Address (line 1) :</label>&nbsp;
                      <span><?=$profile->address?></span><br>
                      <label class="label">Address (line 2):</label>&nbsp;
                      <span><?=$profile->address_line1?></span><br>
                      <label class="label">Address (line 3):</label>&nbsp;
                      <span><?=$profile->address_line2?></span><br><br>
                    </div>
                    <div class="col">
                      <label class="label">Facebook link:</label><br>
                      <span><?=$profile->fblink; ?></span><br><br>

                      <label class="label">Instagram link:</label><br>
                      <span><?=$profile->instalink; ?></span><br><br>

                      <label class="label">Twitter link:</label><br>
                      <span><?=$profile->twitterlink; ?></span><br><br>

                      <label class="label">Linkedin Link:</label><br>
                      <span><?=$profile->linkedin; ?></span><br><br><br>
<!-- 
                      <label class="label">For map location: </label><br>
                      <label class="label">Latitude: </label><br>
                      <span><?=$profile->latitude; ?></span> <br><br>
                      <label class="label">Longitude:</label><br>
                      <span><?=$profile->longitude; ?></span> <br><br> -->

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
    </div><!--/. Content Main -->

</div><!-- /.wrapper -->


<!-- edit Web profile modal -->
  <div class="modal fade " id="webproedit-modal">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i>&nbsp; Edit web profile</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form role="form" method="post" class="d-flex" action="<?=base_url();?>Edit/webProfile">
                  <div class="col">
                    <input type="text" class="form-control" name="id" id="id" value="<?=$profile->id; ?>" hidden>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control mb-1" name="email1" id="email" value="<?=$profile->email1; ?>" required>
                        <input type="email" class="form-control mb-1" name="email2" id="email" value="<?=$profile->email2; ?>" required>
                        <input type="email" class="form-control" name="email3" id="email" value="<?=$profile->email3; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone1">Contact no. :</label>
                        <input type="number" class="form-control mb-1" name="phone1" id="phone1" value="<?=$profile->phone1; ?>" required>
                        <input type="number" class="form-control mb-1" name="phone2" id="phone2" value="<?=$profile->phone2; ?>" required>
                        <input type="number" class="form-control" name="phone3" id="phone3" value="<?=$profile->phone3; ?>" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="address">Address (line 1):</label>
                        <input type="text" class="form-control" name="address" id="address" value="<?=$profile->address; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="address_line1">Address (line 2):</label>
                        <input type="text" class="form-control" name="address_line1" id="address_line1" value="<?=$profile->address_line1; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="address_line2">Address (line 3):</label>
                        <input type="text" class="form-control" name="address_line2" id="address_line2" value="<?=$profile->address_line2; ?>" >
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                        <label for="fblink">Facebook link:</label>
                        <input type="url" class="form-control" name="fblink" id="fblink" value="<?=$profile->fblink;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="instalink">Instagram Link:</label>
                        <input type="url" class="form-control" name="instalink" id="instalink" value="<?=$profile->instalink;?>">
                    </div> 
                    <div class="form-group">
                        <label for="twitterlink">Twitter Link:</label>
                        <input type="text" class="form-control" name="twitterlink" id="twitterlink" value="<?=$profile->twitterlink;?>">
                    </div>
                    <div class="form-group">
                        <label for="linkedin">Linked In Link:</label>
                        <input type="text" class="form-control" name="linkedin" id="linkedin" value="<?=$profile->linkedin;?>">
                    </div><br>
                     <!-- <div class="form-group">
                        <label for="latitude">Latitude:</label>
                        <input type="text" class="form-control" name="latitude" id="latitude" value="<?=$profile->latitude;?>">
                    </div>
                     <div class="form-group">
                        <label for="longitude">Longitude:</label>
                        <input type="text" class="form-control" name="longitude" id="longitude" value="<?=$profile->longitude;?>">
                    </div> -->
                  </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary" ><i class="fa fa-recycle"></i>&nbsp; Update</button>
              </form>
          </div>


      </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
<!-- /edit web profile modal -->
