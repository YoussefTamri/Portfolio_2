


 <section class="center-section" id="contact_us">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('contact/images/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('contact/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('contact/css/main.css')}}">
<!--===============================================================================================-->




	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" id="contactForm" action="{{route('contact.store')}}" method="POST" >
				@csrf
				<span class="contact100-form-title">
					Contact Us
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
				</div>


				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
                            
						
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="{{asset('contactvendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contact/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contact/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('contact/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contact/vendor/select2/select2.min.js')}}"></script>

<!--===============================================================================================-->
	<script src="{{asset('contat/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('contat/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contat/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('contat/vendor/noui/nouislider.min.js')}}"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	  

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

 </section>
