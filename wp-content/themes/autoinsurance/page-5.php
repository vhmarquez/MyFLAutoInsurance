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

					<div class="grid">

						<div class="col-desk-4 col-mob-4"><img src="/wp-content/themes/autoinsurance/images/insurance-logos/aaa-white.png" alt="AAA" /></div>
						<div class="col-desk-4 col-mob-4"><img src="/wp-content/themes/autoinsurance/images/insurance-logos/progresssive-white.png" alt="Progressive" /></div>
						<div class="col-desk-4 col-mob-4"><img src="/wp-content/themes/autoinsurance/images/insurance-logos/allstate-white.png" alt="Allstate" /></div>
						<div class="col-desk-4 col-mob-4"><img src="/wp-content/themes/autoinsurance/images/insurance-logos/state-farm-white.png" alt="State Farm" /></div>
						<div class="col-desk-4 col-mob-4"><img src="/wp-content/themes/autoinsurance/images/insurance-logos/usaa-white.png" alt="USAA" /></div>
						<div class="col-desk-4 col-mob-4"><img src="/wp-content/themes/autoinsurance/images/insurance-logos/travelers-white.png" alt="Travelers" /></div>

					</div>

						<h1>Shop Affordable Car Insurance</h1>
						<p>Welcome to My Florida Auto Insurance, we’re here to help you find the auto insurance that you need, without the typical hassle of shopping around.</p>
						<p>Follow our three step process:</p>
						<ul>
							<li>Fill Out a Short Form</li>
							<li>Talk to an Insurance Specialist (Now or Later)</li>
							<li>Connect with a Vetted Insurance Broker</li>
						</ul>
						<p>Apply now to receive your no obligation quote, I think you’ll be pleasantly surprised with the experience.</p>
						
					</div>
					<div class="col-desk-6 col-mob-6">
						<?= do_shortcode("[contact-form-7 id='11' title='Personal Auto Insurance']"); ?>
					</div>
				</div>
			</div>
			<div class="section">
				<div class="grid">
					<div class="col-desk-6 col-mob-6">
						<h3>Why Use an Insurance Specialist?</h3>
						<p>An insurance specialist helps you get the coverage that you need, without the gimmicks from typical insurance brokers.  As an insurance specialist, we first analyze your situation, creating a custom plan tailored to your individual or family’s needs. We then connect you with our network of trusted and vetted brokers, to find you the absolute best price without compromising coverage.</p>
					</div>
					<div class="col-desk-6 col-mob-6">
						<h3>Why Not Just go directly to a broker?</h3>
						<p>Many times, an insurance broker may not offer the product or the price for your needs and can attempt to alter your coverage to make a sale. An insurance specialist protects you by pre-informing and connecting you with qualified and experienced brokers.</p>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
