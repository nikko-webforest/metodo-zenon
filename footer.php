<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package metodo_zenon
 */
?>
	<!-- #mz-footer -->
	<footer id="mz-footer" class="mz-footer">
		<section class="mz-section mz-main-footer-section">
			<div class="mz-container">
				<div class="mz-row">
					<div class="mz-col col-01">
						<a
							title=""
							target=""
							class="mz-img-link mz-logo-link"
							href="/"
							rel=""
							>
							<svg width="133" height="70" viewBox="0 0 133 70" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M45.7511 0L0 70H19.7758L45.7511 29.5067L57.2085 46.065L66.2332 32.4103L45.7511 0Z" fill="url(#paint0_linear_664_3867)"></path>
								<path d="M91.6592 32.8812L102.803 15.3812L132.623 69.843H114.025L91.6592 32.8812Z" fill="url(#paint1_linear_664_3867)"></path>
								<path d="M112.142 0H46.4577L55.8747 14.6749H78.3971L42.377 70H113.24L102.018 51.009H79.3388L112.142 0Z" fill="white"></path>
								<defs>
									<linearGradient id="paint0_linear_664_3867" x1="66.3117" y1="0" x2="66.3117" y2="70" gradientUnits="userSpaceOnUse">
										<stop stop-color="#2A2A2A"></stop>
										<stop offset="0.1875" stop-color="#BBBBBA"></stop>
										<stop offset="0.348958" stop-color="#EAE9EA"></stop>
										<stop offset="0.505208" stop-color="#DAD9DA"></stop>
										<stop offset="0.703125" stop-color="#A2A1A2"></stop>
										<stop offset="1" stop-color="#444343"></stop>
									</linearGradient>
									<linearGradient id="paint1_linear_664_3867" x1="66.3117" y1="0" x2="66.3117" y2="70" gradientUnits="userSpaceOnUse">
										<stop stop-color="#2A2A2A"></stop>
										<stop offset="0.1875" stop-color="#BBBBBA"></stop>
										<stop offset="0.348958" stop-color="#EAE9EA"></stop>
										<stop offset="0.505208" stop-color="#DAD9DA"></stop>
										<stop offset="0.703125" stop-color="#A2A1A2"></stop>
										<stop offset="1" stop-color="#444343"></stop>
									</linearGradient>
								</defs>
							</svg>
						</a>
						<p class="p-01">
							Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam, qui in habeo semper eligendi.
						</p>
					</div>
					<div class="mz-col col-02">
						<h5 class="mz-menu-head">
							Quick Links
						</h5>
						<?php
							wp_nav_menu(array(
								'container'       => false,
								'menu'            => 'Footer - Quick Links',
								'menu_id'         => false,
								'menu_class'      => 'mz-menu-list',
								'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
							));
						?>
					</div>
					<div class="mz-col col-03">
						<h5 class="mz-menu-head">
							Services
						</h5>
						<?php
							wp_nav_menu(array(
								'container' => true,
								'menu' => 'Footer - Services',
								'menu_id' => '',
								'menu_class' => 'mz-menu-list',
							));
						?>
					</div>
					<div class="mz-col col-04">
						<h5 class="mz-menu-head">
							Subscribe to Newsletter
						</h5>
						<form class="mz-form" action="">
							<div class="mz-form-wrap">
								<div class="mz-form-col">
									<input type="text" class="mz-form-input" placeholder="Enter your email"/>
								</div>
								<div class="mz-form-submit-col">
									<input type="submit" class="mz-form-submit" value="Subscribe"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="mz-section mz-copyright-footer-section">
			<div class="mz-container">
				<div class="mz-row">
					<div class="mz-col">
						<p class="p-01">
							Copyright &copy; Metodo Zenon. All Right Reserved.
						</p>
					</div>
					<div class="mz-col">
						<ul class="mz-social-list">
							<li class="mz-social-item">
								<a
									title="Social Facebook"
									target=""
									class="mz-social-link"
									href=""
									rel=""
									>
									<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M30 15.0913C30 6.75456 23.2863 0 15 0C6.71371 0 0 6.75456 0 15.0913C0 22.6235 5.48528 28.8669 12.6562 30V19.4538H8.84576V15.0913H12.6562V11.7663C12.6562 7.98438 14.8942 5.89533 18.3218 5.89533C19.9633 5.89533 21.6798 6.18986 21.6798 6.18986V9.90182H19.7879C17.925 9.90182 17.3437 11.0653 17.3437 12.2586V15.0913H21.5038L20.8385 19.4538H17.3437V30C24.5147 28.8669 30 22.6235 30 15.0913Z" fill="#909090"></path>
									</svg>
								</a>
							</li>
							<li class="mz-social-item">
								<a
									title="Social Instagram"
									target=""
									class="mz-social-link"
									href=""
									rel=""
									>
									<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M13.6778 6.66113C9.79735 6.66113 6.66736 9.79109 6.66736 13.6715C6.66736 17.5519 9.79735 20.6819 13.6778 20.6819C17.5583 20.6819 20.6882 17.5519 20.6882 13.6715C20.6882 9.79109 17.5583 6.66113 13.6778 6.66113ZM13.6779 18.2291C11.1703 18.2291 9.12024 16.1852 9.12024 13.6714C9.12024 11.1577 11.1642 9.11377 13.6779 9.11377C16.1917 9.11377 18.2357 11.1577 18.2357 13.6714C18.2357 16.1852 16.1856 18.2291 13.6779 18.2291H13.6779ZM22.6103 6.37442C22.6103 7.28351 21.8781 8.00957 20.9751 8.00957C20.066 8.00957 19.34 7.27741 19.34 6.37442C19.34 5.47142 20.0721 4.73926 20.9751 4.73926C21.8781 4.73926 22.6103 5.47142 22.6103 6.37442ZM27.2534 8.03388C27.1497 5.84351 26.6494 3.9033 25.0447 2.30476C23.4461 0.706225 21.5059 0.205919 19.3155 0.0960954C17.058 -0.0320318 10.2915 -0.0320318 8.03401 0.0960954C5.84971 0.199817 3.90947 0.700123 2.3048 2.29866C0.700135 3.8972 0.205922 5.83741 0.096097 8.02777C-0.0320323 10.2853 -0.0320323 17.0516 0.096097 19.3091C0.199821 21.4994 0.700135 23.4396 2.3048 25.0382C3.90947 26.6367 5.84361 27.137 8.03401 27.2468C10.2915 27.375 17.058 27.375 19.3155 27.2468C21.5059 27.1431 23.4461 26.6428 25.0447 25.0382C26.6433 23.4396 27.1436 21.4994 27.2534 19.3091C27.3815 17.0516 27.3815 10.2914 27.2534 8.03388H27.2534ZM24.3369 21.7311C23.861 22.9269 22.9397 23.8482 21.7377 24.3302C19.9378 25.0441 15.6668 24.8794 13.6778 24.8794C11.6887 24.8794 7.41167 25.038 5.61786 24.3302C4.42199 23.8543 3.50069 22.933 3.01868 21.7311C2.30482 19.9312 2.46955 15.6603 2.46955 13.6713C2.46955 11.6823 2.31092 7.40525 3.01868 5.61147C3.49458 4.41562 4.41589 3.49432 5.61786 3.01232C7.41777 2.29847 11.6887 2.46321 13.6778 2.46321C15.6668 2.46321 19.9439 2.30457 21.7377 3.01232C22.9336 3.48822 23.8549 4.40952 24.3369 5.61147C25.0507 7.41136 24.886 11.6823 24.886 13.6713C24.886 15.6603 25.0507 19.9373 24.3369 21.7311Z" fill="#909090"></path>
									</svg>
								</a>
							</li>
							<li class="mz-social-item">
								<a
									title="Social LinkedIn"
									target=""
									class="mz-social-link"
									href=""
									rel=""
									>
									<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M25.382 0H1.94636C0.872506 0 0 0.884686 0 1.97071V25.363C0 26.449 0.872506 27.3337 1.94636 27.3337H25.382C26.4558 27.3337 27.3344 26.449 27.3344 25.363V1.97071C27.3344 0.884686 26.4558 0 25.382 0ZM8.26151 23.4294H4.21008V10.3848H8.26761V23.4294H8.26151ZM6.23578 8.6028C4.93617 8.6028 3.88672 7.54727 3.88672 6.25379C3.88672 4.96031 4.93617 3.90479 6.23578 3.90479C7.52928 3.90479 8.58484 4.96031 8.58484 6.25379C8.58484 7.55337 7.53539 8.6028 6.23578 8.6028H6.23578ZM23.4477 23.429H19.3964V17.0837C19.3964 15.5705 19.3659 13.6242 17.2914 13.6242C15.1803 13.6242 14.857 15.2716 14.857 16.9738V23.429H10.8057V10.3844H14.6922V12.166H14.7471C15.2902 11.141 16.6142 10.061 18.5849 10.061C22.685 10.061 23.4477 12.7639 23.4477 16.2783V23.429Z" fill="#909090"></path>
									</svg>
								</a>
							</li>
							<li class="mz-social-item">
								<a
									title="Social Twitter"
									target=""
									class="mz-social-link"
									href=""
									rel=""
									>
									<svg width="31" height="26" viewBox="0 0 31 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M27.8135 6.47966C27.8332 6.76403 27.8332 7.04845 27.8332 7.33281C27.8332 16.0062 21.4405 26 9.75638 26C6.15673 26 2.81284 24.9234 0 23.0547C0.511441 23.1156 1.00314 23.1359 1.53426 23.1359C4.5044 23.1359 7.23859 22.1 9.42198 20.3328C6.62882 20.2719 4.28807 18.3828 3.48158 15.7828C3.87502 15.8437 4.26839 15.8843 4.6815 15.8843C5.25192 15.8843 5.82239 15.8031 6.35345 15.6609C3.44228 15.0515 1.25884 12.4109 1.25884 9.22186V9.14064C2.10462 9.62815 3.08821 9.93283 4.13065 9.97341C2.41934 8.79526 1.29819 6.78434 1.29819 4.50933C1.29819 3.2906 1.61285 2.17341 2.16365 1.19841C5.29121 5.17965 9.99239 7.77961 15.2639 8.06403C15.1656 7.57653 15.1066 7.06877 15.1066 6.56094C15.1066 2.94528 17.9391 0 21.46 0C23.2893 0 24.9416 0.792185 26.1022 2.07187C27.538 1.78751 28.9149 1.23905 30.1345 0.487503C29.6624 2.01098 28.6592 3.29066 27.3414 4.10311C28.62 3.96099 29.8592 3.59528 31 3.08752C30.1347 4.38747 29.0527 5.54523 27.8135 6.47966V6.47966Z" fill="#909090"></path>
									</svg>
								</a>
							</li>
							<li class="mz-social-item">
								<a
									title="Social Youtube"
									target=""
									class="mz-social-link"
									href=""
									rel=""
									>
									<svg width="34" height="24" viewBox="0 0 34 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M32.6255 3.66584C32.2423 2.22288 31.1131 1.08646 29.6795 0.700795C27.0809 0 16.6609 0 16.6609 0C16.6609 0 6.24093 0 3.64229 0.700795C2.20864 1.08652 1.07952 2.22289 0.696291 3.66584C0 6.28128 0 11.7382 0 11.7382C0 11.7382 0 17.195 0.696291 19.8105C1.07952 21.2534 2.20864 22.3425 3.64229 22.7282C6.24093 23.429 16.6609 23.429 16.6609 23.429C16.6609 23.429 27.0809 23.429 29.6795 22.7282C31.1131 22.3425 32.2423 21.2534 32.6255 19.8105C33.3218 17.195 33.3218 11.7382 33.3218 11.7382C33.3218 11.7382 33.3218 6.28128 32.6255 3.66584V3.66584ZM13.2529 16.6926V6.78369L21.9619 11.7383L13.2529 16.6926V16.6926Z" fill="#909090"></path>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<button class="mz-back-to-top-btn">
			<svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M2.46985 9.65247L7.40885 4.71247L12.3478 9.65247L14.4698 7.53047L7.40885 0.470466L0.347849 7.53047L2.46985 9.65247Z" fill="white"/>
			</svg>
		</button>
	</footer>
</div>

<?php wp_footer(); ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.1/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/wp-content/themes/metodo-zenon/src/js/metodo-zenon.js"></script>
<script>

	(function () {

		var
			clickedCategory = $('.mz-category-tab-filter-item'),
			filterCategory,
			blogPostList = $('.mz-blog-post-list'),
			blogPostItem = $('.mz-blog-post-item'),
			blogPostCategory
		;


		clickedCategory.click(function(){

			clickedCategory.removeClass('--active-item');
			$(this).addClass('--active-item')

			filterCategory = this.innerText.toLowerCase();
			console.log("filterCategory = "+filterCategory);

			// console.log("blogPostItemLength = "+blogPostItem.length);

			for( var i = 0; i < blogPostItem.length; i++ ){
				blogPostCategory = blogPostItem[i].getAttribute("data-post-category");
				// console.log("blogPostCategory = "+blogPostCategory);
				
				if( filterCategory == 'all' ){
					blogPostItem.show();
				} else if( blogPostCategory.toLowerCase().indexOf(filterCategory) > -1 ){
					blogPostItem[i].style.display = "";
				} else {
					blogPostItem[i].style.display = "none";
				}
			}

		});

	})();

	(function (){
		function resizeGridItem(item){
			var grid = document.getElementsByClassName("mz-blog-post-list");
			var rowHeight = 1;
			var rowGap = 40;
			var imgWrapHeight = Math.ceil( item.querySelector('.mz-blog-post-img-wrap').getBoundingClientRect().height );
			// console.log( "mz-blog-post-img-wrap = "+imgWrapHeight );

			var detailsWrapHeight = Math.ceil( item.querySelector('.mz-blog-post-details-wrap').getBoundingClientRect().height );
			// console.log( "mz-blog-post-details-wrap = "+ detailsWrapHeight );
			

			var totalHeight = Math.ceil( imgWrapHeight + detailsWrapHeight );
			// console.log( "mz-blog-post = "+ totalHeight );

			var rowSpan = Math.ceil(( imgWrapHeight + detailsWrapHeight ) / ( rowHeight ));
			// console.log( "rowSpan = "+ rowSpan );
			item.style.gridRowEnd = "span "+(rowSpan + rowGap);
		}

		function resizeAllGridItems(){
			allItems = document.getElementsByClassName("mz-blog-post-item");
			for( x = 0; x < allItems.length; x++ ){
				resizeGridItem( allItems[x] );
			}
		}

		function resizeInstance(instance){
			item = instance.elements[0];
			resizeGridItem(item);
		}

		window.onload = resizeAllGridItems();
		window.addEventListener("resize", resizeAllGridItems);

		allItems = document.getElementsByClassName("mz-blog-post-item");
	})();

	function searchFilterFunction(){
		var input, filter, titleValue, contentValue, dateValue, blogPostList, blogPostItem, blogPostDetails, blogPostTitle, blogPostContent, blogPostDate;
		input = document.getElementById("mzSearchBarInput");
		filter = input.value.toLowerCase();
		// console.log("filter = "+filter);
		blogPostList = document.getElementsByClassName("mz-blog-post-list");
		blogPostItem = document.getElementsByClassName("mz-blog-post-item");
		// console.log("blogPostItem = "+blogPostItem.length);

		for( var i = 0; i < blogPostItem.length; i++ ){
			blogPostTitle = blogPostItem[i].getElementsByClassName("mz-blog-post-title")[0];
			titleValue = blogPostTitle.innerText;
			console.log("titleValue = "+titleValue);

			blogPostContent = blogPostItem[i].getElementsByClassName("mz-blog-post-excerpt")[0];
			contentValue = blogPostContent.innerText;
			console.log("contentValue = "+contentValue);

			blogPostDate = blogPostItem[i].getElementsByClassName("mz-blog-post-released-date")[0];
			dateValue = blogPostDate.innerText;
			console.log("dateValue = "+dateValue);
			
			if( titleValue.toLowerCase().indexOf(filter) > -1 ){
				blogPostItem[i].style.display = "";
			} else if( contentValue.toLowerCase().indexOf(filter) > -1 ){
				blogPostItem[i].style.display = "";
			} else if ( dateValue.toLowerCase().indexOf(filter) > -1 ){
				blogPostItem[i].style.display = "";
			} else {
				blogPostItem[i].style.display = "none";
			}
		}
	}

</script>
<script>

</script>
</body>
</html>
