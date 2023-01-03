<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metodo_zenon
 */

?>

<!-- #post-<?php the_ID(); ?> -->
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php echo do_shortcode('[mz-sc-section--hero title="WHERE WE ARE" hero-bg="/wp-content/themes/metodo-zenon/images/MZ_Contact_Us_Hero_sect-bg-v01-1440x440.png"]'); ?>

    <section class="mz-section mz-section--contact-us-content" id="contact-us-content">
        <div class="mz-container">
			<div class ="mz-row">
				<div class="mz-col-01">
					<h3>
						Zenon Method
					</h3>
					<p>
						Multidisciplinary center with coordinated professionals in physical preparation, nutrition,  physiotherapy and psychology with a cutting-edge method and state-of-the-art technology generation.
					</p>	
				</div>			
			</div>
			<div class ="mz-section">
				<div class="mz-col">
					<div class="mz-title-01">
						<h3>
							Talk to
						</h3>
						<h2>
							Metodo zenon
						</h2>
					</div>
					<div class="mz-row">
						<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M23.2143 25.7321L33.1964 35.7143L35.7143 33.1965L26.7857 24.25V8.92859H23.2143V25.7321Z" fill="#6F4A37"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1107 45.7867C15.222 48.5337 20.0555 50 25 50C31.6304 50 37.9893 47.3661 42.6777 42.6776C47.3661 37.9893 50 31.6304 50 25C50 20.0555 48.5338 15.222 45.7868 11.1108C43.0397 6.99956 39.1353 3.79521 34.5671 1.90301C29.9989 0.0108157 24.9723 -0.484223 20.1227 0.48035C15.2732 1.44503 10.8186 3.82606 7.32234 7.32239C3.82603 10.8187 1.445 15.2732 0.480376 20.1228C-0.484252 24.9723 0.0108408 29.999 1.90301 34.5671C3.79521 39.1352 6.99953 43.0397 11.1107 45.7867ZM13.0949 7.18288C16.6188 4.82823 20.7618 3.57145 25 3.57145C30.6832 3.57145 36.1337 5.8291 40.1523 9.84772C44.1709 13.8663 46.4286 19.3168 46.4286 25C46.4286 29.2382 45.1718 33.3812 42.8172 36.9051C40.4626 40.429 37.1159 43.1755 33.2004 44.7974C29.2848 46.4193 24.9762 46.8436 20.8195 46.0168C16.6628 45.19 12.8445 43.1491 9.84772 40.1523C6.85089 37.1555 4.81 33.3373 3.98317 29.1805C3.15636 25.0238 3.58072 20.7152 5.20259 16.7996C6.82446 12.8841 9.57102 9.53742 13.0949 7.18288Z" fill="#6F4A37"/>
						</svg>
						<div class="mz-inner-col">
							<h4>
								SCHEDULE
							</h4>
							<p class="p-03">
								30 mins <br>
								12:30pm - 1:00pm <br>
								Monday, Tuesday, Thursday & Saturday
							</p>
						</div>
					</div>
					<div class="mz-row">
						<svg width="50" height="36" viewBox="0 0 50 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 0V35.5556H50V0H0ZM44.5 3L25 16.5L5.5 3H44.5ZM3 32.5V4.5L23.9821 19.3214C24.281 19.5288 24.6362 19.6399 25 19.6399C25.3638 19.6399 25.7189 19.5288 26.0178 19.3214L47 4.5V32.5H3Z" fill="#6F4A37"/>
						</svg>
						<div class="mz-inner-col">
							<h4>
								EMAIL
							</h4>
							<p class="p-03">
								metodozenon@companyemail.com
							</p>
						</div>
					</div>
					<div class="mz-row">
						<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.42961 5.19565L1.5122 5.14404L11.9535 0L23.2233 15.0263L18.0383 21.9399C18.1935 24.5472 19.2992 27.0072 21.1461 28.8541C22.993 30.701 25.453 31.8066 28.0603 31.9618L34.9739 26.7768L50 38.0463L44.8988 48.4004L44.8558 48.4878L44.8041 48.5703C44.5319 49.0089 44.1519 49.3706 43.7004 49.6208C43.2489 49.8711 42.7408 50.0016 42.2246 50H39.5303C34.3391 50 29.1987 48.9775 24.4027 46.9909C19.6067 45.0043 15.2489 42.0925 11.5781 38.4218C7.9074 34.751 4.99562 30.3932 3.00905 25.5972C1.02247 20.8011 0 15.6608 1.52588e-05 10.4696V7.77521C-0.00164032 7.25898 0.128868 6.75091 0.379108 6.29938C0.629345 5.84785 0.990986 5.46788 1.42961 5.19565ZM3.85856 10.4696C3.85856 30.1391 19.8609 46.1414 39.5303 46.1414H41.7104L45.1235 39.2126L34.9731 31.5998L29.3219 35.838H28.6789C24.8299 35.8337 21.1397 34.3028 18.418 31.5811C15.6964 28.8594 14.1654 25.1693 14.1611 21.3203V20.6772L18.3994 15.0261L10.7874 4.87636L3.85856 8.29008V10.4696Z" fill="#6F4A37"/>
						</svg>
						<div class="mz-inner-col">
							<h4>
								PHONE
							</h4>
							<p class="p-03">
							+34 916 21 60 00
							</p>
						</div>
					</div>
				</div>
				<div class="mz-contact-form">
					<h4>
						Leave us a message
					</h4>
					<?php echo do_shortcode('[fluentform id="4"]'); ?>
				</div>
			</div>
			<div class ="mz-col">
				<div class="mz-title-02">
					<h3>
						Our Location
					</h3>
					<h2 class="loc">
						Sra Ana Jimenez, Mimbreras 4 03201 ELCHE (Alicante)
					</h2>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6265.1478641895455!2d-0.7076804999999573!3d38.26618665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63b6fa33032777%3A0x1c02af723e14e4e0!2s03201%20Elche%2C%20Alicante%2C%20Spain!5e0!3m2!1sen!2sph!4v1672324937635!5m2!1sen!2sph" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<div class="mz-row">
					<div class="mz-col">
						<div class="mz-icon">
							<!-- <svg width="30" height="67" viewBox="0 0 30 67" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.5 59C23.5 63.4183 19.9183 67 15.5 67C11.0817 67 7.5 63.4183 7.5 59C7.5 54.5817 11.0817 51 15.5 51C19.9183 51 23.5 54.5817 23.5 59Z" fill="#6F4A37"/>
								<path d="M15 0C6.72917 0 0 6.72917 0 15C0 17.4829 0.620771 19.9448 1.80088 22.1283L14.1797 44.5166C14.3445 44.8151 14.6586 45 15 45C15.3415 45 15.6555 44.8151 15.8203 44.5166L28.2037 22.1209C29.3793 19.9448 30 17.4829 30 14.9999C30 6.72917 23.2709 0 15 0ZM15 22.5C10.8646 22.5 7.50006 19.1355 7.50006 15C7.50006 10.8646 10.8646 7.50006 15 7.50006C19.1354 7.50006 22.5 10.8646 22.5 15C22.5 19.1355 19.1354 22.5 15 22.5Z" fill="#6F4A37"/>
							</svg> -->
							<svg class="loc" width="30" height="45" viewBox="0 0 30 45" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15 0C6.72917 0 0 6.72917 0 15C0 17.4829 0.620771 19.9448 1.80088 22.1283L14.1797 44.5166C14.3445 44.8151 14.6586 45 15 45C15.3415 45 15.6555 44.8151 15.8203 44.5166L28.2037 22.1209C29.3793 19.9448 30 17.4829 30 14.9999C30 6.72917 23.2709 0 15 0ZM15 22.5C10.8646 22.5 7.50006 19.1355 7.50006 15C7.50006 10.8646 10.8646 7.50006 15 7.50006C19.1354 7.50006 22.5 10.8646 22.5 15C22.5 19.1355 19.1354 22.5 15 22.5Z" fill="#6F4A37"/>
							</svg>
							<svg class="point" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="8" cy="8" r="8" fill="#6F4A37"/>
							</svg>
						</div>
						<div class="mz-content">
							<svg class="icon" width="46" height="36" viewBox="0 0 46 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<rect x="0.5" width="45" height="36" fill="url(#pattern0)"/>
								<defs>
								<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
								<use xlink:href="#image0_645_375" transform="translate(0 -0.225) scale(0.00390625 0.00634766)"/>
								</pattern>
								<image id="image0_645_375" width="256" height="256" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEAEAYAAAAM4nQlAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAABgAAAAYADwa0LPAAAAB3RJTUUH5gICCDkUxk3BqwAALVVJREFUeNrt3XlcVNX7B/DPGUBAcdfKtTLXzBVhEDVScwFFKwXLPXdNGDQr09yt1EwYcF8yk9TAHQGX3AUZEJPJXVyRSs0tQVBgzu8PGX59NWtYZi7L5/2Pr9c4957nnGGeeebOuecARERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERERE9M+E0gFQ8eC3tssmR8dq1WR/qyzrY126YLN0lhlOTtDiDB69/jo6oJ2Ir1MHA0RHWaNsWagwQARVqIAAREAn+HdY3DyU32HyvXtYLgbLRvfv4xT0YsilS2KonCdrnTyJnpiuuqHTWZ/O3KS6tWfP/OA9zaL1N28qHTZRScLES7kyJsRNukkHB5smZQLSNvfrJ+vgrPhl2DDxG5rgL0dHfqBTrlySQdAYDHIe7BAVFSUaiigs/O471dEyoeL6Tz/5u4aGxtRKS1M6TKLiiIma/tWIEd2POTqWLm1f1fCV9bzx4+XHeB+7J0wQM/A9DpQvr3R8VEw1QHX5xa1biJQVxYO5c1WfO1wR7RYvZkFAVHBYANA/0izu9oU6rkcPaOV3aL14MbqiORxr1FA6LiqhOqOp/PziRSzFHvFw9GhtWES8ru+ePUqHRVSUsQAgAMAg6SbdpJ1dhYZlaqQvDAhAVzRH8MiRSsdF9D/84AG1lGKifAH6b799WO7mnMy/Jk1aviL+ePzxjAylwyMqSlgAlHCjR3fr1rZtxYqlVDIz4/OtW2ENK8x8802l4yIyySI0lMFRUTbvZwyy7vXe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"/>
								</defs>
							</svg>
							<div class="mz-inner-row">
								<h4>
									By Car
								</h4>
								<p>
									Lorem Ipsum es simplemente el texto de relleno de las 
								</p>
							</div>
						</div>
					</div>
					<div class="mz-col">
						<div class="mz-icon">
							<!-- <svg width="30" height="67" viewBox="0 0 30 67" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.5 59C23.5 63.4183 19.9183 67 15.5 67C11.0817 67 7.5 63.4183 7.5 59C7.5 54.5817 11.0817 51 15.5 51C19.9183 51 23.5 54.5817 23.5 59Z" fill="#6F4A37"/>
								<path d="M15 0C6.72917 0 0 6.72917 0 15C0 17.4829 0.620771 19.9448 1.80088 22.1283L14.1797 44.5166C14.3445 44.8151 14.6586 45 15 45C15.3415 45 15.6555 44.8151 15.8203 44.5166L28.2037 22.1209C29.3793 19.9448 30 17.4829 30 14.9999C30 6.72917 23.2709 0 15 0ZM15 22.5C10.8646 22.5 7.50006 19.1355 7.50006 15C7.50006 10.8646 10.8646 7.50006 15 7.50006C19.1354 7.50006 22.5 10.8646 22.5 15C22.5 19.1355 19.1354 22.5 15 22.5Z" fill="#6F4A37"/>
							</svg> -->
							<svg class="loc" width="30" height="45" viewBox="0 0 30 45" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15 0C6.72917 0 0 6.72917 0 15C0 17.4829 0.620771 19.9448 1.80088 22.1283L14.1797 44.5166C14.3445 44.8151 14.6586 45 15 45C15.3415 45 15.6555 44.8151 15.8203 44.5166L28.2037 22.1209C29.3793 19.9448 30 17.4829 30 14.9999C30 6.72917 23.2709 0 15 0ZM15 22.5C10.8646 22.5 7.50006 19.1355 7.50006 15C7.50006 10.8646 10.8646 7.50006 15 7.50006C19.1354 7.50006 22.5 10.8646 22.5 15C22.5 19.1355 19.1354 22.5 15 22.5Z" fill="#6F4A37"/>
							</svg>
							<svg class="point" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="8" cy="8" r="8" fill="#6F4A37"/>
							</svg>
						</div>
						<div class="mz-content">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37.005" height="37.005" viewBox="0 0 128 128">
								<image x="26" y="1" width="76" height="127" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAlCAYAAABGWhk4AAACgUlEQVRIiaWWW4hOURTHfzNm3jy4lVwLeVAz7vOpIUlCQ8qTDI0UKS9jSnLLJZJLiSeScXkRjy5PUpJchxgauSRRKNdQ1ES0au2v3Wqv8219/5ez1zp7/846e6+99q5pb5lGpiYC24BhQBewAfjpda7LhI4DHkR2CWgGmoA/qQG1meCNCd8kYLE3IBc81PGPrBZ8xvFfrBZ8EtgLfFf7F9AGvPAG5C6eaJNmw2/gQqXOueA1wHr9w27gJdBTLfiogoNGazYMB956g4rmuB9w1UBj7S+KxgNPBh4BswrGtmrU2eAlwH1gRFFEqn25YFmgs8b3twDcqrWjEDwQOBDZR4CtFSLGizoGN0XtS8BaYBBQkxjXCdzR9jJgYRG4FLX36LPNiVJ24brIlq190ANPjdqyeH2BAQ5YtvZtUys6gLvABA/8GugF5jvQN8BnbS/SyENNlul8CCwN4CnAEG136XO2A75uivthoEH9QYcCeEzkvKzPZgd8JeF7CswEtut0dIQzrz9wTmuHTEE98A3ok4DcAGY4Hy0rRPwVmKu/36tfT0FF0zUds8BWlY7uBTa9csElY98C3hmfpNfq/wHXml0o2uzM6zGvAqbAjbqVY/0AXgErE/0li0blgMcnoE+0fUpvQ7HqU2dgCrzc2D16Kgft0soXq8FGbcFzNO1idSY+LpXvfdGfWvBpY8u94XgCLLpn7EYPvCVxlVrhQEkc/0nwYGC36Xhe89dTdw74RGLwqgKo6LGxx8b1W8DzgBbTaQfwqQL4GfAlsutCkQ/gnWbAx4QvJbnDPTcvyjVGwOEGGVRpCmLdTARVBgtIauwHnYKKN8lIsuDXtHZLqsrOBOAf0xVzlOoOTMoAAAAASUVORK5CYII="/>
							</svg>
							<div class="mz-inner-row">
								<h4>
									By Foot
								</h4>
								<p>
									Lorem Ipsum es simplemente el texto de relleno de las 
								</p>
							</div>
						</div>
					</div>
					<div class="mz-col">
						<div class="mz-icon">
							<!-- <svg width="30" height="67" viewBox="0 0 30 67" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.5 59C23.5 63.4183 19.9183 67 15.5 67C11.0817 67 7.5 63.4183 7.5 59C7.5 54.5817 11.0817 51 15.5 51C19.9183 51 23.5 54.5817 23.5 59Z" fill="#6F4A37"/>
								<path d="M15 0C6.72917 0 0 6.72917 0 15C0 17.4829 0.620771 19.9448 1.80088 22.1283L14.1797 44.5166C14.3445 44.8151 14.6586 45 15 45C15.3415 45 15.6555 44.8151 15.8203 44.5166L28.2037 22.1209C29.3793 19.9448 30 17.4829 30 14.9999C30 6.72917 23.2709 0 15 0ZM15 22.5C10.8646 22.5 7.50006 19.1355 7.50006 15C7.50006 10.8646 10.8646 7.50006 15 7.50006C19.1354 7.50006 22.5 10.8646 22.5 15C22.5 19.1355 19.1354 22.5 15 22.5Z" fill="#6F4A37"/>
							</svg> -->
							<svg class="loc" width="30" height="45" viewBox="0 0 30 45" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15 0C6.72917 0 0 6.72917 0 15C0 17.4829 0.620771 19.9448 1.80088 22.1283L14.1797 44.5166C14.3445 44.8151 14.6586 45 15 45C15.3415 45 15.6555 44.8151 15.8203 44.5166L28.2037 22.1209C29.3793 19.9448 30 17.4829 30 14.9999C30 6.72917 23.2709 0 15 0ZM15 22.5C10.8646 22.5 7.50006 19.1355 7.50006 15C7.50006 10.8646 10.8646 7.50006 15 7.50006C19.1354 7.50006 22.5 10.8646 22.5 15C22.5 19.1355 19.1354 22.5 15 22.5Z" fill="#6F4A37"/>
							</svg>
							<svg class="point" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="8" cy="8" r="8" fill="#6F4A37"/>
							</svg>
						</div>
						<div class="mz-content">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34.992" height="34.992" viewBox="0 0 480 480">
								<image width="480" height="480" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAB/ElEQVRYhe2Xv0scQRTHP3feGZNLxB+Fmkb7g0vAImhrIWijYKOVXbRJQASTQEhIEbUQEvwztLBJlyJoK4hWooXgD+6KK8QfBDR68sJbWDZ7s5Ps7u0F/MJw3O57M5/ZefPeTOr10AuAZuATMAK0yYMa6RT4BrwHyhngCbAN9NQQwpGMPQWMAoU0sJgQiFsdwLLAjCcM4mhYYB7VBwsNEjNXQGOAYQU411+TZHJNQPYfYK4zFgOIfgJ5jX6TUkBOd+dT4DkwCTyzoclYUgvwsaWtfMESsAf8AL4AC8BckGPacgCZcaulrZ/eAEtRwfhJ4qwL6NTWHrAZZoGDuGD6gUNXO9Kl3ALeVvH5aurQNmb8lPX4y/+HupwSuA+Ajx6/DVOHYb7Mr4D3HzTdu1WOC8ZGjz02N0nB7ABFz7NcXDDeWbtVrFLz8qYOwwTwrlRaVwaXLH2mu2sNuPDxeRkXzD7w6i/sB4BBk0HcAeyoV090RsUNI0fYd8Cm5h2jwixTNzChMSOtQROflIQWfd+nFdxKYWAKwOcQ/n8ozDL57ZbEYCLXPUw1/bcw3op7GzGLNUxF645bpahhbPOMZM8VvWM56ogDJugC59iNRT24R9m0Z7ZJqiIwq3UC811gZoIOyjXQJTAtsSD3Z7kLz+sByLrKRiCpb+u/71lwcgcNvEz9TyespwAAAABJRU5ErkJggg=="/>
							</svg>
							<div class="mz-inner-row">
								<h4>
									Where to Park
								</h4>
								<p>
									Lorem Ipsum es simplemente el texto
								</p>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<!-- <div class="mz-point">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="8" cy="8" r="8" fill="#6F4A37"/>
					</svg>
				</div>
			 -->
			</div>
        </div>
    </section>
	<!-- .entry-content -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'metodo-zenon' ),
					'after'  => '</div>',
				)
			);
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>

		<!-- .entry-footer -->
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'metodo-zenon' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer>
		
	<?php endif; ?>
</article>
