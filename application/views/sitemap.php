<?php echo '<?xml version="1.0" encoding="UTF-8"?>';
    $mod=date('Y-m-d');  
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

        <url>
            <loc><?=base_url()?></loc>
            <lastmod><?=$mod?></lastmod>
            <priority>1.00</priority>
        </url>
        <url>
            <loc><?=base_url()?>About</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Platforms</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Media</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Careers</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Contact</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Register</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Happening</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>news</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Privacy</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Latest-news</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Upcoming</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Product-launch</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>

    <?php  if(!empty($data)){  
    foreach($data as $d){?>
        <url>
            <loc><?=base_url('news/').$d->id.'/'.$d->slug?>/</loc>
            <priority>0.80</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } }?>

    <?php if(!empty($data2)){ 
    foreach($data2 as $d2){?>
        <url>
            <loc><?=base_url('upcoming/').$d2->id.'/'.$d2->slug?>/</loc>
            <priority>0.80</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } }?>

    <?php  if(!empty($data3)){ 
    foreach($data3 as $d3){?>
        <url>
            <loc><?=base_url('product-launch/').$d3->id.'/'.$d3->slug?>/</loc>
            <priority>0.80</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php  }}?>

</urlset>


