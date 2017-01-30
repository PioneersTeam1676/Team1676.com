<!DOCTYPE html>

<html>

<head>

	<title>VR - Responsive vCard Template</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <link rel="stylesheet" type="text/css" href="css/page_animations.css"/>

    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>

    <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,300italic|Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body class="theme_1" style="background: url('img/bg.jpg') center 0 no-repeat;background-size: cover;background-attachment: fixed;">

	

	<!-- Wrapper -->

	<div id="wrapper">

		<div class="container">

			<!-- Row -->

			<div class="row">



				<!-- Main Menu -->

				<div class="main_menu col-md-1">

					<div class="responsive_menu_btn"><span class="fa fa-bars"></span></div>

					<div class="row">

						<ul>

							<li>

								<a href="#home" class="active home" data-id="1"><i class="fa fa-home"></i></a>

							</li>

							<li>

								<a href="#about" class="about" data-id="2"><i class="fa fa-user"></i></a>

							</li>

							<li>

								<a href="#resume" class="resume" data-id="3"><i class="fa fa-tasks"></i></a>

							</li>

							<li>

								<a href="#portfolio" class="portfolio" data-id="4"><i class="fa fa-picture-o"></i></a>

							</li>

							<li>

								<a href="#blog" class="blog" data-id="5"><i class="fa fa-list"></i></a>

							</li>

							<li>

								<a href="#contact" class="contact" data-id="6"><i class="fa fa-envelope"></i></a>

							</li>

						</ul>

					</div>

				</div>

				<!-- /Main Menu -->



				<!-- Main Content -->

				<div class="main_content col-md-10">

					<div class="content col-md-12">



						<!-- Home Page -->

						<div id="home" class="pt-page-current col-md-12">



							<!-- Slider -->

							<div class="main_slider">

								<div class="overlay">

									<div class="inner">

										<?php

										    include 'pages/slider.php';

										?>

									</div>

								</div>

							</div>

							<!-- /Slider -->



							<div class="resume_btn goto_page_btn col-md-6" data-page="resume"><i class="fa fa-list"></i>Check out my Resume</div>

							<div class="cv_download_btn col-md-6"><a href="#"><i class="fa fa-download"></i>Download my CV</a></div>

						</div>

						<!-- /Home Page -->



						<!-- About Page -->

						<div id="about" class="col-md-12">

							<h1 class="title color col-md-12"><span class="text">About Me</span></h1>



							<!-- Left Side -->

							<div class="col-md-8 alpha left_side">

								<!-- Who i am -->

								<div class="box who_i_am">

									<div class="title">

										<div class="icon"><i class="fa fa-user"></i></div>

										<div class="text">WHO I AM</div>

										<div class="clear"></div>

									</div>



									<!-- Description -->

									<div class="text">

										My name is <strong>John Doe</strong> and I'm a <strong>Web Developer,

										UI Designer and Graphic &amp; Web Designer</strong>

										located in <strong>New York City, United States</strong>.

									</div>

									<!-- /Description -->



									<!-- Personal Details -->

									<div class="personal_details">

										<div class="item title">

											<div class="icon col-md-4 col-sm-4 col-xs-12"><i class="fa fa-user"></i><span>Name</span></div>

											<div class="value col-md-8 col-sm-8 col-xs-12">John Doe</div>

											<div class="clear"></div>

										</div>

										<div class="item title">

											<div class="icon col-md-4 col-sm-4 col-xs-12"><i class="fa fa-calendar"></i><span>Birthday</span></div>

											<div class="value col-md-8 col-sm-8 col-xs-12">January 17, 1992</div>

											<div class="clear"></div>

										</div>

										<div class="item title">

											<div class="icon col-md-4 col-sm-4 col-xs-12"><i class="fa fa-map-marker"></i><span>Address</span></div>

											<div class="value col-md-8 col-sm-8 col-xs-12">New York City</div>

											<div class="clear"></div>

										</div>

										<div class="item title">

											<div class="icon col-md-4 col-sm-4 col-xs-12"><i class="fa fa-mobile"></i><span>Phone</span></div>

											<div class="value col-md-8 col-sm-8 col-xs-12">+ 123-456-7890</div>

											<div class="clear"></div>

										</div>

										<div class="item title">

											<div class="icon col-md-4 col-sm-4 col-xs-12"><i class="fa fa-envelope"></i><span>Email</span></div>

											<div class="value col-md-8 col-sm-8 col-xs-12">john@site.com</div>

											<div class="clear"></div>

										</div>

										<div class="item title">

											<div class="icon col-md-4 col-sm-4 col-xs-12"><i class="fa fa-external-link"></i><span>Website</span></div>

											<div class="value col-md-8 col-sm-8 col-xs-12"><a href="#">www.website.com</a></div>

											<div class="clear"></div>

										</div>

									</div>

									<!-- /Personal Details -->



								</div>

								<!-- /Who i am -->



								<!-- What i do -->

								<div class="box what_i_do">

									<div class="title">

										<div class="icon"><i class="fa fa-certificate"></i></div>

										<div class="text">WHAT I DO</div>

										<div class="clear"></div>

									</div>

									<div class="text">

										Lorem ipsum dolor sit amet, consectetur

										adipiscing elit. Praesent condimentum sed elit

										vitae tristique. Aliquam erat volutpat. Nunc sit

										amet cursus libero. In fringilla egestas ornare.

										Vivamus enim tortor, ultricies nec lectus eget,

										interdum elementum elit. Ut laoreet neque sit

										amet velit auctor tempus. In ac lectus felis.

									</div>

								</div>

								<!-- /What i do -->



								<!-- Tools i use -->

								<div class="box tools_i_use">

									<div class="title">

										<div class="icon"><i class="fa fa-wrench"></i></div>

										<div class="text">TOOLS I USE</div>

										<div class="clear"></div>

									</div>

									<div class="tools">

										<a href="#" class="tool btn">Photoshop</a>

										<a href="#" class="tool btn">jQuery</a>

										<a href="#" class="tool btn">Wordpress</a>

										<a href="#" class="tool btn">After Effects</a>

										<a href="#" class="tool btn">Joomla</a>

										<a href="#" class="tool btn">Bootstrap</a>

										<a href="#" class="tool btn">Drupal</a>

									</div>

								</div>

								<!-- /Tools i use -->

							</div>

							<!-- /Left Side -->



							<!-- Right Side -->

							<div class="col-md-4 omega right_side">



								<!-- About Pictures -->

								<div class="box pictures">

									<div class="pictures_inner cycle-slideshow">

									    <img src="img/about_1.jpg" class="first" alt="img" />

									    <img src="img/about_2.jpg" alt="img" />

									    <img src="img/about_3.jpg" alt="img" />

									</div>

								</div>

								<!-- /About Pictures -->



								<!-- My Services -->

								<div class="box my_services">

									<div class="title">

										<div class="icon"><i class="fa fa-wrench"></i></div>

										<div class="text">MY SERVICES</div>

										<div class="clear"></div>

									</div>

									<div class="accordion">

										<div class="item">

											<div class="item_title">

												<div class="item_btn">

													<span class="text">Web Design</span>

													<span class="arrow"><i class="fa fa-plus-circle"></i></span>

													<div class="clear"></div>

												</div>

												<div class="clear"></div>

											</div>

											<div class="item_text">

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit. Praesent condimentum sed elit

												vitae tristique. Aliquam erat volutpat. Nunc sit

												amet cursus libero. In fringilla egestas ornare.

											</div>

											<div class="clear"></div>

										</div>

										<div class="item">

											<div class="item_title">

												<div class="item_btn">

													<span class="text">Web Development</span>

													<span class="arrow"><i class="fa fa-plus-circle"></i></span>

													<div class="clear"></div>

												</div>

												<div class="clear"></div>

											</div>

											<div class="item_text">

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit. Praesent condimentum sed elit

												vitae tristique. 

												<br /><br />

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit. 

											</div>

											<div class="clear"></div>

										</div>

										<div class="item">

											<div class="item_title">

												<div class="item_btn">

													<span class="text">Graphic Design</span>

													<span class="arrow"><i class="fa fa-plus-circle"></i></span>

													<div class="clear"></div>

												</div>

												<div class="clear"></div>

											</div>

											<div class="item_text">

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit. Praesent condimentum sed elit

												vitae tristique.

											</div>

											<div class="clear"></div>

										</div>

									</div>

								</div>

								<!-- /My Services -->



								<!-- Testimonials -->

								<div class="box testimonials">

									<div class="title">

										<div class="icon"><i class="fa fa-users"></i></div>

										<div class="text">TESTIMONIALS</div>

										<div class="clear"></div>

									</div>

									<div class="testimonials_btns">

										<div class="fa fa-caret-left left_btn"></div>

										<div class="fa fa-caret-right right_btn"></div>

										<div class="clear"></div>

									</div>

									<div class="testimonials cycle-slideshow" data-cycle-slides="div.testimonial">

										<div class="testimonial current">

											<div class="text">

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit. Praesent condimentum sed elit

												vitae tristique.

											</div>

											<div class="client">

												&dash; A Client

											</div>

										</div>

										<div class="testimonial">

											<div class="text">

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit. Praesent condimentum sed elit

												vitae tristique. Aliquam erat volutpat.

											</div>

											<div class="client">

												&dash; A Client

											</div>

										</div>

										<div class="testimonial">

											<div class="text">

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit.

											</div>

											<div class="client">

												&dash; A Client

											</div>

										</div>

									</div>

								</div>

								<!-- /Testimonials -->



							</div>

							<!-- /Right Side -->



							<div class="clear"></div>



							<!-- Awards -->

							<div class="box awards">

								<div class="title">

									<div class="icon"><i class="fa fa-trophy"></i></div>

									<div class="text">MY AWARDS</div>

									<div class="clear"></div>

								</div>

								<div class="awards">

									<div class="award">

										<div class="date">2014</div>

										<div class="body">

											<div class="award_title">1rst Award &bull; Name of Institute</div>

											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.

										</div>

										<div class="clear"></div>

									</div>

									<div class="award">

										<div class="date">2013</div>

										<div class="body">

											<div class="award_title">2nd Award &bull; Name of Institute</div>

											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.

										</div>

										<div class="clear"></div>

									</div>

									<div class="award">

										<div class="date">2012</div>

										<div class="body">

											<div class="award_title">3rd Award &bull; Name of Institute</div>

											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.

										</div>

										<div class="clear"></div>

									</div>

								</div>

								<div class="clear"></div>

							</div>

							<!-- /Awards -->



							<div class="clear"></div>

						</div>

						<!-- /About Page -->



						<!-- Division -->

							<?php

								include 'pages/divisions.php';

							?>

						<!-- Division -->



						<!-- Portfolio Page -->

							<?php

								include 'pages/sponsors.php';

							?>

						<!-- /Portfolio Page -->



						<!-- Blog Page -->

						<div id="blog" class="col-md-12">

							<h1 class="title color"><span class="text">Blog</span></h1>



							<!-- Blog Posts -->

							<div class="blog_posts left_side col-md-8 alpha">

								<div class="back_to_blog btn">Back to blog</div>



								<!-- Blog Post -->

								<div class="post anim_element" data-animation="flipInX">

									<div class="media">

										<div class="btns">

											<div class="fa fa-caret-left left_btn"></div>

											<div class="fa fa-caret-right right_btn"></div>

											<div class="clear"></div>

										</div>

										<div class="media_slideshow cycle-slideshow" data-cycle-speed="1000" data-cycle-timeout="4000">

											<img src="img/blog_img1.jpg" alt="img" />

											<img src="img/blog_img2.jpg" alt="img" />

											<img src="img/blog_img5.jpg" alt="img" />

										</div>

									</div>

									<div class="post_data">

										<div class="box_title title">

											<div class="icon"><i class="fa fa-picture-o"></i></div>

											<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>

											<div class="clear"></div>

										</div>

										<div class="info">

											<div class="meta user">

												<i class="fa fa-user"></i><span><a href="#">user</a></span>

											</div>

											<div class="meta date">

												<i class="fa fa-calendar"></i><span>2 hours ago</span>

											</div>

											<div class="meta tags">

												<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>

											</div>

											<div class="meta comments">

												<i class="fa fa-comments-o"></i><span>10</span>

											</div>

										</div>

										<div class="preview_body body">

											Lorem ipsum dolor sit amet, consectetur

											adipiscing elit. Praesent condimentum sed elit

											vitae tristique. Aliquam erat volutpat. Nunc sit

											amet cursus libero. In fringilla egestas ornare.

										</div>

										<div class="hidden_body body">

											<div class="body">

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

											</div>

											<div class="about_author">

												<div class="title">About Author</div>

												<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

												<div class="text col-sm-10 col-xs-10">

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</div>

												<div class="clear"></div>

											</div>

											<div class="post_comments">

												<div class="box_title title">

													<div class="icon"><i class="fa fa-comments-o"></i></div>

													<div class="text">5 Comments</div>

													<div class="clear"></div>

												</div>

												<div class="comments">

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

												</div>

												<div class="comment_form">

													<div class="box_title title">

														<div class="icon"><i class="fa fa-comment-o"></i></div>

														<div class="text">Add a Comment</div>

														<div class="clear"></div>

													</div>

													<div class="form">

														<input type="text" name="name" class="name" value="" placeholder="Name *" />

														<input type="email" name="email" class="email" value="" placeholder="Email *" />

														<input type="text" name="website" class="website" value="" placeholder="Website" />

														<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>

														<div class="btn post_comment_btn">Post Comment</div>

														<div class="clear"></div>

													</div>

												</div>

											</div>

										</div>

										<div class="btns">

											<a href="#" class="btn read_more_btn">Read More</a>

											<div class="social_btns">

												<a href="#" class="btn fa fa-twitter"></a>

												<a href="#" class="btn fa fa-facebook"></a>

											</div>

										</div>

									</div>

									<div class="clear"></div>

								</div>

								<!-- /Blog Post -->



								<!-- Blog Post -->

								<div class="post anim_element" data-animation="flipInX">

									<div class="media video">

		                            	<iframe width="560" height="315" src="http://www.youtube.com/embed/iqrxWXx_elE?wmode=transparent" style="border:none;" allowfullscreen></iframe>

									</div>

									<div class="post_data">

										<div class="box_title title">

											<div class="icon"><i class="fa fa-film"></i></div>

											<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>

											<div class="clear"></div>

										</div>

										<div class="info">

											<div class="meta user">

												<i class="fa fa-user"></i><span><a href="#">user</a></span>

											</div>

											<div class="meta date">

												<i class="fa fa-calendar"></i><span>2 hours ago</span>

											</div>

											<div class="meta tags">

												<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>

											</div>

											<div class="meta comments">

												<i class="fa fa-comments-o"></i><span>10</span>

											</div>

										</div>

										<div class="preview_body body">

											Lorem ipsum dolor sit amet, consectetur

											adipiscing elit. Praesent condimentum sed elit

											vitae tristique. Aliquam erat volutpat. Nunc sit

											amet cursus libero. In fringilla egestas ornare.

										</div>

										<div class="hidden_body body">

											<div class="body">

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

											</div>

											<div class="about_author">

												<div class="title">About Author</div>

												<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

												<div class="text col-sm-10 col-xs-10">

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</div>

												<div class="clear"></div>

											</div>

											<div class="post_comments">

												<div class="box_title title">

													<div class="icon"><i class="fa fa-comments-o"></i></div>

													<div class="text">5 Comments</div>

													<div class="clear"></div>

												</div>

												<div class="comments">

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

												</div>

												<div class="comment_form">

													<div class="box_title title">

														<div class="icon"><i class="fa fa-comment-o"></i></div>

														<div class="text">Add a Comment</div>

														<div class="clear"></div>

													</div>

													<div class="form">

														<input type="text" name="name" class="name" value="" placeholder="Name *" />

														<input type="email" name="email" class="email" value="" placeholder="Email *" />

														<input type="text" name="website" class="website" value="" placeholder="Website" />

														<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>

														<div class="btn post_comment_btn">Post Comment</div>

														<div class="clear"></div>

													</div>

												</div>

											</div>

										</div>

										<div class="btns">

											<a href="#" class="btn read_more_btn">Read More</a>

											<div class="social_btns">

												<a href="#" class="btn fa fa-twitter"></a>

												<a href="#" class="btn fa fa-facebook"></a>

											</div>

										</div>

									</div>

									<div class="clear"></div>

								</div>

								<!-- /Blog Post -->



								<!-- Blog Post -->

								<div class="post anim_element" data-animation="flipInX">

									<div class="post_data">

										<div class="box_title title">

											<div class="icon"><i class="fa fa-pencil"></i></div>

											<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>

											<div class="clear"></div>

										</div>

										<div class="info">

											<div class="meta user">

												<i class="fa fa-user"></i><span><a href="#">user</a></span>

											</div>

											<div class="meta date">

												<i class="fa fa-calendar"></i><span>2 hours ago</span>

											</div>

											<div class="meta tags">

												<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>

											</div>

											<div class="meta comments">

												<i class="fa fa-comments-o"></i><span>10</span>

											</div>

										</div>

										<div class="preview_body body">

											<p>

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit. Praesent condimentum sed elit

												vitae tristique. Aliquam erat volutpat. Nunc sit

												amet cursus libero. In fringilla egestas ornare.

											</p>

											<p>

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit. Praesent condimentum sed elit

												vitae tristique. Aliquam erat volutpat. Nunc sit

												amet cursus libero. In fringilla egestas ornare.

											</p>

											<p>

												Lorem ipsum dolor sit amet, consectetur

												adipiscing elit. Praesent condimentum sed elit

												vitae tristique. Aliquam erat volutpat. Nunc sit

												amet cursus libero. In fringilla egestas ornare.

											</p>

										</div>

										<div class="hidden_body body">

											<div class="body">

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

											</div>

											<div class="about_author">

												<div class="title">About Author</div>

												<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

												<div class="text col-sm-10 col-xs-10">

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</div>

												<div class="clear"></div>

											</div>

											<div class="post_comments">

												<div class="box_title title">

													<div class="icon"><i class="fa fa-comments-o"></i></div>

													<div class="text">5 Comments</div>

													<div class="clear"></div>

												</div>

												<div class="comments">

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

												</div>

												<div class="comment_form">

													<div class="box_title title">

														<div class="icon"><i class="fa fa-comment-o"></i></div>

														<div class="text">Add a Comment</div>

														<div class="clear"></div>

													</div>

													<div class="form">

														<input type="text" name="name" class="name" value="" placeholder="Name *" />

														<input type="email" name="email" class="email" value="" placeholder="Email *" />

														<input type="text" name="website" class="website" value="" placeholder="Website" />

														<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>

														<div class="btn post_comment_btn">Post Comment</div>

														<div class="clear"></div>

													</div>

												</div>

											</div>

										</div>

										<div class="btns">

											<a href="#" class="btn read_more_btn">Read More</a>

											<div class="social_btns">

												<a href="#" class="btn fa fa-twitter"></a>

												<a href="#" class="btn fa fa-facebook"></a>

											</div>

										</div>

									</div>

									<div class="clear"></div>

								</div>

								<!-- /Blog Post -->



								<!-- Blog Post -->

								<div class="post anim_element" data-animation="flipInX">

									<div class="media video">

		                            	<iframe width="560" height="315" src="http://player.vimeo.com/video/83436955?title=0&amp;byline=0&amp;portrait=0&amp;color=f52a2d" style="border:none;" allowfullscreen></iframe>

									</div>

									<div class="post_data">

										<div class="box_title title">

											<div class="icon"><i class="fa fa-film"></i></div>

											<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>

											<div class="clear"></div>

										</div>

										<div class="info">

											<div class="meta user">

												<i class="fa fa-user"></i><span><a href="#">user</a></span>

											</div>

											<div class="meta date">

												<i class="fa fa-calendar"></i><span>2 hours ago</span>

											</div>

											<div class="meta tags">

												<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>

											</div>

											<div class="meta comments">

												<i class="fa fa-comments-o"></i><span>10</span>

											</div>

										</div>

										<div class="preview_body body">

											Lorem ipsum dolor sit amet, consectetur

											adipiscing elit. Praesent condimentum sed elit

											vitae tristique. Aliquam erat volutpat. Nunc sit

											amet cursus libero. In fringilla egestas ornare.

										</div>

										<div class="hidden_body body">

											<div class="body">

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

											</div>

											<div class="about_author">

												<div class="title">About Author</div>

												<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

												<div class="text col-sm-10 col-xs-10">

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</div>

												<div class="clear"></div>

											</div>

											<div class="post_comments">

												<div class="box_title title">

													<div class="icon"><i class="fa fa-comments-o"></i></div>

													<div class="text">5 Comments</div>

													<div class="clear"></div>

												</div>

												<div class="comments">

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

												</div>

												<div class="comment_form">

													<div class="box_title title">

														<div class="icon"><i class="fa fa-comment-o"></i></div>

														<div class="text">Add a Comment</div>

														<div class="clear"></div>

													</div>

													<div class="form">

														<input type="text" name="name" class="name" value="" placeholder="Name *" />

														<input type="email" name="email" class="email" value="" placeholder="Email *" />

														<input type="text" name="website" class="website" value="" placeholder="Website" />

														<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>

														<div class="btn post_comment_btn">Post Comment</div>

														<div class="clear"></div>

													</div>

												</div>

											</div>

										</div>

										<div class="btns">

											<a href="#" class="btn read_more_btn">Read More</a>

											<div class="social_btns">

												<a href="#" class="btn fa fa-twitter"></a>

												<a href="#" class="btn fa fa-facebook"></a>

											</div>

										</div>

									</div>

									<div class="clear"></div>

								</div>

								<!-- /Blog Post -->



								<!-- Blog Post -->

								<div class="post anim_element" data-animation="flipInX">

									<div class="media">

										<img src="img/blog_img5.jpg" alt="img" />

									</div>

									<div class="post_data">

										<div class="box_title title">

											<div class="icon"><i class="fa fa-picture-o"></i></div>

											<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>

											<div class="clear"></div>

										</div>

										<div class="info">

											<div class="meta user">

												<i class="fa fa-user"></i><span><a href="#">user</a></span>

											</div>

											<div class="meta date">

												<i class="fa fa-calendar"></i><span>2 hours ago</span>

											</div>

											<div class="meta tags">

												<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>

											</div>

											<div class="meta comments">

												<i class="fa fa-comments-o"></i><span>10</span>

											</div>

										</div>

										<div class="preview_body body">

											Lorem ipsum dolor sit amet, consectetur

											adipiscing elit. Praesent condimentum sed elit

											vitae tristique. Aliquam erat volutpat. Nunc sit

											amet cursus libero. In fringilla egestas ornare.

										</div>

										<div class="hidden_body body">

											<div class="body">

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

											</div>

											<div class="about_author">

												<div class="title">About Author</div>

												<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

												<div class="text col-sm-10 col-xs-10">

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</div>

												<div class="clear"></div>

											</div>

											<div class="post_comments">

												<div class="box_title title">

													<div class="icon"><i class="fa fa-comments-o"></i></div>

													<div class="text">5 Comments</div>

													<div class="clear"></div>

												</div>

												<div class="comments">

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

												</div>

												<div class="comment_form">

													<div class="box_title title">

														<div class="icon"><i class="fa fa-comment-o"></i></div>

														<div class="text">Add a Comment</div>

														<div class="clear"></div>

													</div>

													<div class="form">

														<input type="text" name="name" class="name" value="" placeholder="Name *" />

														<input type="email" name="email" class="email" value="" placeholder="Email *" />

														<input type="text" name="website" class="website" value="" placeholder="Website" />

														<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>

														<div class="btn post_comment_btn">Post Comment</div>

														<div class="clear"></div>

													</div>

												</div>

											</div>

										</div>

										<div class="btns">

											<a href="#" class="btn read_more_btn">Read More</a>

											<div class="social_btns">

												<a href="#" class="btn fa fa-twitter"></a>

												<a href="#" class="btn fa fa-facebook"></a>

											</div>

										</div>

									</div>

									<div class="clear"></div>

								</div>

								<!-- /Blog Post -->



								<!-- Blog Post -->

								<div class="post anim_element" data-animation="flipInX">

									<div class="post_data">

										<div class="box_title title">

											<div class="icon"><i class="fa fa-quote-left"></i></div>

											<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>

											<div class="clear"></div>

										</div>

										<div class="info">

											<div class="meta user">

												<i class="fa fa-user"></i><span><a href="#">user</a></span>

											</div>

											<div class="meta date">

												<i class="fa fa-calendar"></i><span>2 hours ago</span>

											</div>

											<div class="meta tags">

												<i class="fa fa-tags"></i><span><a href="#">web</a>, <a href="#">design</a></span>

											</div>

											<div class="meta comments">

												<i class="fa fa-comments-o"></i><span>10</span>

											</div>

										</div>

										<div class="preview_body body">

											<i class="fa fa-quote-left"></i>

											Lorem ipsum dolor sit amet, consectetur

											adipiscing elit. Praesent condimentum sed elit

											vitae tristique. Aliquam erat volutpat. Nunc sit

											amet cursus libero. In fringilla egestas ornare.

											<i class="fa fa-quote-right"></i>

										</div>

										<div class="hidden_body body">

											<div class="body">

												<p>

													<i class="fa fa-quote-left"></i>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

													<i class="fa fa-quote-right"></i>

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

												<p>

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</p>

											</div>

											<div class="about_author">

												<div class="title">About Author</div>

												<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

												<div class="text col-sm-10 col-xs-10">

													Lorem ipsum dolor sit amet, consectetur

													adipiscing elit. Praesent condimentum sed elit

													vitae tristique. Aliquam erat volutpat. Nunc sit

													amet cursus libero. In fringilla egestas ornare.

												</div>

												<div class="clear"></div>

											</div>

											<div class="post_comments">

												<div class="box_title title">

													<div class="icon"><i class="fa fa-comments-o"></i></div>

													<div class="text">5 Comments</div>

													<div class="clear"></div>

												</div>

												<div class="comments">

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="clear"></div>

													</div>

													<div class="comment">

														<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

														<div class="text col-sm-10 col-xs-10">

															<div class="name">John Doe</div>

															<div class="date">12, September, 2013</div>

															Lorem ipsum dolor sit amet, consectetur

															adipiscing elit. Praesent condimentum sed elit

															vitae tristique. Aliquam erat volutpat. Nunc sit

															amet cursus libero. In fringilla egestas ornare.

														</div>

														<div class="comment sub col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2">

															<img src="img/avatar.jpg" class="col-sm-2 col-xs-2" alt="img" />

															<div class="text col-sm-10 col-xs-10">

																<div class="name">John Doe</div>

																<div class="date">12, September, 2013</div>

																Lorem ipsum dolor sit amet, consectetur

																adipiscing elit. Praesent condimentum sed elit

																vitae tristique. Aliquam erat volutpat. Nunc sit

																amet cursus libero. In fringilla egestas ornare.

															</div>

															<div class="clear"></div>

														</div>

														<div class="clear"></div>

													</div>

												</div>

												<div class="comment_form">

													<div class="box_title title">

														<div class="icon"><i class="fa fa-comment-o"></i></div>

														<div class="text">Add a Comment</div>

														<div class="clear"></div>

													</div>

													<div class="form">

														<input type="text" name="name" class="name" value="" placeholder="Name *" />

														<input type="email" name="email" class="email" value="" placeholder="Email *" />

														<input type="text" name="website" class="website" value="" placeholder="Website" />

														<textarea name="comment_body" placeholder="Your Comment" class="comment_body"></textarea>

														<div class="btn post_comment_btn">Post Comment</div>

														<div class="clear"></div>

													</div>

												</div>

											</div>

										</div>

										<div class="btns">

											<a href="#" class="btn read_more_btn">Read More</a>

											<div class="social_btns">

												<a href="#" class="btn fa fa-twitter"></a>

												<a href="#" class="btn fa fa-facebook"></a>

											</div>

										</div>

									</div>

									<div class="clear"></div>

								</div>

								<!-- /Blog Post -->



								<div class="load_more_posts btn">Load More</div>

							</div>

							<!-- Blog Posts -->



							<!-- Sidebar -->

							<div class="sidebar right_side col-md-4 omega">



								<!-- Search Bar -->

								<div class="search_bar">

									<input type="text" name="query" value="" placeholder="Search" class="search_input" />

									<i class="fa fa-search"></i>

								</div>

								<!-- /Search Bar -->



								<!-- Categories -->

								<div class="categories">

									<div class="title color"><span class="text">Categories</span></div>

									<div class="categories">

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">Web Design</a></span>

										</div>

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">Web Development</a></span>

										</div>

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">Graphic Design</a></span>

										</div>

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">UI Design</a></span>

										</div>

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">Logo Design</a></span>

										</div>

										<div class="clear"></div>

									</div>

								</div>

								<!-- /Categories -->



								<!-- Tabs -->

								<div class="tabs">

									<div class="title color"><span class="text">Tabs</span></div>

									<div class="tabs">

										<div class="tabs_menu">

											<a href="#popular" class="active">Popular</a>

											<a href="#recent">Recent</a>

											<a href="#comments">Comments</a>

											<div class="clear"></div>

										</div>

										<div class="tabs_body">

											<div id="popular" class="items active">

												<div class="item">

													<img src="img/blog_img1.jpg" alt="img" />

													<span class="body">

														<a href="#">Lorem ipsum dolor sit</a>

														Lorem ipsum dolor sit amet, consectetur...

													</span>

												</div>

												<div class="item">

													<img src="img/blog_img2.jpg" alt="img" />

													<span class="body">

														<a href="#">Lorem ipsum dolor sit</a>

														Lorem ipsum dolor sit amet, consectetur...

													</span>

												</div>

												<div class="item">

													<img src="img/blog_img5.jpg" alt="img" />

													<span class="body">

														<a href="#">Lorem ipsum dolor sit</a>

														Lorem ipsum dolor sit amet, consectetur...

													</span>

												</div>

												<div class="clear"></div>

											</div>

											<div id="recent" class="items">

												<div class="item">

													<img src="img/blog_img2.jpg" alt="img" />

													<span class="body">

														<a href="#">Lorem ipsum dolor sit</a>

														Lorem ipsum dolor sit amet, consectetur...

													</span>

												</div>

												<div class="item">

													<img src="img/blog_img1.jpg" alt="img" />

													<span class="body">

														<a href="#">Lorem ipsum dolor sit</a>

														Lorem ipsum dolor sit amet, consectetur...

													</span>

												</div>

												<div class="item">

													<img src="img/blog_img5.jpg" alt="img" />

													<span class="body">

														<a href="#">Lorem ipsum dolor sit</a>

														Lorem ipsum dolor sit amet, consectetur...

													</span>

												</div>

												<div class="clear"></div>

											</div>

											<div id="comments" class="items">

												<div class="item">

													<img src="img/blog_img5.jpg" alt="img" />

													<span class="body">

														<a href="#">Lorem ipsum dolor sit</a>

														Lorem ipsum dolor sit amet, consectetur...

													</span>

												</div>

												<div class="item">

													<img src="img/blog_img2.jpg" alt="img" />

													<span class="body">

														<a href="#">Lorem ipsum dolor sit</a>

														Lorem ipsum dolor sit amet, consectetur...

													</span>

												</div>

												<div class="item">

													<img src="img/blog_img1.jpg" alt="img" />

													<span class="body">

														<a href="#">Lorem ipsum dolor sit</a>

														Lorem ipsum dolor sit amet, consectetur...

													</span>

												</div>

												<div class="clear"></div>

											</div>

											<div class="clear"></div>

										</div>

									</div>

								</div>

								<!-- /Tabs -->



								<!-- Archive -->

								<div class="archive">

									<div class="title color"><span class="text">Archive</span></div>

									<div class="categories">

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">Web Design</a></span>

										</div>

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">Web Development</a></span>

										</div>

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">Graphic Design</a></span>

										</div>

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">UI Design</a></span>

										</div>

										<div class="item">

											<i class="fa fa-circle"></i>

											<span class="text"><a href="#">Logo Design</a></span>

										</div>

										<div class="clear"></div>

									</div>

								</div>

								<!-- /Archive -->



								<!-- About -->

								<div class="about">

									<div class="title color"><span class="text">About</span></div>

									<div class="text">

										Lorem ipsum dolor sit amet, consectetur

										adipiscing elit. Praesent condimentum sed elit

										vitae tristique. Aliquam erat volutpat. Nunc sit

										amet cursus libero. In fringilla egestas ornare.

									</div>

								</div>

								<!-- /About -->



								<!-- Tags -->

								<div class="tags">

									<div class="title color"><span class="text">Tags</span></div>

									<a href="#" class="btn">web</a>

									<a href="#" class="btn">design</a>

									<a href="#" class="btn">iOS</a>

									<a href="#" class="btn">HTML</a>

									<a href="#" class="btn">CSS</a>

									<a href="#" class="btn">jQuery</a>

									<a href="#" class="btn">Wordpress</a>

									<div class="clear"></div>

								</div>

								<!-- /Tags -->



								<!-- Tweets -->

								<div class="blog_tweets tweets">

									<div class="title color"><span class="text">Tweets</span></div>

									<div class="tweets"></div>

								</div>

								<!-- /Tweets -->

							</div>

							<!-- /Sidebar -->

							<div class="clear"></div>

							

						</div>

						<!-- /Blog Page -->



						<!-- Contact Page -->

						<div id="contact" class="col-md-12">

							<h1 class="title color"><span class="text">Contact</span></h1>



							<!-- Description -->

							<p>

								Lorem ipsum dolor sit amet, consectetur

								adipiscing elit. Praesent condimentum sed elit

								vitae tristique. Aliquam erat volutpat. Nunc sit

								amet cursus libero. In fringilla egestas ornare.

							</p>

							<!-- /Description -->



							<!-- Google Map -->

							<div id="gmap"></div>

							<!-- /Google Map -->



							<!-- Info -->

							<div class="contact_info">

								<div class="user col-md-4">

									<div class="row">

										<i class="fa fa-user"></i>

										<span>John Doe</span>

									</div>

								</div>

								<div class="user col-md-4">

									<div class="row">

										<i class="fa fa-map-marker"></i>

										<span>New York City</span>

									</div>

								</div>

								<div class="user col-md-4">

									<div class="row">

										<i class="fa fa-envelope"></i>

										<span>john@site.com</span>

									</div>

								</div>

								<div class="clear"></div>

							</div>

							<!-- /Info -->



							<!-- Contact Form -->

							<div class="contact_form_outer">

								<h1 class="title color"><span class="text">Email Me</span></h1>

								<p>

									Lorem ipsum dolor sit amet, consectetur

									adipiscing elit. Praesent condimentum sed elit

									vitae tristique.

								</p>

								<div class="contact_form">

									<input type="text" value="" placeholder="Your Name" class="name" />

									<input type="email" value="" placeholder="Your Email" class="email" />

									<textarea class="message" placeholder="Your Message"></textarea>

									<input type="button" value="Send Message" class="btn send_message_btn" name="submit" />

									<span class="message"></span>

								</div>

							</div>

							<!-- /Contact Form -->



							<!-- Social Buttons -->

							<div class="contact_social_btns">

								<a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>

								<a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>

								<a href="#"><i class="fa fa-google-plus"></i><span>Google+</span></a>

								<a href="#"><i class="fa fa-youtube"></i><span>YouTube</span></a>

								<a href="#"><i class="fa fa-github"></i><span>Github</span></a>

								<a href="#"><i class="fa fa-dribbble"></i><span>Dribbble</span></a>

								<a href="#"><i class="fa fa-flickr"></i><span>Flickr</span></a>

								<a href="#"><i class="fa fa-tumblr"></i><span>Tumblr</span></a>

								<a href="#"><i class="fa fa-vk"></i><span>VK</span></a>

								<a href="#"><i class="fa fa-skype"></i><span>Skype</span></a>

								<a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>

								<a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>

							</div>

							<!-- /Social Buttons -->



						</div>

						<!-- /Contact Page -->



						<input type="hidden" value="" id="hdn_page_id" />



					</div>

					<div class="clear"></div>

				</div>

				<!-- /Main Content -->

				

				<!-- Social Buttons -->

				<div class="social_icons col-md-1">

					<div class="row">

						<ul>

							<li>

								<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>

							</li>

							<li>

								<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>

							</li>

							<li class="more_social_icons_li">

								<a href="#" class="plus more_social_icons_btn"><i class="fa fa-plus"></i></a>

								<ul class="more_social_icons">

									<li>

										<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>

									</li>

									<li>

										<a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i></a>

									</li>

									<li>

										<a href="#" class="github"><i class="fa fa-github"></i></a>

									</li>

								</ul>

							</li>

						</ul>

					</div>

				</div>

				<!-- /Social Buttons -->



				<div class="clear"></div>



			</div>



			<div class="clear"></div>

		</div>



		<div class="clear"></div>

	</div>

	<!-- /Wrapper -->



	<!-- Footer -->

	<div class="footer col-md-12">

	</div>

	<!-- /Footer -->



	<!-- Loading Overlay -->

	<div class="loading_overlay">

		<div><img class="loading" src="img/sunburst1.gif" alt="img" /></div>

	</div>

	<!-- /Loading Overlay -->



    <script type="text/javascript" src="js/hideMe.js"></script>

    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>

    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>

    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>

    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

    <script type="text/javascript" src="js/jquery.magnific_popup.js"></script>

    <script type="text/javascript" src="js/tweetie.min.js"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.7"></script>

    <script type="text/javascript" src="js/maplace.js"></script>

    <script type="text/javascript" src="js/jquery.ba-hashchange.js"></script>

    <script type="text/javascript" src="js/jquery.appear.js"></script>

    <script type="text/javascript" src="js/scripts.js"></script>



    <!--[if lt IE 9]>

    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

</body>

</html>