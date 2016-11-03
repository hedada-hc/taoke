<!-- 第三部 -->
<!DOCTYPE html>
<html>
<head>
	<title>找回密码页3</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="{{asset('bate/css/common.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bate/css/find-password.css')}}">
	<script src="{{asset('bate/js/jquery-1.10.1.min.js')}}"></script> 
    <script src="{{asset('bate/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('bate/js/additional-methods.js')}}"></script>  
    <script src="{{asset('bate/js/find-password3.js')}}"></script> 
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
				<i class="infro-img3"></i>
			</div>
			<div class="content-landing landing-margin">
                <form action="{{url('/third')}}" method="post" id="register">
                {{csrf_field()}}
                    <ul>
                        <li class="set-password clearfix">
                            <label class="normal fl">新密码：</label>
                            <input type="password" class="normal-input fl" id="new_password" name="new_password"/>
                             <div class="error-box fl" id="password_warn">
                                <strong class="error" style="display:none"></strong>
                                <p class="tip" style="display:none">请输入新密码</p>
                                <!-- <p class="msg_error" style="display:none"></p> -->
                             </div>  
                        </li>
                        <li class="clearfix">
                            <label class="normal fl">确认密码：</label>
                            <input type="password" class="normal-input fl" id="confirm_password" name="confirm_password"/>
                            <div class="error-box fl" id="confirm_password_warn">
                                <strong class="error" style="display:none"></strong>
                                <p class="tip" style="display:none">请再次输入密码</p>
                            </div>   
                        </li>
                        <li>
                            <label class="normal fl"></label>
                            <div class="botn">
                                <input type="submit" class="sub" value="确 认" >
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