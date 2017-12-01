<!doctype html>
<html lang="fr">
  <head>
    <title>AllezCine</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Favicon-->
    <link rel="icon" type="image/png" href="./assets/images/1.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/reset.css"/>
    <link rel="stylesheet" href="./assets/css/styless.css"/>
    <link href="./assets/css/age-verification.css" rel="stylesheet">
    <!-- Slide Plugin -->
    <link rel="stylesheet" href="./assets/css/jquery.slideye.min.css"/>
    <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.dotdotdot.min.js"></script>

  </head>

  <body id="fr">
	<!-- Main Start -->
	<div class="main">
<a name="haut" id="haut"></a>
    <!-- Main Header Start -->
        <header class="main-header">
			<div class="centered">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-3 logo">
                			<a href=""><h1 class="grand">LOGO<span class="petit">Movies</span></h1></a>
                            <img src="assets/images/1.jpg" class="logo-img" alt="">
                		</div>
                		<div class="col-12 col-lg-6 searchbar pl-2">
                			<form action="#" method="post">
                				<input type="text" name="recherche" placeholder="Rechercher" required="">
                				<input type="submit" value="Go">
                			</form>
                		</div>
                        <div class="col-12 col-lg-3 login pl-5">
                			<ul id="taille">
                				<li id="tel"><i class="fa fa-phone" aria-hidden="true"></i>(000) 123 456 789</li>
                                <li id="element"><button onclick="document.getElementById('id01').style.display='block'">Login</button></a></li>
                            </ul>
                            <!-- Button to open the modal login form -->
                            <!-- The Modal -->
                            <div id="id01" class="modal">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                                <!-- Modal Content -->
                                <form class="modal-content animate" action="/action_page.php">
                                    <div class="imgcontainer">
                                        <img src="assets/images/woman.svg" alt="Avatar" class="avatar">
                                    </div>

                                    <div class="container">
                                        <label><b>Username</b></label>
                                        <input id="uname" type="text" placeholder="Enter Username" name="uname" required>
                                        <label><b>Password</b></label>
                                        <input id="psw" type="password" placeholder="Enter Password" name="psw" required>
                                        <button type="submit">Login</button>
                                        <button type="submit">Create account</button>
                                        <input type="checkbox" checked="checked"> Remember me
                                    </div>

                                    <div class="container" style="background-color:#f1f1f1">
                                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                        <span class="psw">Forgot <a href="#">password?</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
      </header>
<!-- Main Header End -->

    <!-- Nav start-->

    <div class="movies_nav">
    <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FILMS</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#ancre_movies">Action</a>
                            <a class="dropdown-item" href="#ancre_movies">Adventure</a>
                            <a class="dropdown-item" href="#ancre_movies">Biography</a>
                            <a class="dropdown-item" href="#ancre_movies">Horror</a>
                            <a class="dropdown-item" href="#ancre_movies">Comedy</a>
                            <a class="dropdown-item" href="#ancre_movies">Thriller</a>
                            <a class="dropdown-item" href="#ancre_movies">Romance</a></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERIES</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#ancre_series">Action</a>
                            <a class="dropdown-item" href="#ancre_series">Adventure</a>
                            <a class="dropdown-item" href="#ancre_series">Science-Fiction</a>
                            <a class="dropdown-item" href="#ancre_series">Horror</a>
                            <a class="dropdown-item" href="#ancre_series">Comedy</a>
                            <a class="dropdown-item" href="#ancre_series">Thriller</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#ancre_shop">SHOP MOVIES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#ancre_contact">CONTACT US</a>
                    </li>
                </ul>
                </div>
            </nav>
    </div>
    </div>



    <!-- Nav end-->

<!-- Slider start -->
<div class="container-fluid">
<div class="row">
    <div class="col-12 pl-0 pr-0">
     <div id="slidey" style="display:none;">
        <ul>
            <li><img src="assets/images/2.jpg"><p class='title'>Maximum Ride</p><p class='description'>Six children, genetically cross-bred with avian DNA, take flight around the country to discover their origins. Along the way, their mysterious past is ...</p></li>
            <li><img src="assets/images/5.jpg"><p class='title'>Tarzan</p><p class='description'>Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.</p></li>
            <li><img src="assets/images/3.jpg"><p class='title'>Independence</p><p class='description'>The fate of humanity hangs in the balance as the U.S. President and citizens decide if these aliens are to be trusted ...or feared.</p></li>
            <li><img src="assets/images/4.jpg"><p class='title'>Central Intelligence</p><p class='description'>Bullied as a teen for being overweight, Bob Stone (Dwayne Johnson) shows up to his high school reunion looking fit and muscular. Claiming to be on a top-secret ...</p></li>
            <li><img src="assets/images/6.jpg"><p class='title'>Ice Age</p><p class='description'>In the film's epilogue, Scrat keeps struggling to control the alien ship until it crashes on Mars, destroying all life on the planet.</p></li>
            <li><img src="assets/images/7.jpg"><p class='title'>X - Man</p><p class='description'>In 1977, paranormal investigators Ed (Patrick Wilson) and Lorraine Warren come out of a self-imposed sabbatical to travel to Enfield, a borough in north ...</p></li>
        </ul>
</div>
</div>
<script src="assets/js/jquery.slidey.js"></script>
<script src="assets/js/jquery.dotdotdot.min.js"></script>
<script type="text/javascript">
  $("#slidey").slidey({
    interval: 8000,
    listCount: 5,
    autoplay: false,
    showList: true
  });
  $(".slidey-list-description").dotdotdot();
</script>
</div>
</div>
<!-- Slider end -->

<!-- Réseaux sociaux start -->
<div class="media">
    <nav class="networks">
        <ul>
            <li class="twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
            <li class="facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
            <li class="dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
            <li class="gplus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
        </ul>
  </nav>
</div>
<!-- Réseaux sociaux end -->

    <!-- Main Content Start -->
		<section class="main-content" id="main-content">

            <!-- Content Header Start -->
            <div class="content-header">
						<div class="centered">
						<div class="container">

					<!-- MOVIES -->
					<div class="library-movie">
					<!-- THUMBNAIL 1 -->
						<div class="library-movie-col">
								<div class="library-container">
									<img src="assets/images/c1.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
											<span class="genre">Genre</span>
										</p>
									</div>
								</div>
						</div>
					<!-- THUMBNAIL 2 -->
						<div class="library-movie-col">
							<div class="library-container">
								<img src="assets/images/c2.jpg" alt="Movie cover">
								<div class="caption">
									<h4>Movie title</h4>
									<p>
										<span class="year">Year</span>
										<span class="genre">Genre</span>
									</p>
								</div>
							</div>
						</div>
					<!-- THUMBNAIL 3 -->
						<div class="library-movie-col">
							<div class="library-container">
								<img src="assets/images/c3.jpg" alt="Movie cover">
								<div class="caption">
									<h4>Movie title</h4>
									<p>
										<span class="year">Year</span>
										<span class="genre">Genre</span>
									</p>
								</div>
							</div>
						</div>
					<!-- THUMBNAIL 4 -->
						<div class="library-movie-col">
							<div class="library-container">
								<img src="assets/images/c4.jpg" alt="Movie cover">
								<div class="caption">
									<h4>Movie title</h4>
									<p>
										<span class="year">Year</span>
										<span class="genre">Genre</span>
									</p>
								</div>
							</div>
						</div>
					<!-- THUMBNAIL 5 -->
						<div class="library-movie-col">
							<div class="library-container">
								<img src="assets/images/c5.jpg" alt="Movie cover">
								<div class="caption">
									<h4>Movie title</h4>
									<p>
										<span class="year">Year</span>
										<span class="genre">Genre</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- FEATURED MOVIES -->
				<div id="ancre_movies" class="container-fluid">
					<!-- TITLE -->
					<h2 class="title_ancre">MOVIES</h2>
				</div>
				<div class="container">

					<ul class="filter-genre">
						<li class="filter-genre ACTIVE"><a href="">All</a></li><!--
						--><li class="filter-genre"><a href="">Actions</a></li><!--
						--><li class="filter-genre"><a href="">Policiers</a></li>
					</ul>
					<div>
						<!-- FEATURED MOVIES ROW 1 -->
						<div class="library-featured">
							<!-- THUMBNAIL 1 -->
							<div class="library-featured-col">
									<div class="library-container">
										<img src="assets/images/c1.jpg" alt="Movie cover">
										<div class="caption">
											<h4>Movie title</h4>
											<p>
												<span class="year">Year</span>
											</p>
										</div>
									</div>
							</div>
							<!-- THUMBNAIL 2 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c2.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 3 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c3.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 4 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c4.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 5 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c5.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 6 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n1.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- FEATURED MOVIES ROW 2 -->
						<div class="library-featured">
							<!-- THUMBNAIL 1 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c7.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 2 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c8.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 3 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c9.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 4 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c10.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 5 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c11.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 6 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/c12.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="more-featured-movies" class="hidden">
						<!-- FEATURED MOVIES ROW 3 -->
						<div class="library-featured">
							<!-- THUMBNAIL 1 -->
							<div class="library-featured-col">
									<div class="library-container">
										<img src="assets/images/h1.jpg" alt="Movie cover">
										<div class="caption">
											<h4>Movie title</h4>
											<p>
												<span class="year">Year</span>
											</p>
										</div>
									</div>
							</div>
							<!-- THUMBNAIL 2 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h2.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 3 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h3.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 4 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h4.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 5 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h5.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 6 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h6.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- FEATURED MOVIES ROW 4 -->
						<div class="library-featured">
							<!-- THUMBNAIL 1 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n1.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 2 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n2.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 3 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n3.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 4 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n4.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 5 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n5.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 6 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n6.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- BOUTON MORE MOVIES -->
					<ul class="more-movies">
						<li class="more-movies">
							<a class="show-more" id="showMoreMovies" data-more="#more-featured-movies"><span>PLUS</span> DE FILMS</a>
						</li>
					</ul>
				</div>

				<!-- FEATURED TV SERIES -->
				<div id="ancre_series" class="container-fluid">
					<!-- TITLE -->
					<h2 class="title_ancre">SERIES</h2>
				</div>
				<div class="container">

					<ul class="filter-genre">
						<li class="filter-genre ACTIVE"><a href="">All</a></li><!--
						--><li class="filter-genre"><a href="">Actions</a></li><!--
						--><li class="filter-genre"><a href="">Policiers</a></li>
					</ul>
					<div>
						<!-- FEATURED MOVIES ROW 1 -->
						<div class="library-featured">
							<!-- THUMBNAIL 1 -->
							<div class="library-featured-col">
									<div class="library-container">
										<img src="assets/images/m1.jpg" alt="Movie cover">
										<div class="caption">
											<h4>Movie title</h4>
											<p>
												<span class="year">Year</span>
											</p>
										</div>
									</div>
							</div>
							<!-- THUMBNAIL 2 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m2.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 3 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m3.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 4 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m4.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 5 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m5.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 6 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m6.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- FEATURED MOVIES ROW 2 -->
						<div class="library-featured">
							<!-- THUMBNAIL 1 -->
							<div class="library-featured-col">
									<div class="library-container">
										<img src="assets/images/m7.jpg" alt="Movie cover">
										<div class="caption">
											<h4>Movie title</h4>
											<p>
												<span class="year">Year</span>
											</p>
										</div>
									</div>
							</div>
							<!-- THUMBNAIL 2 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m8.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 3 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m9.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 4 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m10.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 5 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m11.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 6 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/m12.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="more-featured-series" class="hide">
						<!-- FEATURED MOVIES ROW 3 -->
						<div class="library-featured">
							<!-- THUMBNAIL 1 -->
							<div class="library-featured-col">
									<div class="library-container">
										<img src="assets/images/h1.jpg" alt="Movie cover">
										<div class="caption">
											<h4>Movie title</h4>
											<p>
												<span class="year">Year</span>
											</p>
										</div>
									</div>
							</div>
							<!-- THUMBNAIL 2 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h2.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 3 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h3.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 4 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h4.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 5 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h5.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 6 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/h6.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- FEATURED MOVIES ROW 4 -->
						<div class="library-featured">
							<!-- THUMBNAIL 1 -->
							<div class="library-featured-col">
									<div class="library-container">
										<img src="assets/images/n1.jpg" alt="Movie cover">
										<div class="caption">
											<h4>Movie title</h4>
											<p>
												<span class="year">Year</span>
											</p>
										</div>
									</div>
							</div>
							<!-- THUMBNAIL 2 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n2.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 3 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n3.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 4 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n4.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 5 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n5.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
							<!-- THUMBNAIL 6 -->
							<div class="library-featured-col">
								<div class="library-container">
									<img src="assets/images/n6.jpg" alt="Movie cover">
									<div class="caption">
										<h4>Movie title</h4>
										<p>
											<span class="year">Year</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<ul class="more-movies">
						<li class="more-movies">
							<a class="show-more" id="showMoreSeries" data-more="#more-featured-series"><span>PLUS</span> DE SERIES</a>
						</li>
					</ul>
				</div>

            </div>
        	</div>
            <!-- Content Header End -->


                    <!-- Content Content-inner Start -->
                    <div id="ancre_shop" class="centered content-inner">
                    <div class="content" id="">
                    <section id="">

                            <div class="container">
                                <!-- TITLE -->
                                <h2 class="title_ancre">SHOP MOVIES</h2>
                            </div>

                            <div id="shop_content">
                              <div class="vid">
                                <iframe width="480" height="315" src="https://www.youtube.com/embed/NAKtN6lT5O0" frameborder="0" allowfullscreen></iframe>
                              </div>
                              <div class="description">
                                      <h2 class="myabstractsupertitle">
                                      Ice Age: Continental Drift
                                      </h2>

                                      <div class="container">
                                          <div class="row">
                                              <div class="col-md-3">
                                                  <p class="abstract_title">Abstract :</p>
                                              </div>
                                              <div class="col-md-9">
                                                  <p class="abstract_description">In deze vierde film gaan Manny (Ray Romano), Sid (John Leguizamo) en Diego (Denis Leary) op een nieuw avontuur nadat hun continent losbreekt. Ze gebruiken een ijsberg als schip en moeten het opnemen tegen nieuwe zeemonsters en piraten terwijl ze terug proberen te komen bij hun vrienden.</p>
                                              </div>
                                          </div>
                                          <br />
                                          <div class="row">
                                              <div class="col-md-3">
                                                  <p class="abstract_title">Release :</p>
                                              </div>
                                              <div class="col-md-9">
                                                  <p class="abstract_description">2017</p>
                                              </div>
                                          </div>
                                          <br />
                                          <div class="row">
                                               <div class="col-md-3">
                                                   <p class="abstract_title">Kind :</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="abstract_description">Animation.</p>
                                                </div>
                                          </div>
                                     </div>
                                 </div>
                            </div>

                            <!-- SHOP MOVIES -->
                            <div class="library-featured">
                                <!-- THUMBNAIL 1 -->
                                <div class="library-featured-col-shop">
                                        <div class="library-container">
                                            <img src="assets/images/m1.jpg" alt="Movie cover">
                                        </div>
                                </div>
                                <!-- THUMBNAIL 2 -->
                                <div class="library-featured-col-shop">
                                    <div class="library-container">
                                        <img src="assets/images/m2.jpg" alt="Movie cover">
                                    </div>
                                </div>
                                <!-- THUMBNAIL 3 -->
                                <div class="library-featured-col-shop">
                                    <div class="library-container">
                                        <img src="assets/images/m3.jpg" alt="Movie cover">
                                    </div>
                                </div>
                                <!-- THUMBNAIL 4 -->
                                <div class="library-featured-col-shop">
                                    <div class="library-container">
                                        <img src="assets/images/m4.jpg" alt="Movie cover">
                                    </div>
                                </div>
                                <!-- THUMBNAIL 5 -->
                                <div class="library-featured-col-shop">
                                    <div class="library-container">
                                        <img src="assets/images/m5.jpg" alt="Movie cover">
                                    </div>
                                </div>
                                <!-- THUMBNAIL 6 -->
                                <div class="library-featured-col-shop">
                                    <div class="library-container">
                                        <img src="assets/images/m6.jpg" alt="Movie cover">
                                    </div>
                                </div>
                            </div>
                    </section>
                    </div>
                    </div>




                    <!-- Content Content-inner End -->

            <!-- Content Content-inner Start -->
			<div id="ancre_contact" class="centered content-inner">
				<div class="content" id="contact">

                    <section id="contact_us">
                    	<div class="container">
                            <!-- TITLE -->
                            <h2 class="title_ancre">CONTACT US</h2>

                            <!-- BLACK BOX -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="mr-1 black">
                                            <div class="circle"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                              <h2 class="bbox">Address</h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 ">
                                        <div class="mr-1 black">
                                            <div class="circle"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                              <h2 class="bbox">Call</h2>
                                              <p></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 ">
                                        <div class="mr-1 black">
                                            <div class="circle"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                              <h2 class="bbox">Email</h2>
                                              <p></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 ">
                                        <div class="mr-1 black">
                                            <div class="circle"><i class="fa fa-user" aria-hidden="true"></i></div>
                                              <h2 class="bbox">Social networks</h2>
                                              <br />
                                                <div class="myfacebook"><i id="myfacebookimage" class="fa fa-facebook" aria-hidden="true"></i><p class="myfacebooktexte">Facebook</p></div><br>
                                                <div class="mytwitter"><i id="mytwitterimage" class="fa fa-twitter" aria-hidden="true"></i><p class="mytwittertexte">Twitter</p></div><br>
                                                <div class="mygoogle"><i id="mygoogleimage" class="fa fa-google-plus" aria-hidden="true"></i><p class="mygoogletexte">Google</p></div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CONTACT FORM -->
                    		<form id="contact" action="index.php">
                    			<div id="form" class="row">
                    				<div class="col-md-6">
                    					<input type="text" placeholder="FIRST NAME">
                    				</div>
                    				<div class="col-md-6">
                    					<input type="text" placeholder="LAST NAME">
                    				</div>
                    				<div class="col-md-6">
                    					<input type="email" placeholder="EMAIL">
                    				</div>
                    				<div class="col-md-6">
                    					<input type="text" placeholder="SUBJECT">
                    				</div>
                    				<div class="col-md-12">
                    					<textarea id="textarea" form="contact_us" placeholder="YOUR MESSAGE"></textarea>
                    					<input type="submit" id="send" class="btn btn_contact" name="send" value="SEND MESSAGE">
                    				</div>
                    			</div>
                    		</form>
                    	</div>
                    </section>

                </div>
            </div>
			<!-- Content Content-inner End -->

<br /><br />

			<!-- Content Footer Start -->
      		<footer class="content-footer">
                <div class="centered">
                    <div class="container-fluid">
                        <div class="row">
                    		<div class="col-12 col-lg-6 pl-2">
                                <p class="news">SUBSCRIBE TO US</p>
                                <form class="newsletter" action="#" method="post">
                    				<input class="emailbar"type="text" name="suscribe" placeholder="Your email" required="">
                    				<input class="btn btn_newsletter" type="submit" value="SEND">
                    			</form>
                    		</div>
                            <div class="col-12 col-lg-3 pl-5">
                    		</div>
                            <div class="col-12 col-lg-3 logo my">
                    			<a href=""><h1 class="grand">LOGO<span class="petit">Movies</span></h1></a>
                                <img src="assets/images/1.jpg" class="logo-img" alt="">
                    		</div>
                        </div>
                        <br /><br /><div class="bar">

                        </div><br /><br />
                        <div class="">
                            <div class="copyrights">
                              © AllezCine.be 2017 - By BECODE - <a href="" class="simple-link">Contact</a>
                            </div>
                            <br /><br /><br /><br /><br />
                        </div>
                    </div>
                </div>


      		</footer>
      		<!-- Content Footer End -->

    </section>
		<!-- Main Content End -->

  </div>
	<!-- Main End -->

    <!--div de la arrow -->
     <div class="arrow"><a id="return" class="invisible" href="#haut"><img src="assets/images/arrow_up.png" width="50px" height="50px"</a></div>
     <script>
     document.addEventListener('DOMContentLoaded', function() { // s'assurer que la page est chargée
       window.onscroll = function(ev) { //détecter quand la page défile
         document.getElementById("return").className = (window.pageYOffset > 100) ? "visible" : "invisible";
         //cibler la classe de l'élément "return"
         //interchanger la classe selon la position dans la page,
         //visible dès qu'elle est à   100 pixels du haut
         //opacity:0 étant invisible et opacity:1 visible
       };
     });
     //ESSAI NON CONCLUANT AVEC CREATEELEMENT...
     //let arrow=document.createElement("img");
     //arrow.setAttribute("src","assets/images/arrow_up.png");
     //arrow.setAttribute("width","50px");
     //arrow.setAttribute("height","50px");
     </script>


    <!-- Optional JavaScript -->
    <!-- JQuery -->
    <script src='assets\js\jquery-3.2.1.js'></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="assets/js/script.js"></script>

  </body>
</html>
