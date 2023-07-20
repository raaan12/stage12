<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('css/style1.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


	</head>
	<body>
	<div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu" >
                        <ul>
                           <li ><a href="{{ route('client.index') }}">Home</a></li>
                           <li><a href="{{ route('client.clothes') }}">Clothes</a></li>
                           <li><a href="{{ route('client.accessories') }}">Accessories</a></li>
                           <li><a href="{{ route('client.aboutus') }}">About us</a></li>
                           <li><a href="{{ route('client.contact') }}">Contact</a></li>

                        </ul>
                     </div>
                  </div>
               </div>
            </div>
</div>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Just keep in touch!</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3>FEEL FREE</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<div class="row mb-4">
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>Address:</span>Route gremda km 1, SFAX</p>
							          </div>
						          </div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>Email:</span> <a href="mailto:info@yoursite.com">crochini@gmail.com</a></p>
							          </div>
						          </div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>Phone:</span>+216 97 488 952</p>
							          </div>
						          </div>
										</div>
									</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Create a message here"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
									<div class="w-100 social-media mt-5">
										<h3>Follow us here</h3>
										<p>
											<a href="https://www.facebook.com/chakroun.rania">Facebook</a>
											<a href="https://www.instagram.com/chkroun_rania/">Instagram</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(images/img.jpg);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min1.js"></script>
  <script src="js/popper1.js"></script>
  <script src="js/bootstrap.min1.js"></script>
  <script src="js/jquery.validate.min1.js"></script>
  <script src="js/main1.js"></script>

	</body>
</html>

