<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="__PUBLIC__/Admin/img/favicon.png">

    <title>message | Jason Resume</title>

    <!-- Bootstrap CSS -->    
    <link href="__PUBLIC__/Admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="__PUBLIC__/Admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="__PUBLIC__/Admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="__PUBLIC__/Admin/css/style.css" rel="stylesheet">
    <link href="__PUBLIC__/Admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body>
   <div class="page-404">
	<?php if(isset($message)): ?><p class="text-404">Great</p>
	<p class="success"><h2><?php echo($message); ?></h2></p>
	<?php else: ?>
	<p class="text-404">Error</p>
	<p class="error"><h2><?php echo($error); ?></h2></p><?php endif; ?>
	<p class="detail"></p>
	<p class="jump">
	This page will <a id="href" href="<?php echo($jumpUrl); ?>">jump</a> waiting time ： <b id="wait"><?php echo($waitSecond); ?></b>
	</p>
	</div>
	<script type="text/javascript">
	(function(){
	var wait = document.getElementById('wait'),href = document.getElementById('href').href;
	var interval = setInterval(function(){
		var time = --wait.innerHTML;
		if(time == 0) {
			location.href = href;
			clearInterval(interval);
		};
	}, 1000);
	})();
	</script>

  
  </body>
</html>