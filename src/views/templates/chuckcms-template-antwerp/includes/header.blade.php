		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<div id="logo" class="divcenter">
					<a href="{{ URL::to('/') }}" class="standard-logo"><img class="divcenter" src="{{ URL::to('/') }}{{ ChuckSite::getSetting('logo.href') }}" alt="ChuckCMS Logo"></a>
					<a href="{{ URL::to('/') }}" class="retina-logo"><img class="divcenter" src="{{ URL::to('/') }}{{ ChuckSite::getSetting('logo.href') }}" alt="Canvas Logo"></a>
				</div><!-- #logo end -->

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2 center">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						{!! ChuckMenu::renderFrontEnd('chuckcms-template-antwerp') !!}

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->