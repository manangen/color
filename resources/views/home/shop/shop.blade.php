<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="/home_public/css/iconfont.css">
	<link rel="stylesheet" href="/home_public/css/global.css">
	<link rel="stylesheet" href="/home_public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/home_public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="/home_public/css/swiper.min.css">
	<link rel="stylesheet" href="/home_public/css/styles.css">
	<script src="/home_public/js/jquery.1.12.4.min.js" charset="UTF-8"></script>
	<script src="/home_public/js/bootstrap.min.js" charset="UTF-8"></script>
	<script src="/home_public/js/swiper.min.js" charset="UTF-8"></script>
	<script src="/home_public/js/global.js" charset="UTF-8"></script>
	<script src="/home_public/js/jquery.DJMask.2.1.1.js" charset="UTF-8"></script>
	<title>U袋网</title>
</head>
<body>
	<!-- 顶部tab -->
	<div class="tab-header">
		<div class="inner">
			<div class="pull-left">
				<div class="pull-left">嗨，欢迎来到<span class="cr">U袋网</span></div>
			</div>
			<div class="pull-right">
				<a href="/homes/register"><span class="cr">登录</span></a>
				<a href="/homes/register">注册</a>
				<a href="">个人中心</a>
				<a href="">我的订单</a>
			</div>
		</div>
	</div>
	<!-- 顶部标题 -->
	<div class="bgf5 clearfix">
		<div class="top-user">
			<div class="inner">
				<a class="logo" href="/home/"><img src="/home_public/images/icons/logo.jpg" alt="U袋网" class="cover"></a>
				<div class="title">购物车</div>
			</div>
		</div>
	</div>
	<div class="content clearfix bgf5">
		<section class="user-center inner clearfix">
			<div class="user-content__box clearfix bgf">
				<div class="title">购物车</div>
				<form action="udai_shopcart_pay.html" class="shopcart-form__box">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th width="150">
									<label class="checked-label"><input type="checkbox" class="check-all"><i></i> 全选</label>
								</th>
								<th width="300">商品信息</th>
								<th width="150">单价</th>
								<th width="200">数量</th>
								<th width="200">现价</th>
								<th width="80">操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">
									<label class="checked-label"><input type="checkbox"><i></i>
										<div class="img"><img src="/home_public/images/temp/M-003.jpg" alt="" class="cover"></div>
									</label>
								</th>
								<td>
									<div class="name ep3">锦瑟 原创传统日常汉服男绣花交领衣裳cp情侣装春夏款</div>
									<div class="type c9">颜色分类：深棕色  尺码：均码</div>
								</td>
								<td>¥20.0</td>
								<td>
									<div class="cart-num__box">
										<input type="button" class="sub" value="-">
										<input type="text" class="val" value="1" maxlength="2">
										<input type="button" class="add" value="+">
									</div>
								</td>
								<td>¥20.0</td>
								<td><a href="">删除</a></td>
							</tr>
							<tr>
								<th scope="row">
									<label class="checked-label"><input type="checkbox"><i></i>
										<div class="img"><img src="/home_public/images/temp/S-005.jpg" alt="" class="cover"></div>
									</label>
								</th>
								<td>
									<div class="name ep3">霜天月明 原创传统日常汉服男绣花交领衣裳cp春装单品</div>
									<div class="type c9">颜色分类：深棕色  尺码：均码</div>
								</td>
								<td>¥20.0</td>
								<td>
									<div class="cart-num__box">
										<input type="button" class="sub" value="-">
										<input type="text" class="val" value="1" maxlength="2">
										<input type="button" class="add" value="+">
									</div>
								</td>
								<td>¥20.0</td>
								<td><a href="">删除</a></td>
							</tr>
							<tr>
								<th scope="row">
									<label class="checked-label"><input type="checkbox"><i></i>
										<div class="img"><img src="/home_public/images/temp/M-007.jpg" alt="" class="cover"></div>
									</label>
								</th>
								<td>
									<div class="name ep3">陇上乐 原创传统日常汉服男绣花单大氅大袖衫cp情侣春秋</div>
									<div class="type c9">颜色分类：深棕色  尺码：均码</div>
								</td>
								<td>¥20.0</td>
								<td>
									<div class="cart-num__box">
										<input type="button" class="sub" value="-">
										<input type="text" class="val" value="1" maxlength="2">
										<input type="button" class="add" value="+">
									</div>
								</td>
								<td>¥20.0</td>
								<td><a href="">删除</a></td>
							</tr>
						</tbody>
					</table>
					<div class="user-form-group tags-box shopcart-submit pull-right">
						<button type="submit" class="btn">提交订单</button>
					</div>
					<div class="checkbox shopcart-total">
						<label><input type="checkbox" class="check-all"><i></i> 全选</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">删除</a>
						<div class="pull-right">
							已选商品 <span>2</span> 件
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;合计（不含运费）
							<b class="cr">¥<span class="fz24">40.00</span></b>
						</div>
					</div>
					<script>
						$(document).ready(function(){
							var $item_checkboxs = $('.shopcart-form__box tbody input[type="checkbox"]'),
								$check_all = $('.check-all');
							// 全选
							$check_all.on('change', function() {
								$check_all.prop('checked', $(this).prop('checked'));
								$item_checkboxs.prop('checked', $(this).prop('checked'));
							});
							// 点击选择
							$item_checkboxs.on('change', function() {
								var flag = true;
								$item_checkboxs.each(function() {
									if (!$(this).prop('checked')) { flag = false }
								});
								$check_all.prop('checked', flag);
							});
							// 个数限制输入数字
							$('input.val').onlyReg({reg: /[^0-9.]/g});
							// 加减个数
							$('.cart-num__box').on('click', '.sub,.add', function() {
								var value = parseInt($(this).siblings('.val').val());
								if ($(this).hasClass('add')) {
									$(this).siblings('.val').val(Math.min((value += 1),99));
								} else {
									$(this).siblings('.val').val(Math.max((value -= 1),1));
								}
							});
						});
					</script>
				</form>
			</div>
		</section>
	</div>
	<!-- 底部信息 -->
	<div class="footer">
		<div class="footer-tags">
			<div class="tags-box inner">
				<div class="tag-div">
					<img src="/home_public/images/icons/footer_1.gif" alt="厂家直供">
				</div>
				<div class="tag-div">
					<img src="/home_public/images/icons/footer_2.gif" alt="一件代发">
				</div>
				<div class="tag-div">
					<img src="/home_public/images/icons/footer_3.gif" alt="美工活动支持">
				</div>
				<div class="tag-div">
					<img src="/home_public/images/icons/footer_4.gif" alt="信誉认证">
				</div>
			</div>
		</div>
		<div class="copy-box clearfix">
			<ul class="copy-links">
				<a href=""><li>网店代销</li></a>
				<a href=""><li>U袋学堂</li></a>
				<a href=""><li>联系我们</li></a>
				<a href=""><li>企业简介</li></a>
				<a href=""><li>新手上路</li></a>
			</ul>
			<!-- 版权 -->
			<p class="copyright">
				© 2019-2029 解忧百货 版权所有，并保留所有权利<br>
				ICP备案证书号：京ICP证080268号&nbsp;&nbsp;&nbsp;&nbsp;广东省广州市天河区黄村智慧城时代E-PARK&nbsp;&nbsp;&nbsp;&nbsp;Tel: 110&nbsp;&nbsp;&nbsp;&nbsp;E-mail: 123456789@qq.com
			</p>
		</div>
	</div>
</body>
</html>