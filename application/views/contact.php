
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center" style="background: url('<?=base_url('assets/')?>images/header_contact.jpg') no-repeat left center; background-size: cover;">
                <h2 class="title"> Contact us </h2>
                <p class="description light"> Holisticly brand sustainable solutions rather than clicks-and-mortar applications.
                    <br> Phosfluorescently whiteboard fully tested initiatives. </p>
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="<?=base_url()?>"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> Contact </span>
                </div>
            </div>
            <!-- Breadcrumbs -->

            <div class="container">
                <section class="contact">
                    <div class="row contact-centers">
                        <div class="col-md-4">
                            <div class="contact-area-box">
                                <h4 class="contact-title subtitle">Siltara, Raipur</h4>
                                <div class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p><?=$web->address?><br><?=$web->address_line1?> <br> <?=$web->address_line2?></p>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>+91 <?=$web->phone1?></p>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p style="word-wrap: break-word;"><a href="#"> <?=$web->email1?> </a> </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-area-box">
                                <h4 class="contact-title subtitle">Raipur</h4>
                                <div class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p><?=$web->address?><br><?=$web->address_line1?> <br> <?=$web->address_line2?></p>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>+91 <?=$web->phone2?></p>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p style="word-wrap: break-word;"> <a href="#"> <?=$web->email2?> </a> </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-area-box">
                                <h4 class="contact-title subtitle">Raipur</h4>
                                <div class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p><?=$web->address?><br><?=$web->address_line1?> <br> <?=$web->address_line2?></p>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>+91 <?=$web->phone3?></p>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p style="word-wrap: break-word;"> <a href="#"> <?=$web->email3?></a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact-form">
                    <div class="row form">
                        <div class="col-md-6">
                            <h2 class="title-2"> Send us a message </h2>
                            <form id="contact_form" class="form well-form" action="<?=base_url('Home/mail')?>" method="post">
                                <!-- Text input-->
                                <div class="form-group">
                                    <input name="name" placeholder="Full Name" class="form-control" type="text" required title="Please enter your full name">
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <input name="email" placeholder="Email Address" class="form-control" type="email" required title="Please enter your email address" data-msg-email="Ouch, that doesn't look like an email">
                                </div>

                                <!-- Phone Number-->
                                <div class="form-group">
                                    <input name="phone" placeholder="Phone Number" class="form-control" type="number" title="Please enter a valid 10 digit phone number" min="6000000000" max="9999999999" data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
                                </div>

                                <!-- Text area -->
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" required data-rule-minlength="10" data-msg-minlength="Please enter atleast 10 characters" title="Please enter your message"></textarea>
                                </div>
                                <!-- Button -->
                                <button type="submit" class="btn btn-block btn-warning" id="js-contact-btn"> SEND MESSAGE </button>

                                <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>

                            </form>
                        </div>

                        <div class="col-md-6 contact-map">
                            <h2 class="title-2"> View Map </h2>
                            <ul class="nav nav-pills" id="map-address">
                                <li class="active">
                                    <a href="#" data-latitude="20.83101" data-longitude="82.45822" data-map-title="India" data-map-zoom="11" data-toggle="tab">Siltara, Raipur</a>
                                </li>
                                <!-- <li>
                                    <a href="#" data-latitude="51.4845012" data-longitude="-0.0941221" data-map-title="United Kingdom" data-map-zoom="16" data-toggle="tab">United Kingdom</a>
                                </li> -->
                                <!-- <li>
                                    <a href="#" data-latitude="-37.8111937" data-longitude="144.958988" data-map-title="Australia" data-map-zoom="5" data-toggle="tab">Australia</a>
                                </li> -->
                            </ul>

                            <!-- Google Map will load programatically inside this div. 
                                You may change the Default Latitude and Longitude here. For multiple locations, change above.  -->

                            <div id="google-map" class="google-map" data-latitude="21.250000" data-longitude="81.629997" data-map-title="India" data-map-zoom="11">
                            </div>

                        </div>
                    </div>

                </section>
            </div>
       