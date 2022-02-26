<?php require 'config/Db.php'; ?>
<?php require 'include/head.php'; ?>

<?php 
	$data = new DbConnection;

?>
<!-- preloader -->
<div class="preloader">
	<div class="box">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>
<!-- end preloader -->

<!-- Header  -->
<header class="header">
	<div class="container">
		<div class="row justify-content-between">
			<div class="logo">
				<a href="index.php">E</a>
			</div>
			<div class="hamburger-btn outer-shadow hover-in-shadow">
				<span></span>
			</div>
		</div>
	</div>
</header>
<!--/End Header  -->

<!-- navigation menue-->
<nav class="nav-menu">
	<div class="close-nav-menu outer-shadow hover-in-shadow">&times;</div>
	<div class="nav-menu-inner">
		<ul>
		<!-- <?php 
				$menu_data = $data->select('menu','menu_status = 1');
				foreach($menu_data as $menu){	
				echo '<li><a href="#'.$menu['menu_name'].'" class="link-item inner-shadow">'.$menu['menu_name'].'</a></li>';
            }
		?>	 -->
			<li><a href="#home" class="link-item inner-shadow active"> home</a></li>
			<li><a href="#about" class="link-item outer-shadow hover-in-shadow">about</a></li>
			<li><a href="#services" class="link-item outer-shadow hover-in-shadow">services</a></li>
			<li><a href="#portfolio" class="link-item outer-shadow hover-in-shadow">portfolio</a></li>
			<li><a href="#testimonal" class="link-item outer-shadow hover-in-shadow">testimonial</a></li>
			<!-- <li><a href="#certifications" class="link-item outer-shadow hover-in-shadow">certifications</a></li> -->
			<li><a href="#contact" class="link-item outer-shadow hover-in-shadow">contact</a></li>


		</ul>
	</div>
	<!-- copyright-->

<p class="copyright-text">&copy; 2021 Enad Abuzaid website</p>

<!-- /End copyright-->
</nav>
<div class="fade-out-effect"></div>

<!-- /End navigation menue-->


	<!-- home section-->

	<section class="home-section section active" id="home">
		<!--effect warp -->

		<div class="effect-wrap">
			<div class="effect effect-1"></div>
			<div class="effect effect-2">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>

			<div class="effect effect-3"></div>
			<div class="effect effect-4"></div>
			<div class="effect effect-5">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<!--/End effect warp -->

		<div class="container">
			<div class="row full-screen align-items-center">
				<div class="home-text">
					<p>Hello</p>
					<h2>I'm Enad Abuzaid</h2>
				
						<span class="typewriter">
							<h1 class="typing-erase">Web Developer and Designer</h1>
						</span>
					
					
					<h1>
						<a href="" class="typewrite" data-period="2000" >
						  <span class="wrap"></span>
						</a>
					  </h1>
					<a href="#about" class="link-item btn-1 outer-shadow hover-in-shadow">More About Me</a>
				</div>
				<div class="home-img">
					<div class="img-box inner-shadow">
						<img class="outer-shadow" src="ee1.png" alt="test">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- /End home section-->

	<!-- about section-->
	<section class="about-section section" id="about">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h2 data-heading="main info">About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="about-img">
					<div class="img-box inner-shadow">
						<img class="outer-shadow" src="ee1.png" alt="test">
					</div>
				<!-- social media-->
					<div class="socil-links">
						<a href="" class="outer-shadow hover-in-shadow"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.linkedin.com/in/enad-abuzaid/" class="outer-shadow hover-in-shadow"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://github.com/Enadabuzaid/" class="outer-shadow hover-in-shadow"><i class="fab fa-git"></i></a>
						<a href="https://www.facebook.com/enad.abuzaid" class="outer-shadow hover-in-shadow"><i class="fab fa-twitter"></i></a>
						<a href="" class="outer-shadow hover-in-shadow"><i class="fab fa-instagram"></i></a>
					</div>

				<!-- End social media-->
				</div>
				<div class="about-info">
				<?php 
						$about_data = $data->select('about_section_paragraphs','paragraph_status = 1');
						foreach($about_data as $about){
								
				?>	
					<p><?php echo $about['paragraph_body'];?></p>

				<?php } ?>
						<!-- <p>I am a fresh graduate with the
							skill of learning and self development in the fields of
							information technology,
							especially the web field .I love
							designing and developing
							websites in an attractive and
							creative way.</p> -->
					<!-- <p>numquam ab doloremque accusamus totam enim cupiditate dolor optio, sed at, laborum tenetur id voluptatum sunt facere? Reprehenderit, excepturi.numquam ab doloremque accusamus totam enim cupiditate dolor optio, sed at, laborum tenetur id voluptatum sunt facere? Reprehenderit, excepturi.</p> -->
					<!-- <p>numquam ab doloremque accusamus totam enim cupiditate dolor optio, sed at, laborum tenetur id voluptatum sunt facere? Reprehenderit, excepturi.numquam ab doloremque accusamus totam enim cupiditate dolor optio, sed at, laborum tenetur id voluptatum sunt facere? Reprehenderit, excepturi.</p> -->

					<a href="Enad_abuzaid.pdf" class="link-item btn-1 outer-shadow hover-in-shadow">Download CV</a>
					<a href="#contact" class="btn-1 outer-shadow hover-in-shadow">Hire ME</a>
				</div>
			</div>
			<!-- about tabs -->
			<div class="row">
				<div class="about-tabs">
					<span class="tab-item outer-shadow active" data-target=".skills">Skills</span>
					<span class="tab-item" data-target=".experience">Experience</span>
					<span class="tab-item" data-target=".education">Education</span>

				</div>
			</div>

			<!--/ End about tabs -->
			<!-- skills  -->
			<div class="row">
				<div class="skills tab-content active">
					<div class="row">
						<!-- skill item start -->
						<?php 
						$skill_data = $data->select('skills','skill_status = 1');
						foreach($skill_data as $skill){	
						?>	
						<div class="skill-item">
							<p><?php echo $skill['skill_name'] ?></p>
							<div class="progress inner-shadow">
								<div class="progress-bar" style="width: calc(<?php echo $skill['skill_progress'] ?>% - 14px)">
									<span><?php echo $skill['skill_progress'] ?>%</span>
								</div>
							</div>
						</div>

						<?php } ?>
						<!-- skill item end -->

						
					</div>
				</div>
			</div>
			<!--/ End skills -->
			<!--experience start  -->
			<div class="row">
				<div class="experience tab-content">
					<div class="row">
						<div class="timeline">
							<div class="row">
								<!-- timeline-item -->
								<?php 
									$experience_data = $data->select('experience','experience_status = 1');
									foreach($experience_data as $experience){	
								?>	
									<div class="timeline-item">
										<div class="timeline-item-inner outer-shadow"><i class="fas fa-briefcase icon"></i>
											<span><?php echo $experience['experience_start'] ." - ".  $experience['experience_end'];?></span>
											<h3><?php echo $experience['experience_title'];?></h3>
											<h4><?php echo $experience['experience_company'];?></h4>
											<p><?php echo $experience['experience_des'];?></p>
										</div>
									</div>
								<?php } ?>
								<!-- Endtimeline-item -->
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End experience  -->

			<!-- education section-->
			<div class="row">
				<div class="education tab-content">
					<div class="row">
						<div class="timeline">
							<div class="row">
								<!-- timeline-item -->
								<div class="timeline-item">
									<div class="timeline-item-inner outer-shadow"><i class="fas fa-graduation-cap icon"></i>
										<span>2016 - 2020</span>
										<h3>University of Jordan</h3>
										<h4>Business Information Technology</h4>
										<p>Taking up specialization
											courses in data analyst,
											database, programming with
											some business courses to
											broaden the skillset</p>
									</div>
								</div>
								<!-- Endtimeline-item -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end education  section-->




		</div>

	</section>
	<!-- / End about section-->


	<!-- services  section-->
	<section class="service-section section" id="services">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h2 data-heading="Services">Whhat I do</h2>
				</div>
			</div>
			<div class="row">
				<!-- service item -->
				<?php 
						$service_data = $data->select('services','service_status = 1');
						foreach($service_data as $service){	
						?>	
						<div class="service-item">
							<div class="service-item-inner outer-shadow">
								<div class="icon inner-shadow">
									<i class="<?php echo $service['service_icon'];?>"></i>
								</div>
								<h3><?php echo $service['service_title'];?></h3>
								<p><?php echo $service['service_desc'];?></p>
							</div>
						</div>
						

				<?php } ?>
				<!-- end service item -->	
			</div>
		</div>
	</section>
	<!-- end service section  -->


		<!--  portfolio section -->
		<section class="portfolio-section section" id="portfolio">
			<div class="container">
				<div class="row">
					<div class="section-title">
						<h2 data-heading="protfolio">Latest Works</h2>
					</div>
				</div>
				<!-- start portfolio product-->
				<div class="row">
					<div class="portfolio-filter">
						<span class="filter-item outer-shadow active" data-target="all">
						all</span>
						<?php 
						$project_type_data = $data->select('project_type','project_type_status = 1');
						foreach($project_type_data as $project_type){	
						?>
						<span class="filter-item" data-target="<?php echo $project_type['project_target'];?>"><?php echo $project_type['project_type_name'];?></span>
						<?php } ?>
					</div>
				</div>
				<!-- end portfolio product-->

				<!-- start portfolio product item-->
					<div class="row portfolio-items">

					<?php 
						$project_data = $data->select('projects','project_status = 1');
						foreach($project_data as $project){	
							$project_type_number = $project['project_type'];
							$project_id = $project['project_id'];

					?>	
				<!-- start portfolio  item-->
				<?php 
						$project_type_data2 = $data->select('project_type',"project_type_status = 1 AND project_type_id = $project_type_number");
						foreach($project_type_data2 as $project_type2){		
				?>
						<div class="portfolio-item" data-category="<?php echo $project_type2['project_target']; ?>">
				<?php } ?>
							<div class="portfolio-item-inner outer-shadow">
								<div class="portfolio-item-img">
								<?php 
									$photo = [];
										$project_photos = $data->select('project_photos',"photo_status = 1 AND project_id = $project_id");
										foreach($project_photos as $project_photo){	
											array_push($photo,$project_photo['photo']);
										}
										
										
								?>
									<img src="img/<?php echo $project['project_cover'];?>" alt="pro1" data-screenshots="
										<?php 
											echo 'img/'.$project['project_cover'].',';
											for($i=0; $i < count($photo) - 1; $i++){
												echo $img = "img/".$photo[$i].",";
											}
											echo 'img/'.end($photo);
										?>
									">
								 
									<!-- view project btn-->
									<span class="view-project">view project</span>
								</div>
								<p class="portfolio-item-title"><?php echo $project['project_title'];?></p>


												<!-- start portfolio  details-->
														<div class="portfolio-item-details">
														<?php 
																$project_details = $data->select('project_details',"project_details_status = 1 AND project_id = $project_id");
																foreach($project_details as $project_detail){		
															?>
															<div class="row">
																<div class="description">
																	<h3>Project Brief</h3>
																	<p><?php echo $project_detail['project_brief'] ?></p>
																</div>
																<div class="info">
																	<h3>Project info</h3>
																		<ul>
																			<li>Date - <span><?php echo $project_detail['date'] ?>.</span></li>
																			<li>Client - <span><?php echo $project_detail['client'] ?>.</span></li>
																			<li>Tools - <span><?php echo $project_detail['tools'] ?>.</span></li>
																			<li>demo - <span><a href="<?php echo $project_detail['demo'] ?>">Visit</a></span></li>
																			<li>code - <span><a href="<?php echo $project_detail['code'] ?>">code</a></span></li>
																			<li>more screenshots - <span><a href="<?php echo $project_detail['screenshot_link'] ?>">link</a></span></li>
																		</ul>
																</div>
															</div>
															<?php } ?>
														</div>
													<!-- end portfolio  details-->
											
							</div>
						</div>
					<!-- end portfolio  item-->

						

				<?php } ?>
						<!-- start portfolio  item-->
							<div class="portfolio-item" data-category="web-application">
								<div class="portfolio-item-inner outer-shadow">
									<div class="portfolio-item-img">
										<img src="img/incouces/cover.png" alt="pro1" data-screenshots="
										img/incouces/1.png,
										img/incouces/2.png,
										img/incouces/3.png,
										img/incouces/8.png,
										img/incouces/5.png,
										img/incouces/6.png,">
										<!-- here the ( , ) for loading -->
										<!-- view project btn-->
										<span class="view-project">view project</span>
									</div>
									<p class="portfolio-item-title">Invoices Project</p>
									<!-- start portfolio  details-->
										<div class="portfolio-item-details">
											<div class="row">
												<div class="description">
													<h3>Project Brief</h3>
													<p>
														<ul>
															<li>section (CRUD)</li>
															<li>product belong to section (CRUD)</li>
															<li>reports ( search number of invoice or date )</li>
															<li>users ( permissions and roles )</li>
															<li>email notification .</li>
															<li>real notification using db</li>
															<li>
																inovies :
																<ul>
																	<li> - CRUD , archive , analysis , attachment</li>
																	<li> - attachment (CRUD)</li>
																	<li> - invoice status</li>
																</ul>
															</li>
														</ul>
														</p>
												</div>
												<div class="info">
													<h3>Project info</h3>
														<ul>
															<li>Date - <span>2020</span></li>
															<li>Clinet - <span>none - just for learning</span></li>
															<li>Tools - <span>Laravel</span></li>
															<li>web - <span><a href="https://github.com/Enadabuzaid/Invocies-project.git" target="_blank">https://github.com/Enadabuzaid/Invocies-project.gi</a></span></li>
															<li>more secreenShots - <span><a href="https://bit.ly/3uW8F9s" target="_blank">https://bit.ly/3uW8F9s</a></span></li>
														</ul>
												</div>
											</div>
										</div>
									<!-- end portfolio  details-->
								</div>
							</div>
						<!-- end portfolio  item-->
						<!-- start portfolio  item-->
							<div class="portfolio-item" data-category="web-application">
								<div class="portfolio-item-inner outer-shadow">
									<div class="portfolio-item-img">
										<img src="img//s-1/cover.png" alt="pro1" data-screenshots="
										img/s-1/1.png,
										img/s-1/2.png,
										img/s-1/3.png,
										img/s-1/4.png,
										img/s-1/5.png">
										<!-- view project btn-->
										<span class="view-project">view project</span>
									</div>
									<p class="portfolio-item-title">Sandni app web</p>
									<!-- start portfolio  details-->
										<div class="portfolio-item-details">
											<div class="row">
												<div class="description">
													<h3>Project Brief</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque </p>
												</div>
												<div class="info">
													<h3>Project info</h3>
														<ul>
															<li>Date - <span>2020</span></li>
															<li>Clinen - <span>xyz</span></li>
															<li>Tools - <span>html,css,js</span></li>
															<li>web - <span><a href="www.domian.com"></a></span></li>
														</ul>
												</div>
											</div>
										</div>
									<!-- end portfolio  details-->
								</div>
							</div>
						<!-- end portfolio  item-->
						<!-- start portfolio  item-->
							<div class="portfolio-item" data-category="web-application">
								<div class="portfolio-item-inner outer-shadow">
									<div class="portfolio-item-img">
										<img src="img/s-2/cover.png" alt="pro1" data-screenshots="
										img/s-2/1.png,
										img/s-2/14.png,
										img/s-2/12.png,
										img/s-2/5.png,
										img/s-2/10.png,
										img/s-2/11.png,
										img/s-2/12.png">
										<!-- view project btn-->
										<span class="view-project">view project</span>
									</div>
									<p class="portfolio-item-title">Sandni app V2</p>
									<!-- start portfolio  details-->
										<div class="portfolio-item-details">
											<div class="row">
												<div class="description">
													<h3>Project Brief</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque </p>
												</div>
												<div class="info">
													<h3>Project info</h3>
														<ul>
															<li>Date - <span>2020</span></li>
															<li>Clinen - <span>xyz</span></li>
															<li>Tools - <span>html,css,js</span></li>
															<li>web - <span><a href="www.domian.com"></a></span></li>
														</ul>
												</div>
											</div>
										</div>
									<!-- end portfolio  details-->
								</div>
							</div>
						<!-- end portfolio  item-->
						<!-- start portfolio  item-->
							<div class="portfolio-item" data-category="web-application">
								<div class="portfolio-item-inner outer-shadow">
									<div class="portfolio-item-img">
										<img src="img/e-comm/cover.png" alt="pro1" data-screenshots="
															img/e-comm/1.png,
															img/e-comm/2.png,
															img/e-comm/3.png,
															img/e-comm/4.png,
															img/e-comm/5.png">
															<!-- view project btn-->
										<span class="view-project">view project</span>
									</div>
									<p class="portfolio-item-title">Simi E-commerce</p>
														<!-- start portfolio  details-->
															<div class="portfolio-item-details">
																<div class="row">
																	<div class="description">
																		<h3>Project Brief</h3>
																		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque </p>
																	</div>
																	<div class="info">
																		<h3>Project info</h3>
																			<ul>
																				<li>Date - <span>2020</span></li>
																				<li>Client - <span>xyz</span></li>
																				<li>Tools - <span>html,css,js</span></li>
																				<li>web - <span><a href="www.domian.com"></a></span></li>
																			</ul>
																	</div>
																</div>
															</div>
								<!-- end portfolio  details-->
								</div>
							</div>
						<!-- end portfolio  item-->
						<!-- start portfolio  item-->
						<div class="portfolio-item" data-category="web-design">
							<div class="portfolio-item-inner outer-shadow">
								<div class="portfolio-item-img">
									<img src="img/web-design/1/1.png" alt="pro1" data-screenshots="
														img/web-design/1/1.png,
														img/web-design/1/2.png,
														img/web-design/1/3.png,
														img/web-design/1/4.png,
														img/web-design/1/5.png,
														img/web-design/1/6.png">
														<!-- view project btn-->
									<span class="view-project">view project</span>
								</div>
								<p class="portfolio-item-title">Digital web</p>
													<!-- start portfolio  details-->
														<div class="portfolio-item-details">
															<div class="row">
																<div class="description">
																	<h3>Project Brief</h3>
																	<p>Responsive website Just for learning and practice in web design so this website not real  </p>
																</div>
																<div class="info">
																	<h3>Project info</h3>
																		<ul>
																			<li>Date - <span>2021</span></li>
																			<li>Clinen - <span>none - just for practice</span></li>
																			<li>Tools - <span>html,css</span></li>
																			<li>web - <span><a href="https://enadabuzaid.github.io/firstWeb/" target="_blank">visit</a></span></li>
																			<li>code - <span><a href="https://github.com/Enadabuzaid/firstWeb" target="_blank">https://github.com/Enadabuzaid/firstWeb</a></span></li>
																		</ul>
																</div>
															</div>
														</div>
							<!-- end portfolio  details-->
							</div>
						</div>
					<!-- end portfolio  item-->
					<!-- start portfolio  item-->
					<div class="portfolio-item" data-category="web-design">
						<div class="portfolio-item-inner outer-shadow">
							<div class="portfolio-item-img">
								<img src="img/web-design/2/1.png" alt="pro1" data-screenshots="img/web-design/2/1.png">
													<!-- view project btn-->
								<span class="view-project">view project</span>
							</div>
							<p class="portfolio-item-title">Digital web</p>
												<!-- start portfolio  details-->
													<!-- <div class="portfolio-item-details">
														<div class="row">
															<div class="description">
																<h3>Project Brief</h3>
																<p>Responsive website Just for learning and practice in web design so this website not real  </p>
															</div>
															<div class="info">
																<h3>Project info</h3>
																	<ul>
																		<li>Date - <span>2021</span></li>
																		<li>Clinen - <span>none - just for practice</span></li>
																		<li>Tools - <span>html,css</span></li>
																		<li>web - <span><a href="https://enadabuzaid.github.io/firstWeb/" target="_blank">visit</a></span></li>
																		<li>code - <span><a href="https://github.com/Enadabuzaid/firstWeb" target="_blank">https://github.com/Enadabuzaid/firstWeb</a></span></li>
																	</ul>
															</div>
														</div>
													</div> -->
						<!-- end portfolio  details-->
						</div>
					</div>
				<!-- end portfolio  item-->
						<!-- start portfolio  item-->
						<div class="portfolio-item" data-category="wordpress">
							<div class="portfolio-item-inner outer-shadow">
								<div class="portfolio-item-img">
									<img src="img/wordpress/1/1.png" alt="pro1" data-screenshots="
														img/wordpress/1/1.png,
														img/wordpress/1/2.png,
														img/wordpress/1/3.png,
														img/wordpress/1/4.png,
														img/wordpress/1/5.png">
														<!-- view project btn-->
									<span class="view-project">view project</span>
								</div>
								<p class="portfolio-item-title">smart station website</p>
													<!-- start portfolio  details-->
														<div class="portfolio-item-details">
															<div class="row">
																<div class="description">
																	<h3>Project Brief</h3>
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque </p>
																</div>
																<div class="info">
																	<h3>Project info</h3>
																		<ul>
																			<li>Date - <span>2021</span></li>
																			<li>Clinen - <span>smart station</span></li>
																			<li>Tools - <span>wordpress , Backer page builder ,Jevlen Theme ..</span></li>
																			<li>web - <span><a href="https://ssit-jo.com/">Visit</a></span></li>
																		</ul>
																</div>
															</div>
														</div>
							<!-- end portfolio  details-->
							</div>
						</div>
					<!-- end portfolio  item-->
						<!-- start portfolio  item-->
							<div class="portfolio-item" data-category="design">
								<div class="portfolio-item-inner outer-shadow">
									<div class="portfolio-item-img">
										<img src="img/design/1/1d.png" alt="pro1" data-screenshots="
										img/design/1/1d.png,
										img/design/1/2d.png,
										img/design/1/3d.png">
										<!-- view project btn-->
										<span class="view-project">view project</span>
									</div>
									<p class="portfolio-item-title">UI Design for Sandni app</p>
									<!-- start portfolio  details-->
										<div class="portfolio-item-details">
											<div class="row">
												<div class="description">
													<h3>Project Brief</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque </p>
												</div>
												<div class="info">
													<h3>Project info</h3>
														<ul>
															<li>Date - <span>2020</span></li>
															<li>Clinen - <span>xyz</span></li>
															<li>Tools - <span>html,css,js</span></li>
															<li>web - <span><a href="www.domian.com"></a></span></li>
														</ul>
												</div>
											</div>
										</div>
									<!-- end portfolio  details-->
								</div>
							</div>
						<!-- end portfolio  item-->
						<!-- start portfolio  item-->
												<div class="portfolio-item" data-category="design">
													<div class="portfolio-item-inner outer-shadow">
														<div class="portfolio-item-img">
															<img src="img/design/2/1d.png" alt="pro1" data-screenshots="
															img/design/2/1d.png,
															img/design/2/2d.png,
															img/design/2/3d.png,
															img/design/2/4d.png,
															img/design/2/5d.png">
															<!-- view project btn-->
															<span class="view-project">view project</span>
														</div>
														<p class="portfolio-item-title">Redesign OLX </p>
														<!-- start portfolio  details-->
															<div class="portfolio-item-details">
																<div class="row">
																	<div class="description">
																		<h3>Project Brief</h3>
																		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, earum officia numquam ab doloremque </p>
																	</div>
																	<div class="info">
																		<h3>Project info</h3>
																			<ul>
																				<li>Date - <span>2020</span></li>
																				<li>Clinen - <span>xyz</span></li>
																				<li>Tools - <span>html,css,js</span></li>
																				<li>web - <span><a href="www.domian.com"></a></span></li>
																			</ul>
																	</div>
																</div>
															</div>
														<!-- end portfolio  details-->
													</div>
												</div>
						<!-- end portfolio  item-->
					</div>
				<!-- end portfolio product item-->
			</div>
			<center>
				<p class="mypara">also can visit my <span class="socil" title="codepen"><a target="_blank" href="https://codepen.io/enadabuzaid" class="outer-shadow hover-in-shadow"><i class="fab fa-codepen"></i></a></span>
					and <span class="socil" title="github"><a href="https://github.com/Enadabuzaid/" target="_blank" class="outer-shadow hover-in-shadow"><i class="fab fa-git"></i></a></span> to see everything new
				</p>
				<a href="#testimonal" class="link-item btn-1 outer-shadow hover-in-shadow" style="margin-bottom:30px;margin-top:25px">See testimonal</a>
			</center>
		</section>
		<!-- end protfolio section-->

		<!-- testimonial  section -->
			<section class="testimonal-section section" id="testimonal">
				<div class="container">
					<div class="row">
						<div class="section-title">
							<h2 data-heading="testimonial">Client testimonial</h2>
						</div>
					</div>
					<div class="row">
						<div class="testi-box">
							<div class="testi-slider outer-shadow">
								<div class="testi-slider-container">
								<!-- testi item start -->
									<div class="testi-item active">
										<i class="fas fa-quote-left left"></i>
										<i class="fas fa-quote-right right"></i>
										<p>Lorem ipsum dolor sit amet, consectetur  at eius doloribus, quod cumque cum porro nemo placeat sunt?</p>
										<img src="img/profile.png" alt="testi">
										<span>Enad Abuzaid</span>
									</div>
								<!-- testi item end-->
								<!-- testi item start -->
									<div class="testi-item ">
										<i class="fas fa-quote-left left"></i>
										<i class="fas fa-quote-right right"></i>
										<p>Lorem ipsum dolor sit amet, consectetur  at eius doloribus, quod cumque cum porro nemo placeat sunt?</p>
										<img src="img/profile2 (1).png" alt="testi">
										<span>Aya Abuzaid</span>
									</div>
								<!-- testi item end-->
								</div>
							</div>
							<div class="testi-slider-nav">
								<span class="prev outer-shadow hover-in-shadow"><i class="fas fa-angle-left"></i></span>
								<span class="next outer-shadow hover-in-shadow"><i class="fas fa-angle-right"></i></span>

							</div>
						</div>
					</div>
				</div>
				<!-- <center><a href="#certifications" class="link-item btn-1 outer-shadow hover-in-shadow" style="margin-bottom:30px;margin-top:25px">See certifications</a></center> -->
			</section>
		<!--  end testimonial  section -->


		<!-- certification section -->
		<section class="certi-section section" id="certifications">
			<div class="container">
				<div class="row">
					<div class="section-title">
						<h2 data-heading="improving">My certifications</h2>
					</div>
				</div>
				<!-- statr my container -->
				<div class="my-container">
					<div class="row">
						<!-- start card -->
						<div class="portfolio-item-inner outer-shadow hover-in-shadow">
							<div class="card">
								<div class="img-box inner-shadow">
									<img src="https://images.pexels.com/photos/1833586/pexels-photo-1833586.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">
								</div>
								<div class="content-box">
									<div class="content">
										<h3>certification #1</h3>
										<p>Lorem ipsum dolor sit amet consectetur 
											adipisicing elit. Necessitatibus ipsa 
											quas unde alias sunt saepe nesciunt
											 assumenda animi officia rerum. 
											 Temporibus voluptatem laborum 
											 officiis, ut accusantium facilis 
											 iusto quisquam eligendi?</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- end card -->
						<!-- start card -->
						<div class="portfolio-item-inner outer-shadow hover-in-shadow">
							<div class="card">
								<div class="img-box">
									<img src="https://images.pexels.com/photos/1149300/pexels-photo-1149300.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
								</div>
								<div class="content-box">
									<div class="content">
										<h3>certification #2</h3>
										<p>Lorem ipsum dolor sit amet consectetur 
											adipisicing elit. Necessitatibus ipsa 
											quas unde alias sunt saepe nesciunt
											assumenda animi officia rerum. 
											Temporibus voluptatem laborum 
											officiis, ut accusantium facilis 
											iusto quisquam eligendi?</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- start card -->
						<div class="portfolio-item-inner outer-shadow hover-in-shadow">
							<div class="card">
								<div class="img-box">
									<img src="https://images.pexels.com/photos/1838607/pexels-photo-1838607.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">
								</div>
								<div class="content-box">
									<div class="content">
										<h3>certification #3</h3>
										<p>Lorem ipsum dolor sit amet consectetur 
											adipisicing elit. Necessitatibus ipsa 
											quas unde alias sunt saepe nesciunt
											assumenda animi officia rerum. 
											Temporibus voluptatem laborum 
											officiis, ut accusantium facilis 
											iusto quisquam eligendi?</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- start card -->
						<div class="portfolio-item-inner outer-shadow hover-in-shadow">
							<div class="card">
								<div class="img-box">
									<img src="https://images.pexels.com/photos/2079670/pexels-photo-2079670.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">
								</div>
								<div class="content-box">
									<div class="content">
										<h3>certification #4</h3>
										<p>Lorem ipsum dolor sit amet consectetur 
											adipisicing elit. Necessitatibus ipsa 
											quas unde alias sunt saepe nesciunt
											assumenda animi officia rerum. 
											Temporibus voluptatem laborum 
											officiis, ut accusantium facilis 
											iusto quisquam eligendi?</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- start card -->
						<div class="portfolio-item-inner outer-shadow hover-in-shadow">
							<div class="card">
								<div class="img-box">
									<img src="https://images.pexels.com/photos/297494/pexels-photo-297494.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">
								</div>
								<div class="content-box">
									<div class="content">
										<h3>certification #5</h3>
										<p>Lorem ipsum dolor sit amet consectetur 
											adipisicing elit. Necessitatibus ipsa 
											quas unde alias sunt saepe nesciunt
											assumenda animi officia rerum. 
											Temporibus voluptatem laborum 
											officiis, ut accusantium facilis 
											iusto quisquam eligendi?</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- start card -->
						<div class="portfolio-item-inner outer-shadow hover-in-shadow">
							<div class="card">
								<div class="img-box">
									<img src="https://images.pexels.com/photos/4992438/pexels-photo-4992438.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">
								</div>
								<div class="content-box">
									<div class="content">
										<h3>certification #6</h3>
										<p>Lorem ipsum dolor sit amet consectetur 
											adipisicing elit. Necessitatibus ipsa 
											quas unde alias sunt saepe nesciunt
											assumenda animi officia rerum. 
											Temporibus voluptatem laborum 
											officiis, ut accusantium facilis 
											iusto quisquam eligendi?</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- start card -->
						<div class="portfolio-item-inner outer-shadow hover-in-shadow">
							<div class="card">
								<div class="img-box">
									<img src="https://images.pexels.com/photos/7175442/pexels-photo-7175442.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">
								</div>
								<div class="content-box">
									<div class="content">
										<h3>certification #7</h3>
										<p>Lorem ipsum dolor sit amet consectetur 
											adipisicing elit. Necessitatibus ipsa 
											quas unde alias sunt saepe nesciunt
											assumenda animi officia rerum. 
											Temporibus voluptatem laborum 
											officiis, ut accusantium facilis 
											iusto quisquam eligendi?</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>
				<!-- my container end  -->
				<center><a href="#contact" class="link-item btn-1 outer-shadow hover-in-shadow" style="margin-bottom:30px;margin-top:25px">Contact Me</a></center>
			</div>
			
		</section>
		
		<!-- contact section start  -->
		<section class="contact-section section" id="contact">
			<div class="container">
				<div class="row">
					<div class="section-title">
						<h2 data-heading="Contact Me">Get In Touch</h2>
					</div>
				</div>
				<div class="row">
					<!-- contact item -->
						<div class="contact-item">
							<div class="contact-item-inner outer-shadow">
								<i class="fas fa-phone"></i>
								<span>Phone</span>
								<p>00962 772432330</p>
							</div>
						</div>
					<!-- contact item end -->
					<!-- contact item -->
						<div class="contact-item">
							<div class="contact-item-inner outer-shadow">
								<i class="fas fa-envelope"></i>
								<span>Email</span>
								<p>enad.abuzaid15@gmail.com</p>
							</div>
						</div>
					<!-- contact item end -->
					<!-- contact item -->
						<div class="contact-item">
							<div class="contact-item-inner outer-shadow">
								<i class="fas fa-map-marker-alt"></i>
								<span>Address</span>
								<p>Amman Jordan , Sahab</p>
							</div>
						</div>
					<!-- contact item end -->
				</div>
					<!-- row form -->
						<div class="row">
							<div class="contact-form">
								<form action="#">
									<div class="row">
										<div class="w-50">
											<div class="input-group outer-shadow hover-in-shadow">
												<input type="text" placeholder="Name" class="input-control">
											</div>
											<div class="input-group outer-shadow hover-in-shadow">
												<input type="text" placeholder="Email" class="input-control">
											</div>
											<div class="input-group outer-shadow hover-in-shadow">
												<input type="text" placeholder="Subject" class="input-control">
											</div>
										</div>
										<div class="w-50">
											<div class="input-group outer-shadow hover-in-shadow">
												<textarea class="input-control" placeholder="Message"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="submit-btn">
											<button type="submit" class="btn-1 outer-shadow hover-in-shadow">Send Message</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					<!-- end row -->
			</div>
		</section>
		<!-- contact section end  -->

		<!-- start protfolio popup-->
		<div class="pp portfolio-popup">
			<div class="pp-details">
				<div class="pp-details-inner">
					<div class="pp-title">
						<h2>invoices Project</h2>
						<p>Category - <span class="pp-project-category"><?php echo $project_type2['project_target']; ?></span></p>
					</div>
					<div class="pp-project-details">
						<div class="row">
							<div class="description">
								<h3>Project Brief</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quia ratione voluptatem dicta beatae vel praesentium iusto nesciunt
									 ducimus dolorum consequatur a facere, saepe itaque id 
									 nisi maxime. Architecto, tenetur!<span><a href="#"></a></span></p>
							</div>
							<div class="info">
								<h3>Project info</h3>
									<ul>
										<li>Date - <span>..</span></li>
										<li>Clinet - <span>..</span></li>
										<li>Tools - <span>..</span></li>
										<li>web - <span><a href="#"></a></span></li>
										<li>more secreenShots - <a href="#"></a></li>
									</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="separator"></div>
			<div class="pp-main">
				<div class="pp-main-inner">
					<div class="pp-project-details-btn outer-shadow hover-in-shadow">Project Details <i class="fas fa-plus"></i></div>
					<div class="pp-close outer-shadow hover-in-shadow">&times;</div>
					<img class="pp-img outer-shadow" src="img/1.png" alt="img">
					<div class="pp-counter">1 of 6</div>
				</div>
				<div class="pp-loader">
					<div></div>
				</div>
		<!--  popup navigation-->
			<div class="pp-prev"><i class="fas fa-play"></i></div>
			<div class="pp-next"><i class="fas fa-play"></i></div>
		<!--  end popup navigation-->
			</div>
		</div>
		<!-- end protfolio popup-->

<!-- switcher -->

<div class="style-switcher outer-shadow">
	<div class="style-switcher-toggler s-icon outer-shadow hover-in-shadow">
		<i class="fas fa-cog fa-spin"></i>
	</div>
	<div class="day-night s-icon outer-shadow hover-in-shadow">
		<i class="fas "></i>
	</div>
	<h4>Theme color</h4>
			<div class="colors">
				<span class="color-1" onclick="setActiveStyle('color-1')"></span>
				<span class="color-2" onclick="setActiveStyle('color-2')"></span>
				<span class="color-3" onclick="setActiveStyle('color-3')"></span>
				<span class="color-4" onclick="setActiveStyle('color-4')"></span>
				<span class="color-5" onclick="setActiveStyle('color-5')"></span>
				<span class="color-6" onclick="setActiveStyle('color-6')"></span>
				<span class="color-7" onclick="setActiveStyle('color-7')"></span>
				<span class="color-8" onclick="setActiveStyle('color-8')"></span>
				<span class="color-9" onclick="setActiveStyle('color-9')"></span>
				<span class="color-10" onclick="setActiveStyle('color-10')"></span>
			</div>
		
	</div>
</div>



<?php require 'include/footer.php' ?>


