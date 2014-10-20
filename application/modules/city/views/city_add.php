<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- Begin: life time stats -->
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-shopping-cart"></i>Add City
				</div>
				<div class="actions">
					<a href="city/add" class="btn default green-stripe ajaxify">
						<i class="fa fa-circle-o"></i>
						<span class="hidden-480">
							 Reload
						</span>
					</a>
					<a href="city/table" class="btn default yellow-stripe ajaxify">
						<i class="fa fa-table"></i>
						<span class="hidden-480">
							Table City
						</span>
					</a>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#" class="form-horizontal" id="form" >
					<div class="alert alert-danger display-hide">
						<button class="close" data-close="alert"></button>
						You have some form errors. Please check below.
					</div>
					<div class="alert alert-success display-hide">
						<button class="close" data-close="alert"></button>
						Data has been Add!
					</div>
					<div class="alert alert-warning display-hide" id="warning">
						<button class="close" data-close="alert"></button>
						<span>Data has been send!</span>
					</div>
					<div class="form-body">
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">City Code
									<span class="required">
										 *
									</span>
								</label>
								<div class="col-md-9">
									<input type="text" class="form-control input-xsmall" name="code" placeholder="JKT">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">City Name
									<span class="required">
										 *
									</span>
								</label>
								<div class="col-md-9">
									<input type="text" class="form-control input-medium" name="name" placeholder="Jakarta">
								</div>
							</div>
						</div>
						<!--/row-->
					</div>
					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-6">
								<div class="col-md-offset-3 col-md-9">
									<button type="submit" class="btn green">Submit</button>
									<a href="city/table" class="ajaxify"><button type="button" class="btn default">Cancel</button></a>
								</div>
							</div>
							<div class="col-md-6">
							</div>
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
		<!-- End: life time stats -->
	</div>
</div>
<!-- END CONTENT -->
<script type="text/javascript">
	jQuery(function(){
		FormValidation.handleValidationCity();
	});
</script>