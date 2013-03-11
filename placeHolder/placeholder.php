<!doctype html>
<html class="<?=@$ie_css?>" lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta charset="utf-8">
	<?=@$head?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My Dashboard - Tradesparq">
	<meta name="author" content="William Hund">
	<title>My Dashboard - Tradesparq</title>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png">
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="stylesheets/css/user2/bootstrap.css?20121129b">
	<link rel="stylesheet" href="stylesheets/css/user2/responsive.css">
	
	
	<!-- Meganizr IE hacks 
	<link rel="stylesheet" href="stylesheets/css/user2/meganizr-ie.css">
	-->

	<!-- jQuery plupload css -->
	<link rel="stylesheet" href="js/jquery.plupload/jquery.ui.plupload/css/jquery.ui.plupload.css">

	<!-- jQuery jcrop css -->
	<link rel="stylesheet" href="js/jquery.jcrop/css/jquery.Jcrop.min.css">

	<!-- jQuery treeview css -->
	<link rel="stylesheet" href="js/jquery.treeview/jquery.treeview.css">

	<!-- All JavaScript at the bottom, except this Modernizr build.-->
	<script src="js/user2/libs/modernizr-2.5.3.min.js"></script>

</head>
<body data-offset="90" data-target=".container" data-spy="scroll">

	<div data-bind="template: { name: $root.currPage().tmpl(), data: $root.currPage() }"></div>

	<!-- Application specific javascripts -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!-- <script src="js/user2/googlemaps.js"></script> -->

		
	<script type="text/javascript">
		var BASEURL = "<?=base_url()?>";
	
		var BASEKEY = "<?=$base_key?>";
	
		var CURRENTUSER = <?=json_encode($current_user)?>;
		
		var NAVS = <?=json_encode($navs)?>;
	</script>
	
	<!-- Kindeditor -->
	<script src="js/kindeditor/kindeditor-min.js"></script>
	<script src="js/kindeditor/lang/zh_CN.js"></script>
	
	<!-- Meganizr Navigation
	<script src="js/livepreview.js"></script>
	-->
	
	<?=@tail_js()?>
	
	<!-- Add jquery treeview plugin -->
	<script src="js/jquery.treeview/lib/jquery.cookie.js"></script>
	<script src="js/jquery.treeview/jquery.treeview.js"></script>
	<script src="js/jquery.treeview/jquery.treeview.edit.js"></script>
	<script src="app/modules/user/js/common/jquery.treeview.async.js"></script>
	
	<!--[if gt IE 7]><!--> <script src="js/user2/jquery-html5-placeholder-fix.js"></script> <!--<![endif]-->
	
	<?=@tail()?>
	
	<!-- End of application specific javascripts -->
	<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
	   	mathiasbynens.be/notes/async-analytics-snippet -->
	<script>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-11204542-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>