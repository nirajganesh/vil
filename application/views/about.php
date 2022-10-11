
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center" style="background: url('<?=base_url('assets/')?>images/header_about.jpg') no-repeat left center; background-size: cover;">
                <h2 class="title"> About Us </h2>
                <p class="description light"> Vaswani Group of Industries, one of the most reputed group of Chhattisgarh has been able to grow and 
                    <br> create a mark in Central India's largest manufacturiong unit. </p>
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="<?=base_url()?>"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> <a href="#"> About </a> </span>
                </div>
            </div>

            <div class="container">

                <div class="row about-sidebar">

                    <div class="col-md-9 about-content">

                    <?php if($value==1){?>
<section class="about-company content-sec" id="about-sec" >

  <div class="com">
    <h2 class="company-title color-title"> THE COMPANY </h2>
    <?=$about->content?>
  </div>
</section>

<section class="about-employees content-sec" id="mission-sec" style="display: none;">
  <h2 class="company-title color-title"> OUR VISION & MISSION</h2>
  <br><br><br><br>
  <div class="row employees">
    <div class="col-sm-6 text-left">
        <a href="#" class="hover-effect"> <img src="<?=base_url('assets/')?>images/news1.jpg"> </a>
    </div>
    <div class="col-sm-6">
        <h4 class="subtitle">OUR MISSION</h4>
        <p>
           Vaswani Industrial Limited strives to improve the industrial foundation of India through the effective use of staff and materials.
           <br>
           Our goal is to provide the highest quality goods to our customers while implementing environment-friendly practices that meet the most elevated global standards of environmental control policies.
           <br>
           We trust that profoundly talented and motivated employees are the way to accomplishing our goals and we will keep on providing outstanding training and investment in their future.
        </p>
    </div>
  </div>
  <br><br><br>
 <div class="row employees">
    <div class="col-sm-6">
        <h4 class="subtitle">OUR VISION</h4>
        <p>To be the most reputable and trustworthy distributor in India's steel, billet, iron, and sponge iron industries, providing service standards that will set the benchmark for the industry.</p>
    </div>
    <div class="col-sm-6 text-right">
        <a href="#" class="hover-effect">
            <img src="<?=base_url('assets/')?>images/emp.jpg">
        </a>
    </div>
   </div>
  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="message-sec" style="display: none;">
  <div class="com">
    <h2 class="company-title color-title"> CHAIRMAN'S MESSAGE</h2>
    <?=$msg->content?>
  </div>
</section>

                <section class="about-leaders content-sec" id="directors-sec" style="display: none;">

  <h2 class="company-title color-title"> BOARD OF DIRECTORS</h2>
  <div class="spacer-60"></div>
  <div class="row leaders text-center">
   <?php $z=0; foreach ($directors as $d){
    if($z>0 && $z%3 == 0){?>
    <div class="clearfix spacer-50"></div>
    <?php } ?>
    <div class="col-sm-4">
        <div class="img-hover-effect">
            <img src="<?=base_url('assets/')?>images/<?=$d->img_src?>" alt="<?=$d->name?>">
            <div class="social-links">
                <a href="#"> <i class="fa fa-facebook"></i> </a>
                <a href="#"> <i class="fa fa-twitter"></i> </a>
                <a href="#"> <i class="fa fa-linkedin"></i> </a>
            </div>
        </div>
        <h4 class="subtitle"><?=$d->name?></h4>
        <p><?=$d->designation?></p>
    </div>
    <?php $z++; }?>

  </div>

                </section>

<section class="about-employees styled-list content-sec" id="committee-sec" style="display: none;">
  <h2 class="company-title color-title"> OUR COMMITTEE</h2>
  <div class="spacer-30"> </div>
    <h3>Audit Committee</h3>
    <p>
        The Audit Committee consists of 3 Independent Directors and One Executive Director. The Committee’s composition meets with requirements of Section 177 of the Companies Act, 2013 and Regulation 18 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Audit Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. YASHWANT VASWANI - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Nomination & Remuneration Committee</h3>
    <p>
        The Nomination and Remuneration Committee consists of three Independent Directors. The Committee’s composition meets with requirements of Section 178 of the Companies Act, 2013 and Regulation 19 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Nomination and Remuneration Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Stakeholders Relationship Committee</h3>
    <p>
        The Stakeholders Relationship Committee consists of three Independent Directors. The detailed composition of the members of the Stakeholders Relationship Committee at present is given below:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>

  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="programme-sec" style="display: none;">

         <div class="com">
        <h2 class="company-title color-title"> Policy on Familiarisation Programme </h2>
        <h4 class="company-subtitle subtitle"> We are a very subtle organization and we like to create examples from our work, we are more practical than any industry providing our scope of services.   </h4>
      <p> <b>Preamble</b>   <br>
        Regulation 25(7) of the SEBI (LODR) Regulations, 2015 Inter-alia stipulates that the Company shall familiarize the Independent Directors with the Company, their roles, rights, responsibilities in the Company, nature of the industry in which the Company operates, business model of the Company, etc., through various programmes. 
        <br> <br><b>Purpose and Objective</b>  <br>
        The familiarisation programme is structured to assist the Independent Directors to understand the Company and its business so as enable him in effective discharge of his duties. 
        <br> <br><b>Overview of the Familiarisation process</b><br>
        At the time of the appointment, the Independent Directors are informed about their role and responsibilities and are given an overview of business, operations and business model of the Company including an overview on Power, Sponge Iron and Steel Industry Sector.
        Immediately after appointment Independent Director are also provided with copies of the following documents:
        <br>A) Annual Reports of the Company of the last three years;
        <br>B) Criteria of Independence applicable on Independent Directors as per the Regulation 16(b) of the SEBI (LODR) Regulations, 2015 and the Companies Act, 2013
        <br>C) Copies of code of conduct and Ethics for Board Members, Code for Prevention of Insider Trading in Vaswani Industries Limited Equity Shares/Securities and other policies.  
        <br> D) Regular Familiarisation modules Presentations on the business and performance of the Company are made at the Board Meetings to familiarize the Independent Directors with the strategy, operations and functions of the Company. The Programme aims to provide insights into the Company to enable the Independent Directors to be able to take well-informed timely decisions and contribute significantly to the Company. 
        <br>E) Independent Directors have the freedom to interact with the Company’s management during the Board/ Committee of Directors meetings or otherwise.
        <br>
        <br><b>Board Members are provided with following Information:</b>
        <br>A) Each director of the Company has complete access to any information relating to the Company. 
        <br>B) The Board members are provided with internal policies to enable them to familiarize with the Company’s procedures and practices.
        <br>C) Board Members are promptly updated on any change and new development with regard to relevant regulatory requirement such as SEBI regulations, Companies Act etc. 
        <br>D) Familiarisation programmes are also proposed to be conducted on need basis during the term of the directors.
        <br>E) The Board members are also made aware about the compliances applicable on the Company by way of quarterly compliances report.
        <br>F) Need Based training is provided to the Board Members on various matters. The Board Members based on their requirement attend various seminars, conferences, training programmes from time to time.
        <br>G) The Board members are also encouraged to advise the Company to adopt further programmes for their familiarization with the Company. 
        <br><br><b>Disclosure of the Policy:</b><br>
        This policy shall be uploaded on the Company’s website for public information.
        <br><br><b>Review of the Program:</b><br>
        The Board will review this program and make revisions as may be required.
        During the Financial Year 2021-2022, VIL has organized a programme for the Independent Directors on March 11.03.2022
        
      </p>
    <table>
        <tr>
            <td>Details of Familiarisation
                Programmes imparted to
                Independent Directors Number of
                programmes attended by
                Independent Directors (during
                the year and on a cumulative
                basis till date)
            </td>
            <td>
               Various areas including Overview of 
               Business Activities & Financial Status 
               of the Company, Power & Steel Sector Scenario 
               and Role & Responsibilities of Board & Independent 
               Directors as per Companies Act, 2013 and SEBI (LODR) 
               Regulations, 2015.
            </td>
        </tr>
        <tr>
            <td>
               Number of programmes attended by 
               Independent Directors (during the year
               and on a cumulative basis till date)
            </td>
            <td>
               During the Year only one programme attended
               by the Independent director
            </td>
        </tr>
        <tr>
            <td>
               Number of hours spent by
               Independent Directors in such
               programmes (during the year and
               on cumulative basis till date)
            </td>
            <td>
               Around 2 hours 30 minutes
            </td>
        </tr>
        <tr>
            <td>
               Purpose of Programme
            </td>
            <td>
               Project Expansion 
            </td>
        </tr>
    </table> 

   </div>
</section>

            <?php }?>     
                      

            <?php if($value==2){?>
<section class="about-company content-sec" id="about-sec" style="display: none;">

  <div class="com">
    <h2 class="company-title color-title"> THE COMPANY </h2>
    <?=$about->content?>
  </div>
</section>

<section class="about-employees content-sec" id="mission-sec" >
  <h2 class="company-title color-title"> OUR VISION & MISSION</h2>
  <br><br><br><br>
  <div class="row employees">
    <div class="col-sm-6 text-left">
        <a href="#" class="hover-effect"> <img src="<?=base_url('assets/')?>images/news1.jpg"> </a>
    </div>
    <div class="col-sm-6">
        <h4 class="subtitle">OUR MISSION</h4>
        <p>
           Vaswani Industrial Limited strives to improve the industrial foundation of India through the effective use of staff and materials.
           <br>
           Our goal is to provide the highest quality goods to our customers while implementing environment-friendly practices that meet the most elevated global standards of environmental control policies.
           <br>
           We trust that profoundly talented and motivated employees are the way to accomplishing our goals and we will keep on providing outstanding training and investment in their future.
        </p>
    </div>
  </div>
  <br><br><br>
 <div class="row employees">
    <div class="col-sm-6">
        <h4 class="subtitle">OUR VISION</h4>
        <p>To be the most reputable and trustworthy distributor in India's steel, billet, iron, and sponge iron industries, providing service standards that will set the benchmark for the industry.</p>
    </div>
    <div class="col-sm-6 text-right">
        <a href="#" class="hover-effect">
            <img src="<?=base_url('assets/')?>images/emp.jpg">
        </a>
    </div>
   </div>
  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="message-sec" style="display: none;">
  <div class="com">
    <h2 class="company-title color-title"> CHAIRMAN'S MESSAGE</h2>
    <?=$msg->content?>
  </div>
</section>

<section class="about-leaders content-sec" id="directors-sec" style="display: none;">

  <h2 class="company-title color-title"> BOARD OF DIRECTORS</h2>
  <div class="spacer-60"></div>
  <div class="row leaders text-center">
   <?php $z=0; foreach ($directors as $d){
    if($z>0 && $z%3 == 0){?>
    <div class="clearfix spacer-50"></div>
    <?php } ?>
    <div class="col-sm-4">
        <div class="img-hover-effect">
            <img src="<?=base_url('assets/')?>images/<?=$d->img_src?>" alt="<?=$d->name?>">
            <div class="social-links">
                <a href="#"> <i class="fa fa-facebook"></i> </a>
                <a href="#"> <i class="fa fa-twitter"></i> </a>
                <a href="#"> <i class="fa fa-linkedin"></i> </a>
            </div>
        </div>
        <h4 class="subtitle"><?=$d->name?></h4>
        <p><?=$d->designation?></p>
    </div>
    <?php $z++; }?>

  </div>

</section>

<section class="about-employees styled-list content-sec" id="committee-sec" style="display: none;">
  <h2 class="company-title color-title"> OUR COMMITTEE</h2>
  <div class="spacer-30"> </div>
    <h3>Audit Committee</h3>
    <p>
        The Audit Committee consists of 3 Independent Directors and One Executive Director. The Committee’s composition meets with requirements of Section 177 of the Companies Act, 2013 and Regulation 18 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Audit Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. YASHWANT VASWANI - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Nomination & Remuneration Committee</h3>
    <p>
        The Nomination and Remuneration Committee consists of three Independent Directors. The Committee’s composition meets with requirements of Section 178 of the Companies Act, 2013 and Regulation 19 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Nomination and Remuneration Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Stakeholders Relationship Committee</h3>
    <p>
        The Stakeholders Relationship Committee consists of three Independent Directors. The detailed composition of the members of the Stakeholders Relationship Committee at present is given below:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>

  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="programme-sec" style="display: none;">

         <div class="com">
        <h2 class="company-title color-title"> Policy on Familiarisation Programme </h2>
        <h4 class="company-subtitle subtitle"> We are a very subtle organization and we like to create examples from our work, we are more practical than any industry providing our scope of services.   </h4>
      <p> <b>Preamble</b>   <br>
        Regulation 25(7) of the SEBI (LODR) Regulations, 2015 Inter-alia stipulates that the Company shall familiarize the Independent Directors with the Company, their roles, rights, responsibilities in the Company, nature of the industry in which the Company operates, business model of the Company, etc., through various programmes. 
        <br> <br><b>Purpose and Objective</b>  <br>
        The familiarisation programme is structured to assist the Independent Directors to understand the Company and its business so as enable him in effective discharge of his duties. 
        <br> <br><b>Overview of the Familiarisation process</b><br>
        At the time of the appointment, the Independent Directors are informed about their role and responsibilities and are given an overview of business, operations and business model of the Company including an overview on Power, Sponge Iron and Steel Industry Sector.
        Immediately after appointment Independent Director are also provided with copies of the following documents:
        <br>A) Annual Reports of the Company of the last three years;
        <br>B) Criteria of Independence applicable on Independent Directors as per the Regulation 16(b) of the SEBI (LODR) Regulations, 2015 and the Companies Act, 2013
        <br>C) Copies of code of conduct and Ethics for Board Members, Code for Prevention of Insider Trading in Vaswani Industries Limited Equity Shares/Securities and other policies.  
        <br> D) Regular Familiarisation modules Presentations on the business and performance of the Company are made at the Board Meetings to familiarize the Independent Directors with the strategy, operations and functions of the Company. The Programme aims to provide insights into the Company to enable the Independent Directors to be able to take well-informed timely decisions and contribute significantly to the Company. 
        <br>E) Independent Directors have the freedom to interact with the Company’s management during the Board/ Committee of Directors meetings or otherwise.
        <br>
        <br><b>Board Members are provided with following Information:</b>
        <br>A) Each director of the Company has complete access to any information relating to the Company. 
        <br>B) The Board members are provided with internal policies to enable them to familiarize with the Company’s procedures and practices.
        <br>C) Board Members are promptly updated on any change and new development with regard to relevant regulatory requirement such as SEBI regulations, Companies Act etc. 
        <br>D) Familiarisation programmes are also proposed to be conducted on need basis during the term of the directors.
        <br>E) The Board members are also made aware about the compliances applicable on the Company by way of quarterly compliances report.
        <br>F) Need Based training is provided to the Board Members on various matters. The Board Members based on their requirement attend various seminars, conferences, training programmes from time to time.
        <br>G) The Board members are also encouraged to advise the Company to adopt further programmes for their familiarization with the Company. 
        <br><br><b>Disclosure of the Policy:</b><br>
        This policy shall be uploaded on the Company’s website for public information.
        <br><br><b>Review of the Program:</b><br>
        The Board will review this program and make revisions as may be required.
        During the Financial Year 2021-2022, VIL has organized a programme for the Independent Directors on March 11.03.2022
        
      </p>
    <table>
        <tr>
            <td>Details of Familiarisation
                Programmes imparted to
                Independent Directors Number of
                programmes attended by
                Independent Directors (during
                the year and on a cumulative
                basis till date)
            </td>
            <td>
               Various areas including Overview of 
               Business Activities & Financial Status 
               of the Company, Power & Steel Sector Scenario 
               and Role & Responsibilities of Board & Independent 
               Directors as per Companies Act, 2013 and SEBI (LODR) 
               Regulations, 2015.
            </td>
        </tr>
        <tr>
            <td>
               Number of programmes attended by 
               Independent Directors (during the year
               and on a cumulative basis till date)
            </td>
            <td>
               During the Year only one programme attended
               by the Independent director
            </td>
        </tr>
        <tr>
            <td>
               Number of hours spent by
               Independent Directors in such
               programmes (during the year and
               on cumulative basis till date)
            </td>
            <td>
               Around 2 hours 30 minutes
            </td>
        </tr>
        <tr>
            <td>
               Purpose of Programme
            </td>
            <td>
               Project Expansion 
            </td>
        </tr>
    </table> 

   </div>
</section>

            <?php }?>    



            <?php if($value==3){?>
<section class="about-company content-sec" id="about-sec" style="display: none;">

  <div class="com">
    <h2 class="company-title color-title"> THE COMPANY </h2>
    <?=$about->content?>
  </div>
</section>

<section class="about-employees content-sec" id="mission-sec" style="display: none;" >
  <h2 class="company-title color-title"> OUR VISION & MISSION</h2>
  <br><br><br><br>
  <div class="row employees">
    <div class="col-sm-6 text-left">
        <a href="#" class="hover-effect"> <img src="<?=base_url('assets/')?>images/news1.jpg"> </a>
    </div>
    <div class="col-sm-6">
        <h4 class="subtitle">OUR MISSION</h4>
        <p>
           Vaswani Industrial Limited strives to improve the industrial foundation of India through the effective use of staff and materials.
           <br>
           Our goal is to provide the highest quality goods to our customers while implementing environment-friendly practices that meet the most elevated global standards of environmental control policies.
           <br>
           We trust that profoundly talented and motivated employees are the way to accomplishing our goals and we will keep on providing outstanding training and investment in their future.
        </p>
    </div>
  </div>
  <br><br><br>
 <div class="row employees">
    <div class="col-sm-6">
        <h4 class="subtitle">OUR VISION</h4>
        <p>To be the most reputable and trustworthy distributor in India's steel, billet, iron, and sponge iron industries, providing service standards that will set the benchmark for the industry.</p>
    </div>
    <div class="col-sm-6 text-right">
        <a href="#" class="hover-effect">
            <img src="<?=base_url('assets/')?>images/emp.jpg">
        </a>
    </div>
   </div>
  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="message-sec">
  <div class="com">
    <h2 class="company-title color-title"> CHAIRMAN'S MESSAGE</h2>
    <?=$msg->content?>
  </div>
</section>

<section class="about-leaders content-sec" id="directors-sec" style="display: none;">

  <h2 class="company-title color-title"> BOARD OF DIRECTORS</h2>
  <div class="spacer-60"></div>
  <div class="row leaders text-center">
   <?php $z=0; foreach ($directors as $d){
    if($z>0 && $z%3 == 0){?>
    <div class="clearfix spacer-50"></div>
    <?php } ?>
    <div class="col-sm-4">
        <div class="img-hover-effect">
            <img src="<?=base_url('assets/')?>images/<?=$d->img_src?>" alt="<?=$d->name?>">
            <div class="social-links">
                <a href="#"> <i class="fa fa-facebook"></i> </a>
                <a href="#"> <i class="fa fa-twitter"></i> </a>
                <a href="#"> <i class="fa fa-linkedin"></i> </a>
            </div>
        </div>
        <h4 class="subtitle"><?=$d->name?></h4>
        <p><?=$d->designation?></p>
    </div>
    <?php $z++; }?>

  </div>

</section>

<section class="about-employees styled-list content-sec" id="committee-sec" style="display: none;">
  <h2 class="company-title color-title"> OUR COMMITTEE</h2>
  <div class="spacer-30"> </div>
    <h3>Audit Committee</h3>
    <p>
        The Audit Committee consists of 3 Independent Directors and One Executive Director. The Committee’s composition meets with requirements of Section 177 of the Companies Act, 2013 and Regulation 18 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Audit Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. YASHWANT VASWANI - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Nomination & Remuneration Committee</h3>
    <p>
        The Nomination and Remuneration Committee consists of three Independent Directors. The Committee’s composition meets with requirements of Section 178 of the Companies Act, 2013 and Regulation 19 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Nomination and Remuneration Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Stakeholders Relationship Committee</h3>
    <p>
        The Stakeholders Relationship Committee consists of three Independent Directors. The detailed composition of the members of the Stakeholders Relationship Committee at present is given below:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>

  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="programme-sec" style="display: none;">

         <div class="com">
        <h2 class="company-title color-title"> Policy on Familiarisation Programme </h2>
        <h4 class="company-subtitle subtitle"> We are a very subtle organization and we like to create examples from our work, we are more practical than any industry providing our scope of services.   </h4>
      <p> <b>Preamble</b>   <br>
        Regulation 25(7) of the SEBI (LODR) Regulations, 2015 Inter-alia stipulates that the Company shall familiarize the Independent Directors with the Company, their roles, rights, responsibilities in the Company, nature of the industry in which the Company operates, business model of the Company, etc., through various programmes. 
        <br> <br><b>Purpose and Objective</b>  <br>
        The familiarisation programme is structured to assist the Independent Directors to understand the Company and its business so as enable him in effective discharge of his duties. 
        <br> <br><b>Overview of the Familiarisation process</b><br>
        At the time of the appointment, the Independent Directors are informed about their role and responsibilities and are given an overview of business, operations and business model of the Company including an overview on Power, Sponge Iron and Steel Industry Sector.
        Immediately after appointment Independent Director are also provided with copies of the following documents:
        <br>A) Annual Reports of the Company of the last three years;
        <br>B) Criteria of Independence applicable on Independent Directors as per the Regulation 16(b) of the SEBI (LODR) Regulations, 2015 and the Companies Act, 2013
        <br>C) Copies of code of conduct and Ethics for Board Members, Code for Prevention of Insider Trading in Vaswani Industries Limited Equity Shares/Securities and other policies.  
        <br> D) Regular Familiarisation modules Presentations on the business and performance of the Company are made at the Board Meetings to familiarize the Independent Directors with the strategy, operations and functions of the Company. The Programme aims to provide insights into the Company to enable the Independent Directors to be able to take well-informed timely decisions and contribute significantly to the Company. 
        <br>E) Independent Directors have the freedom to interact with the Company’s management during the Board/ Committee of Directors meetings or otherwise.
        <br>
        <br><b>Board Members are provided with following Information:</b>
        <br>A) Each director of the Company has complete access to any information relating to the Company. 
        <br>B) The Board members are provided with internal policies to enable them to familiarize with the Company’s procedures and practices.
        <br>C) Board Members are promptly updated on any change and new development with regard to relevant regulatory requirement such as SEBI regulations, Companies Act etc. 
        <br>D) Familiarisation programmes are also proposed to be conducted on need basis during the term of the directors.
        <br>E) The Board members are also made aware about the compliances applicable on the Company by way of quarterly compliances report.
        <br>F) Need Based training is provided to the Board Members on various matters. The Board Members based on their requirement attend various seminars, conferences, training programmes from time to time.
        <br>G) The Board members are also encouraged to advise the Company to adopt further programmes for their familiarization with the Company. 
        <br><br><b>Disclosure of the Policy:</b><br>
        This policy shall be uploaded on the Company’s website for public information.
        <br><br><b>Review of the Program:</b><br>
        The Board will review this program and make revisions as may be required.
        During the Financial Year 2021-2022, VIL has organized a programme for the Independent Directors on March 11.03.2022
        
      </p>
    <table>
        <tr>
            <td>Details of Familiarisation
                Programmes imparted to
                Independent Directors Number of
                programmes attended by
                Independent Directors (during
                the year and on a cumulative
                basis till date)
            </td>
            <td>
               Various areas including Overview of 
               Business Activities & Financial Status 
               of the Company, Power & Steel Sector Scenario 
               and Role & Responsibilities of Board & Independent 
               Directors as per Companies Act, 2013 and SEBI (LODR) 
               Regulations, 2015.
            </td>
        </tr>
        <tr>
            <td>
               Number of programmes attended by 
               Independent Directors (during the year
               and on a cumulative basis till date)
            </td>
            <td>
               During the Year only one programme attended
               by the Independent director
            </td>
        </tr>
        <tr>
            <td>
               Number of hours spent by
               Independent Directors in such
               programmes (during the year and
               on cumulative basis till date)
            </td>
            <td>
               Around 2 hours 30 minutes
            </td>
        </tr>
        <tr>
            <td>
               Purpose of Programme
            </td>
            <td>
               Project Expansion 
            </td>
        </tr>
    </table> 

   </div>
</section>

            <?php }?>   


            <?php if($value==4){?>
<section class="about-company content-sec" id="about-sec" style="display: none;">

  <div class="com">
    <h2 class="company-title color-title"> THE COMPANY </h2>
    <?=$about->content?>
  </div>
</section>

<section class="about-employees content-sec" id="mission-sec" style="display: none;" >
  <h2 class="company-title color-title"> OUR VISION & MISSION</h2>
  <br><br><br><br>
  <div class="row employees">
    <div class="col-sm-6 text-left">
        <a href="#" class="hover-effect"> <img src="<?=base_url('assets/')?>images/news1.jpg"> </a>
    </div>
    <div class="col-sm-6">
        <h4 class="subtitle">OUR MISSION</h4>
        <p>
           Vaswani Industrial Limited strives to improve the industrial foundation of India through the effective use of staff and materials.
           <br>
           Our goal is to provide the highest quality goods to our customers while implementing environment-friendly practices that meet the most elevated global standards of environmental control policies.
           <br>
           We trust that profoundly talented and motivated employees are the way to accomplishing our goals and we will keep on providing outstanding training and investment in their future.
        </p>
    </div>
  </div>
  <br><br><br>
 <div class="row employees">
    <div class="col-sm-6">
        <h4 class="subtitle">OUR VISION</h4>
        <p>To be the most reputable and trustworthy distributor in India's steel, billet, iron, and sponge iron industries, providing service standards that will set the benchmark for the industry.</p>
    </div>
    <div class="col-sm-6 text-right">
        <a href="#" class="hover-effect">
            <img src="<?=base_url('assets/')?>images/emp.jpg">
        </a>
    </div>
   </div>
  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="message-sec" style="display: none;">
  <div class="com">
    <h2 class="company-title color-title"> CHAIRMAN'S MESSAGE</h2>
    <?=$msg->content?>
  </div>
</section>

<section class="about-leaders content-sec" id="directors-sec">

  <h2 class="company-title color-title"> BOARD OF DIRECTORS</h2>
  <div class="spacer-60"></div>
  <div class="row leaders text-center">
   <?php $z=0; foreach ($directors as $d){
    if($z>0 && $z%3 == 0){?>
    <div class="clearfix spacer-50"></div>
    <?php } ?>
    <div class="col-sm-4">
        <div class="img-hover-effect">
            <img src="<?=base_url('assets/')?>images/<?=$d->img_src?>" alt="<?=$d->name?>">
            <div class="social-links">
                <a href="#"> <i class="fa fa-facebook"></i> </a>
                <a href="#"> <i class="fa fa-twitter"></i> </a>
                <a href="#"> <i class="fa fa-linkedin"></i> </a>
            </div>
        </div>
        <h4 class="subtitle"><?=$d->name?></h4>
        <p><?=$d->designation?></p>
    </div>
    <?php $z++; }?>

  </div>

</section>

<section class="about-employees styled-list content-sec" id="committee-sec" style="display: none;">
  <h2 class="company-title color-title"> OUR COMMITTEE</h2>
  <div class="spacer-30"> </div>
    <h3>Audit Committee</h3>
    <p>
        The Audit Committee consists of 3 Independent Directors and One Executive Director. The Committee’s composition meets with requirements of Section 177 of the Companies Act, 2013 and Regulation 18 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Audit Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. YASHWANT VASWANI - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Nomination & Remuneration Committee</h3>
    <p>
        The Nomination and Remuneration Committee consists of three Independent Directors. The Committee’s composition meets with requirements of Section 178 of the Companies Act, 2013 and Regulation 19 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Nomination and Remuneration Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Stakeholders Relationship Committee</h3>
    <p>
        The Stakeholders Relationship Committee consists of three Independent Directors. The detailed composition of the members of the Stakeholders Relationship Committee at present is given below:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>

  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="programme-sec" style="display: none;">

         <div class="com">
        <h2 class="company-title color-title"> Policy on Familiarisation Programme </h2>
        <h4 class="company-subtitle subtitle"> We are a very subtle organization and we like to create examples from our work, we are more practical than any industry providing our scope of services.   </h4>
      <p> <b>Preamble</b>   <br>
        Regulation 25(7) of the SEBI (LODR) Regulations, 2015 Inter-alia stipulates that the Company shall familiarize the Independent Directors with the Company, their roles, rights, responsibilities in the Company, nature of the industry in which the Company operates, business model of the Company, etc., through various programmes. 
        <br> <br><b>Purpose and Objective</b>  <br>
        The familiarisation programme is structured to assist the Independent Directors to understand the Company and its business so as enable him in effective discharge of his duties. 
        <br> <br><b>Overview of the Familiarisation process</b><br>
        At the time of the appointment, the Independent Directors are informed about their role and responsibilities and are given an overview of business, operations and business model of the Company including an overview on Power, Sponge Iron and Steel Industry Sector.
        Immediately after appointment Independent Director are also provided with copies of the following documents:
        <br>A) Annual Reports of the Company of the last three years;
        <br>B) Criteria of Independence applicable on Independent Directors as per the Regulation 16(b) of the SEBI (LODR) Regulations, 2015 and the Companies Act, 2013
        <br>C) Copies of code of conduct and Ethics for Board Members, Code for Prevention of Insider Trading in Vaswani Industries Limited Equity Shares/Securities and other policies.  
        <br> D) Regular Familiarisation modules Presentations on the business and performance of the Company are made at the Board Meetings to familiarize the Independent Directors with the strategy, operations and functions of the Company. The Programme aims to provide insights into the Company to enable the Independent Directors to be able to take well-informed timely decisions and contribute significantly to the Company. 
        <br>E) Independent Directors have the freedom to interact with the Company’s management during the Board/ Committee of Directors meetings or otherwise.
        <br>
        <br><b>Board Members are provided with following Information:</b>
        <br>A) Each director of the Company has complete access to any information relating to the Company. 
        <br>B) The Board members are provided with internal policies to enable them to familiarize with the Company’s procedures and practices.
        <br>C) Board Members are promptly updated on any change and new development with regard to relevant regulatory requirement such as SEBI regulations, Companies Act etc. 
        <br>D) Familiarisation programmes are also proposed to be conducted on need basis during the term of the directors.
        <br>E) The Board members are also made aware about the compliances applicable on the Company by way of quarterly compliances report.
        <br>F) Need Based training is provided to the Board Members on various matters. The Board Members based on their requirement attend various seminars, conferences, training programmes from time to time.
        <br>G) The Board members are also encouraged to advise the Company to adopt further programmes for their familiarization with the Company. 
        <br><br><b>Disclosure of the Policy:</b><br>
        This policy shall be uploaded on the Company’s website for public information.
        <br><br><b>Review of the Program:</b><br>
        The Board will review this program and make revisions as may be required.
        During the Financial Year 2021-2022, VIL has organized a programme for the Independent Directors on March 11.03.2022
        
      </p>
    <table>
        <tr>
            <td>Details of Familiarisation
                Programmes imparted to
                Independent Directors Number of
                programmes attended by
                Independent Directors (during
                the year and on a cumulative
                basis till date)
            </td>
            <td>
               Various areas including Overview of 
               Business Activities & Financial Status 
               of the Company, Power & Steel Sector Scenario 
               and Role & Responsibilities of Board & Independent 
               Directors as per Companies Act, 2013 and SEBI (LODR) 
               Regulations, 2015.
            </td>
        </tr>
        <tr>
            <td>
               Number of programmes attended by 
               Independent Directors (during the year
               and on a cumulative basis till date)
            </td>
            <td>
               During the Year only one programme attended
               by the Independent director
            </td>
        </tr>
        <tr>
            <td>
               Number of hours spent by
               Independent Directors in such
               programmes (during the year and
               on cumulative basis till date)
            </td>
            <td>
               Around 2 hours 30 minutes
            </td>
        </tr>
        <tr>
            <td>
               Purpose of Programme
            </td>
            <td>
               Project Expansion 
            </td>
        </tr>
    </table> 

   </div>
</section>

            <?php }?>   


            <?php if($value==5){?>
<section class="about-company content-sec" id="about-sec" style="display: none;">

  <div class="com">
    <h2 class="company-title color-title"> THE COMPANY </h2>
    <?=$about->content?>
  </div>
</section>

<section class="about-employees content-sec" id="mission-sec" style="display: none;" >
  <h2 class="company-title color-title"> OUR VISION & MISSION</h2>
  <br><br><br><br>
  <div class="row employees">
    <div class="col-sm-6 text-left">
        <a href="#" class="hover-effect"> <img src="<?=base_url('assets/')?>images/news1.jpg"> </a>
    </div>
    <div class="col-sm-6">
        <h4 class="subtitle">OUR MISSION</h4>
        <p>
           Vaswani Industrial Limited strives to improve the industrial foundation of India through the effective use of staff and materials.
           <br>
           Our goal is to provide the highest quality goods to our customers while implementing environment-friendly practices that meet the most elevated global standards of environmental control policies.
           <br>
           We trust that profoundly talented and motivated employees are the way to accomplishing our goals and we will keep on providing outstanding training and investment in their future.
        </p>
    </div>
  </div>
  <br><br><br>
 <div class="row employees">
    <div class="col-sm-6">
        <h4 class="subtitle">OUR VISION</h4>
        <p>To be the most reputable and trustworthy distributor in India's steel, billet, iron, and sponge iron industries, providing service standards that will set the benchmark for the industry.</p>
    </div>
    <div class="col-sm-6 text-right">
        <a href="#" class="hover-effect">
            <img src="<?=base_url('assets/')?>images/emp.jpg">
        </a>
    </div>
   </div>
  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="message-sec" style="display: none;">
  <div class="com">
    <h2 class="company-title color-title"> CHAIRMAN'S MESSAGE</h2>
    <?=$msg->content?>
  </div>
</section>

<section class="about-leaders content-sec" id="directors-sec" style="display: none;">

  <h2 class="company-title color-title"> BOARD OF DIRECTORS</h2>
  <div class="spacer-60"></div>
  <div class="row leaders text-center">
   <?php $z=0; foreach ($directors as $d){
    if($z>0 && $z%3 == 0){?>
    <div class="clearfix spacer-50"></div>
    <?php } ?>
    <div class="col-sm-4">
        <div class="img-hover-effect">
            <img src="<?=base_url('assets/')?>images/<?=$d->img_src?>" alt="<?=$d->name?>">
            <div class="social-links">
                <a href="#"> <i class="fa fa-facebook"></i> </a>
                <a href="#"> <i class="fa fa-twitter"></i> </a>
                <a href="#"> <i class="fa fa-linkedin"></i> </a>
            </div>
        </div>
        <h4 class="subtitle"><?=$d->name?></h4>
        <p><?=$d->designation?></p>
    </div>
    <?php $z++; }?>

  </div>

</section>

<section class="about-employees styled-list content-sec" id="committee-sec">
  <h2 class="company-title color-title"> OUR COMMITTEE</h2>
  <div class="spacer-30"> </div>
    <h3>Audit Committee</h3>
    <p>
        The Audit Committee consists of 3 Independent Directors and One Executive Director. The Committee’s composition meets with requirements of Section 177 of the Companies Act, 2013 and Regulation 18 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Audit Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. YASHWANT VASWANI - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Nomination & Remuneration Committee</h3>
    <p>
        The Nomination and Remuneration Committee consists of three Independent Directors. The Committee’s composition meets with requirements of Section 178 of the Companies Act, 2013 and Regulation 19 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Nomination and Remuneration Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Stakeholders Relationship Committee</h3>
    <p>
        The Stakeholders Relationship Committee consists of three Independent Directors. The detailed composition of the members of the Stakeholders Relationship Committee at present is given below:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>

  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="programme-sec" style="display: none;">

         <div class="com">
        <h2 class="company-title color-title"> Policy on Familiarisation Programme </h2>
        <h4 class="company-subtitle subtitle"> We are a very subtle organization and we like to create examples from our work, we are more practical than any industry providing our scope of services.   </h4>
      <p> <b>Preamble</b>   <br>
        Regulation 25(7) of the SEBI (LODR) Regulations, 2015 Inter-alia stipulates that the Company shall familiarize the Independent Directors with the Company, their roles, rights, responsibilities in the Company, nature of the industry in which the Company operates, business model of the Company, etc., through various programmes. 
        <br> <br><b>Purpose and Objective</b>  <br>
        The familiarisation programme is structured to assist the Independent Directors to understand the Company and its business so as enable him in effective discharge of his duties. 
        <br> <br><b>Overview of the Familiarisation process</b><br>
        At the time of the appointment, the Independent Directors are informed about their role and responsibilities and are given an overview of business, operations and business model of the Company including an overview on Power, Sponge Iron and Steel Industry Sector.
        Immediately after appointment Independent Director are also provided with copies of the following documents:
        <br>A) Annual Reports of the Company of the last three years;
        <br>B) Criteria of Independence applicable on Independent Directors as per the Regulation 16(b) of the SEBI (LODR) Regulations, 2015 and the Companies Act, 2013
        <br>C) Copies of code of conduct and Ethics for Board Members, Code for Prevention of Insider Trading in Vaswani Industries Limited Equity Shares/Securities and other policies.  
        <br> D) Regular Familiarisation modules Presentations on the business and performance of the Company are made at the Board Meetings to familiarize the Independent Directors with the strategy, operations and functions of the Company. The Programme aims to provide insights into the Company to enable the Independent Directors to be able to take well-informed timely decisions and contribute significantly to the Company. 
        <br>E) Independent Directors have the freedom to interact with the Company’s management during the Board/ Committee of Directors meetings or otherwise.
        <br>
        <br><b>Board Members are provided with following Information:</b>
        <br>A) Each director of the Company has complete access to any information relating to the Company. 
        <br>B) The Board members are provided with internal policies to enable them to familiarize with the Company’s procedures and practices.
        <br>C) Board Members are promptly updated on any change and new development with regard to relevant regulatory requirement such as SEBI regulations, Companies Act etc. 
        <br>D) Familiarisation programmes are also proposed to be conducted on need basis during the term of the directors.
        <br>E) The Board members are also made aware about the compliances applicable on the Company by way of quarterly compliances report.
        <br>F) Need Based training is provided to the Board Members on various matters. The Board Members based on their requirement attend various seminars, conferences, training programmes from time to time.
        <br>G) The Board members are also encouraged to advise the Company to adopt further programmes for their familiarization with the Company. 
        <br><br><b>Disclosure of the Policy:</b><br>
        This policy shall be uploaded on the Company’s website for public information.
        <br><br><b>Review of the Program:</b><br>
        The Board will review this program and make revisions as may be required.
        During the Financial Year 2021-2022, VIL has organized a programme for the Independent Directors on March 11.03.2022
        
      </p>
    <table>
        <tr>
            <td>Details of Familiarisation
                Programmes imparted to
                Independent Directors Number of
                programmes attended by
                Independent Directors (during
                the year and on a cumulative
                basis till date)
            </td>
            <td>
               Various areas including Overview of 
               Business Activities & Financial Status 
               of the Company, Power & Steel Sector Scenario 
               and Role & Responsibilities of Board & Independent 
               Directors as per Companies Act, 2013 and SEBI (LODR) 
               Regulations, 2015.
            </td>
        </tr>
        <tr>
            <td>
               Number of programmes attended by 
               Independent Directors (during the year
               and on a cumulative basis till date)
            </td>
            <td>
               During the Year only one programme attended
               by the Independent director
            </td>
        </tr>
        <tr>
            <td>
               Number of hours spent by
               Independent Directors in such
               programmes (during the year and
               on cumulative basis till date)
            </td>
            <td>
               Around 2 hours 30 minutes
            </td>
        </tr>
        <tr>
            <td>
               Purpose of Programme
            </td>
            <td>
               Project Expansion 
            </td>
        </tr>
    </table> 

   </div>
</section>

            <?php }?> 



            <?php if($value==6){?>
<section class="about-company content-sec" id="about-sec" style="display: none;">

  <div class="com">
    <h2 class="company-title color-title"> THE COMPANY </h2>
    <?=$about->content?>
  </div>
</section>

<section class="about-employees content-sec" id="mission-sec" style="display: none;" >
  <h2 class="company-title color-title"> OUR VISION & MISSION</h2>
  <br><br><br><br>
  <div class="row employees">
    <div class="col-sm-6 text-left">
        <a href="#" class="hover-effect"> <img src="<?=base_url('assets/')?>images/news1.jpg"> </a>
    </div>
    <div class="col-sm-6">
        <h4 class="subtitle">OUR MISSION</h4>
        <p>
           Vaswani Industrial Limited strives to improve the industrial foundation of India through the effective use of staff and materials.
           <br>
           Our goal is to provide the highest quality goods to our customers while implementing environment-friendly practices that meet the most elevated global standards of environmental control policies.
           <br>
           We trust that profoundly talented and motivated employees are the way to accomplishing our goals and we will keep on providing outstanding training and investment in their future.
        </p>
    </div>
  </div>
  <br><br><br>
 <div class="row employees">
    <div class="col-sm-6">
        <h4 class="subtitle">OUR VISION</h4>
        <p>To be the most reputable and trustworthy distributor in India's steel, billet, iron, and sponge iron industries, providing service standards that will set the benchmark for the industry.</p>
    </div>
    <div class="col-sm-6 text-right">
        <a href="#" class="hover-effect">
            <img src="<?=base_url('assets/')?>images/emp.jpg">
        </a>
    </div>
   </div>
  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="message-sec" style="display: none;">
  <div class="com">
    <h2 class="company-title color-title"> CHAIRMAN'S MESSAGE</h2>
    <?=$msg->content?>
  </div>
</section>

<section class="about-leaders content-sec" id="directors-sec" style="display: none;">

  <h2 class="company-title color-title"> BOARD OF DIRECTORS</h2>
  <div class="spacer-60"></div>
  <div class="row leaders text-center">
   <?php $z=0; foreach ($directors as $d){
    if($z>0 && $z%3 == 0){?>
    <div class="clearfix spacer-50"></div>
    <?php } ?>
    <div class="col-sm-4">
        <div class="img-hover-effect">
            <img src="<?=base_url('assets/')?>images/<?=$d->img_src?>" alt="<?=$d->name?>">
            <div class="social-links">
                <a href="#"> <i class="fa fa-facebook"></i> </a>
                <a href="#"> <i class="fa fa-twitter"></i> </a>
                <a href="#"> <i class="fa fa-linkedin"></i> </a>
            </div>
        </div>
        <h4 class="subtitle"><?=$d->name?></h4>
        <p><?=$d->designation?></p>
    </div>
    <?php $z++; }?>

  </div>

</section>

<section class="about-employees styled-list content-sec" id="committee-sec" style="display: none;">
  <h2 class="company-title color-title"> OUR COMMITTEE</h2>
  <div class="spacer-30"> </div>
    <h3>Audit Committee</h3>
    <p>
        The Audit Committee consists of 3 Independent Directors and One Executive Director. The Committee’s composition meets with requirements of Section 177 of the Companies Act, 2013 and Regulation 18 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Audit Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. YASHWANT VASWANI - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Nomination & Remuneration Committee</h3>
    <p>
        The Nomination and Remuneration Committee consists of three Independent Directors. The Committee’s composition meets with requirements of Section 178 of the Companies Act, 2013 and Regulation 19 of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015. The Nomination and Remuneration Committee comprises of following Directors:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>
    
    <h3>Stakeholders Relationship Committee</h3>
    <p>
        The Stakeholders Relationship Committee consists of three Independent Directors. The detailed composition of the members of the Stakeholders Relationship Committee at present is given below:
    </p>
    <ol class="list-unstyled">
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. ASHOK KUMAR SURI - Chairman </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MR. RITURAJ PESWANI - Member </strong> (Independent Director)</li>
        <li><i class="fa fa-dot-circle-o"></i><strong>MRS. SATYAWATI PARASHAR - Member </strong> (Independent Director</li>
    </ol>
    <div class="spacer-20"></div>

  <div class="spacer-80"> </div>
</section>

<section class="about-company content-sec" id="programme-sec">

         <div class="com">
        <h2 class="company-title color-title"> Policy on Familiarisation Programme </h2>
        <h4 class="company-subtitle subtitle"> We are a very subtle organization and we like to create examples from our work, we are more practical than any industry providing our scope of services.   </h4>
      <p> <b>Preamble</b>   <br>
        Regulation 25(7) of the SEBI (LODR) Regulations, 2015 Inter-alia stipulates that the Company shall familiarize the Independent Directors with the Company, their roles, rights, responsibilities in the Company, nature of the industry in which the Company operates, business model of the Company, etc., through various programmes. 
        <br> <br><b>Purpose and Objective</b>  <br>
        The familiarisation programme is structured to assist the Independent Directors to understand the Company and its business so as enable him in effective discharge of his duties. 
        <br> <br><b>Overview of the Familiarisation process</b><br>
        At the time of the appointment, the Independent Directors are informed about their role and responsibilities and are given an overview of business, operations and business model of the Company including an overview on Power, Sponge Iron and Steel Industry Sector.
        Immediately after appointment Independent Director are also provided with copies of the following documents:
        <br>A) Annual Reports of the Company of the last three years;
        <br>B) Criteria of Independence applicable on Independent Directors as per the Regulation 16(b) of the SEBI (LODR) Regulations, 2015 and the Companies Act, 2013
        <br>C) Copies of code of conduct and Ethics for Board Members, Code for Prevention of Insider Trading in Vaswani Industries Limited Equity Shares/Securities and other policies.  
        <br> D) Regular Familiarisation modules Presentations on the business and performance of the Company are made at the Board Meetings to familiarize the Independent Directors with the strategy, operations and functions of the Company. The Programme aims to provide insights into the Company to enable the Independent Directors to be able to take well-informed timely decisions and contribute significantly to the Company. 
        <br>E) Independent Directors have the freedom to interact with the Company’s management during the Board/ Committee of Directors meetings or otherwise.
        <br>
        <br><b>Board Members are provided with following Information:</b>
        <br>A) Each director of the Company has complete access to any information relating to the Company. 
        <br>B) The Board members are provided with internal policies to enable them to familiarize with the Company’s procedures and practices.
        <br>C) Board Members are promptly updated on any change and new development with regard to relevant regulatory requirement such as SEBI regulations, Companies Act etc. 
        <br>D) Familiarisation programmes are also proposed to be conducted on need basis during the term of the directors.
        <br>E) The Board members are also made aware about the compliances applicable on the Company by way of quarterly compliances report.
        <br>F) Need Based training is provided to the Board Members on various matters. The Board Members based on their requirement attend various seminars, conferences, training programmes from time to time.
        <br>G) The Board members are also encouraged to advise the Company to adopt further programmes for their familiarization with the Company. 
        <br><br><b>Disclosure of the Policy:</b><br>
        This policy shall be uploaded on the Company’s website for public information.
        <br><br><b>Review of the Program:</b><br>
        The Board will review this program and make revisions as may be required.
        During the Financial Year 2021-2022, VIL has organized a programme for the Independent Directors on March 11.03.2022
        
      </p>
    <table>
        <tr>
            <td>Details of Familiarisation
                Programmes imparted to
                Independent Directors Number of
                programmes attended by
                Independent Directors (during
                the year and on a cumulative
                basis till date)
            </td>
            <td>
               Various areas including Overview of 
               Business Activities & Financial Status 
               of the Company, Power & Steel Sector Scenario 
               and Role & Responsibilities of Board & Independent 
               Directors as per Companies Act, 2013 and SEBI (LODR) 
               Regulations, 2015.
            </td>
        </tr>
        <tr>
            <td>
               Number of programmes attended by 
               Independent Directors (during the year
               and on a cumulative basis till date)
            </td>
            <td>
               During the Year only one programme attended
               by the Independent director
            </td>
        </tr>
        <tr>
            <td>
               Number of hours spent by
               Independent Directors in such
               programmes (during the year and
               on cumulative basis till date)
            </td>
            <td>
               Around 2 hours 30 minutes
            </td>
        </tr>
        <tr>
            <td>
               Purpose of Programme
            </td>
            <td>
               Project Expansion 
            </td>
        </tr>
    </table> 

   </div>
</section>

            <?php }?> 



                        <section class="about-cta">

                            <div class="cta">
                                <h2>None can destroy iron, but its own rust can! Likewise, none can destroy a person, but its own mindset can!.</h2>
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

                                <!-- <div class="col-xs-4">
                                    <img src="<?//=base_url('assets/')?>images/globe.png" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">60000</h4>
                                        <p>MT Iron Production Capacity</p>
                                    </div>
                                </div>

                                <div class="col-xs-4">

                                    <img src="<?//=base_url('assets/')?>images/friends.png" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">59000</h4>
                                        <p>MT Billets Prodution Capacity</p>
                                    </div>
                                </div>

                                <div class="col-xs-4">

                                    <img src="<?//=base_url('assets/')?>images/fire.png" alt="" />
                                    <div class="stats-info">
                                        <h4 class="counter">10</h4>
                                        <p>MW Power Production Capicity</p>
                                    </div>
                                </div> -->
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
                            <?php if($value==1)
                            {?>
                                <li> <a data-section = "about-sec" class="side-link active" href="#"> The Company </a> </li>
                                <li> <a data-section = "mission-sec" class="side-link" href="#"> Our Vision &amp; Mission </a> </li>
                                <li> <a data-section = "message-sec" class="side-link" href="#"> Chairman's Message </a> </li>
                                <li> <a data-section = "directors-sec" class="side-link" href="#"> Board of Directors </a> </li>
                                <li> <a data-section = "committee-sec" class="side-link" href="#"> Our Committees </a> </li>
                                <li> <a data-section = "programme-sec" class="side-link" href="#"> Familiarization Programme </a> </li>
                            <?php }?>
                            <?php if($value==2)
                            {?>
                                <li> <a data-section = "about-sec" class="side-link" href="#"> The Company </a> </li>
                                <li> <a data-section = "mission-sec" class="side-link active" href="#"> Our Vision &amp; Mission </a> </li>
                                <li> <a data-section = "message-sec" class="side-link" href="#"> Chairman's Message </a> </li>
                                <li> <a data-section = "directors-sec" class="side-link" href="#"> Board of Directors </a> </li>
                                <li> <a data-section = "committee-sec" class="side-link" href="#"> Our Committees </a> </li>
                                <li> <a data-section = "programme-sec" class="side-link" href="#"> Familiarization Programme </a> </li>
                            <?php }?>
                            <?php if($value==3)
                            {?>
                                <li> <a data-section = "about-sec" class="side-link" href="#"> The Company </a> </li>
                                <li> <a data-section = "mission-sec" class="side-link" href="#"> Our Vision &amp; Mission </a> </li>
                                <li> <a data-section = "message-sec" class="side-link active" href="#"> Chairman's Message </a> </li>
                                <li> <a data-section = "directors-sec" class="side-link" href="#"> Board of Directors </a> </li>
                                <li> <a data-section = "committee-sec" class="side-link" href="#"> Our Committees </a> </li>
                                <li> <a data-section = "programme-sec" class="side-link" href="#"> Familiarization Programme </a> </li>
                            <?php }?>
                            <?php if($value==4)
                            {?>
                                <li> <a data-section = "about-sec" class="side-link" href="#"> The Company </a> </li>
                                <li> <a data-section = "mission-sec" class="side-link" href="#"> Our Vision &amp; Mission </a> </li>
                                <li> <a data-section = "message-sec" class="side-link" href="#"> Chairman's Message </a> </li>
                                <li> <a data-section = "directors-sec" class="side-link active" href="#"> Board of Directors </a> </li>
                                <li> <a data-section = "committee-sec" class="side-link" href="#"> Our Committees </a> </li>
                                <li> <a data-section = "programme-sec" class="side-link" href="#"> Familiarization Programme </a> </li>
                            <?php }?>
                            <?php if($value==5)
                            {?>
                                <li> <a data-section = "about-sec" class="side-link" href="#"> The Company </a> </li>
                                <li> <a data-section = "mission-sec" class="side-link" href="#"> Our Vision &amp; Mission </a> </li>
                                <li> <a data-section = "message-sec" class="side-link" href="#"> Chairman's Message </a> </li>
                                <li> <a data-section = "directors-sec" class="side-link" href="#"> Board of Directors </a> </li>
                                <li> <a data-section = "committee-sec" class="side-link active" href="#"> Our Committees </a> </li>
                                <li> <a data-section = "programme-sec" class="side-link" href="#"> Familiarization Programme </a> </li>
                            <?php }?>
                            <?php if($value==6)
                            {?>
                                <li> <a data-section = "about-sec" class="side-link" href="#"> The Company </a> </li>
                                <li> <a data-section = "mission-sec" class="side-link" href="#"> Our Vision &amp; Mission </a> </li>
                                <li> <a data-section = "message-sec" class="side-link" href="#"> Chairman's Message </a> </li>
                                <li> <a data-section = "directors-sec" class="side-link" href="#"> Board of Directors </a> </li>
                                <li> <a data-section = "committee-sec" class="side-link" href="#"> Our Committees </a> </li>
                                <li> <a data-section = "programme-sec" class="side-link active" href="#"> Familiarization Programme </a> </li>
                            <?php }?>

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
      
