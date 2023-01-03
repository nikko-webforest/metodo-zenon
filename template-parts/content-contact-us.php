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
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44.721" height="34.999" viewBox="0 0 46 36">
								<image y="3" width="46" height="28" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAbCAYAAADoOQYqAAAEJUlEQVRYhb2Ya4iWVRDHf/t6ycWMvJSLioUghrouQVppWBR0kwiJljIjQtuQIvrQF7tABdHlQ4R0oyUqSiPNiuyC0oUiNgqFlNTMTFcqXVKrTd1Wdvcfs/wfODy+7/bebODhOWfmnJl55szMmXkaJFEhLARuA0YCfUDKoJBjNczvL4C1QHelwopCKF3Bc5Ok46oO1kgaV6G8ok8llm4BPgaagM+AX4HzgWbTY/6VrZ9ZuNfrFwCnA28AK4Cj/4elz7SlAlYn+PmSjhr/4BD775XU53UvSGqsxdLlLrzDAndJmpngZ0vqNG35f/BYkSj+jKSRp1LpOZIOS+qVdGeO1ixpvxVpK4PXPZIGvP5xSYVTofRYSW9ZyNoi9FmS9pq+rEyhd0k64T2PSRpRb6XbzHynpClF6PMkHfGa+yoQ/FCSf1ZWqvTwJCYnAnOdfyPqJwErTQvcPOAC5+IB4B/gemCs1ywGdpo+rEjMD/h9xHti/yjgERjUY4Mz0KFc7j8JspQ3DVgFLKopFdUGfwLfAjuAn4BdwF5gH9Cfcg6lG4GXgZtrFCpb+gfn7uk18jsBbAe2AJuBb4BtgycmqamGWy6FDknn2u8ulrS7DjxT+NExNOh/48LiNVoloNNHmY1/qwPPFOLkHgVGRwCMKGPDcfvYeGBqiTVXAu3Ad8AlwEUVKnUQOOBrv6mEIaNYm5BdED0ljiSu6Ce8ZoKkSZKulvRpHY/9gKQHJE23jHMk3ZJcWimEni0RiM2O2lG5r/oLuBt4E7gRmA8cBl53Wgr8tRVaMw9xgtc5yJY4gCPtrQYiQbwPnJfsiTR54VCWXiVpjKRPcvhjklolTZa0p0Yrtzp4O3L4sPJlkhZJOpSzdHNWW+SVzgqj9hLCuiQtkLS4BoU/kDRR0nsl6FHvTJP0ak7pOQW7Qf4G2uxAWO555N424EXflmebtt2uUg202zUyF3vX7rjOMiKrLQW+BP5I+PdjF/g6+ZpuSfe7Igs4KOkq59/hkp40fqukGyStq9LSLZJe8fh7STMs4zRJnxu/wye6z/Pf43QK7iKeT67KHgfDTM+3Ahs9jq5kk8dNrle6qrByl+uP8Z6vB3Z73OsAjKCbDOw3Dvea3QW7xtvAwyYUXCBlH9FXQvCAC6PGKpQ+AxiTzPuSgoqkYe53MdVgV4wCrier8sK6TwEfmWF83VmmzXa66/DmhcYfM6M4hQ9dK5QD2aWxwV19QCuwBtjj+eU2Rqf5LnHsdA5Sh6hbL038b4u7lqftV7LfNVTbMhWpq9e7ZXstyWbPSRpdSRMQ7f473txvRlnH8bek22tUOJ6pkraZ54ALt6yPjNt4bjWdyyzn7Dw8WweFs+caSb/k+IeBlpY6yXL+e0wBbgWucEETvhf/P+oJM4Bl/o/yM/CS6+iTAfgXbF4F4mkyl5oAAAAASUVORK5CYII="/>
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
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34.995" height="34.995" viewBox="0 0 128 128">
								<image x="26" y="1" width="76" height="127" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAjCAYAAAB7NEEmAAACNklEQVRIiaWWTYiOURTH/zQYlMJu0iBfG5MNFlMKYxaSojQrHwuF2diqUYrVRMO7m1BqImnKwmCjhizYjJSomUbJzGKUWFj4aMRPd7rvdB3343nNv27Pc8/H/z3n3HPu8wqoui4AE8ALYFfOpyrhdf5F+1xIW4DpCOmtlM98ldHkl8WClGcV0klJgxH5QNKjgYM6DYwAo8CRnO28mcKWsUzSXkmtkm5I+pz1qBDhYXNAk8CqubTUlcipOwz9D+lC4HGCsI4djZBuAKYKhA73q5LuD5x+A78KxDtLpOuMwyDwtED6sEQannLNy8YjRGOm3gdzpLXAsBloTUQ3AKw2svOp2d/qn+8k/ZDUmWjtD5ImJPUGsnOSXkpqCZt/OfDF/+odL7udiLQriGof8NXoD9SVnYGwO1NPhzWmhs1+GOp4UlccC4RrgaYE4Whmko76QLrqgqW+PS77/aEEKd45O94pRS1D6tCRI01d0tsLl+GQpPWNXH0rzYl+BPqAbybat75sldLfY5zHvbw7Uobhqunb1F/7Z7+kPqPbLelalfTvmWh6jD42FFty6W+LOMT+NDwzNsdz6V8y+weSnkdKdNfs21Lpn4xE2ZboxQ5j9yiW/grgkzG8mGlw9zX9GdhO+dH+i7TfELrP8OLCOI4Zn81hTdslnTI1Oivpe6SWIV6Z/ab6iyM9Y5TDkm4WCB3emP1sfzvSRUbZU4HQYcTsp2ffgI3Ae1+XE6Vrzayr3s/17ZIZGegPQQQOEQnAPRQAAAAASUVORK5CYII="/>
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
							<image width="480" height="480" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAACA0lEQVRYhe2Yz0sVURTHP/P81Q8VKyMrKHGjbh7hLsKVWxfu3AmuWrYyEKKwjbQUBP8JNyW4EoToL2gRogs1XSiW1jNJzbxy4AzIOO/OHe97M0/wAwNvZs459/vOvffMmQmMMQCtwHtgCLgrFzLiFzAPvAF+iJgW4CvQmaGIKNtAsQB8yFmI8ACYlszsAW05ixEOJDO3akCIUFcPHAONDsYHwCkQWGwkXlOCTTn+ibNxMQT6gK2EgRo007IpHgPPgFGgx0mOMaZkkjk2xjRIGbjkMeUwRqmQIo33UthGeQXMJBnJbippWm3IND3RaQq5AdwPEwycAH+B35Y4mzp9ceynyUyUfmANWNfjuw72DZgo4zNtC1jvIUZ8wz8T6G9ZwL3AW+Am8Dris2gL6JOZk4T7Y8CdyLWdaolxoTVic5qXmGVdR+exVnsfMc2We7vAcExBLdoC+izgpUjtOALkobsBfAJ+xvi8tEZMUYE7PCqwHIOVrMA+vAA+JvlXW0yHtrNfXMbyWTNdwMi57RpovNtaX54Cz/Wx4YSPGGkP3nn4X8BnmvYrKYQM1kwqrsWU48qK+Z9wnpkYE9OLWHuTy+BaZ8RuTnvcQAvdw0qLkYb8UF+88uawoG+UtYARMbM1ImZBpkm+QKwA7TkKkff47vDL1SNgEhiIaaKryR/gMzAOrJ4B171W9K70kcAAAAAASUVORK5CYII="/>
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
