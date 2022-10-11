
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-square"></i>&nbsp;&nbsp;Header Images</h1>
                <p class="mt-2 mb-0">( Max size : 500 kB )</p>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Header Images</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header_about')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">About Us</span> <a href="<?=base_url('assets/images/header_about.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" required>
                                <label class="custom-file-label mb-0" for="aimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header_products')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Products</span> <a href="<?=base_url('assets/images/header_products.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" required>
                                <label class="custom-file-label mb-0" for="aimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header_news')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class=" text-bold">News</span> <a href="<?=base_url('assets/images/header_news.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header_investors')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Investors</span> <a href="<?=base_url('assets/images/header_investors.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header_careers')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class=" text-bold">Careers</span> <a href="<?=base_url('assets/images/header_careers.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header_contact')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Contact</span> <a href="<?=base_url('assets/images/header_contact.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header_privacy')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Privacy</span> <a href="<?=base_url('assets/images/header_privacy.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header_tc')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">T & C</span> <a href="<?=base_url('assets/images/header_tc.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

      </div>


      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<script>
// Name of the file appearing on selecting image
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

function checkPhoto(target, msg, btn) {
      if(target.files[0].size > 360000) {
          document.getElementById(msg).innerHTML = "Image size cannot be more than 300kb !";
          document.getElementById(msg).style.display = "initial";
          document.getElementById(btn).setAttribute('disabled','true');
          return false;
      }
      if(target.files[0].size < 360000) {
          document.getElementById(msg).innerHTML = "";
          document.getElementById(msg).style.display = "none";
          document.getElementById(btn).removeAttribute('disabled');
          return false;
      }
      return true;
  }

</script>
