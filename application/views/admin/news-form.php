<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-selection__choice__display{
    color:black !important;      
    }
</style>
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark text-lg"><?=isset($data)?'<i class="fa fa-edit"></i>&nbsp;&nbsp;Edit':'<i class="fa fa-plus"></i>&nbsp;&nbsp;Add'?> News</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="<?=base_url('Admin/News')?>">News</a></li>
                    <li class="breadcrumb-item active"><?=isset($data)?'Edit':'Add'?> News</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">

        <div class="row mt-2">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form role="form" method="post" class="row" action="<?=$submit?>" enctype="multipart/form-data">
                        <div class="form-group col-sm-6">
                            <label for="img" class="m-0">Choose image for News: <?=isset($data)?'':'*'?></label>
                            <?=isset($data)?'<p class="m-0 text-muted">( Choose only if you want to change the current image )</p>':''?>
                            <p class="text-sm text-muted mt-0 mb-2">( Max image size : 300kb )</p>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp" onchange="checkPhoto(this,'photoLabel', 'Btn')" <?=isset($data)?'':' required'?>>
                                <label class="custom-file-label" for="img">Choose file</label>
                            </div>
                            <div class="alert alert-danger py-1 px-2 text-sm" id="photoLabel" style="display:none;"></div>
                        </div>

                        
                        <div class="form-group col-sm-6">
                            <p class="text-sm text-muted mt-0 mb-2">&nbsp;</p>
                            <label for="head" class="m-0">Date: *</label>
                            <input type="date" class="form-control m-0" name="date" value="<?= isset($data) ? date('Y-m-d',strtotime($data->date)) : date('Y-m-d') ?>" required>
                        </div>

                        <div class="form-group col-sm-12 mt-1">
                            <input type="checkbox" class="form-controls m-0 mr-1" id="featured" name="featured" value="1" <?= isset($data) && $data->featured ? 'checked' : '' ?>>
                            <label for="featured" class="m-0"> Featured news </label>
                        </div>

                        <div class="form-group col-md-12 mt-4">
                            <label for="head" class="m-0">Heading: *</label>
                            <p class="text-sm text-muted mb-1">(Max. 150 Characters)</p>
                            <input type="text" class="form-control m-0" name="head" maxlength="150" id="head" value="<?=isset($data)?$data->head:''?>" required>
                        </div>

                        <div class="form-group col-md-12 mt-4">
                            <label for="content" class="m-0">Content: *</label>
                            <textarea name="content" id="main" rows="10" class="form-controld m-0"><?=isset($data)?$data->content:''?></textarea>
                        </div>

                        <div class="form-group col-md-6 mt-4">
                            <label for="content" class="m-0">Tags: *</label>
                            <select name="tags[]" id="tags" class="form-control" multiple required>
                                <?php if(isset($data) && $data->tags){
                                    $tags=explode('|',$data->tags);
                                    foreach($tags as $t){?>
                                    <option value="<?=$t?>" selected><?=$t?></option>
                                <?php } }?>
                            
                            </select>
                        </div>

                        <div class="col-md-6"></div>

                        <button type="button" onclick="window.history.back();" class="btn btn-default mt-3">Cancel</button>
                        <button type="submit" class="btn btn-primary mt-3" id="Btn"><?=isset($data)?'<i class="fa fa-recycle"> </i> Update':'+ Add'?></button>
                    </form>
                </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<!-- Summernote Rich text editor -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // Name of the file appearing on selecting image
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $(document).ready(function() {
        $('#main').summernote({
            height:300
        });
    });

    $('#tags').select2({
        tags:true
    });

</script>
