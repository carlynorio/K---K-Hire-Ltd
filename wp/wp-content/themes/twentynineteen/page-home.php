<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package K-k-Hire-Ltd
 */

get_header();

remove_filter('the_content', 'wpautop');
?>
<?php if(have_rows('banner')):?>
	<?php while( have_rows('banner') ): the_row();
	
	$image = get_sub_field('background_image');
	$title = get_sub_field('banner_title');
	$description = get_sub_field('banner_description');
	$button = get_sub_field('banner_button');

	?>
<div class="header-banner-main"style="background-image: url(<?php echo $image; ?>);">
	<div class="container-full">	
		<div class="banner-main container-full-main">
			<div class="banner-title-box">
				<h1 class="banner-title">
					<?php echo $title; ?>
				</h1>
			</div>
			<div class="banner-description-box">
				<p><?php echo $description; ?></p>
			</div>

			<a href="#"> <button> Find out more</button></a>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>	
</div>
<section class="section">
	<div class="container-full-main">
		<?php if(have_rows('first_section')):?>
			<?php while( have_rows('first_section') ): the_row();
			
			$sectiontitle = get_sub_field('section_title');
			$sectiondescription = get_sub_field('section_description');
		
			?>
			<section class="first-section">
				<div class="title">
					<h2 class="welcome"><?php echo $sectiontitle; ?></h2>
				</div>
				<div class="description">
					<p><?php echo $sectiondescription; ?></p>
				</div>

			</section>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="container-full-main">
		<?php if(have_rows('second_section')):?>
			<?php while( have_rows('second_section') ): the_row();?>
				<div class="row">
				<?php if(have_rows('services')):?>
					<?php while( have_rows('services') ): the_row();
					
						$image = get_sub_field('image');
						$title = get_sub_field('title');
						$description = get_sub_field('description');
					?>
					<div class="col-md-4 services">
						<section class="services">
						<img src="<?php echo $image; ?>" alt="">
							<h3><?php echo $title; ?></h3>
							<p><?php echo $description; ?></p>
							<button class="readmore">Read More</button>
						</section>
					</div>
					<div class="col-md-4 services">
						<section class="services">
						<img src="<?php echo $image; ?>" alt="">
							<h3><?php echo $title; ?></h3>
							<p><?php echo $description; ?></p>
							<button class="readmore">Read More</button>
						</section>
					</div>
					<div class="col-md-4 services">
						<section class="services">
						<img src="<?php echo $image; ?>" alt="">
							<h3><?php echo $title; ?></h3>
							<p><?php echo $description; ?></p>
							<button class="readmore">Read More</button>
						</section>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<section class="section third-section">
	<div class="container-full-main">
		<?php if(have_rows('third_section')):?>
			<?php while( have_rows('third_section') ): the_row();
			
			$sectiontitle = get_sub_field('title');
			$sectiondescription = get_sub_field('description');
		
			?>
			<section class="first-section">
				<div class="title">
					<h2 class="welcome"><?php echo $sectiontitle; ?></h2>
				</div>
				<div class="description">
					<p><?php echo $sectiondescription; ?></p>
				</div>

			</section>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<section class="section fourth-section">
	<div class="container-full-main">
		<?php if(have_rows('fourth_section')):?>
			<?php while( have_rows('fourth_section') ): the_row();
			
			$sectiontitle = get_sub_field('title');
			$sectiondescription = get_sub_field('description');
		
			?>
			<section class="first-section">
				<div class="title">
					<h2 class="welcome"><?php echo $sectiontitle; ?></h2>
				</div>
				<div class="description">
					<p><?php echo $sectiondescription; ?></p>
				</div>

			</section>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
<section class="section fifth-section">
	<div class="container-full-main">
		<?php if(have_rows('fifth_section')):?>
			<?php while( have_rows('fifth_section') ): the_row();
			
			$sectiontitle = get_sub_field('title');
			$sectiondescription = get_sub_field('description');
		
			?>
			<section class="first-section">
				<div class="title">
					<h2 class="welcome"><?php echo $sectiontitle; ?></h2>
				</div>
				<div class="description">
					<p><?php echo $sectiondescription; ?></p>
				</div>

			</section>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
<section class="gallery-main">
	<?php if(have_rows('vehicle_images')):?>
		<?php while( have_rows('vehicle_images') ): the_row();
		$galleryimages = get_sub_field('images');
		?>

		<div class="gallery-box">
			<img src="<?php echo $galleryimages;?>" alt="">
		</div>

		<?php endwhile; ?>
	<?php endif; ?>
</section>



<section class="testimonial">
	<?php if(have_rows('testimonials')):?>
		<?php while( have_rows('testimonials') ): the_row();
		$testimonial = get_sub_field('title');
		$name = get_sub_field('name');
		$testimony = get_sub_field('text');
		$details = get_sub_field('details');
		?>

		<div class="container-full-main">
			<div class="testimony-box">
				<div class="testimony-title">
					<h2 class="welcome"><?php echo $testimonial;?></h2>
				</div>
				<div class="testimonial-box">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="main-testimony carousel">
										<div class="testimonybox">
											<p><?php echo $testimony; ?></p>
										</div>
										<p class="name"><?php echo $name; ?></p>
										<p class="details"><?php echo $details; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
<section class="contact-form-box">
	<div class="container-full-main">
		<div class="contactform">
			<div class="contact-title">
				<h2 class="contact-form-title"> Contact Us</h2>
			</div>
			<div class="contact-form">
				<form>
				<ul>
					<li>	
						<label for="fname">Name<span>*</span> </label><br>
						<input type="text" id="fname" name="fname" value="">
						<input type="text" id="lname" name="lname" value="	"><br>
					</li>
					<li>
						<label for="email">Email<span>*</span></label><br>
						<input type="text" id="email" name="email" value=""><br>
					</li>
					<li>
						<label for="phone">Phone</label><br>
						<input type="text" id="phone" name="phone" value=""><br>
					</li>
					<li>
						<label for="message">Message<span>*</span></label><br>
						<textarea type="text" id="message" name="message" value=""> </textarea>
					</li>
				</ul>
					<p class="consent">Consent</p>
					<input type="checkbox" id="" name=""> <span class="agree"> I agree to the privacy policy. </span> <br> <br>
					<input type="submit" class="submit">
				
				</form>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>