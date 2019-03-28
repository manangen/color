
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="/home_public/css/iconfont.css">
	<link rel="stylesheet" href="/home_public/css/global.css">
	<link rel="stylesheet" href="/home_public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/home_public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="/home_public/css/login.css">
	<script src="/home_public/js/jquery.1.12.4.min.js" charset="UTF-8"></script>
	<script src="/home_public/js/bootstrap.min.js" charset="UTF-8"></script>
	<script src="/home_public/js/jquery.form.js" charset="UTF-8"></script>
	<script src="/home_public/js/global.js" charset="UTF-8"></script>
	<script src="/home_public/js/login.js" charset="UTF-8"></script>
	<title>U袋网 - 登录 / 注册</title>
</head>
<body>
	<div class="public-head-layout container">
		<a class="logo" href="index.html"><img src="/home_public/images/icons/logo.jpg" alt="U袋网" class="cover"></a>
	</div>
	<div style="background:url(/home_public/images/login_bg.jpg) no-repeat center center; ">
		<div class="login-layout container">
			<div class="form-box login" style="display: block;">
				<div class="tabs-nav">
					<h2>欢迎登录U袋网平台</h2>
					<!-- 显示错误 信息 开始 -->
				</div>
				<div class="tabs_container">

					<!-- 登录的表单 -->
					<form class="tabs_form" action="/homes/user/store" method="post" id="login_form">
					{{csrf_field()}}
					@if (count($errors) > 0)
					    <div class="mws-form-message error">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
						<div class="form-group">
							<div class="input-group">
							<div class="input-group-addon">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</div>
							<input class="form-control user" name="uname" id="uname" required placeholder="用户名" maxlength="15" autocomplete="off" type="text">
						</div>
					</div>
						  <!-- <div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
								</div>
								<input class="form-control phone" name="uphone" id="uphone" required placeholder="手机号" maxlength="11" autocomplete="off" type="text">
							</div>
						</div> -->
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								</div>
								<input class="form-control password" name="password" id="password" placeholder="请输入密码" autocomplete="off" type="password">
								<div class="input-group-addon pwd-toggle" title="显示密码"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></div>
							</div>
						</div>
						<div class="checkbox">
	                        
	                        <a href="javascript:;" class="pull-right" id="resetpwd">忘记密码？</a>
	                    </div>
	                    <!-- 错误信息 -->
						<div class="form-group">
							<div class="error_msg" id="login_error">
								<!-- 错误信息 范例html
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>密码错误</strong> 请重新输入密码
								</div>
								 -->
							</div>
						</div>
						 <input type="submit" value="登录" class="btn btn-large btn-primary btn-lg btn-block submit"><br/>
	                    <p class="text-center">没有账号？<a href="javascript:;" id="register">免费注册</a></p>
                    </form>





                    <div class="tabs_div">
	                    <div class="success-box">
	                    	<div class="success-msg">
								<i class="success-icon"></i>
	                    		<p class="success-text">登录成功</p>
	                    	</div>
	                    </div>
	                    <div class="option-box">
	                    	<div class="buts-title">
	                    		<!-- 现在您可以 -->
	                    	</div>
	                    	<div class="buts-box">
	                    		<a role="button" href="index.html" class="btn btn-block btn-lg btn-default">继续访问商城</a>
								<a role="button" href="udai_welcome.html" class="btn btn-block btn-lg btn-info">登录会员中心</a>
	                    	</div>
	                    </div>
                    </div>
                </div>
			</div>
			<div class="form-box register">
  				<div class="tabs-nav">
  					<h2>欢迎注册<a href="javascript:;" class="pull-right fz16" id="reglogin">返回登录</a></h2>
  					@if (count($errors) > 0)
					    <div class="mws-form-message error">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
  				</div>
  				
  				<div class="tabs_container">
					<!-- 注册 -->
					<form class="tabs_form" action="/homes/user/insert" method="post" id="register_form">
					{{csrf_field()}}
						<div class="form-group">
							<div class="input-group">
							<div class="input-group-addon">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</div>
							<input class="form-control user" name="uname" id="uname" required placeholder="用户名" maxlength="15" autocomplete="off" type="text">
						</div>
					</div>
							<div class="form-group">
								<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
								</div>
								<input class="form-control phone" name="phone" id="phone" required placeholder="手机号" maxlength="11" autocomplete="off" type="text">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input class="form-control" name="smscode" id="register_sms" placeholder="输入验证码" type="text">
								<span class="input-group-btn" onclick="sendMobileCode();">
									<button class="btn btn-primary getsms" type="button">发送短信验证码</button>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								</div>
								<input class="form-control password" name="password" id="register_pwd" placeholder="请输入密码" autocomplete="off" type="password">
								<div class="input-group-addon pwd-toggle" title="显示密码"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></div>
							</div>
						</div>
						<div class="checkbox" >
	                        <label>
	                        	<input checked="" name="agree" id="register_checkbox" value="" type="checkbox"><i></i> 同意<a href="temp_article/udai_article3.html">U袋网用户协议</a>
	                        </label>
	                    </div>
	                    <!-- 错误信息 -->
						<div class="form-group">
							<div class="error_msg" id="register_error"></div>
						</div>
						 <input type="submit" value="注册" class="btn btn-large btn-primary btn-lg btn-block submit" >
	                    <!-- <button class="btn btn-large btn-primary btn-lg btn-block submit" id="register_submit" type="button">注册</button> -->
                    </form>



                    <div class="tabs_div">
	                    <div class="success-box">
	                    	<div class="success-msg">
								<i class="success-icon"></i>
	                    		<p class="success-text">注册成功</p>
	                    	</div>
	                    </div>
	                    <div class="option-box">
	                    	<div class="buts-title">
	                    		现在您可以
	                    	</div>
	                    	<div class="buts-box">
	                    		<a role="button" href="index.html" class="btn btn-block btn-lg btn-default">继续访问商城</a>
								<a role="button" href="udai_welcome.html" class="btn btn-block btn-lg btn-info">登录会员中心</a>
	                    	</div>
	                    </div>
                    </div>
                </div>
			</div>
			<div class="form-box resetpwd">
  				<div class="tabs-nav clearfix">
  					<h2>找回密码<a href="javascript:;" class="pull-right fz16" id="pwdlogin">返回登录</a></h2>
  				</div>
  				<div class="tabs_container">
					<form class="tabs_form" action="https://rpg.blue/member.php?mod=logging&action=login" method="post" id="resetpwd_form">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
								</div>
								<input class="form-control phone" name="phone" id="resetpwd_phone" required placeholder="手机号" maxlength="11" autocomplete="off" type="text">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input class="form-control" name="sms" id="resetpwd_sms" placeholder="输入验证码" type="text">
								<span class="input-group-btn" onclick="sendMobileCode]=();">
									<button class="btn btn-primary getsms" type="button">发送短信验证码</button>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								</div>
								<input class="form-control password" name="password" id="resetpwd_pwd" placeholder="新的密码" autocomplete="off" type="password">
								<div class="input-group-addon pwd-toggle" title="显示密码"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></div>
							</div>
						</div>
	                    <!-- 错误信息 -->
						<div class="form-group">
							<div class="error_msg" id="resetpwd_error"></div>
						</div>
	                    <button class="btn btn-large btn-primary btn-lg btn-block submit" id="resetpwd_submit" type="button">重置密码</button>
                    </form>
                    <div class="tabs_div">
	                    <div class="success-box">
	                    	<div class="success-msg">
								<i class="success-icon"></i>
	                    		<p class="success-text">密码重置成功</p>
	                    	</div>
	                    </div>
	                    <div class="option-box">
	                    	<div class="buts-title">
	                    		现在您可以
	                    	</div>
	                    	<div class="buts-box">
	                    		<a role="button" href="index.html" class="btn btn-block btn-lg btn-default">继续访问商城</a>
								<a role="button" href="login.html" class="btn btn-block btn-lg btn-info">返回登陆</a>
	                    	</div>
	                    </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function sendMobileCode(){
			//获取手机号
			var phone = $('#phone').val();
			// console.log(phone);
			var preg_phone	 =/^1{1}[3-9]{1}[\d]{9}$/;
			if(!preg_phone.test(phone)){
				alert('请输入正确的手机号码');
				return;
			}
			//发送ajax
			$.get('/homes/user/sendMobileCode',{phone:phone},function(data){
				if(data.error_code == '0'){
					alert('恭喜你发送成功了');
				}else{
					alert('发送失败,请重新发送');
				}
			},'json');
		}

	</script>
	<div class="footer-login container clearfix">
		<ul class="links">
			<a href=""><li>网店代销</li></a>
			<a href=""><li>U袋学堂</li></a>
			<a href=""><li>联系我们</li></a>
			<a href=""><li>企业简介</li></a>
			<a href=""><li>新手上路</li></a>
		</ul>
		<!-- 版权 -->
		<p class="copyright">
			© 2005-2017 U袋网 版权所有，并保留所有权利<br>
			ICP备案证书号：闽ICP备16015525号-2&nbsp;&nbsp;&nbsp;&nbsp;福建省宁德市福鼎市南下村小区（锦昌阁）1栋1梯602室&nbsp;&nbsp;&nbsp;&nbsp;Tel: 18650406668&nbsp;&nbsp;&nbsp;&nbsp;E-mail: 18650406668@qq.com
		</p>
	</div>
</body>
</html>