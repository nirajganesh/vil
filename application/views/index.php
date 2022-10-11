        <main class="main">
            <section class="home-slider">
                <div class="flexslider">
                    <ul class="slides">
                        <?php foreach($banner as $d){?>
                            <li class="has-overlay">
                                <img src="<?=base_url('assets/')?>images/<?=$d->img_src?>" alt="Slider" />
                                <div class="slider-content">
                                    <div class="container">
                                        <h2> <?=$d->heading?></h2>
                                        <p> <?=$d->descr?> </p>
                                        <a href="<?=$d->cta_link?>" class="btn primary-btn"> <?=$d->cta_text?> <i class="fa fa-angle-right"></i> </a>
                                    </div>
                                </div>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </section>
            <!--<section class="home-stats">-->
            <!--    <div class="container">-->
            <!--        <div class="row stats">-->
            <!--            <div class="col-md-3 col-xs-6">-->
            <!--                <img src="<?=base_url('assets/')?>images/globe.png" alt="" />-->
            <!--                <div class="stats-info">-->
            <!--                    <h4 class="counter">26</h4>-->
            <!--                    <p>Offices Worldwide</p>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="col-md-3 col-xs-6">-->
            <!--                <img src="<?=base_url('assets/')?>images/friends.png" alt="" />-->
            <!--                <div class="stats-info">-->
            <!--                    <h4 class="counter">10000</h4>-->
            <!--                    <p>Satisfied Employees</p>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="col-md-3 col-xs-6">-->
            <!--                <img src="<?=base_url('assets/')?>images/fire.png" alt="" />-->
            <!--                <div class="stats-info">-->
            <!--                    <h4 class="counter">126</h4>-->
            <!--                    <p>Refineries &amp; Operations</p>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="col-md-3 col-xs-6">-->
            <!--                <img src="<?=base_url('assets/')?>images/badge.png" alt="" />-->
            <!--                <div class="stats-info">-->
            <!--                    <h4 class="counter">35</h4>-->
            <!--                    <p>Awards &amp; Recognitions</p>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->

            <section class="home-stats">
                <div class="container">
                    <div class="row stats">
                        <!-- 
                        <div class="col-md-3 col-xs-6">
                            <img src="<?//=base_url('assets/')?>images/globe.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">26</h4>
                                <p>Offices Worldwide</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="<?//=base_url('assets/')?>images/friends.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">10000</h4>
                                <p>Satisfied Employees</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="<?//=base_url('assets/')?>images/fire.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">126</h4>
                                <p>Refineries &amp; Operations</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="<?//=base_url('assets/')?>images/badge.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">35</h4>
                                <p>Awards &amp; Recognitions</p>
                            </div>
                        </div> -->
                        <div class="col-md-4 col-xs-6">
                            <img src="<?=base_url('assets/')?>images/globe.png" alt="" />
                            <div class="stats-info">
                                <div class="mt-production">
                                    <h4 class="counter">90000</h4>
                                        <h4 class="mt-h4">MT</h4>
                                </div>
                                <p>Production and Capacity of Sponge Iron</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <img src="<?=base_url('assets/')?>images/globe.png" alt="" />
                               <div class="stats-info">
                                    <div class="mt-production">
                                        <h4 class="counter">60000</h4>
                                        <h4 class="mt-h4">MT</h4>
                                    </div>
                                    <p>Production and Capacity of Billets </p>
                                </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <img src="<?=base_url('assets/')?>images/globe.png" alt="" />
                                <div class="stats-info">
                                    <div class="mt-production">
                                        <h4 class="counter">11.5</h4>
                                        <h4 class="mt-h4">MW</h4>
                                    </div>
                                    <p>Production and Capacity of Power</p>
                                </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="home-company">
                <div class="container">
                    <div class="row company">
                        <div class="col-md-5 col-sm-8">
                            <div class="company-details">
                                <h2 class="company-title color-title"> VASWANI INDUSTRIES LIMITED</h2>
                                <h2 class="process-title title-2"> We’re More than a <br> Industrial Company </h4>
                                    <br>
                                    <br>
                                <p><b>Vaswani Group of Industries</b>, one of the most reputed group of Chhattisgarh has been able to grow and create a mark in Central India's largest manufacturiong unit.
                                    Over the last two decades the company has continuously diversified its product portfolio to include many customized value added products. 
                                    The company firmly believes in benchmark product quality, customer centric approach, people focus, ethical business practices and good corporate citizenship.
                                    </p>
                                <p>
                                    With vibrant and dedicated employees forming the core of our Group, we have grown from strength to strength under the dynamic leadership of our promoters and directors. 
                                    Our combined experience has propelled our Group into the league of formidable steel players in Chhattisgarh.</p>
                                <a href="<?=base_url('About/2')?>" class="btn btn-primary" role="button"> READ OUR MISSION </a>
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-12">
                            <div class="company-image">
                                <!-- <div class="img-left hover-effect">
                                    <img src="<?=base_url('assets/')?>images/img-about-2.jpg" alt="Company Image" />
                                </div> -->
                                <div class="img-right hover-effect">
                                    <img src="<?=base_url('assets/')?>images/img-about-1.png" alt="Company Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-ceo">
                <div class="container">
                    <div class="row ceo">
                        <div class="col-md-6">
                            <div class="ceo-photo" style="padding: 50px 70px;">
                                <img src="<?=base_url('assets/')?>images/ceo.png" alt="CEO" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ceo-details">
                                <h2 class="ceo-title color-title"> WORD FROM CEO </h2>
                                <h4 class="ceo-subtitle subtitle"> TRUST AND RESPECT WITHIN THE ORGANISATION</h4>
                                <p> We as an Organisation strongly believe in patience, empathy and processes. 
                                    When we began this journey as a family business, the steel market was on an extreme low. But with perseverance and team work, we are able to overcome.
                                </p>
                                <p>Our goal to create a niche for the brand was achieved throughout this journey. We also believe that it is important for every individual to take responsibilities to fight their own battles and face their own struggles.</p>
                                 <!-- <h4 class="ceo-sign"> <img src="<?//=base_url('assets/')?>images/ceo-sign.png" alt="signature" /> </h4>  -->
                                <p class="ceo-name"><strong><em>- KUSHAL VASWANI, CEO</em></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-services">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="ceo-title color-title"> WHAT WE OFFER</h2>
                        <h2 class="title-services-other title-2">OUR PRODUCTS</h2>
                        <h4 class="subtitle-services-other subtitle-2">Objectively whiteboard transparent models for prospective <br/> information. Authoritatively myocardinate.</h4>
                        <div class="spacer-50"> </div>
                    </div>
                    <div class="row services">
                        <div class="col-md-4">
                            <div class="hover-effect">
                                <img src="<?=base_url('assets/')?>images/img-FORGING INGOTS.png" alt="technology-innovation" />
                            </div>
                            <h4 class="services-title-one subtitle">FORGING INGOTS &amp; BILLETS</h4>
                            <p>Our Finish Products and we had  specialization in its delivery , with wide range of section size from 100 mm x 100 mm  to  250 mm x 250 mm  and  bloom size  280 mm x 320 mm  along with BIS marked in products of IS-2830 and  IS-2831 . Our supplies are customized  as per  customer  requirements specially the lengths of Billets are done on demand.</p>
                            <a href="<?=base_url('Products/1')?>" class="btn btn-primary btn-sm" role="button">KNOW MORE</a>
                        </div>
                        <div class="col-md-4">
                            <div class="hover-effect">
                                <img src="<?=base_url('assets/')?>images/img-SPONGE-IRON.jpg" alt="our-operations" />
                            </div>
                            <h4 class="services-title-one subtitle">SPONGE IRON</h4>
                            <p>Sponge iron is also known as Direct Reduced Iron (DRI), is the product of reducing iron oxide in the form of iron ore into metallic iron, below the melting point of iron and typically in the range of 800–1200 °C Sponge iron is used in the iron and steel industry as a substitute for scrap in induction and electrical arc furnaces.Sponge iron is used in the iron and steel industry.</p>
                            <a href="<?=base_url('Products/2')?>" class="btn btn-primary btn-sm" role="button">KNOW MORE</a>
                        </div>
                        <div class="col-md-4">
                            <div class="hover-effect">
                                <img src="<?=base_url('assets/')?>images/img-POWER.jpg" alt="social-resposibility" />
                            </div>
                            <h4 class="services-title-one subtitle">POWER</h4>
                            <p>M/s Vaswani Industries Limited has installed an 11.5 MW capacity power plant in addition to the Sponge Iron and Steel Division,. We utilize flue gas, and form steam from our 03 Waste heat recovery boilers (WHRB), in the form of renewable energy from 100 TPD sponge iron kilns We utilize flue gas, and form steam from our 03 Waste heat recovery boilers (WHRB), in the form of renewable energy.</p>
                            <!-- <a href="#" class="btn btn-default btn-normal text-white">Read More</a> -->
                            <a href="<?=base_url('Products/3')?>" class="btn btn-primary btn-sm" role="button">KNOW MORE</a>
                        </div>
                        <!-- <div class="blog-btn text-center">
                            <a href="products-dtl.html" class="btn btn-primary btn-sm" role="button">KNOW MORE</a>
                        </div> -->
                    </div>
                </div>
            </section>
<!-- 
            <section class="home-links">
                <div class="container">
                    <div class="row links">
                        <div class="col-md-2">
                            <h4 class="links-title subtitle">Quick Links</h4>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">CAREERS</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">CONTACT</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">MARKET INFO</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">TECHNOLOGY</a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button">LATEST NEWS</a>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="home-process">
                <div class="container">
                    <div class="row process">
                        <div class="col-sm-6">
                            <h2 class="process-title title-2"> OUR PROCESS </h2>
                            <h4 class="process-subtitle subtitle-2"> Interactively empower diverse imperatives after prospective convergence. </h4>
                            <p> Interactively fashion functional action items after 24/365 results. Dynamically redefine world-class metrics without leading-edge markets. Progressively orchestrate enabled "outside the box" thinking via scalable quality vectors. Objectively unleash optimal core competencies. </p>
                            <a href="#" class="btn btn-primary" role="button">READ THE STORY</a>
                        </div>

                        <div class="col-sm-6">
                            <div id="skills" class="process-bar">
                                <div class="skillbar-title"> MARKET SIZE </div>
                                <div class="skillbar" data-percent="84%">
                                    <div class="skillbar-bar"> </div>
                                    <div class="skill-bar-percent">46%</div>
                                </div>

                                <div class="skillbar-title"> ENVIRONMENT RESPONSIBILITY</div>
                                <div class="skillbar" data-percent="78%">
                                    <div class="skillbar-bar"> </div>
                                    <div class="skill-bar-percent">78%</div>
                                </div>

                                <div class="skillbar-title"> WASTE RECYCLE</div>
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-bar"> </div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>

                                <div class="skillbar-title"> INNOVATION </div>
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-bar"> </div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="home-stats">
                <div class="container">
                    <div class="row stats">
                        <div class="col-md-3 col-xs-6">
                            <img src="<?=base_url('assets/')?>images/globe.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">26</h4>
                                <p>Offices Worldwide</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="<?=base_url('assets/')?>images/friends.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">10000</h4>
                                <p>Satisfied Employees</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="<?=base_url('assets/')?>images/fire.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">126</h4>
                                <p>Refineries &amp; Operations</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <img src="<?=base_url('assets/')?>images/badge.png" alt="" />
                            <div class="stats-info">
                                <h4 class="counter">35</h4>
                                <p>Awards &amp; Recognitions</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->

            <!-- <section class="home-services-other">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-services-other title-2">SERVICES</h2>
                        <h4 class="subtitle-services-other subtitle-2">Objectively whiteboard transparent models for prospective <br/> information. Authoritatively myocardinate.</h4>
                        <div class="spacer-50"> </div>
                    </div>

                    <div class="row services-other">
                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="<?=base_url('assets/')?>images/service-icon1.png" alt="SHELL CHEMICALS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">SHELL CHEMICALS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="<?=base_url('assets/')?>images/service-icon2.png" alt="COMMERCIAL FUELS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">COMMERCIAL FUELS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="<?=base_url('assets/')?>images/service-icon3.png" alt="AVIATION FUELS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">AVIATION FUELS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="clearfix spacer-70"></div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="<?=base_url('assets/')?>images/service-icon4.png" alt="LUBRICANTS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">LUBRICANTS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="<?=base_url('assets/')?>images/service-icon5.png" alt="MARINE FUELS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">MARINE FUELS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="<?=base_url('assets/')?>images/service-icon6.png" alt="LIQUIFIED PETROLIUM GAS" />
                            </div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">LIQUIFIED PETROLIUM GAS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="clearfix spacer-70"></div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="<?=base_url('assets/')?>images/service-icon7.png" alt="SHELL SULPHUR" /></div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">SHELL SULPHUR</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="<?=base_url('assets/')?>images/service-icon8.png" alt="SHELL TRADING" /></div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">SHELL TRADING</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="img-box">
                                <img src="<?=base_url('assets/')?>images/service-icon9.png" alt="SHELL FOR SUPPLIERS" /></div>
                            <div class="services-info">
                                <h4 class="services-title-one subtitle">SHELL FOR SUPPLIERS</h4>
                                <p>Lorem ipsum dolor sit amet, con tetur adipiscing elit agenean.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section> -->

            <!-- <section class="home-testimonials">

                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-testimonials color-title">CORPORATE SOCIAL RESPONSIBILITY</h2>
                        <h2 class="subtitle-testimonials title-2">It's always about the future we serve!</h2>
                        <div class="spacer-50"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>

                            <h4 class="client-name">Calvin Sims</h4>
                            <p class="designation">Marketing Head, ABC Chemicals</p>
                        </div>

                        <div class="col-md-4">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>

                            <h4 class="client-name">Bertha Gonzales</h4>
                            <p class="designation">Divisional Manager, Corpo Inc.</p>
                        </div>

                        <div class="col-md-4">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget leo ac nisi porta consectetur. Duis sit amet ligula turpis. Suspendisse eget hendrerit justo. Suspendisse elementum eleifend arcu in consequat. Nullam imperdiet, mauris a consequat pharetra, quam quam malesuada nisi, non scelerisque.</blockquote>
                            <h4 class="client-name">Brianna Hernandez</h4>
                            <p class="designation">Founder &amp; CEO, Marine Engineering</p>
                        </div>
                    </div>
                </div>

            </section> -->
            <section class="home-news">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title-blog color-title">NEWS | MEDIA | EVENTS | CSR</h2>
                        <h2 class="subtitle-blog title-2">It's always about the society we serve!</h2>
                        <div class="spacer-50"> </div>
                    </div>
                    <div class="row news">
                        <?php foreach($feat as $f) { 
                             $url = isset($f->pdf_url) ? base_url('assets/reports/').$f->pdf_url : base_url('news/').$f->id.'/'.$f->slug
                            ?>
                            <div class="col-md-3">
                                <div class="blog-img-box">
                                    <div class="blog-date"> <span class="month"><?=date('M', strtotime($f->date))?> </span> <span class="date"> <?=date('d', strtotime($f->date))?></span> </div>
                                    <a class="hover-effect" href="<?= $url?>">
                                        <img src="<?=base_url('assets/')?>images/<?= $f->img_src ? $f->img_src : 'pdf_placeholder.jpg'?>" style="height:190px; width:100%; object-fit:cover" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="<?= $url?>" style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;"> <?=$f->head?> </a> </h3>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="blog-btn text-center">
                        <a href="<?=base_url('news')?>" class="btn btn-primary" role="button">READ THE NEWS</a>
                    </div>
                </div>
            </section>
            