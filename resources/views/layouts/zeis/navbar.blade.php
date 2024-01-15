<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button bg-transparent glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">{{ $table }}</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left --> 
	<div class="pull-right">
		<!-- /.ico-item -->
		<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
		<div class="ico-item">
			<img src="{{ asset('assets/images/icon/logo-harsa-26.png') }}" alt="" class="ico-img">
			<ul class="sub-ico-item">
				<li><a href="#">Settings</a></li>
				<li><a href="#">Blog</a></li>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf 
				</form>
				<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
		<!-- /.ico-item -->
	</div>
	<!-- /.pull-right -->
</div>

