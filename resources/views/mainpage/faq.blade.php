<x-layout>
	<x-header></x-header>
	<style>
		section {
			padding: 60px 0;
		}

		#accordion-style-1 h1,
		#accordion-style-1 a {
			color: #05132d;
		}

		#accordion-style-1 .btn-link {
			font-weight: 400;
			color: #05132d;
			background-color: transparent;
			text-decoration: none !important;
			font-size: 16px;
			font-weight: bold;
			padding-left: 25px;
		}

		#accordion-style-1 .card-body {
			border-top: 2px solid #05132d;
		}

		#accordion-style-1 .card-header .btn.collapsed .fa.main {
			display: none;
		}

		#accordion-style-1 .card-header .btn .fa.main {
			background: #05132d;
			padding: 13px 11px;
			color: #92802E;
			width: 35px;
			height: 41px;
			position: absolute;
			left: -1px;
			top: 10px;
			border-top-right-radius: 7px;
			border-bottom-right-radius: 7px;
			display: block;
		}
	</style>
	<div class="container-fluid bg-gray" id="accordion-style-1" >
		<!-- <div class="container"> -->
		<section>
			<div class="row">
				<div class="col-12">
					<h1 class="text-green mb-4 text-center">Frequently Asked Questions</h1>
				</div>
				<div class="col-10 mx-auto">
					<div class="accordion" id="accordionMain">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i class="fas fa-angle-double-right"></i><i class="fas fa-angle-double-right"></i>How does this work?
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionMain">
								<div class="card-body">
									<h4> At SkilledCity.NG, you can find skilled professionals near you in any state within Nigeria and

										It takes just seconds and it's free to contact them.</h4> <br>
									<i class="fas fa-angle-double-right"></i>
									Submit a job request and get contacted by a great professional in your area. <br> <br>
									<i class="fas fa-angle-double-right"></i>
									You can select the professional based on location, experience, reviews and quotes. <br> <br>
									<i class="fas fa-angle-double-right"></i>
									Then book an appointment with the professional directly. The professional will confirm or cancel the booking. <br> <br>

									<i class="fas fa-angle-double-right"></i>
									Payments for services are made only through SkilledCity.NG. Any arrangements made outside SkilledCity.NG, wouldn't be legally binding with SkilledCity.NG.<br> <br>

									<i class="fas fa-angle-double-right"></i>
									SkilledCity.NG remits payments and can monitor work progress on your behalf for a little fee in cases where clients are too busy to monitor their projects.

									There are 3 stages of payments to be made to ensure the project is done effectively without hazzles. They are; <br> <br>
									<i class="fas fa-angle-double-right"></i>
									Initial payment (Mobilization).<br> <br>
									<i class="fas fa-angle-double-right"></i>
									Down payment. <br> <br>
									<i class="fas fa-angle-double-right"></i>
									Job completion/close payment.

									After the job has been completed,
									you will receive a review request email to rate the professionals who have worked for you.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<i class="fas fa-angle-double-right"></i><i class="fas fa-angle-double-right"></i>How should I select a professional?
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionMain">
								<div class="card-body">
									You can narrow your search for a professional by a number of criteria including quote,
									distance, number of jobs completed and hours worked.<br>
									Once you get contacted by the professional,
									you can also inquire about their experience, skills background, availability, etc.

								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<i class="fas fa-angle-double-right"></i><i class="fas fa-angle-double-right"></i>Is this service completely free?
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionMain">
								<div class="card-body">
									Yes, our service is completely free of charge to search and book an appointment with a skilled professional. <br>
									We however charge the listed professionals
									a lead generation fee to cover the cost of running our business.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										<i class="fas fa-angle-double-right"></i></i><i class="fas fa-angle-double-right"></i>lWhat are the prices for the services provided by the skilled professionals?
									</button>
								</h5>
							</div>
							<div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionMain">
								<div class="card-body">
									Different Skilled professionals have and set their own rates. <br>
									So inquire more about thier rates to see what suits you best!
									More experienced workers typically charge a higher rate.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree1">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
										<i class="fas fa-angle-double-right"></i><i class="fas fa-angle-double-right"></i>How do I pay the professional? What forms of payment do you accept?
									</button>
								</h5>
							</div>
							<div id="collapseThree1" class="collapse fade" aria-labelledby="headingThree1" data-parent="#accordionMain">
								<div class="card-body">
									SkilledCity NG has a secure payment gateway which enables you pay for your professional services.<br>
									Many professionals collect payments using an invoice system, which allows you to use debit cards such as
									Verve, VISA or Master Card.<br>
									You can always check with the us for other payment options or arrangements.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo1">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
										<i class="fas fa-angle-double-right"></i><i class="fas fa-angle-double-right"></i>The professional never responded, what should I do?
									</button>
								</h5>
							</div>
							<div id="collapseTwo1" class="collapse fade" aria-labelledby="headingTwo1" data-parent="#accordionMain">
								<div class="card-body">
									We notify professionals by email and a follow up phone call when you contact them
									and (assuming the email actually reaches their inbox) most will respond,<br>
									even if they are unavailable for providing the service.<br>
									Please check to make sure that you have supplied the correct contact details. <br>
									You can also find the contact information of the professional in their profile, <br>
									so feel free to use it if you would like immediate assistance.<br>
									When they don't respond, we may take down the professional's profile based on your feedback.
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
	</div>
	</section>
	<!-- </div> -->
	</div>

	<x-footer></x-footer>
</x-layout>