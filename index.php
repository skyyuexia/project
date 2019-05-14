<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,maximum-scale=1,user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title>打包行李你怕了吗</title>
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.dialog {
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    display: none;
		    z-index: 999999;
		}
		.dialog div {
		    position: absolute;
		    background: rgba(0,0,0,.5);
		    top: 50%;
		    left: 50%;
		    -webkit-transform: translateX(-50%) translateY(-50%);
		    transform: translateX(-50%) translateY(-50%);
		    width: 10rem;
		    border-radius: 1rem;
		    padding: .2rem .1rem;
		    color: #fff;
		    font-size: .6rem;
		    text-align: center;
		    line-height: 1rem;
		}
	</style>

</head>
<body>

	<div class="audio act">
		<audio id="media" autoplay preload loop src="img/music.mp3?v=1"></audio>
		<!-- <audio id="media" autoplay preload loop src=""></audio> -->
		<img src="img/music.png">
	</div>

	<div class="content-box">

		<!-- loading -->
		<div class="content content-loading">
			<div class="loading-box">
				<img class="joy" src="img/joy-jump.png" alt="">
				<img class="box" src="img/box-open.png" alt="">
				<img class="boxload" src="img/box-close.png" style="display: none" alt="">
				<img class="boxload" src="img/box-open.png" style="display:none" alt="">
				<img class="boxload" src="img/box-open-2.png" style="display:none" alt="">
				<img class="boxload" src="img/box-open-3.png" style="display:none" alt="">


				<div class="strip-box">
					<div class="strip"></div>
				</div>
				<p class="strip-num">0%</p>
			</div>
		</div>

		<!-- 对话场景 -->
		<div class="content content-scene">
			<img class="door-pendant" src="img/door-pendant.png" alt="">

			<img class="door" src="img/door-1.png" alt="">

			<img class="dialog-up dialog-up-1 animated" src="img/dialog-up-1.png" alt="">
			<img class="dialog-up dialog-up-2 animated" src="img/dialog-up-2.png" alt="">
			<img class="dialog-up dialog-up-3 animated" src="img/dialog-up-3.png" alt="">
			<img class="dialog-up dialog-up-4 animated" src="img/dialog-up-4.png" alt="">

			<img class="dialog-down dialog-down-1 animated" src="img/dialog-down-1.png" alt="">
			<img class="dialog-down dialog-down-2 animated" src="img/dialog-down-2.png" alt="">
			<img class="dialog-down dialog-down-3 animated" src="img/dialog-down-3.png" alt="">
			<img class="dialog-down dialog-down-4 animated" src="img/dialog-down-4.png" alt="">

			<img class="joys joys-1 animated" src="img/joy-scene-1.png" alt="">
			<img class="joys joys-2 animated" src="img/joy-scene-2.png" alt="">
			<img class="joys joys-3 animated" src="img/joy-scene-3.png" alt="">
			<img class="joys joys-4 animated" src="img/joy-scene-4.png" alt="">
		</div>

		<!-- 选择目的地 -->
		<div class="content content-destination">
			<img class="slogan" src="img/slogan.png" alt="">

			<div class="destination-box">
				<img class="frame" src="img/frame.png" alt="">
				<div class="swiper-container destination-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide destination-slide">
							<img class="destination-img" src="img/destination-img-1.png" alt="">
							<img class="destination-title" src="img/destination-title-1.png" alt="">
							<img class="balloon animated shake" src="img/balloon.png" alt="">
						</div>
						<div class="swiper-slide destination-slide">
							<img class="destination-img" src="img/destination-img-2.png" alt="">
							<img class="destination-title" src="img/destination-title-2.png" alt="">
							<img class="cloud-1" src="img/cloud-1.png" alt="">
							<img class="cloud-2" src="img/cloud-2.png" alt="">
						</div>
						<div class="swiper-slide destination-slide">
							<img class="destination-img" src="img/destination-img-3.png" alt="">
							<img class="destination-title" src="img/destination-title-3.png" alt="">
							<img class="ship-1 animated shake" src="img/ship-1.png" alt="">
							<img class="ship-2 animated shake" src="img/ship-2.png" alt="">
						</div>
						<div class="swiper-slide destination-slide">
							<img class="destination-img" src="img/destination-img-4.png" alt="">
							<img class="destination-title" src="img/destination-title-4.png" alt="">
							<img class="cloud-3" src="img/cloud-1.png" alt="">
							<img class="cloud-4" src="img/cloud-1.png" alt="">
							<img class="cloud-5" src="img/cloud-1.png" alt="">
						</div>
					</div>
				</div>
				<div class="swiper-button-prev destination-prev"></div>
				<div class="swiper-button-next destination-next"></div>
			</div>

			<img class="btn-start" src="img/btn-start.png" alt="">
		</div>

		<!-- 选择物品 -->
		<div class="content content-trunk content-trunk-1">
			<div class="trunk-title animated fadeInUp">
				<img src="img/trunk.png?v=1" alt="">
			</div>

			<!-- 徒步 -->
			<img class="joy-1 animated fadeInLeft" src="img/joy-1.png" alt="">
			<img class="part-magnifier animated pulse" src="img/part-magnifier.png" alt="">

			<!-- 都市 -->
			<img class="joy-2 animated fadeInRight" src="img/joy-2.png" alt="">
			<img class="part-jukebox animated pulse" src="img/part-jukebox.png" alt="">

			<!-- 海边 -->
			<img class="joy-3 animated fadeInRight" src="img/joy-3.png" alt="">
			<img class="part-conch animated tada" src="img/part-conch.png" alt="">

			<!-- 遗迹 -->
			<img class="joy-4 animated fadeInLeft" src="img/joy-4.png" alt="">
			<img class="part-globe" src="img/part-globe.png" alt="">

			<div class="goods-box"></div>

			<div class="select-box">
				<div class="select">
					<img class="wear act" src="img/select-wear.png" alt="">
					<img class="use" src="img/select-use.png" alt="">
					<img class="other" src="img/select-other.png" alt="">
				</div>

				<img class="back" src="img/btn-back.png" alt="">
				<img class="save" src="img/btn-save.png" alt="">

				<div class="swiper-container select-swiper select-wear-swiper" wulei="1">
					<div class="swiper-wrapper">
						<div class="swiper-slide select-slide swiper-slide-1-1">
							<img class="res-img" src="img/wear-1.png" wulei="1" wuIndex="1" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>速干衣</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-2">
							<img class="res-img" src="img/wear-2.png" wulei="1" wuIndex="2" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>速干裤</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-3">
							<img class="res-img" src="img/wear-3.png" wulei="1" wuIndex="3" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>冲锋衣</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-4">
							<img class="res-img" src="img/wear-4.png" wulei="1" wuIndex="4" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>冲锋裤</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-5">
							<img class="res-img" src="img/wear-5.png" wulei="1" wuIndex="5" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>登山鞋</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-6">
							<img class="res-img" src="img/wear-6.png" wulei="1" wuIndex="6" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>T恤</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-7">
							<img class="res-img" src="img/wear-7.png" wulei="1" wuIndex="7" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>沙滩鞋</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-8">
							<img class="res-img" src="img/wear-8.png" wulei="1" wuIndex="8" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>比基尼</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-9">
							<img class="res-img" src="img/wear-9.png" wulei="1" wuIndex="9" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>泳裤</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-10">
							<img class="res-img" src="img/wear-10.png" wulei="1" wuIndex="10" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>运动鞋</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-11">
							<img class="res-img" src="img/wear-11.png" wulei="1" wuIndex="11" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>遮阳帽</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-12">
							<img class="res-img" src="img/wear-12.png" wulei="1" wuIndex="12" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>背包</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-13">
							<img class="res-img" src="img/wear-13.png" wulei="1" wuIndex="13" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>登山包</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-14">
							<img class="res-img" src="img/wear-14.png" wulei="1" wuIndex="14" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>礼服</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-15">
							<img class="res-img" src="img/wear-15.png" wulei="1" wuIndex="15" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>西服</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-16">
							<img class="res-img" src="img/wear-16.png" wulei="1" wuIndex="16" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>西裤</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-17">
							<img class="res-img" src="img/wear-17.png" wulei="1" wuIndex="17" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>高跟鞋</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-1-18">
							<img class="res-img" src="img/wear-18.png" wulei="1" wuIndex="18" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>皮鞋</p>
						</div>
					</div>
				</div>
				<div class="swiper-container select-swiper select-use-swiper" wulei="2">
					<div class="swiper-wrapper">
						<div class="swiper-slide select-slide swiper-slide-2-1">
							<img class="res-img" src="img/use-1.png" wulei="2" wuIndex="1" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>登山杖</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-2">
							<img class="res-img" src="img/use-2.png" wulei="2" wuIndex="2" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>帐篷</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-3">
							<img class="res-img" src="img/use-3.png" wulei="2" wuIndex="3" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>睡袋</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-4">
							<img class="res-img" src="img/use-4.png" wulei="2" wuIndex="4" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>防护眼镜</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-5">
							<img class="res-img" src="img/use-5.png" wulei="2" wuIndex="5" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>GPS</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-6">
							<img class="res-img" src="img/use-6.png" wulei="2" wuIndex="6" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>化妆品</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-7">
							<img class="res-img" src="img/use-7.png" wulei="2" wuIndex="7" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>照明用具</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-8">
							<img class="res-img" src="img/use-8.png" wulei="2" wuIndex="8" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>饰品</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-9">
							<img class="res-img" src="img/use-9.png" wulei="2" wuIndex="9" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>转换插头</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-10">
							<img class="res-img" src="img/use-10.png" wulei="2" wuIndex="10" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>潜水用具</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-11">
							<img class="res-img" src="img/use-11.png" wulei="2" wuIndex="11" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>充电宝</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-12">
							<img class="res-img" src="img/use-12.png" wulei="2" wuIndex="12" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>相机</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-13">
							<img class="res-img" src="img/use-13.png" wulei="2" wuIndex="13" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>三脚架</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-14">
							<img class="res-img" src="img/use-14.png" wulei="2" wuIndex="14" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>自拍杆</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-15">
							<img class="res-img" src="img/use-15.png" wulei="2" wuIndex="15" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>遮阳伞</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-16">
							<img class="res-img" src="img/use-16.png" wulei="2" wuIndex="16" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>速干浴巾</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-17">
							<img class="res-img" src="img/use-17.png" wulei="2" wuIndex="17" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>保温杯</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-18">
							<img class="res-img" src="img/use-18.png" wulei="2" wuIndex="18" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>隐形眼镜</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-19">
							<img class="res-img" src="img/use-19.png" wulei="2" wuIndex="19" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>手表</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-20">
							<img class="res-img" src="img/use-20.png" wulei="2" wuIndex="20" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>微单相机</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-21">
							<img class="res-img" src="img/use-21.png" wulei="2" wuIndex="21" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>防晒霜</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-22">
							<img class="res-img" src="img/use-22.png" wulei="2" wuIndex="22" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>水下相机</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-23">
							<img class="res-img" src="img/use-23.png" wulei="2" wuIndex="23" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>防水袋</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-2-24">
							<img class="res-img" src="img/use-24.png" wulei="2" wuIndex="24" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>太阳镜</p>
						</div>
					</div>
				</div>
				<div class="swiper-container select-swiper select-other-swiper" wulei="3">
					<div class="swiper-wrapper">
						<div class="swiper-slide select-slide swiper-slide-3-1">
							<img class="res-img special other-1 other-change" wulei="3" wuIndex="1" tf="7" src="img/other-1.png" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>枸杞</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-2">
							<img class="res-img special other-2 other-change" wulei="3" wuIndex="2" tf="1" src="img/other-2.png" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>安全套</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-3">
							<img class="res-img special other-3 other-change" wulei="3" wuIndex="3" tf="8" src="img/other-3.png" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>臭袜子</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-4">
							<img class="res-img special other-4 other-change" wulei="3" wuIndex="4" tf="2" src="img/other-4.png" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>撩妹秘籍</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-5">
							<img class="res-img special other-5 other-change" wulei="3" wuIndex="5" tf="3" src="img/other-5.png" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>男票</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-6">
							<img class="res-img special other-6 other-change" wulei="3" wuIndex="6" tf="4" src="img/other-6.png" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>女票</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-7">
							<img class="res-img special other-7 other-change" wulei="3" wuIndex="7" tf="5" src="img/other-7.png" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>高考模拟真题</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-8">
							<img class="res-img special other-8 other-change" wulei="3" wuIndex="8" tf="6" src="img/other-8.png" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>出入平安符</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-9">
							<img class="res-img" src="img/other-9.png" wulei="3" wuIndex="9" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>防蚊液</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-10">
							<img class="res-img" src="img/other-10.png" wulei="3" wuIndex="10" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>垃圾袋</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-11">
							<img class="res-img" src="img/other-11.png" wulei="3" wuIndex="11" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>口气清新剂</p>
						</div>
						<div class="swiper-slide select-slide swiper-slide-3-12">
							<img class="res-img" src="img/other-12.png" wulei="3" wuIndex="12" alt="">
							<img class="light" src="img/light.png" alt="">
							<p>景点介绍书</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 结果 -->
		<div class="content content-result">
			<div class="result-title">
				<img class="result-img" src="img/result-2-1.png" alt="">
			</div>
			<div class="image-box anchor-top">
				<img class="ssssva" style="width:100%;height:26rem;opacity: 0;position: absolute;top: 50%;margin-top: -14.2rem;left: 0;z-index: 1;" >
				<div class="select-result select-result-1"></div>

				<img class="necessary necessary-1" src="img/necessary-1.png" alt="">
				<img class="necessary necessary-2" src="img/necessary-2.png" alt="">
				<img class="necessary necessary-3" src="img/necessary-3.png" alt="">
				<img class="necessary necessary-4" src="img/necessary-4.png" alt="">

				<div class="list-box" style="z-index: 2;">
					<img class="joy-small" src="img/joy-small.png" alt="">
					<img class="btn-details animated tada" src="img/btn-details.png" alt="">
					<div class="list list-onfoot list-sel-wu list-sel-wu-1">
						<div class="list-img list-img-1"><img src="img/onfoot-1.png"></div>
						<div class="list-img list-img-2"><img src="img/onfoot-2.png"></div>
						<div class="list-img list-img-3"><img src="img/onfoot-3.png"></div>
						<div class="list-img list-img-4"><img src="img/onfoot-4.png"></div>
						<div class="list-img list-img-5"><img src="img/onfoot-5.png"></div>
						<div class="list-img list-img-6"><img src="img/onfoot-6.png"></div>
						<div class="list-img list-img-7"><img src="img/onfoot-7.png"></div>
						<div class="list-img list-img-8"><img src="img/onfoot-8.png"></div>
						<div class="list-img list-img-9"><img src="img/onfoot-9.png"></div>
						<div class="list-img list-img-10"><img src="img/onfoot-10.png"></div>
					</div>
					<div class="list list-urban list-sel-wu list-sel-wu-2">
						<div class="list-img list-img-1"><img src="img/urban-1.png"></div>
						<div class="list-img list-img-2"><img src="img/urban-2.png"></div>
						<div class="list-img list-img-3"><img src="img/urban-3.png"></div>
						<div class="list-img list-img-4"><img src="img/urban-4.png"></div>
						<div class="list-img list-img-5"><img src="img/urban-5.png"></div>
						<div class="list-img list-img-6"><img src="img/urban-6.png"></div>
						<div class="list-img list-img-7"><img src="img/urban-7.png"></div>
						<div class="list-img list-img-8"><img src="img/urban-8.png"></div>
						<div class="list-img list-img-9"><img src="img/urban-9.png"></div>
						<div class="list-img list-img-10"><img src="img/urban-10.png"></div>
					</div>
					<div class="list list-seaside list-sel-wu list-sel-wu-3" style="display: block;">
						<div class="list-img list-img-1"><img src="img/seaside-1.png"></div>
						<div class="list-img list-img-2"><img src="img/seaside-2.png"></div>
						<div class="list-img list-img-3"><img src="img/seaside-3.png"></div>
						<div class="list-img list-img-4"><img src="img/seaside-4.png"></div>
						<div class="list-img list-img-5"><img src="img/seaside-5.png"></div>
						<div class="list-img list-img-6"><img src="img/seaside-6.png"></div>
						<div class="list-img list-img-7"><img src="img/seaside-7.png"></div>
						<div class="list-img list-img-8"><img src="img/seaside-8.png"></div>
						<div class="list-img list-img-9"><img src="img/seaside-9.png"></div>
						<div class="list-img list-img-10"><img src="img/seaside-10.png"></div>
					</div>
					<div class="list list-ruins list-sel-wu list-sel-wu-4">
						<div class="list-img list-img-1"><img src="img/ruins-1.png"></div>
						<div class="list-img list-img-2"><img src="img/ruins-2.png"></div>
						<div class="list-img list-img-3"><img src="img/ruins-3.png"></div>
						<div class="list-img list-img-4"><img src="img/ruins-4.png"></div>
						<div class="list-img list-img-5"><img src="img/ruins-5.png"></div>
						<div class="list-img list-img-6"><img src="img/ruins-6.png"></div>
						<div class="list-img list-img-7"><img src="img/ruins-7.png"></div>
						<div class="list-img list-img-8"><img src="img/ruins-8.png"></div>
						<div class="list-img list-img-9"><img src="img/ruins-9.png"></div>
						<div class="list-img list-img-10"><img src="img/ruins-10.png"></div>
					</div>
				</div>
			</div>
			<img class="tips-save" src="img/tips-save.png" alt="">

			<img class="btn-reset" src="img/btn-reset.png" alt="">
			<img class="btn-add" src="img/btn-add.png" alt="">

			<div class="details-box">
				<div class="details">
					<div class="details-up"></div>
					<div class="details-center">						
					</div>
					<div class="details-down"></div>
				</div>
				<img class="btn-close" src="img/btn-close.png" alt="">
				<img class="tips-close" src="img/tips-close.png" alt="">
			</div>
		</div>

		<div class="dialog" style="display: none;"><div>物品选择太多，箱子要被挤爆啦</div></div>

	</div>
	
	<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.3.2.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/swiper.min.js"></script>
	<script type="text/javascript" src="js/pixi.js"></script>
	<script type="text/javascript" src="js/touch.min.js"></script>
	<script type="text/javascript" src="js/cat.touchjs.js"></script>
	<script type="text/javascript" src="js/common3.js?v=3"></script>
	<script>
		var shareTitle = '十一出游，你的行李箱里装什么？';
	    var shareContent = '听说99%的人都讨厌收拾行李箱？';
	    var shareImage = '';
	    var shareUrl = '';

	    function setShare(title, content, url) {
	        wx.onMenuShareTimeline({
	            title: title, // 分享标题
	            link: url, // 分享链接
	            imgUrl: shareImage, // 分享图标
	            success: function () {
	            	$.ajax({
				        url: 'stat.php',
				        dataType: 'json',
				        data:{num:'num1'},
				        type: 'get',
				        success: function (data) {

				        }
				    });
	            },
	            cancel: function () {
	                // 用户取消分享后执行的回调函数
	            }
	        });
	        wx.onMenuShareAppMessage({
	            title: title, // 分享标题
	            desc: content, // 分享描述
	            link: url, // 分享链接
	            imgUrl: shareImage, // 分享图标
	            type: 'link', // 分享类型,music、video或link，不填默认为link
	            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
	            success: function () {
	            	$.ajax({
				        url: 'stat.php',
				        dataType: 'json',
				        data:{num:'num2'},
				        type: 'get',
				        success: function (data) {

				        }
				    });
	            },
	            cancel: function () {
	            }
	        });
	    }
		$(function () {
	        shareImage = location.origin + '/img/joyshare.jpg';
	        shareUrl = location.href
            $.getScript('http://weixin.epntc.com/shareConfig.php?r='+Math.random()+'&debug=false&url=' + encodeURIComponent(shareUrl), function success(response, status) {
                wx.ready(function () {
                    setShare(shareTitle, shareContent, location.origin)
                });
            })
    	})
	</script>
	<script>
		$.ajax({
	        url: 'stat.php',
	        dataType: 'json',
	        data:{num:'visit_index'},
	        type: 'get',
	        success: function (data) {

	        }
	    });
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?04ad0f0286e1a71477a30067b1bb5183";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>

</body>
</html>
