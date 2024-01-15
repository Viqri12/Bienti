<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.zeis.head')
</head>

<body>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@include('layouts.zeis.sidebar')
@include('layouts.zeis.navbar')
<div id="wrapper">
	<div class="main-content">
<!-- /#notification-popup -->
        @yield('content')
		<footer class="footer">
			<ul class="list-inline">
				<li> © Harsamanual.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div>
	@include('layouts.zeis.script')
</body>
</html>