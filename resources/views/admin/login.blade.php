
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admin_public/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin_public/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin_public/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admin_public/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admin_public/css/mws-theme.css" media="screen">

<title>登录页</title>

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>登录</h1>
            <!-- 显示错误 信息 开始 -->
                @if (count($errors) > 0)
                    <div class="mws-form-message error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <!-- 显示错误 信息 结束 -->
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/dologin" method="post">
                	{{ csrf_field() }}
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" value="" name="uname" class="mws-login-username required" placeholder="用户名">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" value="" name="upass" class="mws-login-password required" placeholder="密码">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="登陆" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admin_public/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admin_public/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admin_public/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admin_public/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admin_public/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/admin_public/js/core/login.js"></script>

</body>
</html>
