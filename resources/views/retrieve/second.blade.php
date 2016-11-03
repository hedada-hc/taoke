<!-- 第二部 -->
<!DOCTYPE html>
<html>
<head>
	<title>找回密码页2</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="{{asset('bate/css/common.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bate/css/find-password.css')}}">
	<script src="{{asset('bate/js/jquery-1.10.1.min.js')}}"></script> 
    <script src="{{asset('bate/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('bate/js/additional-methods.js')}}"></script>  
    <script src="{{asset('bate/js/find-password2.js')}}"></script> 
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
		<div class="main-infro infro-height">
			<div class="infro-img">
				<i class="infro-img2"></i>
			</div>
			<p class="phone-text" style="opacity: 0;">淘客助手已向您的手机<span class="msg"></span>发送了短信验证码，请及时查看！</p>
			<div class="content-landing themargin">
                <form action="{{url('/second')}}" method="post" id="register">
                {{csrf_field()}}
                    <ul>
                    @if(count($errors)>0)
                    	{{dd($errors)}}
                    @endif
                        <li  id="verify_display">
                            <label class="normal fl">短信验证码：</label>
                            <input class="normal-input code-input fl" id="code" name="code" type="text" placeholder="验证码">
                            <button type="button">点击获取验证码</button>
                            <div class="error-box fl" id="code_warn">
                                <p class="tip"></p>
                            </div>
                        </li>
                        <li>
                            <label class="normal fl"></label>
                            <div class="botn">
                                <input type="submit" class="sub"  value="确 定" >
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
		</div>
	</div>
	<script type="text/javascript">
		$(function(){


			$('button').click(function(){

				db = $('.normal-input').val();

					$.post("{{url('/findPassword')}}",{'_token':'{{csrf_token()}}'},function(data){
	                    //信息框-例1
	                    $('.phone-text').css({opacity:1});
	                   	$('button').text('倒计时60');
	                   	$('.msg').text(data.msg);
					 });
			})
		})


	</script>
	<div class="foot wth">
		<p>武汉云析网络科技有限公司&nbsp;鄂ICP备10209250号&nbsp;|&nbsp;ICP许可证号：鄂B1-20150109&nbsp;|&nbsp;Copyright &copy;&nbsp;2010-2016&nbsp;JuanPi.com All Rights Reserved</p>
	</div>
</body>
</html>		