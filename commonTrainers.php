<?php
	/*
	Vikram Sringari
	5/25/2016
	CSE 154 AC
	HW6: ToDoList
	This PHP file contains functions used to display common elements displayed on the pages.
	This also contains other functions that helps sends errors or redirects the user 
	after an action.
	*/
	
	# This function takes in a value that tells whether if the todolist is displayed
	# If the todolist is in display and the user is logged in, this function takes the user to
	# the todolist page, otherwise takes the user to the start page.
	function redirection($inTodoList) {
		if ((isset($_SESSION["username"]) || isset($_SESSION["password"])) && $inTodoList) {
			header("Location: calendar.php");
			die();
		}elseif((!isset($_SESSION["username"]) || !isset($_SESSION["password"])) && !$inTodoList){
			header("Location: startTrainers.php");
			die();
		}
	}
	
	# Shows the top bar of the todolist and start page
	function top_bar() { 
?>	
		<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="js"><!--<![endif]--><head>
 <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta charset="UTF-8">
			
	
	<link rel="pingback" href="http://wetrain.fitness/xmlrpc.php">

		<!--[if lt IE 9]>
	<script src="http://wetrain.fitness/wp-content/themes/Divi/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/linkid.js"></script><script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-MD9KD2"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<title>Have a Question? Ask the WeTrain fitness experts!</title>

<!-- This site is optimized with the Yoast SEO plugin v3.3.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Have a question? Ask us! Our fitness experts are always happy to answer any and all of your fitness, health, or WeTrain related questions.">
<meta name="robots" content="noodp">
<link rel="canonical" href="http://wetrain.fitness/contact/">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="Have a Question? Ask the WeTrain fitness experts!">
<meta property="og:description" content="Have a question? Ask us! Our fitness experts are always happy to answer any and all of your fitness, health, or WeTrain related questions.">
<meta property="og:url" content="http://wetrain.fitness/contact/">
<meta property="og:site_name" content="WeTrain | On-Demand Personal Training">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="Have a question? Ask us! Our fitness experts are always happy to answer any and all of your fitness, health, or WeTrain related questions.">
<meta name="twitter:title" content="Have a Question? Ask the WeTrain fitness experts!">
<!-- / Yoast SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="WeTrain | On-Demand Personal Training » Feed" href="http://wetrain.fitness/feed/">
<link rel="alternate" type="application/rss+xml" title="WeTrain | On-Demand Personal Training » Comments Feed" href="http://wetrain.fitness/comments/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/wetrain.fitness\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.3"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="http://wetrain.fitness/wp-includes/js/wp-emoji-release.min.js?ver=4.5.3" type="text/javascript"></script>
		<meta content="Divi v.2.7.5" name="generator"><style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="divi-fonts-css" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext" type="text/css" media="all">
<link rel="stylesheet" id="et-gf-oswald-css" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700&amp;subset=latin,latin-ext" type="text/css" media="all">
<link rel="stylesheet" id="et-gf-lato-css" href="http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic&amp;subset=latin" type="text/css" media="all">
<link rel="stylesheet" id="divi-style-css" href="http://wetrain.fitness/wp-content/themes/Divi/style.css?ver=2.7.5" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css?ver=4.5.0" type="text/css" media="all">
<link rel="stylesheet" id="wpcw-css" href="http://wetrain.fitness/wp-content/plugins/contact-widgets/assets/css/style.min.css?ver=1.0.1" type="text/css" media="all">
<link rel="stylesheet" id="et-shortcodes-css-css" href="http://wetrain.fitness/wp-content/themes/Divi/epanel/shortcodes/css/shortcodes.css?ver=2.7.5" type="text/css" media="all">
<link rel="stylesheet" id="et-shortcodes-responsive-css-css" href="http://wetrain.fitness/wp-content/themes/Divi/epanel/shortcodes/css/shortcodes_responsive.css?ver=2.7.5" type="text/css" media="all">
<link rel="stylesheet" id="magnific-popup-css" href="http://wetrain.fitness/wp-content/themes/Divi/includes/builder/styles/magnific_popup.css?ver=2.7.5" type="text/css" media="all">
<script type="text/javascript" src="http://wetrain.fitness/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
<script type="text/javascript" src="http://wetrain.fitness/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<link rel="https://api.w.org/" href="http://wetrain.fitness/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://wetrain.fitness/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://wetrain.fitness/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.5.3">
<link rel="shortlink" href="http://wetrain.fitness/?p=185">
<link rel="alternate" type="application/json+oembed" href="http://wetrain.fitness/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwetrain.fitness%2Fcontact%2F">
<link rel="alternate" type="text/xml+oembed" href="http://wetrain.fitness/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwetrain.fitness%2Fcontact%2F&amp;format=xml">
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '760081324129527');
fbq('track', "PageView");
fbq('track', 'CompleteRegistration');
fbq('track', 'ViewContent');

</script>
<noscript>&lt;img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=760081324129527&amp;ev=PageView&amp;noscript=1"
/&gt;</noscript>
<!-- End Facebook Pixel Code --><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">		<style id="theme-customizer-css">
					@media only screen and ( min-width: 767px ) {
				body, .et_pb_column_1_2 .et_quote_content blockquote cite, .et_pb_column_1_2 .et_link_content a.et_link_main_url, .et_pb_column_1_3 .et_quote_content blockquote cite, .et_pb_column_3_8 .et_quote_content blockquote cite, .et_pb_column_1_4 .et_quote_content blockquote cite, .et_pb_blog_grid .et_quote_content blockquote cite, .et_pb_column_1_3 .et_link_content a.et_link_main_url, .et_pb_column_3_8 .et_link_content a.et_link_main_url, .et_pb_column_1_4 .et_link_content a.et_link_main_url, .et_pb_blog_grid .et_link_content a.et_link_main_url, body .et_pb_bg_layout_light .et_pb_post p,  body .et_pb_bg_layout_dark .et_pb_post p { font-size: 16px; }
				.et_pb_slide_content, .et_pb_best_value { font-size: 18px; }
			}
							body { color: #0e0002; }
								h1, h2, h3, h4, h5, h6 { color: #0e0002; }
								body { line-height: 1.6em; }
							.woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, .woocommerce-message, .woocommerce-error, .woocommerce-info { background: #50df9d !important; }
			#et_search_icon:hover, .mobile_menu_bar:before, .mobile_menu_bar:after, .et_toggle_slide_menu:after, .et-social-icon a:hover, .et_pb_sum, .et_pb_pricing li a, .et_pb_pricing_table_button, .et_overlay:before, .entry-summary p.price ins, .woocommerce div.product span.price, .woocommerce-page div.product span.price, .woocommerce #content div.product span.price, .woocommerce-page #content div.product span.price, .woocommerce div.product p.price, .woocommerce-page div.product p.price, .woocommerce #content div.product p.price, .woocommerce-page #content div.product p.price, .et_pb_member_social_links a:hover, .woocommerce .star-rating span:before, .woocommerce-page .star-rating span:before, .et_pb_widget li a:hover, .et_pb_filterable_portfolio .et_pb_portfolio_filters li a.active, .et_pb_filterable_portfolio .et_pb_portofolio_pagination ul li a.active, .et_pb_gallery .et_pb_gallery_pagination ul li a.active, .wp-pagenavi span.current, .wp-pagenavi a:hover, .nav-single a, .posted_in a { color: #50df9d; }
			.et_pb_contact_submit, .et_password_protected_form .et_submit_button, .et_pb_bg_layout_light .et_pb_newsletter_button, .comment-reply-link, .form-submit input, .et_pb_bg_layout_light .et_pb_promo_button, .et_pb_bg_layout_light .et_pb_more_button, .woocommerce a.button.alt, .woocommerce-page a.button.alt, .woocommerce button.button.alt, .woocommerce-page button.button.alt, .woocommerce input.button.alt, .woocommerce-page input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce-page #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page #content input.button.alt, .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button { color: #50df9d; }
			.footer-widget h4 { color: #50df9d; }
			.et-search-form, .nav li ul, .et_mobile_menu, .footer-widget li:before, .et_pb_pricing li:before, blockquote { border-color: #50df9d; }
			.et_pb_counter_amount, .et_pb_featured_table .et_pb_pricing_heading, .et_quote_content, .et_link_content, .et_audio_content, .et_pb_post_slider.et_pb_bg_layout_dark, .et_slide_in_menu_container { background-color: #50df9d; }
									a { color: #50df9d; }
							#main-header, #main-header .nav li ul, .et-search-form, #main-header .et_mobile_menu { background-color: rgba(255,255,255,0.6); }
							#main-header .nav li ul { background-color: rgba(255,255,255,0.8); }
									#top-header, #et-secondary-nav li ul { background-color: #50df9d; }
													.et_header_style_centered .mobile_nav .select_page, .et_header_style_split .mobile_nav .select_page, .et_nav_text_color_light #top-menu > li > a, .et_nav_text_color_dark #top-menu > li > a, #top-menu a, .et_mobile_menu li a, .et_nav_text_color_light .et_mobile_menu li a, .et_nav_text_color_dark .et_mobile_menu li a, #et_search_icon:before, .et_search_form_container input, span.et_close_search_field:after, #et-top-navigation .et-cart-info { color: #0e0002; }
			.et_search_form_container input::-moz-placeholder { color: #0e0002; }
			.et_search_form_container input::-webkit-input-placeholder { color: #0e0002; }
			.et_search_form_container input:-ms-input-placeholder { color: #0e0002; }
											#top-menu li a { font-size: 13px; }
			body.et_vertical_nav .container.et_search_form_container .et-search-form input { font-size: 13px !important; }
		
					#top-menu li a, .et_search_form_container input {
									font-weight: normal; font-style: normal; text-transform: uppercase; text-decoration: none; 													letter-spacing: 2px;
							}

			.et_search_form_container input::-moz-placeholder {
									font-weight: normal; font-style: normal; text-transform: uppercase; text-decoration: none; 													letter-spacing: 2px;
							}
			.et_search_form_container input::-webkit-input-placeholder {
									font-weight: normal; font-style: normal; text-transform: uppercase; text-decoration: none; 													letter-spacing: 2px;
							}
			.et_search_form_container input:-ms-input-placeholder {
									font-weight: normal; font-style: normal; text-transform: uppercase; text-decoration: none; 													letter-spacing: 2px;
							}
		
					#top-menu li.current-menu-ancestor > a, #top-menu li.current-menu-item > a,
			.et_color_scheme_red #top-menu li.current-menu-ancestor > a, .et_color_scheme_red #top-menu li.current-menu-item > a,
			.et_color_scheme_pink #top-menu li.current-menu-ancestor > a, .et_color_scheme_pink #top-menu li.current-menu-item > a,
			.et_color_scheme_orange #top-menu li.current-menu-ancestor > a, .et_color_scheme_orange #top-menu li.current-menu-item > a,
			.et_color_scheme_green #top-menu li.current-menu-ancestor > a, .et_color_scheme_green #top-menu li.current-menu-item > a { color: #0e0002; }
							#main-footer { background-color: #0e0002; }
											#main-footer .footer-widget h4 { color: #50df9d; }
							.footer-widget li:before { border-color: #50df9d; }
						#footer-widgets .footer-widget li:before { top: 10.6px; }					#main-header { box-shadow: none; }
							.et-fixed-header#main-header { box-shadow: none !important; }
								
						h1, h2, h3, h4, h5, h6, .et_quote_content blockquote p, .et_pb_slide_description .et_pb_slide_title {
										
											line-height: 1.2em;
									}
		
																														
		@media only screen and ( min-width: 981px ) {
													h1 { font-size: 50px; }
				h2, .product .related h2, .et_pb_column_1_2 .et_quote_content blockquote p { font-size: 43px; }
				h3 { font-size: 36px; }
				h4, .et_pb_circle_counter h3, .et_pb_number_counter h3, .et_pb_column_1_3 .et_pb_post h2, .et_pb_column_1_4 .et_pb_post h2, .et_pb_blog_grid h2, .et_pb_column_1_3 .et_quote_content blockquote p, .et_pb_column_3_8 .et_quote_content blockquote p, .et_pb_column_1_4 .et_quote_content blockquote p, .et_pb_blog_grid .et_quote_content blockquote p, .et_pb_column_1_3 .et_link_content h2, .et_pb_column_3_8 .et_link_content h2, .et_pb_column_1_4 .et_link_content h2, .et_pb_blog_grid .et_link_content h2, .et_pb_column_1_3 .et_audio_content h2, .et_pb_column_3_8 .et_audio_content h2, .et_pb_column_1_4 .et_audio_content h2, .et_pb_blog_grid .et_audio_content h2, .et_pb_column_3_8 .et_pb_audio_module_content h2, .et_pb_column_1_3 .et_pb_audio_module_content h2, .et_pb_gallery_grid .et_pb_gallery_item h3, .et_pb_portfolio_grid .et_pb_portfolio_item h2, .et_pb_filterable_portfolio_grid .et_pb_portfolio_item h2 { font-size: 30px; }
				h5 { font-size: 26px; }
				h6 { font-size: 23px; }
				.et_pb_slide_description .et_pb_slide_title { font-size: 76px; }
				.woocommerce ul.products li.product h3, .woocommerce-page ul.products li.product h3, .et_pb_gallery_grid .et_pb_gallery_item h3, .et_pb_portfolio_grid .et_pb_portfolio_item h2, .et_pb_filterable_portfolio_grid .et_pb_portfolio_item h2, .et_pb_column_1_4 .et_pb_audio_module_content h2 { font-size: 26px; }
										.footer-widget h4 { font-size: 18px; }
													#logo { max-height: 85%; }
				.et_pb_svg_logo #logo { height: 85%; }
																									.et-fixed-header#top-header, .et-fixed-header#top-header #et-secondary-nav li ul { background-color: #ffffff; }
										.et-fixed-header#main-header, .et-fixed-header#main-header .nav li ul, .et-fixed-header .et-search-form { background-color: #ffffff; }
										.et-fixed-header #top-menu li a { font-size: 13px; }
										.et-fixed-header #top-menu a, .et-fixed-header #et_search_icon:before, .et-fixed-header #et_top_search .et-search-form input, .et-fixed-header .et_search_form_container input, .et-fixed-header .et_close_search_field:after, .et-fixed-header #et-top-navigation .et-cart-info { color: #0e0002 !important; }
				.et-fixed-header .et_search_form_container input::-moz-placeholder { color: #0e0002 !important; }
				.et-fixed-header .et_search_form_container input::-webkit-input-placeholder { color: #0e0002 !important; }
				.et-fixed-header .et_search_form_container input:-ms-input-placeholder { color: #0e0002 !important; }
										.et-fixed-header #top-menu li.current-menu-ancestor > a,
				.et-fixed-header #top-menu li.current-menu-item > a { color: #0e0002 !important; }
										.et-fixed-header#top-header a { color: #0e0002; }
			
					}
		@media only screen and ( min-width: 1350px) {
			.et_pb_row { padding: 27px 0; }
			.et_pb_section { padding: 54px 0; }
			.single.et_pb_pagebuilder_layout.et_full_width_page .et_post_meta_wrapper { padding-top: 81px; }
			.et_pb_section.et_pb_section_first { padding-top: inherit; }
			.et_pb_fullwidth_section { padding: 0; }
		}
		@media only screen and ( max-width: 980px ) {
							#main-header, #main-header .nav li ul, .et-search-form, #main-header .et_mobile_menu { background-color: rgba(255,255,255,0.9); }
																				}
		@media only screen and ( max-width: 767px ) {
														}
	</style>

					<style class="et_heading_font">
				h1, h2, h3, h4, h5, h6 {
					font-family: 'Oswald', Helvetica, Arial, Lucida, sans-serif;				}
				</style>
							<style class="et_body_font">
				body, input, textarea, select {
					font-family: 'Lato', Helvetica, Arial, Lucida, sans-serif;				}
				</style>
							<style class="et_all_buttons_font">
				.et_pb_button {
					font-family: 'Lato', Helvetica, Arial, Lucida, sans-serif;				}
				</style>
							<style class="et_primary_nav_font">
				#main-header,
				#et-top-navigation {
					font-family: 'Oswald', Helvetica, Arial, Lucida, sans-serif;				}
				</style>
			
	
	<style id="module-customizer-css">
			</style>

	<link rel="shortcut icon" href="http://wetrain.fitness/wp-content/uploads/2016/05/favicon.png">
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71943922-1', 'auto');
  ga('require', 'linkid');
  ga('send', 'pageview');

</script>
<!-- Google Analytics -->
<style type="text/css" id="et-custom-css">
/**
  Typography
*/

body, html {
  font-size: 10px;
  line-height: 1.6;
}

@media(min-width: 1600px) {
  body, html {
    font-size: 12px;
  }  
}

h1 { font-size: 4.2rem; }
h2 { font-size: 3.6rem; }
h3 { font-size: 3rem; }
h4 { font-size: 2.5rem; }
h5 { font-size: 1.6rem; }
h6 { font-size: 1.333rem; }

@media(min-width: 768px) {
  h1 { font-size: 5rem; }
  h2 { font-size: 4.2rem; }
  h3 { font-size: 3.6rem; }
  h4 { font-size: 3rem; }
  h5 { font-size: 2.5rem; }
  h6 { font-size: 1.6rem; }
}

@media(max-width: 398px) {
  h1 { font-size: 3.6rem; }
}

@media(max-width: 321px) {
  h1 { font-size: 3rem; }

  .et_pb_button { font-size: 1.6rem; }
}

p {
  font-size: 1.6rem;
  line-height: 1.6;
}

.c-page-header,
.c-page-header h1,
.c-page-header h2,
.c-page-header h3,
.c-page-header h4,
.c-page-header h5,
.c-page-header h6,
.c-page-header p {
  color: #fff;
  text-shadow: 1px 1px 4px #0e0002;
}

.c-page-header .et_pb_fullwidth_header_subhead {
  font-size: 1.6rem;
}

/**
  Buttons
*/

.et_pb_bg_layout_light.et_pb_module.et_pb_button {
  border-color: #0e0002;
  color: #0e0002;
}

.et_pb_bg_layout_light.et_pb_module.et_pb_button:hover {
  background-color: transparent;
}

/**
  Header
*/

.mobile_menu_bar:before {
    color: #0e0002;
}

@media (min-width: 768px) {
  #et_mobile_nav_menu {
      display: none;
  }

  #top-menu {
    display: block;
  }
}

@media only screen and (min-width: 981px) {
  .et-fixed-header #logo {
    max-height: 80%;
  }
}

@media (min-width: 980px) {
  #et_mobile_nav_menu {
      display: none;
  }

  #top-menu {
    display: block;
  }
}

/**
  Footer
*/

#footer-bottom {
  display: none;
}

#footer-widgets .footer-widget li {
  font-size: 1.333rem;
  padding-left: 0;
}

#footer-widgets .footer-widget li:before {
  display: none;
}

#footer-widgets img {
  background: #fff;
}

#footer-widgets .c-compass-link {
  margin-top: 10px;
}

/**
  Home
*/

.c-home-page-header {
  background-position: center top !important;
  height: 80vh;
  min-height: 450px;
  max-height: 1000px;
}

.c-home-page-header {
   padding-top: 5% !important;
}

.c-home-page-header .et_pb_button {
  font-size: 2.304rem;
}

.c-home-page-header .et_pb_button:after {
  font-size: 3.6rem;
}

@media(min-height: 601px) {
  .c-home-page-header {
     padding-top: 10% !important;
  }  
}

@media(min-height: 701px) {
  .c-home-page-header {
     padding-top: 12% !important;
  }  
}

@media(min-height: 801px) {
  .c-home-page-header {
     padding-top: 14% !important;
  }  
}

@media(min-height: 1101px) {
  .c-home-page-header {
     padding-top: 16% !important;
  }  
}

@media(max-width: 460px) {
  .c-home-page-header {
     padding-top: 25% !important;
  }  
}

@media(min-width: 470px) {
  .c-home-page-header .et_pb_fullwidth_header_container {
    margin-top: 5vh;
  }
}

@media(min-height: 850px) {
  .c-home-page-header .et_pb_fullwidth_header_container {
    margin-top: 10vh;
  }
}

@media(min-width: 980px) {
  .c-home-page-header .et_pb_fullwidth_header_container {
    margin-top: 5vh;
  }
}

@media(min-width: 1600px) {
  .c-home-page-header .et_pb_fullwidth_header_container {
    margin-top: 0;
  }
}

.c-img-text-box {
  background-color: rgba(255,255,255,0.75);
  border-radius: 3px;
  box-shadow: 0 0 4px #fff;
  padding: 30px;
}

.c-img-text-box .et_pb_button_module_wrapper {
  margin-top: 20px;
}

#c-press-ribbon img {
  max-height: 100px;
  max-width: 150px;
}

@media(min-width: 481px) {
  #c-press-ribbon {
    padding: 5px 0 7px;
  }

  #c-press-ribbon .c-lead-in {
    margin-top: 12%;
  }

  #c-press-ribbon .c-pad-column-top {
      padding-top: 25px;
  }
}

@media(min-width: 981px) {
  #c-press-ribbon {
    padding: 50px 0;
  }

  #c-press-ribbon .c-lead-in {
    margin-top: 20%;
  }
}

/**
  Pricing / Join Page
*/

/* RE-ENABLE WHEN MOVING TO 3 PRICING COLUMNS
@media(min-width: 981px) {
  .c-pricing-table-row .et_pb_column_0 {
      margin-right: 3.5%;
   }

  .c-pricing-table-row .c-featured-column {
    margin-right: 3.5%;
    width: 33.6666%
  }
}
*/

.c-pricing-table.c-featured-pricing-table {
    border-top: solid 8px #50df9d;
    margin-top: -15px;
}

.c-pricing-table.c-featured-pricing-table .c-price .c-number {
    color: #50df9d;
}

.c-pricing-table.c-featured-pricing-table .c-pricing-header {
    color: #50df9d;
}

.c-pricing-table.c-featured-pricing-table .c-pricing-header h2 {
    color: #50df9d;
    font-size: 3.6rem;
}

.c-pricing-table {
    border: solid 1px rgba(14,0,2,0.2);
    border-top: solid 8px #0e0002;
}

.c-pricing-table .c-pricing-header {
  padding: 30px 15px;
  border-bottom: solid 1px rgba(14,0,2,0.2);
  text-align: center;
}

.c-pricing-table .c-pricing-header h2 {
    font-size: 2.4rem;
}

.c-pricing-table .c-pricing-header .c-who-its-for {
  color: #0e0002;
  font-weight: 300;
}

.c-pricing-table .c-price {
    text-align: center;
    overflow: hidden;
    padding: 20px 15px;
}

.c-pricing-table .c-price .c-price-column {
  width: 50%;
  float: left;
}

.c-pricing-table .c-price .c-price-column:first-child {
  border-right: solid 1px rgba(14,0,2,0.2);
}

.c-pricing-table .c-price h2 {
    font-family: Lato;
    font-weight: 300;
    position: relative;
    padding: 0;
}

.c-pricing-table .c-price .c-currency,
.c-pricing-table .c-price .c-pricing-unit {
  font-size: 1.6rem;
  font-weight: 300;
}

.c-pricing-table .c-price .c-currency {
    position: absolute;
    margin-left: -1rem;
    line-height: 1;
    top: 2px;
}

.c-pricing-table .c-original-price {
    font-size: 1.333rem;
    line-height: 1;
    text-decoration: line-through;
}

.c-pricing-table .c-features {
    padding: 30px 15px;
    border-top: solid 1px rgba(14,0,2,0.2);
    font-size: 1.6rem;
}

.c-pricing-table .c-features ul {
    list-style: none;
    text-align: center;
    padding: 0;
}

.c-pricing-table .c-features li {
   margin-bottom: 10px;
}

.c-pricing-table .c-features li:last-child {
   margin-bottom: 0;
}

.c-pricing-table .c-cta {
    padding: 0 15px 30px;
    text-align: center;
}

.c-testimonial-row .et_pb_testimonial:first-child {
  padding-top: 0;
}

.c-testimonial-row .et_pb_testimonial.et_pb_testimonial_no_bg:before {
  top: -96px;
}

.c-testimonial-row .et_pb_testimonial_description {
  display: inline-block;
  margin: 0 auto;
}

.c-testimonial-row .et_pb_testimonial_description_inner {
  width: 100% !important;
}

.c-testimonial-row .et_pb_testimonial_author {
  font-size: 1.333rem;
}

/**
  Trainers
*/

.c-trainer-split-row .c-vetting-explanation h2 {
  margin-bottom: 10px;
}

.c-trainer-split-row .c-vetting-explanation,
.c-trainer-split-row .c-vetting-explanation p {
  font-size: 1.92rem;
  line-height: 1.6;
  text-align: justify;
}

@media(min-width: 981px) {
  .c-trainer-split-row .et_pb_column:first-child {
    border-right: solid 3px #50df9d;
    margin-right: 0;
    padding-right: 2.25%;
  }

  .c-trainer-split-row .et_pb_column:last-child {
    padding-left: 3.25%;
  }

  .c-trainer-split-row .c-vetting-title {
    margin: 5% 0 10px !important;
  }
}

/**
  Blog Index
*/

.blog article {
    font-size: 1.333rem;
}

/**
  Blog Post Page
*/

.et_pb_post .entry-content {
  text-align: justify;
  padding-bottom: 80px;
  border-bottom: solid 1px rgba(14,0,2,0.15);
}

#sidebar {
  font-size: 1.6rem;
}

#sidebar .widgettitle {
    font-size: 1.92rem;
}

#comments, #reply-title {
  font-size: 2.4rem;
}

/**
  FAQ
*/

.c-faq-text {
    font-size: 1.6rem;
}

.c-faq-text h5 {
    margin: 30px 0 10px;
}
</style><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style><style id="et_fix_page_container_position">#page-container{ padding-top: 0 !important;}</style></head>
<body class="page page-id-185 page-template-default et_pb_button_helper_class et_transparent_nav et_fixed_nav et_show_nav et_cover_background et_pb_gutter windows et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_left et_pb_pagebuilder_layout et_right_sidebar chrome">
	<div id="page-container">

	
	
		<header id="main-header" data-height-onload="80" data-height-loaded="true" style="top: 0px;">
			<div class="container clearfix et_menu_container">
							<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="http://wetrain.fitness/">
						<img src="http://wetrain.fitness/wp-content/uploads/2016/06/wetrain-shrunk.png" alt="WeTrain | On-Demand Personal Training" id="logo" data-height-percentage="85" data-actual-width="600" data-actual-height="275">
					</a>
				</div>
				<div id="et-top-navigation" data-height="66" data-fixed-height="40" style="padding-left: 178px;">
											<nav id="top-menu-nav">
						<ul id="top-menu" class="nav"><li id="menu-item-334" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-334"><a href="/">Home</a></li>
<li id="menu-item-190" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-190"><a href="http://wetrain.fitness/trainers/">Trainers</a></li>
<li id="menu-item-193" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-193"><a href="/join">Pricing</a></li>
<li id="menu-item-333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-333"><a href="http://wetrain.fitness/faq/">FAQ</a></li>
<li id="menu-item-191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191"><a href="http://wetrain.fitness/join/">Join</a></li>
</ul>						</nav>
					
					
					
					
					<div id="et_mobile_nav_menu">
				<div class="mobile_nav closed">
					<span class="select_page">Select Page</span>
					<span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
				<ul id="mobile_menu" class="et_mobile_menu"><li id="menu-item-334" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-334 et_first_mobile_item"><a href="/">Home</a></li>
<li id="menu-item-190" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-190"><a href="http://wetrain.fitness/trainers/">Trainers</a></li>
<li id="menu-item-193" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-193"><a href="/join">Pricing</a></li>
<li id="menu-item-333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-333"><a href="http://wetrain.fitness/faq/">FAQ</a></li>
<li id="menu-item-191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191"><a href="http://wetrain.fitness/join/">Join</a></li>
</ul></div>
			</div>				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="http://wetrain.fitness/">
					<input type="search" class="et-search-field" placeholder="Search …" value="" name="s" title="Search for:">					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->

		<div id="et-main-area">
<div id="main-content">


			
				<article id="post-185" class="post-185 page type-page status-publish hentry">

				
					<div class="entry-content">
					<div class="et_pb_section et_pb_fullwidth_section c-page-header et_pb_section_0 et_pb_with_background et_section_regular et_pb_section_first">
				
				
					
					<section class="et_pb_fullwidth_header et_pb_module et_pb_bg_layout_dark et_pb_text_align_center  et_pb_fullwidth_header_0" style="padding-top: 123px;">
				
				<div class="et_pb_fullwidth_header_container center">
					<div class="header-content-container center">
					<div class="header-content">
						
						<h1>Come say 'Hi'</h1>
						
						

						
					</div>
				</div>
					
				</div>
				<div class="et_pb_fullwidth_header_overlay"></div>
				<div class="et_pb_fullwidth_header_scroll"></div>
			</section>
				
			</div> <!-- .et_pb_section --><div class="et_pb_section  et_pb_section_1 et_section_regular" style="text-align: center;">
<?php		
	}
	
	# Shows the bottom bar of the todolist and start page
	function bottom_bar() {
?>
			</div> <!-- .et_pb_section -->
					</div> <!-- .entry-content -->

				
				</article> <!-- .et_pb_post -->

			

</div> <!-- #main-content -->


			<footer id="main-footer">
				
<div class="container">
	<div id="footer-widgets" class="clearfix">
	<div class="footer-widget"><div id="text-2" class="fwidget et_pb_widget widget_text">			<div class="textwidget"><img src="/wp-content/uploads/2016/05/logo.png">
<p class="c-compass-link">Designed by <a href="http://hellocompass.com">Compass</a></p></div>
		</div> <!-- end .fwidget --></div> <!-- end .footer-widget --><div class="footer-widget">		<div id="recent-posts-2" class="fwidget et_pb_widget widget_recent_entries">		<h4 class="title">From the Blog</h4>		<ul>
					<li>
				<a href="http://wetrain.fitness/who-should-i-hire-the-guide-to-finding-the-best-personal-trainer/">Who Should I Hire?? – The Guide to Finding The Best Personal Trainer</a>
						</li>
					<li>
				<a href="http://wetrain.fitness/attention-ladies-core-circuit-for-bikini-season/">ATTENTION LADIES! Core Circuit for Bikini Season!</a>
						</li>
					<li>
				<a href="http://wetrain.fitness/fitness-lingo-could-help-score-you-a-date/">Fitness Lingo… Could Help Score You a Date!!</a>
						</li>
					<li>
				<a href="http://wetrain.fitness/hiit-training-everyones-doing-it-are-you/">HIIT training: Everyone’s Doing It… Are You?</a>
						</li>
					<li>
				<a href="http://wetrain.fitness/3-benefits-of-group-exercise/">3 Benefits of Group Exercise</a>
						</li>
				</ul>
		</div> <!-- end .fwidget -->		</div> <!-- end .footer-widget --><div class="footer-widget"><div id="nav_menu-21" class="fwidget et_pb_widget widget_nav_menu"><h4 class="title">Menu</h4><div class="menu-footer-nav-container"><ul id="menu-footer-nav" class="menu"><li id="menu-item-215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215"><a href="http://wetrain.fitness/">Home</a></li>
<li id="menu-item-214" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-214"><a href="http://wetrain.fitness/join/">Join</a></li>
<li id="menu-item-213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"><a href="http://wetrain.fitness/trainers/">Trainers</a></li>
<li id="menu-item-301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-301"><a href="http://wetrain.fitness/faq/">FAQ</a></li>
<li id="menu-item-212" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-185 current_page_item menu-item-212"><a href="http://wetrain.fitness/contact/">Contact Us</a></li>
<li id="menu-item-291" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-291"><a href="http://wetrain.fitness/terms-of-service-privacy-policy/">Terms of Service &amp; Privacy Policy</a></li>
</ul></div></div> <!-- end .fwidget --></div> <!-- end .footer-widget --><div class="footer-widget last"><div id="wpcw_social-2" class="fwidget et_pb_widget wpcw-widgets wpcw-widget-social"><ul><li class="no-label"><a href="https://www.facebook.com/wetraincommunity" target="_blank" title="Visit WeTrain | On-Demand Personal Training on Facebook"><span class="fa fa-2x fa-facebook-official"></span></a></li><li class="no-label"><a href="https://www.instagram.com/_wetrain_/" target="_blank" title="Visit WeTrain | On-Demand Personal Training on Instagram"><span class="fa fa-2x fa-instagram"></span></a></li><li class="no-label"><a href="https://twitter.com/TheRealWeTrain" target="_blank" title="Visit WeTrain | On-Demand Personal Training on Twitter"><span class="fa fa-2x fa-twitter"></span></a></li></ul></div> <!-- end .fwidget --></div> <!-- end .footer-widget -->	</div> <!-- #footer-widgets -->
</div>	<!-- .container -->

		
				<div id="footer-bottom">
					<div class="container clearfix">
				<ul class="et-social-icons">

	<li class="et-social-icon et-social-facebook">
		<a href="https://www.facebook.com/wetraincommunity" class="icon">
			<span>Facebook</span>
		</a>
	</li>
	<li class="et-social-icon et-social-twitter">
		<a href="https://twitter.com/TheRealWeTrain" class="icon">
			<span>Twitter</span>
		</a>
	</li>
	<li class="et-social-icon et-social-rss">
		<a href="http://wetrain.fitness/feed/" class="icon">
			<span>RSS</span>
		</a>
	</li>

</ul>
						<p id="footer-info">Designed by <a href="http://www.elegantthemes.com" title="Premium WordPress Themes">Elegant Themes</a> | Powered by <a href="http://www.wordpress.org">WordPress</a></p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->


	</div> <!-- #page-container -->

	<style type="text/css" id="et-builder-advanced-style">
				
.et_pb_contact_form_0 { max-width: 700px;margin: 0 auto; }
.et_pb_fullwidth_header_0.et_pb_fullwidth_header { background-image: url(http://wetrain.fitness/wp-content/uploads/2016/05/Stretching-on-the-Roof.jpg); }
.et_pb_fullwidth_header_0 { min-height: 400px;background-position: center top; }
.et_pb_section_0.et_pb_section { background-color:#ffffff !important; }
			</style><!-- Google Tag Manager -->
<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-MD9KD2"
height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})
(window,document,'script','dataLayer','GTM-MD9KD2');
</script>
<!-- End Google Tag Manager --><script type="text/javascript" src="http://wetrain.fitness/wp-content/themes/Divi/includes/builder/scripts/frontend-builder-global-functions.js?ver=2.7.5"></script>
<script type="text/javascript" src="http://wetrain.fitness/wp-content/themes/Divi/includes/builder/scripts/jquery.mobile.custom.min.js?ver=2.7.5"></script>
<script type="text/javascript" src="http://wetrain.fitness/wp-content/themes/Divi/js/custom.js?ver=2.7.5"></script>
<script type="text/javascript" src="http://wetrain.fitness/wp-content/themes/Divi/includes/builder/scripts/jquery.fitvids.js?ver=2.7.5"></script>
<script type="text/javascript" src="http://wetrain.fitness/wp-content/themes/Divi/includes/builder/scripts/waypoints.min.js?ver=2.7.5"></script>
<script type="text/javascript" src="http://wetrain.fitness/wp-content/themes/Divi/includes/builder/scripts/jquery.magnific-popup.js?ver=2.7.5"></script>
<script type="text/javascript">
/* <![CDATA[ */
var et_pb_custom = {"ajaxurl":"http:\/\/wetrain.fitness\/wp-admin\/admin-ajax.php","images_uri":"http:\/\/wetrain.fitness\/wp-content\/themes\/Divi\/images","builder_images_uri":"http:\/\/wetrain.fitness\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"fb2e93dd9c","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"3d078e1218","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","is_builder_plugin_used":"","is_divi_theme_used":"1","widget_search_selector":".widget_search","is_ab_testing_active":"","page_id":"185","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":""};
/* ]]> */
</script>
<script type="text/javascript" src="http://wetrain.fitness/wp-content/themes/Divi/includes/builder/scripts/frontend-builder-scripts.js?ver=2.7.5"></script>
<script type="text/javascript" src="http://wetrain.fitness/wp-includes/js/wp-embed.min.js?ver=4.5.3"></script>

</body></html>
<?php
	}
	
	# Takes the location of the current page displayed and an error message.
	# Uses these to send an error message to the user.
	function error($location, $message) {
		$_SESSION["error"] = $message;
		header("Location: $location");
		die();
	}
	
	# Displays the error message that was sent.
	# This shows up on the page.
	function displayed_error() {
		if (isset($_SESSION["error"])) {
?>
		<p id="error">
			<?= $_SESSION["error"] ?>
		</p>
<?php
			unset($_SESSION["error"]);
		}
	}
?>