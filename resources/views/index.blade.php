@extends('layout.app')
@section('content')
	@include('partials.navbar')
	<main class="" id="">
		<!-- main page/ first page / -->
		<section id="main">
			<div class="title">
				<p>Hello I'm</p>
				<p class="text-large">Sardor</p>
				<p class="text-dark">UX Designer | Web developer</p>
			</div>
			<div id="owl-demo" class="owl-carousel owl-theme">
				<div class="item" style="background-image: url(&quot;{{asset('img/slide1.jpg')}}&quot;); min-height: 320px;"></div>
				<div class="item" style="background-image: url(&quot;{{asset('img/slide2.jpg')}}&quot;); min-height: 320px;"></div>
				<div class="item" style="background-image: url(&quot;{{asset('img/slide3.jpg')}}&quot;); min-height: 320px;"></div>
			</div>
		</section>
		<!-- about me page / second page / -->
		<section id="about-me">
			<div class="row">
			<div class="col-md-4 col-sm-5">
				<h1 class="about-me-title"><span>-</span> about me</h1>
				<p class="about-text">Hello, I’m a UI/UX Designer & Frontend Developer from Tashkent, Uzbekistan. I'm studying a bachelor's degree Inha University in Tashkent.</p>
				<ul>
					<li><span>Name: </span>Sardor Allabergenov</li>
					<li><span>Email: </span>mr.sardor2904@gmail.com</li>
					<li><span>Phone: </span>(97)-431-35-28</li>
					<li><span>Date of birth: </span>29 April 1996</li>
					<li><span>Nationality: </span>Uzbekistan</li>
				</ul>
				<a>Dowload resume</a>
			</div>
			<br><br>
		</div>
		</section>
		<!-- skills page / third page / -->
		<section id="skills">
			<div class="container-fluid">
				<h1 class="about-me-title"><span>-</span> skills</h1>
				<div class="row">
					<div class="row">
						<div class="col-md-12">
							<h4>SOFTWARE</h4>
							<br><br>
						</div>
					</div>
					<div>
						<div class="col-md-3 col-sm-3">
							<div class="col-md-5">
								<img src="{{asset('img/skills/html&css.png')}}" alt="html">
							</div>
							<div class="col-md-7">
								<h4>html5 & css3</h4>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="col-md-5">
								<img src="{{asset('img/skills/bootstrap-logo.png')}}" alt="bootstrap">
							</div>
							<div class="col-md-7">
								<h4>bootstrap 3 & 4</h4>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="col-md-5">
								<img src="{{asset('img/skills/javascript.png')}}" alt="js">
							</div>
							<div class="col-md-7">
								<h4>javascript & jquery & json</h4>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="col-md-5">
                <img src="{{asset('img/skills/AngularJS.svg')}}" alt="js">
							</div>
							<div class="col-md-7">
								<h4>Angular.JS</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="row">
						<div class="col-md-12">
							<br><hr>
							<h4>Personal</h4>
							<br><br>
						</div>
					</div>
					<div class="row personal-skills">
						<div class="col-md-3 col-sm-3">
							<div class="col-md-5">
                <img src="{{asset('img/skills/personal/creativity.png')}}" alt="creativity">
							</div>
							<div class="col-md-7">
								<h4>creativity</h4>
								<p></p>
						</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="col-md-5">
                <img src="{{asset('img/skills/personal/committed.png')}}" alt="committed">
							</div>
							<div class="col-md-7">
								<h4>committed</h4>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="col-md-5">
                <img src="{{asset('img/skills/personal/punctual.png')}}" alt="punctual">
							</div>
							<div class="col-md-7">
								<h4>punctual</h4>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
								<div class="col-md-5">
                  <img src="{{asset('img/skills/personal/communicative.png')}}" alt="communicative">
								</div>
								<div class="col-md-7">
									<h4 style="margin-left: -20px;">communicative</h4>
								</div>
							</div>
					</div>
				</div>
			</div>
		</section>
		<div class="container-fluid">
			<div class="row counter-block">
				<div class="col-md-4 col-sm-4 countup-item">
					<h1><div class="counter" data-count="5">0</div></h1>
					<p>Web Sites</p>
				</div>
				<div class="col-md-4 col-sm-4 countup-item">
					<h1><div class="counter" data-count="2">0</div></h1>
					<p>Web Applications</p>
				</div>
				<div class="col-md-4 col-sm-4 countup-item">
					<h1><div class="counter" data-count="4">0</div></h1>
					<p>Designs</p>
				</div>
			</div>
		</div>
		<!-- education page / fourth page / -->
		<section id="education">
			<div class="container-fluid">
				<div class="row">
					<h1><span>-</span> education</h1>
					<div class="col-md-9 education-info">
						<h4>Education is the most powerful weapon which you can use to change the world.</h4>
						<br><hr>
						<div class="row">
							<div class="col-md-6">
								<div class="col-md-2 col-sm-2 col-xs-2">
									<span class="education-counter">01</span>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-10">
									<p class="education-place">inha University in Tashkent</p>
									<p class="education-degree">
										Bachelor’s in Computer and Information Engineering
										<br>
										2016-2020
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="col-md-2 col-sm-2 col-xs-2">
									<span class="education-counter">02</span>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-10">
									<p class="education-place">Mirzo Ulug`bek professional college of computer sciences</p>
									<p class="education-degree">The technician of ICT and programming<br> 2012-2015</p>
								</div>
							</div>
						</div>
						<div class="row">
							<br>
							<div class="col-md-6">
								<div class="col-md-2 col-sm-2 col-xs-2">
									<span class="education-counter">03</span>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-10">
									<p class="education-place">Secondary school of Gymnasium</p>
									<p class="education-degree">
										Natural sciences
										<br>
										2003-2012
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="col-md-2 col-sm-2 col-xs-2"></div>
								<div class="col-md-10 col-sm-10 col-xs-2"></div>
							</div>
						</div>
						<hr><br>
						<div class="row">
							<div class="col-md-10">
								<p class="bottom-quote"><span></span>EDUCATION IS NOT PREPARATION <br>
									FOR LIFE, EDUCATION IS LIFE ITSELF.</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>
		<!-- employment page / fifth page / -->
		<section id="employment">
			<div class="container-fluid">
				<div class="row">
					<h1><span>-</span> employment</h1>
					<div class="row">
						<div class="col-md-3">
							<p class="where">IUTLab</p>
							<p class="who">Web Developer</p>
							<span class="year">present-2017</span>
						</div>
						<div class="col-md-3">
							<p class="where">Buyuk-Yuksalish</p>
							<p class="who">Math tutor</p>
							<span class="year">2017 (3 month)</span>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3"></div>
					</div>
				</div>
			</div>
		</section>
		<section id="awards">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 pull-right awards-block">
						<p>AWARDS CAN GIVE YOU A TREMENDOUS AMOUNT OF ENCOURAGEMENT TO KEEP GETTING BETTER, NO MATTER HOW YOUNG OR OLD YOU ARE.</p>
						<hr />
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="row">
									<div class="col-md-3 col-sm-1">
										<p class="title-extra">01</p>
									</div>
									<div class="col-md-9 col-sm-11">
										<p class="text-area">international  <br>design	awards</p>
									</div>
							</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="row">
										<div class="col-md-3 col-sm-1">
											<p class="title-extra">02</p>
										</div>
										<div class="col-md-9 col-sm-11">
											<p class="text-area">international  <br>design	awards</p>
										</div>
								</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- portfolio page / sixth page / -->
		<section id="portfolio">
			<div class="container-fluid">
				<div class="row">
					<h1><span>-</span> portfolio</h1>
					<div class="row">
						<div class="col-md-3">
							<div class="button-group">
								<button class="all-btn">All</button>
								<button class="web-sites-btn">web sites</button>
								<button class="web-app-btn">web Applications</button>
								<button class="design-btn">Designs</button>
							</div>
						</div>
						<div class="col-md-9">
							<div class="demo demo-1">
								<div class="project-list">
									<div class="project website">
										<div class="project__card">
											<a href="" class="project__image"><img src="http://unsplash.it/600/400?image=189" width=600 height=400 alt=""></a>
											<div class="project__detail">
												<a href="{{route('portfolio')}}">
													<h2 class="project__title">Project Name</h2>
													<small class="project__category">Photography</small>
												</a>
											</div>
										</div>
									</div>
									<div class="project webapp">
										<div class="project__card">
											<a href="" class="project__image"><img src="http://unsplash.it/600/400?image=129" width=600 height=400 alt=""></a>
											<div class="project__detail">
												<a href="{{route('portfolio')}}">
													<h2 class="project__title">Project Name</h2>
													<small class="project__category">Photography</small>
												</a>
											</div>
										</div>
									</div>
									<div class="project design">
										<div class="project__card">
											<a href="" class="project__image"><img src="http://unsplash.it/600/400?image=119" width=600 height=400 alt=""></a>
											<div class="project__detail">
												<a href="{{route('portfolio')}}">
													<h2 class="project__title">Project Name</h2>
													<small class="project__category">Photography</small>
												</a>
											</div>
										</div>
									</div>
									<div class="project website">
										<div class="project__card">
											<a href="" class="project__image"><img src="http://unsplash.it/600/400?image=89" width=600 height=400 alt=""></a>
											<div class="project__detail">
												<a href="{{route('portfolio')}}">
													<h2 class="project__title">Project Name</h2>
													<small class="project__category">Photography</small>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- blog page / seventh page / -->
		<section id="blog">
			<h1>blog</h1>
		</section>
		<!-- contact page / eight page / -->
		<section id="contact">
      <h1>contact</h1>
		</section>
  </main>
  
  
	<script src="{{asset('js/jquery.hover3d.min.js')}}" ></script>
	<script>
		$(document).ready(function(){
			$(".project").hover3d({
				selector: ".project__card",
				sensitivity: 10,
			});

			$(".movie").hover3d({
				selector: ".movie__card",
				shine: true,
				sensitivity: 10,
			});
			$(".all-btn").on("click", function(){
				$(".project").removeClass("zoomIn").show();
			});
			$(".web-sites-btn").on("click", function(){
				$(".project").removeClass("zoomIn").hide();
				$(".website").addClass("zoomIn").show();
			});
			$(".web-app-btn").on("click", function(){
				$(".project").removeClass("zoomIn").hide();
				$(".webapp").addClass("zoomIn").show();
			});
			$(".design-btn").on("click", function(){
				$(".project").removeClass("zoomIn").hide();
				$(".design").addClass("zoomIn").show();
			});
		});
	</script>
@endsection