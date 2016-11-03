<!DOCTYPE html>
<html>
<head>
	<title>第一步</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="{{asset('bate/css/common.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bate/css/find-password.css')}}">
	<script src="{{asset('bate/js/jquery-1.10.1.min.js')}}"></script> 
    <script src="{{asset('bate/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('bate/js/additional-methods.js')}}"></script>  
    <script src="{{asset('bate/js/find-password1.js')}}"></script> 

</head>
<body>
	<div class="header">
		<div class="logo wth">
			<div class="logoleft fl">
				<a href="#"><img src="images/logo.png"></a>
				<img src="images/user.png">
			</div>
			<div class="logoright fr">
				<img src="images/logoright.png">
			</div>
		</div>
	</div>
	@yield('content')
	<div class="foot wth">
		<p>武汉云析网络科技有限公司&nbsp;鄂ICP备10209250号&nbsp;|&nbsp;ICP许可证号：鄂B1-20150109&nbsp;|&nbsp;Copyright &copy;&nbsp;2010-2016&nbsp;JuanPi.com All Rights Reserved</p>
	</div>
</body>
</html>		