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

	<?php echo do_shortcode('[mz-sc-section--hero title="¿QUÉ QUIERES MEJORAR?" hero-bg="/wp-content/themes/metodo-zenon/images/MZ_Programs_Hero_sect-bg-v01-1440x440.png"]'); ?>

	<section class="mz-section mz-section--programs-content"
		id="programs-content">
		<div class="mz-overflow">
			<div class="mz-container">
				<p class="p-01">
					¿Qué quieres conseguir?
				</p>
				<h2>
					Descubre el MÉTODO ZENON con nuestros programas de resultados
				</h2>
				<div class="carousel-main" data-current-slide='1'>
					<div class="carousel-cell">
						<div class="programs-card">
							<div class="programs-card-number">
								01
							</div>
							<div class="programs-card-title">
								Quiero destacar en mi deporte
							</div>
							<hr>
							<a class="programs-card-link mz-link">
								Quiero saber más
							</a>
						</div>
					</div>
					<div class="carousel-cell">
						<div class="programs-card">
							<div class="programs-card-number">
								02
							</div>
							<div class="programs-card-title">
								Quiero un cambio definitivo en mi cuerpo
							</div>
							<hr>
							<a class="programs-card-link mz-link">
								Quiero saber más
							</a>
						</div>
					</div>
					<div class="carousel-cell">
						<div class="programs-card">
							<div class="programs-card-number">
								03
							</div>
							<div class="programs-card-title">
								Quiero dejar de sentir dolor
							</div>
							<hr>
							<a class="programs-card-link mz-link">
								Quiero saber más
							</a>
						</div>
					</div>
					<div class="carousel-cell">
						<div class="programs-card">
							<div class="programs-card-number">
								04
							</div>
							<div class="programs-card-title">
								Quiero recuperar mi salud y funcionalidad
							</div>
							<hr>
							<a class="programs-card-link mz-link">
								Quiero saber más
							</a>
						</div>
					</div>
					<div class="carousel-cell">
						<div class="programs-card">
							<div class="programs-card-number">
								05
							</div>
							<div class="programs-card-title">
								Quiero mantenerme san@ y funcional
							</div>
							<hr>
							<a class="programs-card-link mz-link">
								Quiero saber más
							</a>
						</div>
					</div>
					<div class="carousel-cell">
						<div class="programs-card">
							<div class="programs-card-number">
								06
							</div>
							<div class="programs-card-title">
								Quiero atención 100% personalizada
							</div>
							<hr>
							<a class="programs-card-link mz-link">
								Quiero saber más
							</a>
						</div>
					</div>
				</div>
				<div class="carousel-content">
					<?php /* ELITE */ ?>
					<div class="carousel-cell">
						<div class="mz-row">
							<div class="mz-col">
								<div class="mz-col-wrap">
									<h4>
										ÉLITE
									</h4>
									<h3>
										Quiero destacar en mi deporte
									</h3>
									<p class="p-02">
										Sabemos que en el deporte de rendimiento cada detalle cuenta
									</p>
									<div class="mz-inner-row">
										<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"></path>
											<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"></path>
											<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"></path>
											<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"></path>
											<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"></path>
											<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"></path>
											<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"></path>
										</svg>
										<div class="mz-inner-col">
											<h4>
												TRAINING
											</h4>
											<p class="p-03">
												Entrena con nosotros y te ayudaremos a alcanzar tu máximo potencial, sin perder el tiempo, y sin lesionarte
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<img class="mz-img"
									alt=""
									title=""
									src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
									width=""
									height=""
									loading=""/>
								<div class="overlap-label-wrap">
									<h3>
										ÉLITE
									</h3>
									<p class="p-04">
										Entrena como los deportistas de élite
									</p>
								</div>
							</div>
						</div>
						<div class="mz-row">
							<div class="mz-col">
								<div class="card-box">
									<div class="card-head">
										<h3>
											ÉLITE
										</h3>
									</div>
									<div class="card-body">
										<p class="p-05">
											Enfocado a personas con experiencia en entrenamiento, con una buena condición física que quieren aumentar su rendimiento de manera más específica. Mejoraremos tus niveles de fuerza, masa muscular, resistencia, potencia y resiliencia músculo-esquelética. Haciendo que estas mejorase se traduzcan en un aumento del rendimiento deportivo.
											<br/>
											Marca diferencias respecto a tus compañeros y contrincantes en solo unas semanas.
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<h5>
									¿Por qué el programa Élite?
								</h5>
								<p class="p-06">
									Llevamos décadas inmersos en el deporte profesional. Sabemos que los deportistas de competición estamos hechos de otra pasta, y que buscamos algo diferente, algo mejor. Si trabajas con nosotros te haremos rendir como nunca habías imaginado que podrías
								</p>
								<h5>
									¿En qué consiste?
								</h5>
								<p class="p-07">
									Planificación 100% personalizada, nutrición 100% personalizada, psicología deportiva y fisioterapia. Todo a tu disposición para que rindas a tu máximo nivel. Disfruta de más medios que muchos deportistas de élite, y consigue lo que nunca pensaste que lograrías.
								</p>
								<ul class="benefits-list">
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Planificación nutricional, física y de hábitos integrada y adaptada a tu estilo de vida</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Establecimiento de objetivos a largo, medio y corto plazo</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Planificación, periodización y programación del entrenamiento</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Sesiones de entrenamiento personalizadas</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Evaluación holística inicial (lesiones previas, puntos fuertes y débiles...)</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Evaluaciones periódicas para reajustar la planificación</span>
									</li>
								</ul>
								<div class="mz-inner-row">
									<a class="mz-cta mz-cta--primary"
										title="Prueba gratis el Método Zenon"
										target=""
										href="/contact-us"
										rel="">
										Prueba gratis el Método Zenon
									</a>
									<!-- <a class="mz-cta mz-cta--secondary"
										title="Prueba gratis el Método Zenon"
										target=""
										href=""
										rel="">
										Prueba gratis el Método Zenon
									</a> -->
								</div>
							</div>
						</div>
					</div>
					<?php /* METAMORFOSIS */ ?>
					<div class="carousel-cell">
						<div class="mz-row">
							<div class="mz-col">
								<div class="mz-col-wrap">
									<h4>
										METAMORFOSIS
									</h4>
									<h3>
										Quiero un cambio definitivo en mi cuerpo
									</h3>
									<p class="p-02">
										No pierdas más el tiempo, arriesgando tu salud, o haciendo el "entrenamiento" o la dieta de moda.
									</p>
									<div class="mz-inner-row">
										<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"></path>
											<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"></path>
											<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"></path>
											<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"></path>
											<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"></path>
											<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"></path>
											<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"></path>
										</svg>
										<div class="mz-inner-col">
											<h4>
												TRAINING
											</h4>
											<p class="p-03">
												Lorem ipsum dolor sit amet, consec tetur adipiscing elit
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<img class="mz-img"
									alt=""
									title=""
									src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
									width=""
									height=""
									loading=""/>
								<div class="overlap-label-wrap">
									<h3>
										METAMORFOSIS
									</h3>
									<p class="p-04">
										Consigue el cuerpo que deseas, de una vez por todas
									</p>
								</div>
							</div>
						</div>
						<div class="mz-row">
							<div class="mz-col">
								<div class="card-box">
									<div class="card-head">
										<h3>
											METAMORFOSIS
										</h3>
									</div>
									<div class="card-body">
										<p class="p-05">
											Si eres una persona que no está satisfecha con su aspecto, su funcionalidad y su rendimiento en el día a día, con poca experiencia entrenando y pocos resultados logrados. Si tus principales objetivos son la pérdida de peso y estilizar la figura, “encontrarte mejor” y mantener los hábitos sin demasiado esfuerzo, METAMORFOSIS es para ti
											<br />
											<br />
											Diviértete mejorando tu cuerpo y condición física en un tiempo récord.
											¿Cómo?
											Con el MÉTODO ZENON
											Una metodología basada en la evidencia científica. 
											Probada y mejorada a lo largo de casi 10 años.
											Aplicada en personas de diferentes niveles, que buscaban mejorar su estética y rendimiento físico.
											Haz que la gente se gire cuando pases ;)
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<h5>
									¿Por qué el programa METAMORFOSIS?
								</h5>
								<p class="p-06">
									Hemos ayudado a cientos de persona durante nuestra carrera profesional. Y sabemos, que en muchas ocasiones el problema no es solo el no saber qué debemos hacer, sino también el no ser capaces de hacerlo, de forma consistente. Por eso, el programa METAMORFOSIS está diseñado para que mejores tu cuerpo y condición física divirtiéndote, sin demasiado esfuerzo, y a un ritmo que te va a sorprender. ¿Quieres saber cómo?  Sigue leyendo...
								</p>
								<h5>
									¿En qué consiste?
								</h5>
								<p class="p-07">
									Disfrutarás de un equipo de profesionales al completo, para ti. Este programa incluye la planificación 100% personalizada de tu entrenamiento, junto con el desarrollo de cada sesión de entrenamiento contigo, guiándote, ayudándote, asegurándonos de que mejoras de forma segura. Además, está incluido GRATUITAMENTE asesoramiento nutricional personalizado y mejora de los hábitos de vida con nuestro nutricionista y psicólogo respectivamente.
								</p>
								<ul class="benefits-list">
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">¡Te verás en el espejo, como nunca!</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Entrenarás de forma segura</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Asesoramiento y atención personalizada</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Sin entrenamientos extenuantes</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">in perder el tiempo</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Tus amig@s y familiares alucinarán :)</span>
									</li>
								</ul>
								<div class="mz-inner-row">
									<a class="mz-cta mz-cta--primary"
										title="Prueba gratis el Método Zenon"
										target=""
										href="/contact-us"
										rel="">
										Prueba gratis el Método Zenon
									</a>
									<!-- <a class="mz-cta mz-cta--secondary"
										title="Prueba gratis el Método Zenon"
										target=""
										href=""
										rel="">
										Prueba gratis el Método Zenon
									</a> -->
								</div>
							</div>
						</div>
					</div>
					<?php /* ESPALDA SANA */ ?>
					<div class="carousel-cell">
						<div class="mz-row">
							<div class="mz-col">
								<div class="mz-col-wrap">
									<h4>
										ESPALDA SANA
									</h4>
									<h3>
										Quiero dejar de sentir dolor
									</h3>
									<p class="p-02">
										Vivir con dolor es una mierda. No tenemos todo el tiempo del mundo en esta vida, y no vale la pena pasarlo con dolor. 
										¿Crees que es "caro" entrenar con profesionales?
										¿Y cómo de caro es pasar tus días con dolor?
										¿Cómo de caro es no poder disfrutar de tus amigos, tu pareja, tus hijos...?
										SI quieres subirle el volumen a tu vida, este programa es para ti.
										Reduce y elimina tu dolor, y vuelve a hacer todas esas actividades que echas de menos :)
									</p>
									<div class="mz-inner-row">
										<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"></path>
											<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"></path>
											<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"></path>
											<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"></path>
											<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"></path>
											<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"></path>
											<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"></path>
										</svg>
										<div class="mz-inner-col">
											<h4>
												TRAINING
											</h4>
											<p class="p-03">
												Lorem ipsum dolor sit amet, consec tetur adipiscing elit
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<img class="mz-img"
									alt=""
									title=""
									src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
									width=""
									height=""
									loading=""/>
								<div class="overlap-label-wrap">
									<h3>
										ESPALDA SANA
									</h3>
									<p class="p-04">
										Disfruta de la vida SIN dolor
									</p>
								</div>
							</div>
						</div>
						<div class="mz-row">
							<div class="mz-col">
								<div class="card-box">
									<div class="card-head">
										<h3>
											ESPALDA SANA
										</h3>
									</div>
									<div class="card-body">
										<p class="p-05">
											Un día a día sin dolor es posible, y si crees que no, el PROGRAMA ESPALDA SANA te va a cambiar la vida.
											<br/>
											Mediante diferentes ejercicios de fortalecimiento del core (zona media del cuerpo), movilidad y equilibrio, mejoraremos tu forma física y conseguiremos que por fin disfrutes al 100% de tu cuerpo.
											<br/>
											<br/>
											¿Cómo?
											Con el MÉTODO ZENON
											Una metodología basada en la evidencia científica. 
											Probada y mejorada a lo largo de casi 10 años.
											Aplicada en personas de diferentes niveles, que buscaban mejorar su estética y rendimiento físico.
											Haz que la gente te pregunte cuál es tu secreto para estar así de bien ;)
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<h5>
									¿Por qué el programa ESPALDA SANA?
								</h5>
								<p class="p-06">
									Hemos ayudado a cientos de persona durante nuestra carrera profesional. El dolor de espalda es una patología multifactorial. Es decir, tiene muchas causas que se combinan para crear los síntomas que sientes. Nosotros no pondremos parches a ese problema (como lo es la medicación), sino que atajaremos el problema de raíz, yendo al origen del problema. De esta forma, dejarás de sentir dolor de forma definitiva.
								</p>
								<h5>
									¿En qué consiste?
								</h5>
								<p class="p-07">
									Disfrutarás de un equipo de profesionales al completo, para ti. Este programa incluye la planificación 100% personalizada de tu entrenamiento, junto con el desarrollo de cada sesión de entrenamiento contigo, guiándote, ayudándote, asegurándonos de que mejoras de forma segura. Además, está incluido sin coste adicional asesoramiento nutricional personalizado y mejora de los hábitos de vida con nuestro nutricionista y psicólogo, respectivamente.
								</p>
								<ul class="benefits-list">
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Disfrutarás de cada sesión</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Entrenarás de forma segura</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Asesoramiento y atención personalizada</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Sin entrenamientos extenuantes</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Sin perder el tiempo</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Tus amig@s y familiares alucinarán con tu cambio)</span>
									</li>
								</ul>
								<div class="mz-inner-row">
									<a class="mz-cta mz-cta--primary"
										title="Prueba gratis el Método Zenon"
										target=""
										href="/contact-us"
										rel="">
										Prueba gratis el Método Zenon
									</a>
									<!-- <a class="mz-cta mz-cta--secondary"
										title="Prueba gratis el Método Zenon"
										target=""
										href=""
										rel="">
										Prueba gratis el Método Zenon
									</a> -->
								</div>
							</div>
						</div>
					</div>
					<?php /* RECUPERATIO */ ?>
					<div class="carousel-cell">
						<div class="mz-row">
							<div class="mz-col">
								<div class="mz-col-wrap">
									<h4>
										RECUPERATIO
									</h4>
									<h3>
										Quiero recuperar mi salud y funcionalidad
									</h3>
									<p class="p-02">
										Lo más importante es la salud, y cuando sufrimos una enfermedad o lesión, que nos impide realizar las actividades que nos gustan, perdemos calidad de vida.
										Este programa está aquí para acompañarte durante el proceso de recuperación.
										Para que vuelvas mejor incluso que antes, de una forma rápida, y sobre todo, segura, sin pasos atrás.
									</p>
									<div class="mz-inner-row">
										<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"></path>
											<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"></path>
											<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"></path>
											<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"></path>
											<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"></path>
											<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"></path>
											<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"></path>
										</svg>
										<div class="mz-inner-col">
											<h4>
												TRAINING
											</h4>
											<p class="p-03">
												Lorem ipsum dolor sit amet, consec tetur adipiscing elit
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<img class="mz-img"
									alt=""
									title=""
									src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
									width=""
									height=""
									loading=""/>
								<div class="overlap-label-wrap">
									<h3>
										RECUPERATIO
									</h3>
									<p class="p-04">
										Vuelve más fuerte que antes
									</p>
								</div>
							</div>
						</div>
						<div class="mz-row">
							<div class="mz-col">
								<div class="card-box">
									<div class="card-head">
										<h3>
											RECUPERATIO
										</h3>
									</div>
									<div class="card-body">
										<p class="p-05">
											El programa RECUPERATIO tiene una meta muy clara: estar aún mejor que antes de tu lesión. No importa si sufres una enfermedad crónica o una lesión deportiva, etc.
											<br/>
											Analizaremos tu caso personalmente y diseñaremos todo tu proceso de recuperación y readaptación. Disfrutarás de todos los profesionales necesarios: área nutricional, psicológica, entrenamiento y fisioterapia de manera adaptada a tus necesidades particulares.
											<br/>
											<br/>
											Deja de sentir dolor en tus actividades cotidianas, y además. Empieza a hacer actividades que ni pensabas que podías.
											¿Cómo? Con el MÉTODO ZENON
											Una metodología basada en la evidencia científica. 
											Probada y mejorada a lo largo de casi 10 años.
											Aplicada en personas de diferentes niveles, que buscaban mejorar su estética y rendimiento físico.
											Haz que la gente te pregunte cuál es tu secreto para estar así de bien ;)
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<h5>
									¿Por qué el programa RECUPERATIO?
								</h5>
								<p class="p-06">
									Hemos ayudado a cientos de persona durante nuestra carrera profesional. Al sufrir una lesión o enfermedad no solo sufrimos físicamente, sino que condiciona nuestro estilo de vida, afecta a nuestra autoestima, etc. El programa RECUPERATIO tiene todos esos factores en cuenta, para ayudarte a volver a tu actividad cotidiana en un tiempo récord, con mejores sensaciones que nunca, y de forma segura
								</p>
								<h5>
									¿En qué consiste?
								</h5>
								<p class="p-07">
									Disfrutarás de un equipo de profesionales al completo, para ti. Este programa incluye la planificación 100% personalizada de tu entrenamiento, junto con el desarrollo de cada sesión de entrenamiento contigo, guiándote, ayudándote, asegurándonos de que mejoras de forma segura. Además, está incluido sin coste adicional asesoramiento nutricional personalizado y mejora de los hábitos de vida con nuestro nutricionista y psicólogo, respectivamente.
								</p>
								<ul class="benefits-list">
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Disfrutarás de cada sesión</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Entrenarás de forma segura</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Asesoramiento y atención personalizada</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Sin entrenamientos extenuantes</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Sin perder el tiempo</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Harás cosas que nunca pensaste que podrías</span>
									</li>
								</ul>
								<div class="mz-inner-row">
									<a class="mz-cta mz-cta--primary"
										title="Prueba gratis el Método Zenon"
										target=""
										href="/contact-us"
										rel="">
										Prueba gratis el Método Zenon
									</a>
									<!-- <a class="mz-cta mz-cta--secondary"
										title="Prueba gratis el Método Zenon"
										target=""
										href=""
										rel="">
										Prueba gratis el Método Zenon
									</a> -->
								</div>
							</div>
						</div>
					</div>
					<?php /* NURTURA */ ?>
					<div class="carousel-cell">
						<div class="mz-row">
							<div class="mz-col">
								<div class="mz-col-wrap">
									<h4>
										NURTURA
									</h4>
									<h3>
										Quiero mantenerme san@ y funcional
									</h3>
									<p class="p-02">
										Eos tota dicunt democritum no. Has natum gubergren ne. soleat sadipscing cu.
									</p>
									<div class="mz-inner-row">
										<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"></path>
											<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"></path>
											<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"></path>
											<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"></path>
											<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"></path>
											<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"></path>
											<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"></path>
										</svg>
										<div class="mz-inner-col">
											<h4>
												TRAINING
											</h4>
											<p class="p-03">
												Lorem ipsum dolor sit amet, consec tetur adipiscing elit
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<img class="mz-img"
									alt=""
									title=""
									src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
									width=""
									height=""
									loading=""/>
								<div class="overlap-label-wrap">
									<h3>
										NURTURA
									</h3>
									<p class="p-04">
										PROGRAM FOR YOU
									</p>
								</div>
							</div>
						</div>
						<div class="mz-row">
							<div class="mz-col">
								<div class="card-box">
									<div class="card-head">
										<h3>
											NURTURA
										</h3>
									</div>
									<div class="card-body">
										<p class="p-05">
											Si lo que buscas es mantenerte san@ y funcional, sin perder capacidad con el paso de los años, NURTURA está diseñado para ti. Nuestro compromiso es claro: Puedes sentirte más joven y gozar de más vitalidad que nunca, con menos esfuerzo del que piensas.
										</p>
										<ul>
											<li> 
												<span class="mz-title">PROGRAM</span>
												<hr>
												<span class="mz-curriculum">PHYSIO CURRICULUM</span>
											</li>
											<li> 
												<span class="mz-title">PROGRAM</span>
												<hr>
												<span class="mz-curriculum">PHYSIO CURRICULUM</span>
											</li>
											<li> 
												<span class="mz-title">PROGRAM</span>
												<hr>
												<span class="mz-curriculum">PHYSIO CURRICULUM</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<h5>
									Competitive Advantages
								</h5>
								<p class="p-06">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget.
								</p>
								<h5>
									Program Features
								</h5>
								<p class="p-07">
									Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Se d ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
								</p>
								<ul class="benefits-list">
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Relieve pain</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Improve movement or ability</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Prevent or recover from a sports injury</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Prevent disability or surgery</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Rehab after a stroke, accident, injury, or surgery</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Work on balance to prevent a slip or fall</span>
									</li>
								</ul>
								<div class="mz-inner-row">
									<a class="mz-cta mz-cta--primary"
										title="Prueba gratis el Método Zenon"
										target=""
										href="/contact-us"
										rel="">
										Prueba gratis el Método Zenon
									</a>
									<!-- <a class="mz-cta mz-cta--secondary"
										title="Prueba gratis el Método Zenon"
										target=""
										href=""
										rel="">
										Prueba gratis el Método Zenon
									</a> -->
								</div>
							</div>
						</div>
					</div>
					<?php /* ZENON */ ?>
					<div class="carousel-cell">
						<div class="mz-row">
							<div class="mz-col">
								<div class="mz-col-wrap">
									<h4>
										ZENON
									</h4>
									<h3>
										Si eres una persona que sabe lo que quiere y no le importa el precio, el PROGRAMA ZENON es para ti Lo tendrás TODO
									</h3>
									<p class="p-02">
										Eos tota dicunt democritum no. Has natum gubergren ne. soleat sadipscing cu.
									</p>
									<div class="mz-inner-row">
										<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"></path>
											<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"></path>
											<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"></path>
											<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"></path>
											<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"></path>
											<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"></path>
											<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"></path>
										</svg>
										<div class="mz-inner-col">
											<h4>
												TRAINING
											</h4>
											<p class="p-03">
												Lorem ipsum dolor sit amet, consec tetur adipiscing elit
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<img class="mz-img"
									alt=""
									title=""
									src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
									width=""
									height=""
									loading=""/>
								<div class="overlap-label-wrap">
									<h3>
										ZENON
									</h3>
									<p class="p-04">
										Lo tendrás TODO
									</p>
								</div>
							</div>
						</div>
						<div class="mz-row">
							<div class="mz-col">
								<div class="card-box">
									<div class="card-head">
										<h3>
											ZENON
										</h3>
									</div>
									<div class="card-body">
										<p class="p-05">
											El programa ZENON es una opción premium para aquellos clientes que quieren tener a todos los profesionales a su entera disposición. Con nuestra atención personalizada serás el auténtico protagonista de nuestro método revolucionario, que combina una atención continua e inigualable en las áreas más importantes de la salud física y mental. Un psicólogo, un dietista, un fisioterapeuta y un entrenador personal acompañarán y supervisarán tu progreso de manera continua.
											<br/>
											<br/>
											Aplicación del MÉTODO ZENON en su máxima expresión. Te aseguramos la consecución de tus objetivos en un tiempo récord.
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<h5>
									¿Por qué el PROGRAMA ZENON?
								</h5>
								<p class="p-06">
									Hemos ayudado a cientos de persona durante nuestra carrera profesional, y sabemos que hay personas que quieren lo mejor, la perfección. Es decir, saben lo que quieren, y quieren y pueden pagarlo. Si tú eres este tipo de personas, el programa ZENON es para ti.
								</p>
								<h5>
									¿En qué consiste?
								</h5>
								<p class="p-07">
									Disfrutarás de un equipo de profesionales al completo, para ti. Este programa incluye la atención plena de nuestros profesionales durante todo el proceso: planificación personalizada, nutrición, psicología, fisioterapia, asesoramiento online, resolución de dudas por teléfono y correo electrónico. Es decir, tienes nuestro compromiso pleno, y por ello, alcanzarás tus objetivos antes que nadie. De una forma segura, divertida, y sin sufrir
								</p>
								<ul class="benefits-list">
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Disfrutarás de cada sesión</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Entrenarás de forma segura</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Asesoramiento y atención personalizada</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Sin entrenamientos extenuantes</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Sin perder el tiempo</span>
									</li>
									<li class="benefits-item">
										<svg class="benefits-icon mz-svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13.2759 0.258764C13.369 0.176836 13.4801 0.111751 13.6027 0.0673184C13.7252 0.0228862 13.8569 0 13.9898 0C14.1228 0 14.2544 0.0228862 14.377 0.0673184C14.4996 0.111751 14.6106 0.176836 14.7037 0.258764C15.0937 0.598788 15.0992 1.14824 14.7173 1.49414L6.65399 9.71825C6.56244 9.80499 6.45134 9.8747 6.3275 9.92312C6.20365 9.97154 6.06965 9.99765 5.93371 9.99985C5.79777 10.0021 5.66273 9.9803 5.53686 9.93593C5.411 9.89156 5.29694 9.82549 5.20169 9.74178L0.295222 5.45207C0.105996 5.28557 0 5.06168 0 4.8285C0 4.59531 0.105996 4.37142 0.295222 4.20492C0.388287 4.123 0.499361 4.05791 0.621941 4.01348C0.74452 3.96905 0.876142 3.94616 1.0091 3.94616C1.14206 3.94616 1.27368 3.96905 1.39626 4.01348C1.51884 4.05791 1.62991 4.123 1.72298 4.20492L5.88488 7.844L13.2487 0.284648C13.2571 0.275556 13.2663 0.266912 13.2759 0.258764Z" fill="#7C4B31"></path>
										</svg>
										<span class="benefits-label">Harás cosas que nunca pensaste que podrías</span>
									</li>
								</ul>
								<div class="mz-inner-row">
									<a class="mz-cta mz-cta--primary"
										title="Prueba gratis el Método Zenon"
										target=""
										href="/contact-us"
										rel="">
										Prueba gratis el Método Zenon
									</a>
									<!-- <a class="mz-cta mz-cta--secondary"
										title="Prueba gratis el Método Zenon"
										target=""
										href=""
										rel="">
										Prueba gratis el Método Zenon
									</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php echo do_shortcode('[mz-sc-section--testimonials-carousel]'); ?>

	<?php echo do_shortcode('[mz-sc-section--recent-articles]'); ?>

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
