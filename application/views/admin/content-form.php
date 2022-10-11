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
                    <h3 class="m-0 text-dark text-lg"><?=isset($data)?'<i class="fa fa-edit"></i>&nbsp;&nbsp;Edit':'<i class="fa fa-plus"></i>&nbsp;&nbsp;Add'?> <?=isset($data) ? $data->page_title : null?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a >Content</a></li>
                    <li class="breadcrumb-item active">Edit <?=$data->page_title?></li>
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
                    <form role="form" method="post" class="row" action="<?=base_url('Edit/Content/').$data->id.'/'.$data->page_uri?>" enctype="multipart/form-data">
                        <div class="form-group col-12 mt-4">
                            <label for="content" class="m-0">Content: *</label>
                            <textarea name="content" id="main" rows="10" class="form-controld m-0"><?=isset($data)?$data->content:null?></textarea>
                        </div>

                        <button type="button" onclick="window.history.back();" class="btn btn-default mt-3 mr-3">Cancel</button>
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

<script>

    $(document).ready(function() {
        $('#main').summernote({
            height:400
        });
    });

</script>
