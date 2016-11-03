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

	<!--header结束-->
	<div class="main wth">
		<div class="main-title">
			<p class="title-lf1">找回密码</p>
		</div>
		<div class="main-infro">
			<div class="infro-img">
				<i class="infro-img1"></i>
			</div>
			
			<p class="infro-mgc">忘记账号？试试您的常用手机号码找回密码</p>
			
			<div class="content-landing">
                <form action="{{url('/first')}}" method="post" id="register">
                {{csrf_field()}}
                    <ul>
                        <li class="clearfix" id="emailMatch_list">
                            <label class="normal fl">手机号码：</label>
                            <input class="normal-input fl" type="text" id="phone" name="phone"/>
                            <div class="error-box fl" id="email_warn">
                                <strong class="error" style="display:none"></strong>
                                <p class="tip">请输入手机号码</p>
                            </div>
                        </li>
                        <li>
                            <label class="normal fl"></label>
                            <div class="botn">
                                <input type="submit" class="sub" value="下一步" >
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
		</div>
	</div>
	<div class="foot wth">
		<p>武汉云析网络科技有限公司&nbsp;鄂ICP备10209250号&nbsp;|&nbsp;ICP许可证号：鄂B1-20150109&nbsp;|&nbsp;Copyright &copy;&nbsp;2010-2016&nbsp;JuanPi.com All Rights Reserved</p>
	</div>
</body>
</html>		