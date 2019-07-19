<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CSS Grid</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css" media="screen">
	</head>
	<body>
		<!--header-->
		<header id="showcase" class="grid">
			<div class="bg-image"></div>
			<div class="content-wrap">
				<h1>Welcome to Acme Web Solutions</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi vero voluptates delectus inventore, dolorum earum itaque! Neque in, doloremque ea.</p>
				<a href="#section-b" class="btn">Read More</a>
			</div>
		</header>
		<!--Main Area-->
		<main id="main">
			<!--Section A-->
			<section id="section-a" class="grid">
				<div class="content-wrap">
					<h2 class="content-tile">Web & Application Development</h2>
					<div class="content-text">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem magni ipsa accusamus, aut aliquid soluta maiores possimus provident, illo, explicabo a assumenda mollitia deserunt et. Recusandae velit, in, sit doloribus esse dolorum praesentium quae possimus autem eius consectetur quis.</p>
					</div>
				</div>
			</section>
			<!--Section B-->
			<section id="section-b" class="grid">
				<ul>
					<li>
						<div class="card">
							<img src="https://images.pexels.com/photos/574077/pexels-photo-574077.jpeg?cs=srgb&dl=code-coding-computer-574077.jpg&fm=jpg" alt="">
							<div class="card-content">
								<h3 class="card-title">Web Development</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam at autem laborum ut eos nesciunt, veritatis placeat sed perspiciatis suscipit.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="card">
							<img src="https://images.pexels.com/photos/261628/pexels-photo-261628.jpeg?cs=srgb&dl=access-adult-blur-261628.jpg&fm=jpg" alt="">
							<div class="card-content">
								<h3 class="card-title">Mobile Applications</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam at autem laborum ut eos nesciunt, veritatis placeat sed perspiciatis suscipit.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="card">
							<img src="https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?cs=srgb&dl=business-charts-commerce-265087.jpg&fm=jpg" alt="">
							<div class="card-content">
								<h3 class="card-title">Tech Marketing</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam at autem laborum ut eos nesciunt, veritatis placeat sed perspiciatis suscipit.</p>
							</div>
						</div>
					</li>
				</ul>
			</section>
			<!--Section C-->
			<section id="section-c" class="grid">
				<div class="content-wrap">
					<h2 class="content-title">We handle all of your digital needs</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt blanditiis animi adipisci incidunt aut obcaecati, veniam molestiae eos quia libero.</p>
				</div>
			</section>
			<!--Section D-->
			<section id="section-d" class="grid">
				<div class="box">
					<h2 class="content-title">Contact Us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore et commodi quis deserunt expedita animi, ut perferendis quaerat aliquid nesciunt.</p>
					<p>contact@acmesolutions.com.br</p>
				</div>
				<div class="box">
					<h2 class="content-title">About Our Company</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit reiciendis optio ut expedita aspernatur, iste doloremque nihil, ex quae illo mollitia, nulla perspiciatis officia? Aspernatur laboriosam iusto voluptates earum! Officia!</p>
				</div>
			</section>
		</main>
		<!--Footer-->
		<footer id="main-footer" class="grid">
			<div>Acme Web Solutions</div>
			<div>Project by <a href="">Luís Gustavo</a></div>
		</footer>
	</body>
</html>
