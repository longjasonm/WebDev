<!DOCTYPE html>
<html>
	<head>
		<title>ServiceTrade</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Marketo: Head Elements -->
		<?php echo $mContext['headElements']; ?>
		
		<!-- Bootstrap -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		
		<!--Typekit-->
		<script src="//use.typekit.net/vhq2bfd.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		
		<!-- Marketo: Form Validation Script (Will be replaced by jquery.validate.js at a later date -->
		<script>
			function fieldValidate(field) {
				/* call Mkto.setError(field, message) and return false to mark a field value invalid */
				/* return 'skip' to bypass the built-in validations */
				return true;
				}
				function getRequiredFieldMessage(domElement, label) {
					return "This field is required";
				}
				function getTelephoneInvalidMessage(domElement, label) {
					return "Incorrect phone format";
				}
				function getEmailInvalidMessage(domElement, label) {
					return "Incorrect email format";
				}
		</script>
		
		<!-- Marketo: HTML5 Placeholder Fix --> 
		
		<script>
			jQuery(document).ready(function ($) {
				$('input').each(function () {
					var foo = $(this).attr('title');
					$(this).attr('placeholder', foo);
				});
			});
		</script>
		
		<!-- Marketo: jquery.placeholder.js -->
		<script>

		/*! jquery.placeholder.js | https://github.com/diy/jquery-... | Apache License (v2) */
		
		(function(f){var j="placeholder"in document.createElement("input"),h="-moz-box-sizing -webkit-box-sizing box-sizing padding-top padding-right padding-bottom padding-left margin-top margin-right margin-bottom margin-left border-top-width border-right-width border-bottom-width border-left-width line-height font-size font-family width height top left right bottom".split(" ");f.fn.placeholder=function(g){var k=this;g=g||{};if(j&&!g.force)return this;window.setTimeout(function(){k.each(function(){var e=
		
		this.tagName.toLowerCase();if("input"===e||"textarea"===e)a:{var b,d,a=f(this),c;try{b=a[0].getAttributeNode("placeholder");if(!b)break a;d=a[0].getAttribute("placeholder");if(!d||!d.length)break a;a[0].setAttribute("placeholder","");a.data("placeholder",d)}catch(g){break a}e={};for(b=0;b<h.length;b++)e[h[b]]=a.css(h[b]);b=parseint(a.css("z-index"),10);if(isnan(b)||!b)b=1;c=f("<span>").addClass("placeholder").html(d);c.css(e);c.css({cursor:a.css("cursor")||"text",display:"block",position:"absolute",
		
		overflow:"hidden","z-index":b+1,background:"none","border-top-style":"solid","border-right-style":"solid","border-bottom-style":"solid","border-left-style":"solid","border-top-color":"transparent","border-right-color":"transparent","border-bottom-color":"transparent","border-left-color":"transparent"});c.insertBefore(a);e=a.offset().top-c.offset().top;d=parseInt(c.css("margin-top"));isNaN(d)&&(d=0);c.css("margin-top",d+e);c.on("mousedown",function(){a.is(":enabled")&&window.setTimeout(function(){a.trigger("focus")},
		
		0)});a.on("focus.placeholder",function(){c.hide()});a.on("blur.placeholder",function(){c.toggle(!f.trim(a.val()).length)});a[0].onpropertychange=function(){"value"===event.propertyName&&a.trigger("focus.placeholder")};a.trigger("blur.placeholder")}})},0);return this}})(jQuery);
		
		</script>
		
		<!-- Marketo: Add Bootstrap Button and Classes -->
		
		<script>
			jQuery(document).ready(function ($) {
				$('#mktFrmSubmit').addClass('btn btn-success btn-lg');
				$('li.mktField').wrap('<div class="form-group"></div>');
				$('li.mktField > span > input').addClass('form-control');
			});
		</script>
		
		<!-- Styles to Override in ST-specific sheet -->
		<style>
			body{
				background: #f5f5f6;
				color: #7d7d7d;
				font-size: 20px;
				font-family: "Proxima Nova", "proxima-nova", sans-serif;
				line-height: 24px;
				padding-top: 100px;
			}
			
			.navbar{
				background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAByCAYAAACSo7vmAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjYzNTM2MTYzN0I0MTFFMjk3NDdBRkE3N0ZEODdDRkYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjYzNTM2MTczN0I0MTFFMjk3NDdBRkE3N0ZEODdDRkYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2NjM1MzYxNDM3QjQxMUUyOTc0N0FGQTc3RkQ4N0NGRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2NjM1MzYxNTM3QjQxMUUyOTc0N0FGQTc3RkQ4N0NGRiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhhGJvMAAAAkSURBVHjaYvj///9NJgYgGCVGCVwECKgyAwl2EMEAIv4BBBgAgwoF5NRa5TsAAAAASUVORK5CYII=') transparent;
				height: 100px;
			}
			
			.navbar-brand{
				background: url('http://go.servicetrade.com/rs/servicetrade/images/logo.png') top left no-repeat;
				background-size: 100%;
				height: 50px;
				margin-left: 20px;
				text-indent: -4000px;
				width: 200px;
			}
			#content{
				background: #fff;
				border-left: 1px solid #e4e4e4;
				border-right: 1px solid #e4e4e4;
				padding: 40px;
			}
			#content h2{
				color: #1f1f1f;
				font-family: "Proxima Nova", sans-serif;
				font-size: 36px;
				font-weight: 700;
				letter-spacing: -1px;
				margin: 0 0 10px 0;
			}
			img#screenshot{
				margin-bottom: 20px;
			}
			#copy{
				margin-bottom: 20px;
			}
			#form-box{
				background: #f9f9f9;
				border: solid 1px #bcbcbc;
				margin-bottom: 20px;
				padding: 20px;
			}
			#app-store-icons img{
				margin-bottom: 20px;
			}
			footer{
				background: #4e4e4e;
				color: #fff;
				font-size: 18px;
				font-weight: bold;
				line-height: 20px;
				padding: 40px 0;
			}
			 @media screen and (max-width: 991px) {
			 	body{
				 	padding-top: 75px;
			 	}
			 	.navbar{
				 	height: 75px;
			 	}
			 	.navbar-brand{
				 	height: 35px;
				 	width: 145px;
			 	}
			 	#content{
				 	padding: 20px;
			 	}
			 	.btn{
				 	width: 100% !important;
			 	}
			 }
		</style>
		
		<!-- Marketo: CSS Fixes -->
  		<style>
  			label {
  				display: none !important;
  			}
  			.mktField input {
  				width: 100% !important;
  			}
  			.Form_1 {
  				width: 100% !important;
  			}
  			form.lpeRegForm li {
  				padding: 1px 0 3px !important;
  			}
  			form.lpeRegForm{
  				margin:0 20px;
  			}
  			#mktFrmSubmit{
  				color: #fff !important;
				font-family: "Proxima Nova", sans-serif !important;
				font-size: 18px !important;
				line-height: 1.33 !important;
				padding: 10px 16px !important;
  			}
  			.form-control{
  				font-size: 14px !important;
  			}
  			.mktIpad span.mktInput input{
          		padding: 6px 12px !important;
            	}
            	span.mktError span.mktFormMsg {
				background: #d00;
				border-radius: 3px;
				color: #fff;
				text-align: center;
				top: -29px;
				width: 140px;
				z-index: 9999;
			}
			@media screen and (min-width: 1200px) {
				span.mktError span.mktFormMsg {
					left: 176px !important;
				}
			}
			@media screen and (max-width:1199px) and (min-width: 990px) {
				span.mktError span.mktFormMsg {
					left: 109px !important;
				}
			}
			@media screen and (max-width:989px) and (min-width: 768px) {
				span.mktError span.mktFormMsg {
					left: 521px !important;
				}
			}
			@media screen and (max-width: 767px) {
				span.mktError span.mktFormMsg {
					left: 12px !important;
					top: -10px;
				}
			}
  		</style>
  		
	</head>
	<body id="bodyId" <?php echo $mContext['bodyAttributes'] ?>>
	<!-- Marketo Scaffolding -->
	<div id="outerWrapDiv">
	<div id="innerWrapDiv">
		<!-- Navbar -->
		<header class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<h1 class="navbar-brand">ServiceTrade</h1>
			</div>
		</header>
		<!-- End Navbar -->
		<!-- Body Content -->
		<div class="container">
				<div id="content">
					<div class="row">
						<div class="col-md-8">
							<div id="copy">
								{{my.LP Copy}}
							</div>
						</div>
						<div class="col-md-4" id="form-box">
							<p><b>{{my.LP CTA Text}}</b></p>
							<!-- Marketo: Insert Form Only -->
							<div id="mkto-form">
							<?php echo $mContext['bodyElements']; ?>
							</div>
						</div>
					</div>
				</div>
		</div>
		<!-- End Body Content -->
		
		<!-- Footer -->
		<footer>
			<div class="container">
				<p>&copy; 2013 ServiceTrade</p>
			</div>
		</footer>
		<!-- End Footer -->
		
		</div>
		</div>
		<?php echo $mContext['endElements']; ?>
		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	</body>
</html>