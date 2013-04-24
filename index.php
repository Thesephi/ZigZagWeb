<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- ZigZag Career -->

	<?php
		$host = $_SERVER["HTTP_HOST"];
		$cdn_prefix = ($host == 'zigzag.com')? "" : "http://zigzag-career.appspot.com/";

		$host = "http://".$host;
		$dl_sv_study = $host."/downloads/zigzagcareer-leaflet-sv-studyabroad.pdf";
		$dl_ns = $host."/downloads/zigzagcareer-leaflet-ns.pdf";
		$dl_sv_resume = $host."/downloads/zigzagcareer-leaflet-sv-resume.pdf";
		$dl_cv = $host."/downloads/zigzagcareer-leaflet-cv.pdf";
		$dl_dn = $host."/downloads/zigzagcareer-leaflet-dn.pdf";
	?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ZigZag Career</title>
        <meta name="description" content="resume writing, cv, proofreading, study abroad, consultations, company profile, personal profile, job application, personal branding">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo $cdn_prefix; ?>css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo $cdn_prefix; ?>css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
		
		<!--start of Offerchat js code-->
		<script type='text/javascript'>var ofc_key = '04b873293bef20ced9d971acc63a409b';(function(){  var oc = document.createElement('script'); oc.type = 'text/javascript'; oc.async = true;  oc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.offerchat.com/offerchat_widget.min.js?r='+ Math.random();  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(oc, s);}());</script>
		<!--end of Offerchat js code-->
		
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header id="main-header">
			<a href="/"><div id="logo"></div></a>
			<div id="social-bar">
				<a href="http://www.facebook.com/zigzagcareer" target="_blank" title="Find us on facebook" onclick="ga('send', 'event', 'User Behaviour', 'Visit Social Page', 'Facebook')"><div id="fb-btn"></div></a>
				<a href="http://www.twitter.com/zigzagcareer" target="_blank" title="Follow us @ZigZagCareer" onclick="ga('send', 'event', 'User Behaviour', 'Visit Social Page', 'Twitter')"><div id="tt-btn"></div></a>
				<a href="https://plus.google.com/107833049143876051017" target="_blank" title="Join our G+ Circle" onclick="ga('send', 'event', 'User Behaviour', 'Visit Social Page', 'Google+')" rel="publisher"><div id="gp-btn"></div></a>
			</div>
			<nav id="main-nav">
				<ul>
					<li><a href="#">Giới thiệu</a></li>
					<li onmouseover="toggleSubMenu('#sub-menu-1', 'block')" onmouseout="toggleSubMenu('#sub-menu-1', 'none')">
						<a href="#">Dịch vụ viết</a>
						<ul id="sub-menu-1">
							<li><a href="<?php echo $dl_sv_study; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)">Du Học</a></li>
							<li><a href="<?php echo $dl_sv_resume; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)">Sinh Viên</a></li>
							<li><a href="<?php echo $dl_cv; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)">Chuyên Viên</a></li>
							<li><a href="<?php echo $dl_ns; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)">Nghệ Sĩ</a></li>
							<li><a href="<?php echo $dl_dn; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)">Doanh Nhân</a></li>
						</ul>
					</li>
					<li><a href="#" class="tooltip" data-tip="coming soon!">Tư vấn</a></li>
					<li><a href="#" class="tooltip" data-tip="coming soon!">FAQs</a></li>
					<li><a href="#" class="tooltip" data-tip="coming soon!">Tuyển dụng</a></li>
					<li><a href="#" onclick="gotoBot();ga('send', 'event', 'User Behaviour', 'Click', 'Contact navigation button')">Liên hệ</a></li>
				</ul>
			</nav>
		</header>
		
		<div id="slider-out">
			<div id="slider"></div>
		</div>
		<div id="slider-ctrl"></div>
		
		<article id="art0" class="clearfix">
			<section class="sect-left">
				<h2>Our Service</h2>
				<p>ZigZag Career giúp khách hàng thành công trong học tập và làm việc, đồng thời xây dựng thương hiệu cá nhân đẳng cấp và chuyên nghiệp qua các dịch vụ: <strong>Viết Hồ Sơ Năng Lực, Xây dựng thương hiệu cá nhân, Tư vấn và lên kế hoạch học tập, du học và nghề nghiệp và Chiến lược tìm việc để có được công việc mơ ước.</strong> Dịch vụ của chúng tôi là tất cả những gì khách hàng cần để xây dựng một thương hiệu cá nhân thật sự chuyên nghiệp và thành công.</p>
			</section>
			<section class="sect-right">
				<h2>Why's bear?</h2>
				<p>Gấu được chúng tôi chọn là người hướng dẫn cho khách hàng khi tham quan website. Câu chuyện bắt nguồn từ biệt danh của người sáng lập nên công ty, chúng tôi quyết định linh vật là Gấu để viết câu chuyện về mình. <strong>ZigZag đã chọn những điều mình thích để làm nên bộ hồ sơ riêng, và sẽ chọn những điều bạn thích để xây dựng nên bộ hồ sơ của chính các bạn.</strong></p>
			</section>
		</article>
		
		<article>
			<div class="sect-nav-arr"></div>
		</article>
		
		<article class="story" id="art1">
		<div>
			<p>Sự nghiệp có hình zigzag đang là xu hướng mới. Nhà tuyển dụng dần đánh giá cao các ứng viên linh hoạt, chủ động trong nấc thang sự nghệp. Và gọi họ là: <strong>Zig-Zagger</strong>.</p>
			<div class="illus" id="illus1" data-dim-ratio="0.41"></div>
			<p>Hãy xây dựng uy tín cho bản thân và biến mỗi lần bạn zigzag công việc thành một điểm mạnh trong hồ sơ năng lực bằng những gói dịch vụ của ZigZag Career.</p>
			<div class="sect-nav-arr"></div>
		</div>
		</article>
		
		
		<article class="story" id="art2">
		<div>
			<h2>Hồ sơ năng lực là gì?</h2>
			<p>Có bao giờ bạn thắc mắc tại sao mình không có được nhiều cơ hội tốt như người khác? Bạn có năng lực nhưng chưa biết cách thể hiện? <strong>Hãy bắt đầu với một bộ hồ sơ năng lực !</strong></p>
			<div class="illus" id="illus2" data-dim-ratio="0.41"></div>
			<p><strong>Hồ sơ được xem là công cụ hiệu quả nhất nhằm marketing bản thân,</strong> thể hiện được thế mạnh và năng lực, phần thiết kế cần sự sáng tạo và khác biệt.</p>
			<div class="sect-nav-arr"></div>
		</div>
		</article>
		
		
		<article class="story" id="art3">
		<div>
			<h2>Tại sao nên chọn ZigZag Career?</h2>
			<p>Tại ZigZag Career, chúng tôi tin rằng Một Hồ Sơ có thể mang đến cho bạn Triệu Cơ Hội để khẳng định năng lực và tạo thương hiệu cá nhân của mình.</p>
			<div class="illus clearfix" id="illus3" data-smart-height="true" data-dim-ratio="0.41">
			
				<div class="illus3-child" id="illus31">
					<h2>Luôn luôn<br /><span class="strong-white">Sáng tạo</span></h2>
					<p>từ viết nội dung, thiết kế đến ý tưởng chủ đạo toàn bộ hồ sơ năng lực. Chúng tôi luôn đề cao tính sáng tạo</p>
				</div>
				<div class="illus3-child" id="illus32">
					<h2><span class="strong-red">Khách hàng</span><br />là trung tâm</h2>
					<p>Chúng tôi viết và thiết kế để đáp ứng nhu cầu thực tiễn của khách hàng.</p>
				</div>
				<div class="illus3-child" id="illus33">
					<h2>Hướng đến<br /><span class="strong-red">Kết quả</span></h2>
					<p>Chúng tôi làm việc với phương châm đạt được kết quả và được khách hàng ghi nhận cho điều này.</p>
				</div>
				<div class="illus3-child" id="illus34">
					<h2>Chi phí<br /><span class="strong-red">Hợp lý</span></h2>
					<p>Khách hàng nhận được sản phẩm dịch vụ chất lượng từ một đội ngũ làm việc năng lực cao với một mức giá mà bạn hoàn toàn có thể chi trả.</p>
				</div>
			
			</div>
			<div class="sect-nav-arr"></div>
		</div>
		</article>
		
		
		<article class="story" id="art4">
		<div>
			<p><strong>Chọn nghề nghiệp dưới đây</strong><br />để bắt đầu một hồ sơ năng lực thể hiện rõ cá tính của bạn</p>
			<div class="illus" id="illus4" data-smart-height="true" data-dim-ratio="0.61">
				<!--<canvas id="art4c"></canvas>-->
				<div class="clearfix" id="illus4comps">
					<div id="illus4comps1345">
						<a href="<?php echo $dl_sv_study; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)"><div class="illus4-comp" id="comp1"><div>Du Học</div></div></a>
						<a href="<?php echo $dl_ns; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)"><div class="illus4-comp" id="comp3"><div>Nghệ Sĩ</div></div></a>
						<a href="<?php echo $dl_sv_resume; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)"><div class="illus4-comp" id="comp4"><div>Sinh Viên</div></div></a>
						<a href="<?php echo $dl_cv; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)"><div class="illus4-comp" id="comp5"><div>Chuyên Viên</div></div></a>
					</div>
					<a href="<?php echo $dl_dn; ?>" target="_blank" onclick="ga('send', 'event', 'User Behaviour', 'Download', this.href)"><div class="illus4-comp" id="comp2"><div>Doanh Nhân</div></div></a>
				</div>
			</div>
		</div>
		</article>
		
		<!--<aside id="main-aside">
			<p><span style="font-weight:bold;">Lưu ý !!!</span><br />Ai đặt cái gì cũng viết hết đó nhoaaaaaaaaaaaa ^^ không tin gọi thử coi</p>
		</aside>-->
		
		<footer id="main-footer">
			<div>
				<p>&copy; 2012 - 2013 ZigZag Career | Business inquiries: <a href="mailto:info@zigzagcareer.com" onclick="ga('send', 'event', 'User Behaviour', 'Click', 'Send email from footer link')">info@zigzagcareer.com</a></p>
				<!--<p class="vcard">
					<a class="fn org url" href="http://zigzagcareer.com" title="ZigZag Career Website">
						<span class="organization-name">ZigZag Career</span>
					</a>
					<span class="street-address">134 N St. Mỹ Giang 2, Phú Mỹ Hưng</span>, <span class="locality">Ho Chi Minh city</span>,
					<b class="country">Vietnam</b>
					<span class="tel">Telephone: <span class="value">090-000-000</span></span>
				</p>-->
			</div>
		</footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?php echo $cdn_prefix; ?>js/jquery.mousewheel.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $cdn_prefix; ?>js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="<?php echo $cdn_prefix; ?>js/plugins.js"></script>
        <script src="<?php echo $cdn_prefix; ?>js/main.js"></script>
		
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-23348048-8', 'zigzagcareer.com');
		  ga('send', 'pageview');

		</script>
    </body>
</html>
