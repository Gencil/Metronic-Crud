<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- Begin: life time stats -->
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-shopping-cart"></i>Add Mahasiswa
				</div>
				<div class="actions">
					<a href="mahasiswa/add" class="btn default green-stripe ajaxify">
						<i class="fa fa-circle-o"></i>
						<span class="hidden-480">
							 Reload
						</span>
					</a>
					<a href="mahasiswa/table" class="btn default yellow-stripe ajaxify">
						<i class="fa fa-table"></i>
						<span class="hidden-480">
							Table Mahasiswa
						</span>
					</a>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#" class="form-horizontal" id="form_sample_2" >
					<div class="alert alert-danger display-hide">
						<button class="close" data-close="alert"></button>
						You have some form errors. Please check below.
					</div>
					<div class="alert alert-success display-hide">
						<button class="close" data-close="alert"></button>
						Your form validation is successful!
					</div>
					<div class="form-body">
						<h3 class="form-section">Person Info</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">First Name
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="name" placeholder="Chee Kin">
										<span class="help-block">
											 This is inline help
										</span>
									</div>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">Last Name
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<select name="foo" class="select2me form-control">
											<option value="1">Abc</option>
											<option value="1">Abc</option>
											<option value="1">This is a really long value that breaks the fluid design for a select2</option>
										</select>
										<span class="help-block">
											 This field has error.
										</span>
									</div>
								</div>
							</div>
							<!--/span-->
						</div>
						<!--/row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">Gender
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<select class="form-control">
											<option value="">Male</option>
											<option value="">Female</option>
										</select>
										<span class="help-block">
											 Select your gender.
										</span>
									</div>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">Date of Birth
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="dd/mm/yyyy">
									</div>
								</div>
							</div>
							<!--/span-->
						</div>
						<!--/row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">Category
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-4">
										<select id="form_2_select2" class="form-control select2me" name="options2">
											<option value="">Select...</option>
											<option value="Option 1">Option 1</option>
											<option value="Option 2">Option 2</option>
											<option value="Option 3">Option 3</option>
											<option value="Option 4">Option 4</option>
										</select>
									</div>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">Membership
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<div class="radio-list">
											<label class="radio-inline">
											<input type="radio" name="optionsRadios2" value="option1"/>
											Free </label>
											<label class="radio-inline">
											<input type="radio" name="optionsRadios2" value="option2" checked/>
											Professional </label>
										</div>
									</div>
								</div>
							</div>
							<!--/span-->
						</div>
						<h3 class="form-section">Address</h3>
						<!--/row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">Address 1
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">Address 2
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">City
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">State
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<!--/span-->
						</div>
						<!--/row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">Post Code
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-3">Country
										<span class="required">
											 *
										</span>
									</label>
									<div class="col-md-9">
										<select class="form-control">
											<option>Country 1</option>
											<option>Country 2</option>
										</select>
									</div>
								</div>
							</div>
							<!--/span-->
						</div>
						<!--/row-->
					</div>
					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-6">
								<div class="col-md-offset-3 col-md-9">
									<button type="submit" class="btn green">Submit</button>
									<button type="button" class="btn default">Cancel</button>
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
		FormValidation.handleValidationMahasiswa();
	});
</script>