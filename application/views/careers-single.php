
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> <?=$career->position?> </h2>
            </div>
            <!-- Page Title -->

            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href=<?=base_url('')?>> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> Careers </span>
                </div>
            </div>
            <!-- Breadcrumbs -->

            <div class="container">

                <div class="row single-job">
                    <div class="col-md-9 job-info">

                        <section class="career-single-job response" style="padding-bottom:0">

                            <h3 class="job-title title-3"> JOB DESCRIPTION</h3>
                            <div class="spacer-30"></div>
                            
                            <ul>
                                <?php $descr = explode('|',$career->descr);
                                foreach($descr as $d){
                                    ?>
                                    <li style="padding-bottom:0"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?=$d?></li>
                           <?php } ?>
                                </ul>
                                <br><br><br>
                            <h3 class="job-title title-3"> APPLY NOW</h3>
                            <br><br>
                            <form id="career_form" class="form well-form col-md-10" action="<?=base_url('Home/Application')?>" method="post" enctype="multipart/form-data">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label for="">Full name</label>
                                    <input name="name" class="form-control" type="text" required title="Please enter your full name">
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input name="email" class="form-control" type="email" required title="Please enter your email address" data-msg-email="Ouch, that doesn't look like an email">
                                </div>

                                <!-- Phone Number-->
                                <div class="form-group">
                                    <label for="">Contact no.</label>
                                    <input name="phone" class="form-control" type="number" title="Please enter a valid 10 digit phone number" min="6000000000" max="9999999999" data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Upload Resume</label>
                                    <input type="file" name="file" class="form-control" title="Please upload your resume" accept=".pdf, .doc, .docx, .txt" required>
                                </div>

                                <input name="for_position" class="form-control" readonly type="hidden" required value="<?=$career->position?>">

                                <!-- Button -->
                                <button type="submit" class="btn btn-block btn-warning" id="js-contact-btn"> APPLY </button>

                                <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>

                            </form>

                        </section>


                    </div>

                    <div class="col-md-3 sidebar">
                        <div class="sidebar-fact">
                            <h3 class="about-quick-fact">Quick Fact</h3>
                            <p>Vaswani Industries Limited is the largest producer of Sponge Iron in Central India.</p>
                            <!-- <a href="#" class="btn btn-primary about-quick-fact-button" role="button">CALL TO ACTION</a> -->
                        </div>

                        <div class="sidebar-download">
                            <div class="download-file color-bg">
                                <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  Download PDF <span>1.5 MB</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        