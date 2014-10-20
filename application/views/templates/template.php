<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?= $this->config->item('app_title').' | '. @$pagetitle; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo base_url(); ?>public/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
	<?= $_css ?>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url(); ?>public/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url(); ?>public/assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="<?php echo base_url(); ?>public/assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>public/assets/logo/favicon.ico"/>

<script src="<?php echo base_url(); ?>public/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
   CI_ROOT = "<?=base_url() ?>";
</script>
<script type="text/javascript">
	jQuery(function(){
		App.init(); // initlayout and core plugins
	});
</script>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">

	<?php echo $_header; ?>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	
	<?php echo $_sidebar; ?>

<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-content-body">
			<?= $_page_header ?>
			<?= $_content ?>
		</div>
	</div>
</div>

<!-- END CONTAINER -->

	<?php echo $_footer ?>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url(); ?>public/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url(); ?>public/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>public/assets/scripts/core/app.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- START JS Custom -->
   <?= $_js ?>
<!-- END JS Custom -->

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>