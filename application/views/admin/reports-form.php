<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark text-lg"><?= isset($data) ? '<i class="fa fa-edit"></i>&nbsp;&nbsp;Edit' : '<i class="fa fa-plus"></i>&nbsp;&nbsp;Add' ?> Reports</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('Admin/Reports') ?>">Reports</a></li>
                        <li class="breadcrumb-item active"><?= isset($data) ? 'Edit' : 'Add' ?> Report</li>
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
                            <form role="form" method="post" class="row" action="<?= $submit ?>" enctype="multipart/form-data">
                                <div class="form-group col-sm-6">
                                    <label for="pdf" class="m-0">Upload PDF for report: <?= isset($data) ? '' : '*' ?></label>
                                    <?= isset($data) ? '<p class="m-0 text-muted">( Choose only if you want to change the current PDF )</p>' : '' ?>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="pdf" name="pdf" accept=".pdf" <?= isset($data) ? '' : ' required' ?>>
                                        <label class="custom-file-label" for="pdf">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="img" class="m-0">Upload thumbnail image: (optional)</label>
                                    <?= isset($data) ? '<p class="m-0 text-muted">( Choose only if you want to change the current image )</p>' : '' ?>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="img" name="img" accept=".jpg, .jpeg, .png, .bmp, .webp">
                                        <label class="custom-file-label" for="img">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 mt-4">
                                    <label for="head" class="m-0">Heading: *</label>
                                    <input type="text" class="form-control m-0" name="head" maxlength="150" id="head" value="<?= isset($data) ? $data->head : '' ?>" required>
                                </div>

                                <div class="form-group col-md-6 mt-4">
                                    <label for="section" class="m-0">Show on section: *</label>
                                    <select name="section" id="tags" class="form-control" required>
                                        <option value="">-- Select a section --</option>
                                        <option value="financials" <?=isset($data) && $data->section=="financials" ? 'selected' : null ?>>Financials</option>
                                        <option value="annual_reports" <?=isset($data) && $data->section=="annual_reports" ? 'selected' : null ?>>Annual Reports</option>
                                        <option value="corporate_governance" <?=isset($data) && $data->section=="corporate_governance" ? 'selected' : null ?>>Corporate Governance</option>
                                        <option value="shareholding_pattern" <?=isset($data) && $data->section=="shareholding_pattern" ? 'selected' : null ?>>Shareholding Pattern</option>
                                        <option value="quarterly_result" <?=isset($data) && $data->section=="quarterly_result" ? 'selected' : null ?>>Quarterly Results</option>
                                        <option value="related_party_disclosure" <?=isset($data) && $data->section=="related_party_disclosure" ? 'selected' : null ?>>Related Party Disclosure</option>
                                        <option value="policies" <?=isset($data) && $data->section=="policies" ? 'selected' : null ?>>Policies</option>
                                        <option value="annual_return" <?=isset($data) && $data->section=="annual_return" ? 'selected' : null ?>>Annual Return</option>
                                        <option value="disclosure_of_txn" <?=isset($data) && $data->section=="disclosure_of_txn" ? 'selected' : null ?>>Disclosure of related party txn</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6 mt-4">
                                    <label for="descr" class="m-0">Short description: (optional)</label>
                                    <textarea name="descr" rows="3" class="form-control m-0"><?= isset($data) ? $data->descr : null ?></textarea>
                                </div>
                                <div class="form-group col-md-6 mt-5">
                                    <input type="checkbox" class="form-controls m-0 mr-1" id="featured" name="featured" value="1" <?= isset($data) && $data->featured ? 'checked' : '' ?>>
                                    <label for="featured" class="m-0"> Featured report </label>
                                </div>

                                <button type="button" onclick="window.history.back();" class="btn btn-default mt-3">Cancel</button>
                                <button type="submit" class="btn btn-primary mt-3" id="Btn"><?= isset($data) ? '<i class="fa fa-recycle"> </i> Update' : '+ Add' ?></button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
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
        if (target.files[0].size > 360000) {
            document.getElementById(msg).innerHTML = "Image size cannot be more than 300kb !";
            document.getElementById(msg).style.display = "inline-block";
            document.getElementById(btn).setAttribute('disabled', 'true');
            return false;
        }
        if (target.files[0].size < 360000) {
            document.getElementById(msg).innerHTML = "";
            document.getElementById(msg).style.display = "none";
            document.getElementById(btn).removeAttribute('disabled');
            return false;
        }
        return true;
    }
</script>