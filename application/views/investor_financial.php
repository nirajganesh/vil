
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center" style="background: url('<?=base_url('assets/')?>images/header_investors.jpg') no-repeat left center; background-size: cover;">
                <h2 class="title">Investors</h2>
                <p class="description light"> An overview of Vaswani Industries Limited financial performance <br>
                    and insight into share development and corporate governance.
                    <br>You can get access to reports for previous years.</p>
            </div>
            <!-- Page Title -->

            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="<?=base_url()?>"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> Investors </span>
                </div>
            </div>

            <div class="container">
                <div class="row services-sidebar">
                    <div class="col-md-9 services-content">
                        
                        <section class="services-vision content-sec" id="annual-sec">
                            <div class="chemicals">
                                <!-- <a href="#" class="hover-effect">
                                    <img src="images/services-large.jpg" alt="SHELL CHEMICALS" />
                                </a> -->
                                <h2 class="chemicals-title color-title">ANNUAL REPORTS</h2>
                                <!-- <h4 class="chemicals-subtitle subtitle"> Uniquely transform premier infrastructures before functional metrics. Completely mesh sustainable leadership for economically sound sources. </h4> -->
                                <!-- <p> Distinctively fashion standardized communities vis-a-vis seamless applications. Authoritatively recaptiualize efficient supply chains without vertical initiatives. Progressively visualize strategic relationships with error-free processes. Credibly strategize fully tested outsourcing with functional e-markets. Dynamically evisculate user friendly architectures before cross-media experiences.</p> -->
                            </div>
                            <div class="row" style="margin-top:20px;margin-left:5px;flex-wrap:wrap;">
                                    <?php foreach ($reports as $d){
                                    if($d->section == 'annual_reports'){?>
                                            <div class="col-md-3" style="padding-left:0px">
                                                <a href="<?=base_url('assets/reports/'). $d->pdf_url?>" download>
                                                    <img src="<?=base_url('assets/')?>images/<?=is_null($d->thumb) ? 'pdf_placeholder.jpg' : $d->thumb ?>" width="150" height="220" style="object-fit:cover" alt="">
                                                    <p style="margin:8px 0 5px 0"><?=$d->head?> </p>
                                                    <!-- <p style="font-size:14px"><?//=$d->descr?></p> -->
                                                </a>
                                            </div>
                                    <?php }
                                    } ?>
                            </div>
                        </section>
                    
                        <section class="services-vision content-sec" id="fin-sec" style="display: none;">
                            <div class="chemicals">
                                <h2 class="chemicals-title color-title">QUARTERLY RESULTS</h2>
                                <!-- <h4 class="chemicals-subtitle subtitle"> Uniquely transform premier infrastructures before functional metrics. Completely mesh sustainable leadership for economically sound sources. </h4>
                                <p> Distinctively fashion standardized communities vis-a-vis seamless applications. Authoritatively recaptiualize efficient supply chains without vertical initiatives. Progressively visualize strategic relationships with error-free processes. Credibly strategize fully tested outsourcing with functional e-markets. Dynamically evisculate user friendly architectures before cross-media experiences.</p> -->
                            </div>
                            <div class="row vision" style="margin-top:20px;">
                                <div class="col-sm-3">
                                    <ul>

                                    <?php $z=0; foreach ($reports as $d){
                                    if($d->section == 'quarterly_result'){
                                        if(($z>0) || $z==1){?>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <ul>
                                        <?php } ?>

                                            <li style="padding-left:0px">
                                                <a href="<?=base_url('assets/reports/'). $d->pdf_url?>" download>
                                                    <img src="<?=base_url('assets/')?>images/<?=is_null($d->thumb) ? 'pdf_placeholder.jpg' : $d->thumb ?>" width="150" height="220" style="object-fit:cover" alt="">
                                                    <p style="margin:8px 0 5px 0"><?=$d->head?> </p>
                                                    <!-- <p style="font-size:14px"><?//=$d->descr?></p> -->
                                                </a>
                                            </li>

                                    <?php $z++; }
                                    } ?>

                                    </ul>
                                </div>
                            </div>
                        </section>

                        <section class="services-vision content-sec" id="shareholding-sec" style="display: none;">
                            <div class="chemicals">
                                <!-- <a href="#" class="hover-effect">
                                    <img src="images/services-large.jpg" alt="SHELL CHEMICALS" />
                                </a> -->
                                <h2 class="chemicals-title color-title">RELATED PARTY DISCLOSURE</h2>
                                <!-- <h4 class="chemicals-subtitle subtitle"> Uniquely transform premier infrastructures before functional metrics. Completely mesh sustainable leadership for economically sound sources. </h4>
                                <p> Distinctively fashion standardized communities vis-a-vis seamless applications. Authoritatively recaptiualize efficient supply chains without vertical initiatives. Progressively visualize strategic relationships with error-free processes. Credibly strategize fully tested outsourcing with functional e-markets. Dynamically evisculate user friendly architectures before cross-media experiences.</p> -->
                            </div>
                            <div class="row vision">
                                <div class="col-sm-6">
                                    <ul>

                                    <?php $z=0; foreach ($reports as $d){
                                    if($d->section == 'related_party_disclosure'){
                                        if(($z>0) || $z==1){?>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                        <?php } ?>

                                            <li style="padding-left:0px">
                                                <a href="<?=base_url('assets/reports/'). $d->pdf_url?>" download>
                                                    <img src="<?=base_url('assets/')?>images/<?=is_null($d->thumb) ? 'pdf_placeholder.jpg' : $d->thumb ?>" width="80" height="80" style="object-fit:cover" alt="">
                                                    <p style="margin:8px 0 5px 0"><?=$d->head?> </p>
                                                    <!-- <p style="font-size:14px"><?//=$d->descr?></p> -->
                                                </a>
                                            </li>

                                    <?php $z++; }
                                    } ?>

                                    </ul>
                                </div>
                            </div>
                        </section>

                        <section class="about-cta" style="padding-top:0">

                            <div class="cta">
                                <h2>This is not about creating a giant. It’s about creating the sustainability of steel industry.</h2>

                            </div>
                            </section>

                            <section class="about-culture">
                            <div class="row culture">
                                <div class="col-sm-6 cul">
                                    <h2 class="culture-title"> OUR CULTURE </h2>
                                    <h4 class="culture-subtitle"> We believe in collaborative efforts and team work. </h4>
                                    <p> Working together with 300+ amazing members, we ensure their life has a better pupose, professional achievements and personal satisfaction.</p>
                                </div>
                                <div class="col-sm-6 culture-video">
                                    <a href="#" class="hover-effect"> <img src="<?=base_url('assets/')?>images/emp.jpg" alt="employee" /> </a>
                                </div>

                            </div>

                            </section>

                            <section class="about-stats" style="padding-bottom:0">
                                <div class="row stats stats-2">

                                <div class="col-xs-4">
                                    <img src="<?=base_url('assets/')?>images/globe.png" alt="" />
                                    <div class="stats-info">
                                        <div class="mt-production">
                                            <h4 class="counter">90000</h4>
                                            <h4 class="mt-h4">MT</h4>
                                        </div>
                                        <p>Production and Capacity of Sponge Iron</p>
                                    </div>
                                </div>

                                <div class="col-xs-4">

                                    <img src="<?=base_url('assets/')?>images/friends.png" alt="" />
                                    <div class="stats-info">
                                        <div class="mt-production">
                                            <h4 class="counter">60000</h4>
                                            <h4 class="mt-h4">MT</h4>
                                        </div>
                                        <p>Production and Capacity of Billets </p>
                                    </div>
                                </div>

                                <div class="col-xs-4">

                                    <img src="<?=base_url('assets/')?>images/fire.png" alt="" />
                                    <div class="stats-info">
                                       <div class="mt-production">
                                          <h4 class="counter">11.5</h4>
                                          <h4 class="mt-h4">MW</h4>
                                       </div>
                                        <p>Production and Capacity of Power</p>
                                    </div>
                                </div>
                                </div>
                            </section>

                            <section class="about-services">
                                <div class="row services">
                                    <div class="col-sm-6">
                                        <a href="#" class="hover-effect">
                                            <img src="<?=base_url('assets/')?>images/services-one.jpg" alt="technology-innovation" />
                                        </a>
                                        <h4 class="services-title-one subtitle">PRODUCTION &amp; CAPACITY</h4>
                                        <p>Having Production Capacity of 6000MT(Sponge Iron), 59400MT(Billets), 8MW(Power), we possess one of the largest market share in Central India</p>
                                        <a class="link" href="#">Read More</a>
                                    </div>

                                    <div class="col-sm-6">
                                        <a href="#" class="hover-effect">
                                            <img src="<?=base_url('assets/')?>images/services-two.jpg" alt="our-operations" />
                                        </a>
                                        <h4 class="services-title-one subtitle">OUR OPERATIONS</h4>
                                        <p>Energistically productize wireless mindshare for emerging experiences. Myocardinate enabled alignments and magnetic scenarios. </p>
                                        <a class="link" href="#">Read More</a>
                                    </div>
                                </div>
                            </section>


                    </div>

                    <div class="col-md-3 sidebar left">

                        <div class="sidebar-blog-categories">
                            <ul>
                                <li> <a data-section = "annual-sec" class="side-link active" href="javascript:;"> Annual Reports </a> </li>
                                <li> <a data-section = "fin-sec" class="side-link" href="javascript:;"> Quarterly Results </a> </li>
                                <li> <a data-section = "shareholding-sec" class="side-link" href="javascript:;"> Related Party Disclosure</a> </li>
                            </ul>
                        </div>

                        <div class="sidebar-download">
                            <div class="download-file color-bg">
                                <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  Download PDF <span>1.5 MB</span>
                                </a>
                            </div>

                        </div>

                        <div class="sidebar-fact">

                            <h3 class="about-quick-fact">Quick Fact</h3>
                            <p>Vaswani Industries Limited is the largest producer of Sponge Iron in Central India.</p>
                            <!-- <a href="#" class="btn btn-primary about-quick-fact-button" role="button">CALL TO ACTION</a> -->

                        </div>

                    </div>

                </div>
            </div>
      