<header class="header stricky">
	<div class="containerFull">
		<div class="inline-header">
			<div class="left_logo">
				<a href="index.php">
					<img src="images/logo.png" alt="">
				</a>

			</div>
			<div class="menu-links">

				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Courses</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Universities</a></li>
					<li><a href="#">Testimonials</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>

				<a class="d-inline-block btn_2 ms-3" href="tel:+91 8097044229">
				<i class="fa-solid fa-phone"></i> +91 8097044229
					
				</a>

			</div>

		</div>

	</div>


</header>



<!-- popup  -->
<div class="modal fade show" id="formEnquire" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
	role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header ">
				<h3 class="modal-title fontHeading fontWeight700 
					small_heading" id="exampleModalLabel"><span>We're Here to Help</span></h3>
				<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="email.php">
					<div class="row">
						<div class="col-lg-12">
							<div class="formItem mb-3">
								<div class="form-floating">
									<input type="hidden" name="hidden">
									<input type="text" required="" class="form-control" id="name" name="name"
										placeholder="name">
									<label for="name">Name</label>
								</div>
							</div>
							<div class="formItem mb-3">
								<div class="form-floating">
									<input type="tel" required="" class="form-control" id="phone" name="phone"
										placeholder="phone">
									<label for="phone">Phone</label>
								</div>
							</div>
							<div class="formItem">
								<div class="form-floating mb-3">
									<input type="email" required="" class="form-control" id="email" name="email"
										placeholder="email">
									<label for="email">Email</label>
								</div>
							</div>
						</div>
					</div>
					<div class="formItem">
						<button id="cpatchaSubmitBtn2" type="submit" name="submit"
							class="btnTheme btnmodel border-0 w-100">Send
							Request</button>
					</div>
				</form>
			</div>
			<div class="formfooter d-flex justify-content-between">
				<div class="item_contact">
					<a href="https://api.whatsapp.com/send?phone=amp;text=Hi"><i class="fab fa-whatsapp"></i>
						&nbsp; WhatsApp</a>
				</div>
				<div class="item_contact">
					<a href="tel:"><i class="fa fa-phone"></i> &nbsp; +91 929424344</a>
				</div>
			</div>
		</div>
	</div>
</div>




<!-- <div class="whatChat">
	<a target="_blank" href="https://api.whatsapp.com/send?phone=910123456789&amp;text=Hi">
		
		<picture>
			<source srcset="images/icons/whatsapp.webp" type="image/webp">
			<img src="images/icons/whatsapp.webp">
		</picture>
	</a>
</div> -->


<div class="cursor"></div>
<div class="cursor2"></div>