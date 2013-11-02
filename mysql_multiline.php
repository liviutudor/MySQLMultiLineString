
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html
xmlns="http://www.w3.org/1999/xhtml"><head
profile="http://gmpg.org/xfn/11"><link
rel='stylesheet' href='http://liviutudor.com/wp-content/plugins/wp-minify/min/?f=wp-content/plugins/tubepress/src/main/web/css/tubepress.css,wp-content/plugins/wp-postratings/postratings-css.css,wp-content/plugins/wp-syntax/css/wp-syntax.css,wp-content/plugins/supreme-google-webfonts/josh-font-style.css,wp-content/plugins/wp-cirrus/cirrusCloud.css,wp-content/plugins/wp-recaptcha/recaptcha.css&amp;m=1381187672' type='text/css' media='screen' /><meta
http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>MySQL Multiline String Convert | Liviu Tudor</title><style type="text/css" media="screen">@import url( http://liviutudor.com/wp-content/themes/ocadia/style.css );</style><link
rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://liviutudor.com/feed/" /><link
rel="alternate" type="text/xml" title="RSS .92" href="http://liviutudor.com/feed/rss/" /><link
rel="alternate" type="application/atom+xml" title="Atom 0.3" href="http://liviutudor.com/feed/atom/" /><link
rel="pingback" href="http://liviutudor.com/xmlrpc.php" />
<style type='text/css'>.stpulldown-gradient
		{
			background: #E1E1E1;
			background: -moz-linear-gradient(top, #E1E1E1 0%, #A7A7A7 100%); /* firefox */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E1E1E1), color-stop(100%,#A7A7A7)); /* webkit */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#E1E1E1', endColorstr='#A7A7A7',GradientType=0 ); /* ie */
			background: -o-linear-gradient(top, #E1E1E1 0%,#A7A7A7 100%); /* opera */
			color: #636363;
		}
		#stpulldown .stpulldown-logo
		{
			height: 40px;
			width: 300px;
			margin-left: 20px;
			margin-top: 5px;
			background:url('') no-repeat;
		}</style><meta
name='OBKey' content='Bcgt8J/2nWl+B/pfk0oQGw==' /><link
rel="alternate" type="application/rss+xml" title="Liviu Tudor &raquo; Of &#8220;Big Brother&#8221; and Technology Comments Feed" href="http://liviutudor.com/2013/10/26/of-big-brother-and-technology/feed/" /> <script type='text/javascript' src='http://liviutudor.com/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script> <script type='text/javascript' src='http://liviutudor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script> <script type='text/javascript' src='http://liviutudor.com/wp-content/plugins/tubepress/src/main/web/js/tubepress.js?ver=3.7.1'></script> <script type='text/javascript' src='http://liviutudor.com/wp-content/plugins/wp-cirrus/wp_cirrus_gwt/wp_cirrus_gwt.nocache.js?ver=0.6.11'></script> <script type='text/javascript' src='http://liviutudor.com/wp-content/plugins/google-analyticator/external-tracking.min.js?ver=6.4.5'></script> <link
rel="EditURI" type="application/rsd+xml" title="RSD" href="http://liviutudor.com/xmlrpc.php?rsd" /><link
rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://liviutudor.com/wp-includes/wlwmanifest.xml" /><link
rel='prev' title='Shooting Range &#8212; San Leandro, CA &#8212; October 2013' href='http://liviutudor.com/2013/10/24/shooting-range-san-leandro-ca-october-2013/' /><link
rel='shortlink' href='http://liviutudor.com/?p=6961' /><meta
name="description" content="This subject came to my attention recently following a few tweets from Dierk König around this -- see this tweet ..." /> <script charset="utf-8" type="text/javascript">var switchTo5x=true;</script><script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:"41d97f4d-3c39-45e5-8fb7-c67b4b600f0b", hashAddressBar: true, doNotCopy: false, doNotHash: false});</script><script charset="utf-8" type="text/javascript" src="http://s.sharethis.com/loader.js"></script><script charset="utf-8" type="text/javascript">var options={ publisher:"41d97f4d-3c39-45e5-8fb7-c67b4b600f0b", "position": "right", "chicklets": { "items": ["facebook","linkedin","twitter","email","sharethis"] } }; var st_hover_widget = new sharethis.widgets.hoverbuttons(options);</script><script charset="utf-8" type="text/javascript">var options={ "service": "facebook", "timer": { "countdown": 30, "interval": 10, "enable": false}, "frictionlessShare": false, "style": "3", publisher:"41d97f4d-3c39-45e5-8fb7-c67b4b600f0b"};var st_service_widget = new sharethis.widgets.serviceWidget(options);</script><script type="text/javascript">var TubePressJsConfig = {"urls":{"base":"http:\/\/liviutudor.com\/wp-content\/plugins\/tubepress"}};</script> <script type="text/javascript">window._wp_rp_static_base_url = 'http://dtmvdvtzf8rz0.cloudfront.net/static/';
	window._wp_rp_wp_ajax_url = "http://liviutudor.com/wp-admin/admin-ajax.php";
	window._wp_rp_plugin_version = '2.9';
	window._wp_rp_post_id = '6961';
	window._wp_rp_num_rel_posts = '5';
	window._wp_rp_blog_id = '1692266';
	window._wp_rp_thumbnails = false;
	window._wp_rp_post_title = 'Of+%22Big+Brother%22+and+Technology';
	window._wp_rp_post_tags = ['scalding', 'cassandra', 'prism', 'bronze+casting', 'nsa', 'twitter', 'big+data', 'humankind', 'tech', 'big+brother', 'humanity', 'stereotypes', 'alfred+nobel', 'hadoop', 'state+surveillance', 'data+mining', 'random+thoughts', 'blogroll', 'tech', 'liberti', 'channel', 'parti', 'media', 'big', 'data', 'social', 'govern', 'hadoop', 'agenc', 'technolog', 'trail', 'cassandra', 'project', 'spy'];
	window._wp_rp_remote_recommendations = false;
	window._wp_rp_promoted_content = true;
	window._wp_rp_traffic_exchange = false;</script> <script type="text/javascript" src="http://dtmvdvtzf8rz0.cloudfront.net/static/js/loader.js?version=2.9" async></script> <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><meta
name="description" content="This subject came to my attention recently following a few tweets from Dierk König around this -- see this tweet for instance. To summarize, there's an ongoing" /><meta
name="keywords" content="alfred nobel,big brother,big data,bronze casting,cassandra,data mining,hadoop,humanity,humankind,nsa,prism,scalding,state surveillance,stereotypes,tech,twitter,blogroll,random thoughts" /><link
rel="canonical" href="http://liviutudor.com/2013/10/26/of-big-brother-and-technology/" />  <script type="text/javascript">//
	var screen_res = "1920 x 1080";
//</script>  <script type="text/javascript">var analyticsFileTypes = ['jpg','gif','png'];
	var analyticsEventTracking = 'enabled';</script> <script type="text/javascript">var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-11637928-2']);
        _gaq.push(['_addDevId', 'i9k95']); // Google Analyticator App ID with Google
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();</script> </head><body><div
id="wrapper"><div
id="header"><h1><a
href="http://liviutudor.com">Liviu Tudor</a></h1><p>I&#039;m a nobody, nobody is perfect, therefore I&#039;m perfect.</p></div>

<div id="content"><div
class="post"><h1 class="storydate">Some sunny day</h1><h2 id="post-6961" class="storytitle"><a
href="#">MySQL Multi Line String</a></h2>

<br/><br/<br/>

<p>

<!-- form goes here -->

<?php
 $form_action = "mysql_multiline.php";
 include 'mysql_multiline_form.php' 
?>

</p>
</div></div>


<div
id="sidebar"><ul><style type="text/css">#am_thumbnail a {
text-decoration: none;
border: none;
}
#am_thumbnail img {
text-decoration: none;
border: 1px solid #999;
max-width: 99%;
}
#am_name {
margin-top: 5px;
margin-bottom: 3px;
}
#am_headline {
margin-bottom: 5px;
}
#am_bio {
margin-bottom: 15px;
}
#am_bio p {
margin-bottom: 5px;
}
#am_bio p:last-child {
margin-bottom: 0px;
}
#am_services {
margin-right: -5px;
}
#am_services a.am_service_icon {
margin-right: 4px;
text-decoration: none;
border: none;
}
#am_services a.am_service_icon:hover {
text-decoration: none;
border: none;
}
#am_services a.am_service_icon img {
border: none;
margin-bottom: 4px;
}
/*
#am_links a.am_link_icon img {
border: none;
text-decoration: none;
vertical-align: middle;
}
#am_links a.am_link_icon img:hover {
text-decoration: none;
border: none;
}
*/</style><li
id="aboutme_widget-2" class="widget aboutme_widget"><div><h2>About Me</h2><div
id="am_thumbnail"><a
href="http://about.me/liviutudor" target="_blank" rel="me"><img
src="http://d13pix9kaak6wt.cloudfront.net/avatar/liviutudor_1358279569_06.jpg" alt="Liviu Tudor"></a></div><h3 id="am_headline">IT Guy with a passion for rugby</h3><div
id="am_bio"></div><div
id="am_services"><a
href="http://www.twitter.com/liviutudor" target="_blank" class="am_service_icon" rel="me"><img
src="http://dcbdluf1ahqio.cloudfront.net/twitter/32x32.png"></a><a
href="http://www.formspring.me/liviutudor" target="_blank" class="am_service_icon" rel="me"><img
src="http://dcbdluf1ahqio.cloudfront.net/formspring/32x32.png"></a><a
href="http://www.linkedin.com/in/liviutudor" target="_blank" class="am_service_icon" rel="me"><img
src="http://dcbdluf1ahqio.cloudfront.net/linkedin/32x32.png"></a><a
href="http://plus.google.com/109546252326888789897/" target="_blank" class="am_service_icon" rel="me"><img
src="http://dcbdluf1ahqio.cloudfront.net/googleplus/32x32.png"></a><a
href="http://liviutudor.com" target="_blank" class="am_service_icon" rel="me"><img
src="http://dcbdluf1ahqio.cloudfront.net/wordpress/32x32.png"></a><a
href="http://www.youtube.com/user/tudorliv" target="_blank" class="am_service_icon" rel="me"><img
src="http://dcbdluf1ahqio.cloudfront.net/youtube/32x32.png"></a><a
href="https://github.com/liviutudor" target="_blank" class="am_service_icon" rel="me"><img
src="http://dcbdluf1ahqio.cloudfront.net/github/32x32.png"></a></div></div></li>

<li id="pages-2" class="widget widget_pages"><div><h2>Pages</h2><ul><li
class="page_item page-item-2"><a
href="http://liviutudor.com/about/">About</a></li><li
class="page_item page-item-1258"><a
href="http://liviutudor.com/contact-me/">Contact Me</a></li><li
class="page_item page-item-627"><a
href="http://liviutudor.com/disclaimer/">Disclaimer</a></li><li
class="page_item page-item-1306"><a
href="http://liviutudor.com/of-man-and-internet/">Of Man and Internet</a></li></ul></div></li>

</ul></div><div
id="footer"><p> Copyright (c) 2012 Liviu Tudor. All rights reserved.</p></div></div>

<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-cAVcJR9VhRc02"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-cAVcJR9VhRc02.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->

</body>
</html>	
