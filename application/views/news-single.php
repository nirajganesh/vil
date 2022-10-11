
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> <?=$news->head?> </h2>
                <!-- <p class="description light"> By <a href="#"> Eduardo Flores </a> on March 06 in Transportation. <a href="#"> 3 comments </a> </p> -->
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="index.html"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> <a href="<?=base_url('news')?>"> NEWS AND MEDIA </a> </span>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-9 blog-info">
                        <section class="blog-single" style="padding-bottom:0">
                            <div class="blog-slide">
                                <ul class="slides">
                                    <li>
                                        <img src="<?=base_url('assets/')?>images/<?=$news->img_src?>" alt="" style=" height:350px; width:100% ;object-fit:cover;"/>
                                    </li>
                                </ul>
                            </div>
                            <p>
                                <i class="fa fa-tags"></i>  Tags :
                                <?php 
                                    $tags = explode("|",$news->tags);
                                    $numItems = count($tags);
                                    $i = 0;
                                    foreach($tags as $t) {
                                        echo $t;
                                        if(++$i !== $numItems) {
                                            echo ' , ';
                                        }
                                    }  
                                ?>
                            </p>

                            <div class="single-post">
                                <h4 class="services-title-one subtitle"><?=$news->head?></h4>
                                <div class="news-descr"><?=$news->content?></div>

                                <div class="spacer-40"></div>
                                <hr>

                        </section>
                    </div>

                    <div class="col-md-3 sidebar">

                        <div class="sidebar-blog-categories">
                            <h3 class="sidebar-title">Products</h3>

                            <ul>
                                <li> <a href="<?=base_url('Products/1')?>">Forging Ingots / Billets</a> </li>
                                <li> <a href="<?=base_url('Products/2')?>">Sponge Iron</a> </li>
                                <li> <a href="<?=base_url('Products/3')?>">Power</a> </li>
                            </ul>

                        </div>

                        <div class="sidebar-download">
                            <div class="download-file color-bg">
                                <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  Download PDF <span>1.5 MB</span>
                                </a>
                            </div>

                        </div>

                        <!-- <div class="sidebar-tags">
                            <h3 class="sidebar-title"> Tags </h3>
                            <a href="#">OFFSHORE</a>
                            <a href="#">DEVELOPMENT</a>
                            <a href="#">TRANSPORTATION</a>
                            <a href="#">OIL &amp; GAS</a>
                            <a href="#">TRADING</a>
                            <a href="#">SHELL</a>
                            <a href="#">SUPPLY</a>
                            <a href="#">ENVIRONMENT</a>
                            <a href="#">CAREERS</a>

                        </div> -->

                    </div>

                </div>
            </div>

       