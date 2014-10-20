<?php

/*
List Helper =
-------------
vmap,
flot,
pulsate,
daterange,
gritter,
fullcalendar,
piechart,
sparkline

*/

function get_css($css)
{
	if($css == 'datatables')
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/assets/plugins/data-tables/DT_bootstrap.css"/>';
	}
	if($css == 'select')
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/assets/plugins/select2/select2.css"/>';
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/assets/plugins/select2/select2-metronic.css"/>';
	}
	if($css == 'datepicker')
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/assets/plugins/bootstrap-datepicker/css/datepicker.css"/>';
	}
	if($css == 'vmap')
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/assets/plugins/jqvmap/jqvmap/jqvmap.css"/>';
	}
	if($css == 'datarange')
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>';
	}
	if($css == 'gritter')
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/assets/plugins/gritter/css/jquery.gritter.css"/>';
	}
	if($css == 'fullcalendar')
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css"/>';
	}
	if($css == 'piechart')
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css"/>';
	}
}

function get_js($js){

	if($js == 'vmap'){
		echo "<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/jquery.vmap.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js\" type=\"text/javascript\"></script>
			";
	}

	if($js == 'datatables'){
		echo "<script src=\"".base_url()."public/assets/plugins/data-tables/jquery.dataTables.js\" type=\"text/javascript\"></script>
		<script src=\"".base_url()."public/assets/plugins/data-tables/DT_bootstrap.js\" type=\"text/javascript\"></script>";
	}

	if($js == 'flot'){
		echo "<script src=\"".base_url()."public/assets/plugins/flot/jquery.flot.min.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/flot/jquery.flot.resize.min.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/flot/jquery.flot.categories.min.js\" type=\"text/javascript\"></script>
			";
	}

	if($js == 'pulsate'){
		echo "<script src=\"".base_url()."public/assets/plugins/jquery.pulsate.min.js\" type=\"text/javascript\"></script>";
	}

	if($js == 'datarange'){
		echo "<script src=\"".base_url()."public/assets/plugins/bootstrap-daterangepicker/moment.min.js\" type=\"text/javascript\"></script>
			<script src=\"".base_url()."public/assets/plugins/bootstrap-daterangepicker/daterangepicker.js\" type=\"text/javascript\"></script>";
	}

	if($js == 'select'){
		echo "<script src=\"".base_url()."public/assets/plugins/select2/select2.min.js\" type=\"text/javascript\"></script>";
	}

	if($js == 'datepicker'){
		echo "<script src=\"".base_url()."public/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js\" type=\"text/javascript\"></script>";
	}

	if($js == 'gritter'){
		echo "<script src=\"".base_url()."public/assets/plugins/gritter/js/jquery.gritter.js\" type=\"text/javascript\"></script>";
	}

	if($js == 'fullcalendar'){
		echo "<script src=\"".base_url()."public/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js\" type=\"text/javascript\"></script>";
	}

	if($js == 'piechart'){
		echo "<script src=\"".base_url()."public/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js\" type=\"text/javascript\"></script>";
	}

	if($js == 'sparkline'){
		echo "<script src=\"".base_url()."public/assets/plugins/jquery.sparkline.min.js\" type=\"text/javascript\"></script>";
	}

	if($js == 'validation'){
		echo "<script src=\"".base_url()."public/assets/plugins/jquery-validation/dist/jquery.validate.min.js\" type=\"text/javascript\"></script>";
		echo "<script src=\"".base_url()."public/assets/plugins/jquery-validation/dist/additional-methods.min.js\" type=\"text/javascript\"></script>";
	}

}

?>