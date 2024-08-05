<?php
    include_once('header.php');
?>

<div class="abbanner">
	<img src="images/ab_banner.jpg" class="img-responsive">
</div>


<div class="contactpg">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="contact-form">
                    <form id="" method="post" action="thankyou.php">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-field">

                                    <input placeholder="Name" id="fname" name="fname" required="" type="text">

                                </div>                              

                            </div>

                            <div class="col-md-6">

                                <div class="form-field">

                                    <input placeholder="E-Mail" id="email" name="email" required="" type="email">

                                </div>                              

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-field">

                                    <input placeholder="Phone Number" id="phone_number" name="phone_number" required="" type="text">

                                </div>                             

                            </div>

                            <div class="col-md-6">

                                <div class="form-field">

                                    <input placeholder="Subject" id="subject" name="subject" required="" type="text">

                                </div>                              

                            </div>

                        </div>                        

                        <div class="form-field">

                            <textarea placeholder="Your Message Here" rows="7" id="message" name="message" required=""></textarea>

                        </div>

                        <div class="form-button">

                            <input name="submit" value="submit" class="readon" type="submit">

                        </div>

                    </form>

                </div> 

            </div>

            <div class="col-md-5 col-sm-5">

                            <div class="sec-titled">

                    <h3>Our Contact Details</h3>

                    <!-- <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->

                </div>

                            <div class="contact-address">

                                <div class="address-item">

                                    <div class="address-icon">

                                        <i class="fa fa-phone"></i>

                                    </div>

                                    <div class="address-text">

                                        +91 98678 89118 <br> +91 70215 31817 <br>

                                        

                                    </div>

                                </div>

                                <div class="address-item">

                                    <div class="address-icon">

                                        <i class="fa fa-envelope"></i>

                                    </div>

                                    <div class="address-text">

                                          info@rkinteriordesignerandcontractor.com 

                                        

                                    </div>

                                </div>

                                <div class="address-item">

                                    <div class="address-icon">

                                        <i class="fa fa-map-marker" aria-hidden="true"></i>

                                    </div>

                                    <div class="address-text">
                                         <h4>Head Office :</h4>
                                        Prime Nest, 411,<br>

                                        Lokhandwala Complex,<br>

                                         Kandivali (East), <br>

                                         Mumbai, Maharashtra .

                                    </div>
                                   

                                </div>

                            </div>

                        </div>

        </div>
    </div>
</div>


<?php
    include_once('footer.php');
?>