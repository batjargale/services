<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Миний анхны Ларавел вэб сайт @yield('title')</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/libs.css')}}">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>
	<div class="brand clearfix">
		<a href="#" class="logo"><img src="{{asset('img/logo.jpg')}}" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#">Тусламж</a></li>
			<li><a href="#">Тохиргоо</a></li>
			<li class="ts-account">
				<a href="#"><img src="{{asset('img/ts-avatar.jpg')}}" class="ts-avatar hidden-side" alt=""> Хэрэглэгч <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="#">Хувийн мэдээлэл</a></li>
					<li><a href="#">Нууц үг солих</a></li>
					<li><a href="#">Гарах</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Хайлт</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Хайх үгээ бичнэ...">
				</li>
				<li class="ts-label">Үндсэн хэсэг</li>
				<li class="open"><a href="#"><i class="fa fa-dashboard"></i>Нүүр хуудас</a>
				</li>
				<li><a href="#"><i class="fa fa-desktop"></i> Мэдээний ангилал</a>
					<ul>
						<li><a href="#">Нэмэх</a></li>
						<li><a href="#">Өөрчлөх</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fa fa-table"></i>Мэдээ</a>
					<ul>
						<li><a href="#">Нэмэх</a></li>
						<li><a href="#">Өөрчлөх</a></li>
					</ul>
				</li>
				<li><a href="/admin/users"><i class="fa fa-table"></i>Хэрэглэгч</a>
					<ul>
						<li><a href="{{route('admin.users.index')}}">Бүгд</a></li>
						<li><a href="{{route('admin.users.create')}}">Нэмэх</a></li>
						
					</ul>
				</li>
			

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title" id="pg-title" >Нүүр хуудас</h2>
						
						<div class="row">
							<div class="col-md-12">
							@yield('content')
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="{{asset('js/libs.js')}}"></script>

@yield('footer')	


</body>

</html>