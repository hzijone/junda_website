<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->

		<!-- jquery 与 boostrap 的先后加载也会影响其下拉菜单的显示，看来要用requireJs 解决依赖关系了 -->
		<script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
		<script src="../extlib/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
	    <!-- Local bootstrap CSS & JS -->
	    <script src="../bootstrap-3.3.5-dist/js/collapse.js"></script>
	    <script src="../bootstrap-3.3.5-dist/js/scrollspy.js"></script>
	    <script src="../bootstrap-3.3.5-dist/js/transition.js"></script>
	    <script src="../bootstrap-3.3.5-dist/js/dropdown.js"></script>
	    <script src="../bootstrap-3.3.5-dist/js/alert.js"></script>
		<link rel="stylesheet" media="screen" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">
		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>

	
    <!-- 显示下拉框，一般与nav navbar-nav ul li结合，关键词：dropdown dropdown-toggle data-toggle="dropdown" drop-menu  -->
    <!-- boostrap 限制了灵活性 -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<a class="navbar-brand" href="#">Title</a>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Link</a>
				</li>
			</ul>

			 <div class="collapse navbar-collapse js-navbar-scrollspy">
			   <ul class="nav navbar-nav">
			   		<li><a href="">kkk</a></li>
			   		
			   		<li class="dropdown">
			   		<a href="#" class="dropdown-toggle" data-toggle="dropdown">dropdown</a>
			   		 <ul class="dropdown-menu">
			   		 	<li><a href="" tabindex="-1">aaaaaaa</a></li>
			   		 	<li><a href="" tabindex="-1">bbbbbbbbbbb</a></li>
			   		 </ul>

			   		</li>

 				

			   	</ul>	
			</div>

		



		</nav>



	
	</body>
</html>