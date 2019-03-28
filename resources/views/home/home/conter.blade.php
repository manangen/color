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
										<a href="">{{ $vvv->cname }}</a>
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
				<a href="index.html"><li class="active">首页</li></a>
				<a href="temp_article/udai_article10.html"><li>企业简介</li></a>
				<a href="temp_article/udai_article5.html"><li>新手上路</li></a>
				<a href="class_room.html"><li>U袋学堂</li></a>
				<a href="enterprise_id.html"><li>企业账号</li></a>
				<a href="udai_contract.html"><li>诚信合约</li></a>
				<a href="item_remove.html"><li>实时下架</li></a>
			</ul>

		</div>
	</div>
	<!-- 顶部轮播 -->
    <div class="swiper-container banner-box">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="item_show.html"><img src="/home_public/images/temp/banner_1.jpg" class="cover"></a></div>
            <div class="swiper-slide"><a href="item_show.html"><img src="/home_public/images/temp/banner_2.jpg" class="cover"></a></div>
            <div class="swiper-slide"><a href="item_category.html"><img src="/home_public/images/temp/banner_3.jpg" class="cover"></a></div>
            <div class="swiper-slide"><a href="item_show.html"><img src="/home_public/images/temp/banner_4.jpg" class="cover"></a></div>
            <div class="swiper-slide"><a href="item_sale_page.html"><img src="/home_public/images/temp/banner_5.jpg" class="cover"></a></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- 首页楼层导航 -->
	<!-- <nav class="floor-nav visible-lg-block">
		<span class="scroll-nav active">爆款推荐</span>
		<span class="scroll-nav">女装</span>
		<span class="scroll-nav">男装</span>
		<span class="scroll-nav">活力童装</span>
		<span class="scroll-nav">时尚包包</span>
		<span class="scroll-nav">鞋靴</span>
	</nav> -->
	<!-- 楼层内容 -->
	<div class="content inner" style="margin-bottom: 40px;">
		<section class="scroll-floor floor-1 clearfix">
			<div class="pull-left">
				<div class="floor-title">
					<i class="iconfont icon-tuijian fz16"></i> 爆款推荐
					<a href="" class="more"><i class="iconfont icon-more"></i></a>
				</div>
				<div class="con-box">
					<a class="left-img hot-img" href="">
						<img src="/home_public/images/floor_1.jpg" alt="" class="cover">
					</a>
					<div class="right-box hot-box">
						<a href="item_show.html" class="floor-item">
							<div class="item-img hot-img">
								<img src="/home_public/images/temp/S-001.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
							</div>
							<div class="price clearfix">
								<span class="pull-left cr fz16">￥18.0</span>
								<span class="pull-right c6">进货价</span>
							</div>
							<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
						</a>
						<a href="item_show.html" class="floor-item">
							<div class="item-img hot-img">
								<img src="/home_public/images/temp/S-002.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
							</div>
							<div class="price clearfix">
								<span class="pull-left cr fz16">￥18.0</span>
								<span class="pull-right c6">进货价</span>
							</div>
							<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
						</a>
						<a href="item_show.html" class="floor-item">
							<div class="item-img hot-img">
								<img src="/home_public/images/temp/S-003.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
							</div>
							<div class="price clearfix">
								<span class="pull-left cr fz16">￥18.0</span>
								<span class="pull-right c6">进货价</span>
							</div>
							<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
						</a>
						<a href="item_show.html" class="floor-item">
							<div class="item-img hot-img">
								<img src="/home_public/images/temp/S-004.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
							</div>
							<div class="price clearfix">
								<span class="pull-left cr fz16">￥18.0</span>
								<span class="pull-right c6">进货价</span>
							</div>
							<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
						</a>
						<a href="item_show.html" class="floor-item">
							<div class="item-img hot-img">
								<img src="/home_public/images/temp/S-005.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
							</div>
							<div class="price clearfix">
								<span class="pull-left cr fz16">￥18.0</span>
								<span class="pull-right c6">进货价</span>
							</div>
							<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
						</a>
						<a href="item_show.html" class="floor-item">
							<div class="item-img hot-img">
								<img src="/home_public/images/temp/S-006.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
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
							   	<a class="swiper-slide ep" href="homes/notices/{{ $v->id }}">{{ $v->name}} {{ $v->cartname}}</a>
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
							<a href="item_sale_page.html">
								<i class="but-icon"></i>
								<p>热卖专区</p>
							</a>
						</div>
						<div class="but-div">
							<a href="item_sale_page.html">
								<i class="but-icon"></i>
								<p>满减专区</p>
							</a>
						</div>
						<div class="but-div">
							<a href="item_sale_page.html">
								<i class="but-icon"></i>
								<p>折扣专区</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="scroll-floor floor-2">
			<div class="floor-title">
				<i class="iconfont icon-skirt fz16"></i> 女装
				<div class="case-list fz0 pull-right">
					<a href="item_category.html">高端女装</a>
					<a href="item_category.html">时尚女装</a>
					<a href="item_category.html">上装</a>
					<a href="item_category.html">下装</a>
					<a href="item_category.html">裙装</a>
					<a href="item_category.html">内衣</a>
				</div>
			</div>
			<div class="con-box">
				<a class="left-img hot-img" href="">
					<img src="/home_public/images/floor_2.jpg" alt="" class="cover">
				</a>
				<div class="right-box">
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-001.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-002.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-003.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-004.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-005.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-006.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-007.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-008.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
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
		<section class="scroll-floor floor-3">
			<div class="floor-title">
				<i class="iconfont icon-fushi fz16"></i> 男装
				<div class="case-list fz0 pull-right">
					<a href="item_category.html">高端女装</a>
					<a href="item_category.html">时尚女装</a>
					<a href="item_category.html">上装</a>
					<a href="item_category.html">下装</a>
					<a href="item_category.html">裙装</a>
					<a href="item_category.html">内衣</a>
				</div>
			</div>
			<div class="con-box">
				<a class="left-img hot-img" href="">
					<img src="/home_public/images/floor_3.jpg" alt="" class="cover">
				</a>
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
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-002.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-003.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-004.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-005.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-006.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-007.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-008.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
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
		<section class="scroll-floor floor-4">
			<div class="floor-title">
				<i class="iconfont icon-kid fz16"></i> 活力童装
				<div class="case-list fz0 pull-right">
					<a href="item_category.html">高端女装</a>
					<a href="item_category.html">时尚女装</a>
					<a href="item_category.html">上装</a>
					<a href="item_category.html">下装</a>
					<a href="item_category.html">裙装</a>
					<a href="item_category.html">内衣</a>
				</div>
			</div>
			<div class="con-box">
				<a class="left-img hot-img" href="">
					<img src="/home_public/images/floor_4.jpg" alt="" class="cover">
				</a>
				<div class="right-box">
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-011.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-012.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-013.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-014.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-015.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-016.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-017.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-018.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
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
		<section class="scroll-floor floor-5">
			<div class="floor-title">
				<i class="iconfont icon-bao fz16"></i> 时尚包包
				<div class="case-list fz0 pull-right">
					<a href="item_category.html">高端女装</a>
					<a href="item_category.html">时尚女装</a>
					<a href="item_category.html">上装</a>
					<a href="item_category.html">下装</a>
					<a href="item_category.html">裙装</a>
					<a href="item_category.html">内衣</a>
				</div>
			</div>
			<div class="con-box">
				<a class="left-img hot-img" href="">
					<img src="/home_public/images/floor_5.jpg" alt="" class="cover">
				</a>
				<div class="right-box">
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-011.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-012.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-013.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-014.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-015.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-016.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-017.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-018.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
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
		<section class="scroll-floor floor-6">
			<div class="floor-title">
				<i class="iconfont icon-shoes fz16"></i> 鞋靴
				<div class="case-list fz0 pull-right">
					<a href="item_category.html">高端女装</a>
					<a href="item_category.html">时尚女装</a>
					<a href="item_category.html">上装</a>
					<a href="item_category.html">下装</a>
					<a href="item_category.html">裙装</a>
					<a href="item_category.html">内衣</a>
				</div>
			</div>
			<div class="con-box">
				<a class="left-img hot-img" href="">
					<img src="/home_public/images/floor_6.jpg" alt="" class="cover">
				</a>
				<div class="right-box">
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-009.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-009.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-010.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-010.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-019.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-019.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/S-020.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
						</div>
						<div class="price clearfix">
							<span class="pull-left cr fz16">￥18.0</span>
							<span class="pull-right c6">进货价</span>
						</div>
						<div class="name ep" title="纯色圆领短袖T恤活a动衫弹力柔软">纯色圆领短袖T恤活a动衫弹力柔软</div>
					</a>
					<a href="item_show.html" class="floor-item">
						<div class="item-img hot-img">
							<img src="/home_public/images/temp/M-020.jpg" alt="纯色圆领短袖T恤活a动衫弹" class="cover">
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
	
