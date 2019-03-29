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
	<title>解忧百货</title>
</head>
<body>
	<!-- 顶部tab -->
	<div class="tab-header">
		<div class="inner">
			<div class="pull-left">
				<div class="pull-left">嗨，欢迎来到<span class="cr">解忧百货</span></div>				

			</div>
			<div class="pull-right">

				<a href="/homes/register"><span class="cr">登录</span></a>
				<a href="/homes/register">注册</a>

				<a href="">个人中心</a>
				<a href="">我的订单</a>
							

			</div>
		</div>
	</div>
	<!-- 搜索栏 -->
	<div class="top-search">
		<div class="inner">
			<a class="logo" href="/home/"><img src="/home_public/images/icons/logo.jpg" alt="解忧百货" class="cover"></a>

			<div class="search-box">
				<form class="input-group">
					<input placeholder="Ta们都在用解忧百货" type="text">
					<span class="input-group-btn">
						<button type="button">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</button>
					</span>
				</form>
			</div>
			<div class="cart-box">
				<a href="/home/shop/index" class="cart-but">
					<i class="iconfont icon-shopcart cr fz16"></i> 购物车 0 件
				</a>
			</div>
		</div>
	</div>

	<!-- 首页导航栏 -->
	<div class="top-nav bg3">
			<div class="nav-box inner">
				<div class="all-cat">
					<div class="title"><i class="iconfont icon-menu"></i> 全部分类</div>
					<div class="cat-list__box">
						@foreach($cates_data as $k=>$v)
						<div class="cat-box">						
							<div class="title">
								<i class="iconfont icon-skirt ce"></i> {{ $v->cname }}
							</div>
							<div class="cat-list__deploy">
								@foreach($v['sub'] as $kk=>$vv)
								<div class="deploy-box">															
									<div class="genre-box clearfix">
										<span class="title">{{ $vv->cname }}：</span>									
										<div class="genre-list">
										@foreach($vv['sub'] as $kkk=>$vvv)										
											<a href="home/tiem/{{$vvv->id}}">{{ $vvv->cname }}</a>
										@endforeach	
										</div>									
									</div>																						
								</div>
								@endforeach	
							</div>						
						</div>
						@endforeach
					</div>
				</div>
				<ul class="nva-list">
					<a href="/home"><li class="active">首页</li></a>
				</ul>
			</div>
		</div>

	<!-- 顶部轮播 -->
    <div class="swiper-container banner-box">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href=""><img src="/home_public/images/temp/banner_1.jpg" class="cover"></a></div>
            <div class="swiper-slide"><a href=""><img src="/home_public/images/temp/banner_2.jpg" class="cover"></a></div>
            <div class="swiper-slide"><a href=""><img src="/home_public/images/temp/banner_3.jpg" class="cover"></a></div>
            <div class="swiper-slide"><a href=""><img src="/home_public/images/temp/banner_4.jpg" class="cover"></a></div>
            <div class="swiper-slide"><a href=""><img src="/home_public/images/temp/banner_5.jpg" class="cover"></a></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

	<!-- 楼层内容 -->
	<div class="content inner" style="margin-bottom: 40px;">
		<section class="scroll-floor floor-1 clearfix">
			<div class="pull-left">
				<div class="floor-title">
					<i class="iconfont icon-tuijian fz16"></i> 爆款推荐
				</div>
				<div class="con-box">
					<div class="left-img hot-img">
						<img src="/home_public/images/floor_1.jpg" alt="" class="cover">
					</div>
					<div class="right-box hot-box">
						<a href="" class="floor-item">
							<div class="item-img hot-img">
								<img src="/home_public/images/temp/S-001.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
							</div>
							<div class="price clearfix">
								<span class="pull-left cr fz16">￥18.0</span>
								<span class="pull-right c6">进货价</span>
							</div>
							<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
						</a>						
					</div>
				</div>
			</div>
			<div class="pull-right">
				<div class="floor-title">
					<i class="iconfont icon-horn fz16"></i> 平台公告
					<a href="udai_notice.html" class="more"><i class="iconfont icon-more"></i></a>
				</div>
				<div class="con-box">
					<div class="notice-box bgf5">
						<div class="swiper-container">
					   
							<div class="swiper-wrapper">
							
                                       {{-- 公告遍历 --}}
                                          @foreach($notices as $k=>$v)
							   	<a class="swiper-slide ep" href="homes/notices/{{ $v->id }}">{{ $v->name}} {{ $v->cartname}}
							   	</a>
						                     @endforeach

							</div>
						  
						</div>
					</div>
					<div class="buts-box bgf5">
						<div class="but-div">
							<a href="">
								<i class="but-icon"></i>
								<p>物流查询</p>
							</a>
						</div>
						<div class="but-div">
							<a href="">
								<i class="but-icon"></i>
								<p>热卖专区</p>
							</a>
						</div>
						<div class="but-div">
							<a href="">
								<i class="but-icon"></i>
								<p>满减专区</p>
							</a>
						</div>
						<div class="but-div">
							<a href="">
								<i class="but-icon"></i>
								<p>折扣专区</p>
							</a>
						</div>
					</div>
				</div>
				
			</div>
			
		</section>
		<section class="scroll-floor floor-3">
			<div class="floor-title">
				<i class="iconfont icon-fushi fz16"></i> 男装
			</div>
			<div class="con-box">
				<div class="left-img hot-img" href="">
					<img src="/home_public/images/floor_3.jpg" alt="" class="cover">
				</a>
			    {{--男装遍历区域--}}
				<div class="right-box">
					
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-001.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
				
				</div>

			</div>
		</section>
	</div>
	<script>
		$(document).ready(function(){ 
			// 顶部banner轮播
			var banner_swiper = new Swiper('.banner-box', {
				autoplayDisableOnInteraction : false,
				pagination: '.banner-box .swiper-pagination',
				paginationClickable: true,
				autoplay : 5000,
			});
			// 新闻列表滚动
			var notice_swiper = new Swiper('.notice-box .swiper-container', {
				paginationClickable: true,
				mousewheelControl : true,
				direction : 'vertical',
				slidesPerView : 10,
				autoplay : 2e3,
			});
			// 楼层导航自动 active
			$.scrollFloor();
			// 页面下拉固定楼层导航
			$('.floor-nav').smartFloat();
			$('.to-top').toTop({position:false});
		});
	</script>
	<!-- 右侧菜单 -->
	<div class="right-nav">
		<ul class="r-with-gotop">
			<li class="r-toolbar-item">
				<a href="udai_welcome.html" class="r-item-hd">
					<i class="iconfont icon-user"></i>
					<div class="r-tip__box"><span class="r-tip-text">用户中心</span></div>
				</a>
			</li>
			<li class="r-toolbar-item">
				<a href="udai_shopcart.html" class="r-item-hd">
					<i class="iconfont icon-cart" data-badge="$"></i>
					<div class="r-tip__box"><span class="r-tip-text">购物车</span></div>
				</a>
			</li>
			<li class="r-toolbar-item">
				<a href="udai_collection.html" class="r-item-hd">
					<i class="iconfont icon-aixin"></i>
					<div class="r-tip__box"><span class="r-tip-text">我的收藏</span></div>
				</a>
			</li>
			<li class="r-toolbar-item">
				<a href="" class="r-item-hd">
					<i class="iconfont icon-liaotian"></i>
					<div class="r-tip__box"><span class="r-tip-text">联系客服</span></div>
				</a>
			</li>
			<li class="r-toolbar-item">
				<a href="issues.html" class="r-item-hd">
					<i class="iconfont icon-liuyan"></i>
					<div class="r-tip__box"><span class="r-tip-text">留言反馈</span></div>
				</a>
			</li>
			<li class="r-toolbar-item to-top">
				<i class="iconfont icon-top"></i>
				<div class="r-tip__box"><span class="r-tip-text">返回顶部</span></div>
			</li>
		</ul>
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
		<div class="footer-links inner">
			@foreach($link as $k=>$v)
			<dt><a href="{{ $v->lurl }}" target="_blank">{{ $v->lname }}</a></dt>
			@endforeach			
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
