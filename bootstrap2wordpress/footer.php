<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

	<!-- Sign up -->
	<section id="signup" data-type="background" data-speed="4">
		<div class="container">
		<div class="row">

			<div class="col-sm-6 offset-sm-3">
			<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
			<p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
			</div>

		</div>
		</div>
  	</section>

	<!-- Footer -->
	<footer>
		<div class="container">
		<div class="row">

			<div class="col-sm-3">
			<p><a href="/"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a></p>
			</div>
			<div class="col-sm-6">
			<nav>
				<ul class="list-unstyled list-inline">
				<li class="list-inline-item"><a href="">Home</a></li>
				<li class="list-inline-item"><a href="">Blog</a></li>
				<li class="list-inline-item"><a href="">Resources</a></li>
				<li class="list-inline-item"><a href="">Contact</a></li>
				<li class="list-inline-item signup-link"><a href="">Sign up now</a></li>
				</ul>
			</nav>
			</div>
			<div class="col-sm-3">
			<p class="float-right">&copy; 2014 Brad Hussey</p>
			</div>

		</div>
    	</div>
  	</footer>

	<!-- Modal -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">
				<i class="fa fa-envelope"></i> Subscribe to our Mailing List
			</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
			</button>
			</div>

			<div class="modal-body">
			<p>
				Simply enter your name and email! As a thank you for joining us, 
				we're going to give you one of our best-selling courses, 
				<em>for free!</em>
			</p>

			<form>
				<div class="form-row">
				<div class="form-group col-6">
					<label for="subscribe-name" class="sr-only">Your first name</label>
					<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
				</div>
				<div class="form-group col-6">
					<label for="subscribe-email" class="sr-only">and your email</label>
					<input type="email" class="form-control" id="subscribe-email" placeholder="and your email">
				</div>  
				</div>
				<button type="submit" class="btn btn-danger btn-block">Subscribe!</button>
			</form>

			<hr>

			<p>
				<small>
				By provinding your email you consent to receiving occasional promotional emails &amp; newsletters.
				<br>
				No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.
				</small>
			</p>
			</div>
		</div>
		</div>
  	</div>

	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper-1.14.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

