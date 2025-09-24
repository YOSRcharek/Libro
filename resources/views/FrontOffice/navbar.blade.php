	<div id="header-wrap">

		<div class="top-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div><!--social-links-->
					</div>
					<div class="col-md-6">

						<div class="right-element">

							@guest
							<!-- Utilisateur non connecté -->
							<a href="{{ route('login') }}" class="user-account for-buy">
								<i class="icon icon-user"></i><span>Se connecter</span>
							</a>
							@endguest

							@auth
							<!-- Utilisateur connecté -->
							<a href="#" class="user-account for-buy">
								<i class="icon icon-user"></i><span>{{ Auth::user()->name }}</span>
							</a>

							<form method="POST" action="{{ route('logout') }}" style="display: inline;">
								@csrf
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault(); this.closest('form').submit();"
									class="user-account for-buy">
									Logout
								</a>
							</form>
							@endauth

							<a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0 $)</span></a>

							<div class="action-menu">
								<div class="search-bar">
									<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
										<i class="icon icon-search"></i>
									</a>
									<form role="search" method="get" class="search-box">
										<input class="search-field text search-input" placeholder="Search" type="search">
									</form>
								</div>
							</div>

						</div><!--top-right-->

					</div>

				</div>
			</div>
		</div><!--top-content-->

		<header id="header">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-2">
						<div class="main-logo">
						 <a href="/front-office" class="logo-link d-flex align-items-center">
                                <img src="assets/img/libroLogo.png" alt="logo" style="width:50px; height:60px; margin-right:10px;">
                                <span class="logo-text">LibroLink</span>
                            </a>
						</div>

					</div>

					<div class="col-md-10">

						<nav id="navbar">
							<div class="main-menu stellarnav">
								<ul class="menu-list">
									<li class="menu-item active"><a href="#home">Home</a></li>
									<li class="menu-item has-sub">
										<a href="#pages" class="nav-link">Pages</a>

										<ul>
											<li class="active"><a href="index.html">Home</a></li>
											<li><a href="index.html">About</a></li>
											<li><a href="index.html">Styles</a></li>
											<li><a href="index.html">Blog</a></li>
											<li><a href="index.html">Post Single</a></li>
											<li><a href="index.html">Our Store</a></li>
											<li><a href="index.html">Product Single</a></li>
											<li><a href="index.html">Contact</a></li>
											<li><a href="index.html">Thank You</a></li>
										</ul>

									</li>
									<li class="menu-item">
										<a href="{{ route('livres') }}" class="nav-link">Livres</a>
									</li>
									<li class="menu-item">
										<a href="{{ route('articles') }}" class="nav-link">Articles</a>
									</li>
									<li class="menu-item">
										<a href="{{ route('acceuil') }}" class="nav-link">Home</a>
									</li>
									<!-- Pour les autres liens, crée des routes ou utilise des URLs directes -->
									<li class="menu-item">
										<a href="{{ url('/offer') }}" class="nav-link">About us</a>
									</li>
								
								</ul>

								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>

							</div>
						</nav>

					</div>

				</div>
			</div>
		</header>

	</div><!--header-wrap-->