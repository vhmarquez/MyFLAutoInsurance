<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AutoInsurance
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="section hero-section">
			<div class="grid" style="align-items: center;">
				<div class="col-desk-6 col-mob-6">

					<div class="grid" style="margin-bottom: 48px;">
						<div class="col-desk-12 col-mob-12">
							<h1 style="text-align: center;">Shop Affordable Car Insurance</h1>
							<div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/H9LEE2_VByk" style="position:absolute; top: 0; left: 0; width: 100%; height: 100%;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>

					<div class="grid">

						<div class="col-desk-4 col-mob-4"><img
								src="/wp-content/themes/autoinsurance/images/insurance-logos/aaa-white.png" alt="AAA" />
						</div>
						<div class="col-desk-4 col-mob-4"><img
								src="/wp-content/themes/autoinsurance/images/insurance-logos/progresssive-white.png"
								alt="Progressive" /></div>
						<div class="col-desk-4 col-mob-4"><img
								src="/wp-content/themes/autoinsurance/images/insurance-logos/allstate-white.png"
								alt="Allstate" /></div>
						<div class="col-desk-4 col-mob-4"><img
								src="/wp-content/themes/autoinsurance/images/insurance-logos/state-farm-white.png"
								alt="State Farm" /></div>
						<div class="col-desk-4 col-mob-4"><img
								src="/wp-content/themes/autoinsurance/images/insurance-logos/usaa-white.png"
								alt="USAA" /></div>
						<div class="col-desk-4 col-mob-4"><img
								src="/wp-content/themes/autoinsurance/images/insurance-logos/travelers-white.png"
								alt="Travelers" /></div>

					</div>

				</div>
				<div class="col-desk-6 col-mob-6">
					<?php //do_shortcode("[contact-form-7 id='11' title='Personal Auto Insurance']"); ?>
					<form action="#" method="POST">
						<div class="grid">
							<div class="col-desk-6 col-mob-6">
								<label>First Name
									<span>
										<input type="text" name="first_name" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Last Name
									<span>
										<input type="text" name="last_name" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>DoB
									<span>
										<input type="date" name="dob" value="" aria-required="true" aria-invalid="false">
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Marital Status
									<span>
										<select name="marital_status" aria-required="true" aria-invalid="false">
											<option value="Single">Single</option>
											<option value="Married">Married</option>
											<option value="Divorced">Divorced</option>
											<option value="Domestic Partner">Domestic Partner</option>
											<option value="Married but Separated">Married but Separated</option>
											<option value="Other">Other</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>E-Mail 
									<span>
										<input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Zip Code
									<span>
										<input type="text" name="zip_code" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
								</label>
							</div>
							<div class="col-desk-4 col-mob-4">
								<label>Vehicle Make 
									<span>
										
										
										<select name="auto_make" aria-required="true" aria-invalid="false" onchange="getModels(this.value)" required>
											<option value="">Select Vehicle Make</option>
											<?php 
												global $wpdb;
												$result = $wpdb->get_results("SELECT * FROM auto_makes ORDER BY make_name ASC");
												foreach ($result as $auto_make) {
											?>
													<option value="<?= $auto_make->make_id; ?>"><?= $auto_make->make_name; ?></option>
											<?php
												}
											?>
										</select>


										<script>
											function getModels(makeId){
												console.log(makeId);
												fetch('../wp-content/themes/autoinsurance/get_models.php', {
													method: 'POST',
													headers: {
														'Content-type': 'application/json'
													},
													mode: "same-origin",
													body: makeId
												})
												.then(function(response) {
													return response.json();
												})
												.then(function(data) {
													let autoModel = document.querySelector("#autoModel");
													autoModel.innerHTML = "";
													autoModel.disabled = false;
													for(let i in data) {
														console.log(data[i].model_name);
														autoModel.innerHTML += '<option value="' + data[i].model_name + '">' + data[i].model_name + '</option>';
													}
												})
												.catch((error) => {
													console.log('No models found')
												});
											}
										</script>
									</span>
								</label>
							</div>
							<div class="col-desk-4 col-mob-4">
								<label>Vehicle Model 
									<span>
										<select name="auto_model" aria-required="true" aria-invalid="false" id="autoModel" disabled>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-4 col-mob-4">
								<label>Vehicle Year 
									<span>
										<input type="number" name="auto_year" min="1900" max="2099" step="1" value="2021" aria-required="true" aria-invalid="false" />
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Accidents within last 3 years 
									<span>
										<select name="accidents" aria-required="true" aria-invalid="false">
											<option value="No">No</option>
											<option value="Yes">Yes</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Current DUI's, FR44, or SR22 
									<span>
										<select name="dui" aria-required="true" aria-invalid="false">
											<option value="None">None</option>
											<option value="DUI">DUI</option>
											<option value="FR 44">FR 44</option>
											<option value="SR 22">SR 22</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Current Insurance Company 
									<span>
										<select name="current_insurance" aria-required="true" aria-invalid="false">
											<option value="Allstate">Allstate</option>
											<option value="State Farm">State Farm</option>
											<option value="Geico">Geico</option>
											<option value="Progressive">Progressive</option>
											<option value="Travelers">Travelers</option>
											<option value="Hartford">Hartford</option>
											<option value="USAA">USAA</option>
											<option value="Other">Other</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Have you been insured for more than a year? 
									<span>
										<select name="insured_more_than_one_year" aria-required="true" aria-invalid="false">
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Do you rent or own your home? 
									<span>
										<select name="rent_or_own" aria-required="true" aria-invalid="false">
											<option value="Own">Own</option>
											<option value="Rent">Rent</option>
											<option value="Other">Other</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Home PropertyType 
									<span>
										<select name="property_type" aria-required="true" aria-invalid="false">
											<option value="Condo/Apartment">Condo/Apartment</option>
											<option value="Townhouse">Townhouse</option>
											<option value="House">House</option>
											<option value="Mobile Home">Mobile Home</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-12 col-mob-12">
								<label>Credit Rating
									<span>
										<select name="credit" aria-required="true" aria-invalid="false">
											<option value="Excellent (850-720)">Excellent (850-720)</option>
											<option value="Above Average (720-620)">Above Average (720-620)</option>
											<option value="Average (620-520)">Average (620-520)</option>
											<option value="Bellow Average (520 or bellow)">Bellow Average (520 or
												bellow)</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-12 col-mob-12">
								<label>Current BI limit 
									<span>
										<select name="current_bi" aria-required="true" aria-invalid="false">
											<option value="None">None</option>
											<option value="10/20">10/20</option>
											<option value="25/50">25/50</option>
											<option value="50/100">50/100</option>
											<option value="100/300">100/300</option>
											<option value="250/500 or above">250/500 or above</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-12 col-mob-12">
								<label>Additional Drivers
									<span>
										<input type="text" name="additional_drivers" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Name additional drivers, separate with commas">
									</span>
								</label>
							</div>
							<div class="col-desk-12 col-mob-12">
								<input type="submit" value="Request a Quote">
							</div>
							<div class="col-desk-12 col-mob-12">
							<?php
									if (!empty($_POST)) {
										global $wpdb;
										$table = 'ai_leads';
										$data = array(
											'timestamp' => date("Y-m-d H:i:s"),
											'first_name' => $_POST['first_name'],
											'last_name'    => $_POST['last_name'],
											'email' => $_POST['email'],
											'dob' => $_POST['dob'],
											'zip_code' => $_POST['zip_code'],
											'credit' => $_POST['credit'],
											'marital_status' => $_POST['marital_status'],
											'rent_or_own' => $_POST['rent_or_own'],
											'property_type' => $_POST['property_type'],
											'current_insurance' => $_POST['current_insurance'],
											'insured_more_than_one_year' => $_POST['insured_more_than_one_year'],
											'current_bi' => $_POST['current_bi'],
											'accidents' => $_POST['accidents'],
											'dui' => $_POST['dui'],
											'auto_year' => $_POST['auto_year'],
											'auto_make' => $_POST['auto_make'],
											'auto_model' => $_POST['auto_model'],
											'status' => 'New',
											'additional_drivers' => $_POST['additional_drivers']
										);
										$format = array(
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s',
											'%s'
										);
										$success=$wpdb->insert( $table, $data, $format );
										if($success){
											echo '<p style="text-align: center; color: #31b350">Thank you! One of our agents will be in touch with you shortly!</p>'; 
										}
									} 
								?>
							</div>
						</div>
					</form>

					
					
				</div>
			</div>
		</div>
		<div class="section">
			<div class="grid">
				<div class="col-desk-12 col-mob-12">
					<h2 style="text-align: center; color: #333; margin-bottom: 48px;">Welcome to My Florida Auto Insurance, <br/>we’re here to help you find the auto insurance that you need, without the typical hassle of shopping around.</h2>
				</div>
				<div class="col-desk-4 col-mob-12">
					<h3>Follow our three step process:</h3>
					<ul>
						<li>Fill Out a Short Form</li>
						<li>Talk to an Insurance Specialist (Now or Later)</li>
						<li>Connect with a Vetted Insurance Broker</li>
					</ul>
					<p>Apply now to receive your no obligation quote, I think you’ll be pleasantly surprised with the experience.</p>
				</div>
				<div class="col-desk-4 col-mob-12">
					<h3>Why Use an Insurance Specialist?</h3>
					<p>An insurance specialist helps you get the coverage that you need, without the gimmicks from
						typical insurance brokers. As an insurance specialist, we first analyze your situation, creating
						a custom plan tailored to your individual or family’s needs. We then connect you with our
						network of trusted and vetted brokers, to find you the absolute best price without compromising
						coverage.</p>
				</div>
				<div class="col-desk-4 col-mob-12">
					<h3>Why Not Just go directly to a broker?</h3>
					<p>Many times, an insurance broker may not offer the product or the price for your needs and can
						attempt to alter your coverage to make a sale. An insurance specialist protects you by
						pre-informing and connecting you with qualified and experienced brokers.</p>
				</div>
			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();