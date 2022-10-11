
<style>
    p.page-no strong {
        padding: 5px 10px;
        margin-right: 15px;
        background-color: #ce3735;
        border: 1px solid #ce3735;
        color: white;
        font-size: 18px;
    }
    p.page-no a {
        padding: 5px 10px;
        margin-right: 15px;
        color: black;
        font-size: 18px;
        border: 1px solid #666;
        transition: 0.3s;
    }
</style>
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center" style="background: url('<?=base_url('assets/')?>images/header_news.jpg') no-repeat left center; background-size: cover;">
                <h2 class="title"> Our Blog </h2>
                <p class="description light"> Here you can find our latest blogs for Vaswani industries limited
                    <!-- <br> Phosfluorescently whiteboard fully tested initiatives. </p> -->
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="<?=base_url()?>"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> <a href="#"> NEWS AND MEDIA </a> </span>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-9 blog-grid">
                        <section class="blog-services">
                            <div class="row news">
                                <?php foreach($news as $d){
                                    $url = base_url('news/').$d->id.'/'.$d->slug;
                                ?>
                                    <div class="col-sm-6">
                                        <div class="blog-img-box">
                                            <div class="blog-date"> <span class="month"><?=date('M', strtotime($d->date))?> </span> <span class="date"> <?=date('d', strtotime($d->date))?></span> </div>
                                            <a class="hover-effect" href="<?=$url?>">
                                                <img src="<?=base_url('assets/')?>images/<?=$d->img_src?>" style="height:250px; object-fit:cover;" />
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="<?=$url?>" style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;"><?=$d->head?> </a></h3>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if(isset($pages) && $pages!=''){?>
                                    <div class="spacer-70"></div>
                                    <p class="page-no col-md-12">Go to page  : &emsp; <?php echo $pages; ?></p>
                                <?php }?>
                            </div>
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

                        <div class="sidebar-fact">

                            <h3 class="about-quick-fact">Quick Fact</h3>
                            <p>Vaswani Industries Limited is the largest producer of Sponge Iron in Central India.</p>
                            <!-- <a href="#" class="btn btn-primary about-quick-fact-button" role="button">CALL TO ACTION</a> -->

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
        