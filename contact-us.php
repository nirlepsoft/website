<?php include('header.php'); ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
    if (isset($_REQUEST['submit'])){

        include('PHPMailer.php');
        include ('SMTP.php');

        $mail = new PHPMailer(true);

        $message = " <p>Please find below details for inquiry</p>
                    <table>
                    <tr>
                    <td>Name:</td>
                    <td>".$_REQUEST['name']."</td>
                    </tr>
                    <tr>
                    <td>Email Address:</td>
                    <td>".$_REQUEST['email']."</td>
                    </tr>
                    <tr>
                    <td>contact no:</td>
                    <td>".$_REQUEST['phone']."</td>
                    </tr>
                    <tr>
                    <td>Skype:</td>
                    <td>".$_REQUEST['skype']."</td>
                    </tr>
                    <tr>
                    <td>subject:</td>
                    <td>".$_REQUEST['subject']."</td>
                    </tr>
                    <tr>
                    <td>Interested In:</td>
                    <td>".$_REQUEST['inquiryFor']."</td>
                    </tr>
                    <tr>
                    <td>Message:</td>
                    <td>".$_REQUEST['message']."</td>
                    </tr>
                    </table>                    
                  
";

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'sandbox.smtp.mailtrap.io;';
        $mail->SMTPAuth   = true;
        $mail->Username   = '42c381f4dca016';
        $mail->Password   = '307dfd15d309ac';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('nirlep.soft@gmail.com', 'Byte Weavers');
        $mail->addAddress('nirlep.soft@gmail.com', 'chintan patel');

        $mail->isHTML(true);
        $mail->Subject = 'Inquiry from Byte Wavers contact Form';
        $mail->Body    = $message;
        //$mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
    }

?>
		<!--contact info-->
		<div class="contact-head-sec r-bg-a pt85 pb120">
			<div class="container">
				<div class="row pt80">
					<div class="col-lg-5 vcenter">
						<div class="page-headings">
							<span class="sub-heading mb15"><i class="fas fa-headset mr5"></i> Let's Talk</span>
							<h1 class="mb15">Good talks make good projects</h1>
							<p>We would be happy to hear from you, Please fill in the form below or mail us your requirements.</p>
							
						</div>
					</div>
					<div class="col-lg-7 vcenter">
						<div class="row">
							<div class="col-lg-6 m-mt30">
								<div class="contact-details-block">
									<div class="ree-row-set">
										<div class="ree-icon-set dtb-icon"> <i class="fas fa-phone-alt"></i>	</div>
										<div class="ree-details-set dtb-details">
											<span>Salse Department</span>
											<a href="tel:+911234567890"> +91 1234567890 </a>
											<a href="tel:+911234567890"> +91 1234567890 </a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 m-mt30">
								<div class="contact-details-block">
									<div class="ree-row-set">
										<div class="ree-icon-set dtb-icon"> <i class="fas fa-phone-alt"></i> </div>
										<div class="ree-details-set dtb-details">
											<span>HR Department</span>
											<a href="tel:+911234567890"> +91 1234567890 </a>
											<a href="tel:+911234567890"> +91 1234567890 </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt30">
							<div class="col-lg-6">
								<div class="contact-details-block">
									<div class="ree-row-set">
										<div class="ree-icon-set dtb-icon"> <i class="fas fa-envelope"></i>	</div>
										<div class="ree-details-set dtb-details">
											<span>Salse Department</span>
											<a href="mailto:salse@example.com"> salse@example.com </a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 m-mt30">
								<div class="contact-details-block">
									<div class="ree-row-set">
										<div class="ree-icon-set dtb-icon"> <i class="fas fa-envelope"></i> </div>
										<div class="ree-details-set dtb-details">
											<span>HR Department</span>
											<a href="#"> hr@example.com </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>

	<!--contact info-->
	<div class="contact-form-sec sec-pad r-bg-d">
		<div class="container">

				<div class="row flx-start">
					<div class="col-lg-6">
						<div class="sec-heading m-center">
							<span class="sub-heading mb15">INQUIRY</span>
							<h2 class="mb15"><span class="ree-text rt40">Trusted</span>  by The Thousands</h2>
							<p>We would be happy to hear from you, Please fill in the form below or mail us your requirements</p>
						</div>
<!--						<div class="trust-logo-block mt60">-->
<!--							<ul class="ree-card">-->
<!--								<li><img src="images/brand-logo/partner-logo-1.svg" alt="logo"></li>-->
<!--								<li><img src="images/brand-logo/partner-logo-2.svg" alt="logo"></li>-->
<!--								<li><img src="images/brand-logo/partner-logo-3.svg" alt="logo"></li>-->
<!--								<li><img src="images/brand-logo/partner-logo-4.svg" alt="logo"></li>-->
<!--								<li><img src="images/brand-logo/partner-logo-5.svg" alt="logo"></li>-->
<!--								<li><img src="images/brand-logo/partner-logo-6.svg" alt="logo"></li>-->
<!--																						-->
<!--							</ul>-->
<!--						</div>-->

						<div class="ree-card mt30 trust-review owl-carousel">
							<div class="items">
								<div class="review-text">
									<p>What impressed me the most was their ability to project management and guidance. It's clear that they not only have the knowledge but also the passion to deliver results that exceed expectations. They go above and beyond to ensure their clients are not just happy but delighted.</p>
								</div>
								<div class="ree-row-set mt30">
									<div class="media vcenter">
<!--										<div class="ree-icon-set img-round80"><img src="images/users/user4.jpg" alt="img" class="img-fluid"></div>-->
										<div class="ree-details-set user-info">
											<h5>Kane Williams</h5>
<!--											<p>ABC Business, <small>Jaipur, Rajasthan</small></p>-->
										</div>
									</div>
								</div>
							</div>

							<div class="items">
								<div class="review-text">
									<p>The Goodwill Choice Website and Application has exceeded all our expectations. Communication & correspondence has been great, clarifying & addressing issues was absolutely prompt with team. My experience with Byte Weavers has been great, I personally thank the development team and look forward to continuing our association in future.</p>
								</div>
								<div class="ree-row-set mt30">
									<div class="media vcenter">
<!--										<div class="ree-icon-set img-round80"><img src="images/users/user4.jpg" alt="img" class="img-fluid"></div>-->
										<div class="ree-details-set user-info">
											<h5>Suriya Chalee</h5>
<!--											<p>ABC Business, <small>Jaipur, Rajasthan</small></p>-->
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-contact-hom m-mt60">
							<div class="form-block bg-w">
								<div class="form-head"><h4>Please fill in the form below or mail us your requirements :)</h4></div>
								<div class="form-body">
									<form action="contact-us.php" method="post" name="feedback-form">
										<div class="fieldsets row">
											<div class="col-md-6"><input type="text" placeholder="Full Name" name="name" required></div>
											<div class="col-md-6"><input type="email" placeholder="Email Address" name="email" required></div>
										</div>
										<div class="fieldsets row">
											<div class="col-md-6"><input type="number" placeholder="Contact Number" name="phone" required></div>
											<div class="col-md-6"><input type="text" placeholder="Skype" name="skype" required></div>
										</div>
										<div class="fieldsets row">
											
											<div class="col-md-6"><input type="text" placeholder="Subject" name="subject" required></div>
											<div class="col-md-6"><select name="inquiryFor" required>
												<option value="">interested in</option>
												<option value="Web Design">Web Design</option>
												<option value="Graphic Design">Graphic Design</option>
												<option value="App Development">App Development</option>
												<option value="Website Development">Website Development</option>
												<option value="other">Others</option>
											</select></div>
										</div>
										<div class="fieldsets"><textarea placeholder="Message" name="message" required></textarea></div>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
											<label class="custom-control-label label-f-form" for="customCheck">I agree to the <a href="javascript:void(0)">Terms &amp; Conditions</a> of Byte Weavers.</label>
										</div>
										<div class="fieldsets mt20"> <button type="submit" name="submit" class="ree-btn  ree-btn-grdt1 w-100">Send your inquiry <i class="fas fa-arrow-right fa-btn"></i></button> </div>
										<p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>

										<div class="form-btm-set text-center mt15">
										<h5>We Deliver</h5>

										<div class="icon-setss mt20">										
											
											<div class="icon-rows">
												<div class="icon-imgg"><img src="images/icons/money.svg" alt="#"></div>
												<div class="icon-txt"><p>Best Price</p> </div>
											</div>
											<div class="icon-rows">
												<div class="icon-imgg"><img src="images/icons/quality.svg" alt="#"></div>
												<div class="icon-txt"><p>Quality Service</p> </div>
											</div>
											<div class="icon-rows">
												<div class="icon-imgg"><img src="images/icons/call-agent.svg" alt="#"></div>
												<div class="icon-txt"><p>Good Support</p> </div>
											</div>
											<div class="icon-rows">
												<div class="icon-imgg"><img src="images/icons/satisfaction.svg" alt="#"></div>
												<div class="icon-txt"><p>Satisfaction</p> </div>
											</div>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>					
				</div>
				</div>				
			</div>
			<!--contact info end-->


		<!-- start locations -->
			<section class="location-sec sec-pad">
				<div class="container">
					<div class="row">
					<div class="col-lg-12">
						<div class="sec-heading text-center">
							<span class="sub-heading mb15">Find Us</span>
							<h2>Our <span class="ree-text rt40">Office</span> Locations</h2>						
						</div>
					</div>
				</div>

					<div class="row left-content-center">
						<div class="col-lg-4">
							<div class="location-block- mt60">
								<div class="loc-icon-nam">
									<img src="images/icons/new-delhi.svg" alt="new-delhi">
									<p><span class="ree-text rt40">India</span></p>
								</div>
								<p class="pt20 pb20">Tom Extension, 1st Block 2nd Cross, Yello round circle, Jaipur, Rajasthan 123456</p>
								<div class="loc-contct">
									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Map Location"><i class="fas fa-map-marker-alt"></i></a>
									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Phone Number"><i class="fas fa-phone-alt"></i></a>
									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Email Address"><i class="fas fa-envelope"></i></a>
									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Skype Id"><i class="fab fa-skype"></i></a>
								</div>
							</div>
						</div>
<!--						<div class="col-lg-4">-->
<!--							<div class="location-block- mt60">-->
<!--								<div class="loc-icon-nam">-->
<!--									<img src="images/icons/burj-al-arab.svg" alt="burj-al-arab">-->
<!--									<p><span class="ree-text rt40">Dubai</span></p>-->
<!--								</div>-->
<!--								<p class="pt20 pb20">Tom Extension, 1st Block 2nd Cross, Yello round circle, Jaipur, Rajasthan 123456</p>-->
<!--								<div class="loc-contct">-->
<!--									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Map Location"><i class="fas fa-map-marker-alt"></i></a>-->
<!--									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Phone Number"><i class="fas fa-phone-alt"></i></a>-->
<!--									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Email Address"><i class="fas fa-envelope"></i></a>-->
<!--									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Skype Id"><i class="fab fa-skype"></i></a>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-lg-4">-->
<!--							<div class="location-block- mt60">-->
<!--								<div class="loc-icon-nam">-->
<!--									<img src="images/icons/big-ben.svg" alt="big-ben">-->
<!--									<p><span class="ree-text rt40">UK</span></p>-->
<!--								</div>-->
<!--								<p class="pt20 pb20">Tom Extension, 1st Block 2nd Cross, Yello round circle, Jaipur, Rajasthan 123456</p>-->
<!--								<div class="loc-contct">-->
<!--									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Map Location"><i class="fas fa-map-marker-alt"></i></a>-->
<!--									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Phone Number"><i class="fas fa-phone-alt"></i></a>-->
<!--									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Email Address"><i class="fas fa-envelope"></i></a>-->
<!--									<a href="javascript:void(0)" target="blank" class="btn-outline rount-btn" data-toggle="tooltip" title="Skype Id"><i class="fab fa-skype"></i></a>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
					</div>
				</div>
			</section>
		<!-- end locations -->

	<!--start footer -->
<?php include('footer.php'); ?>