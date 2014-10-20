<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- Begin: life time stats -->
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-shopping-cart"></i>Table Mahasiswa
				</div>
				<div class="actions">
					<a href="mahasiswa/table" class="btn default green-stripe ajaxify">
						<i class="fa fa-circle-o"></i>
						<span class="hidden-480">
							 Reload
						</span>
					</a>
					<a href="mahasiswa/add" class="btn default yellow-stripe ajaxify">
						<i class="fa fa-plus"></i>
						<span class="hidden-480">
							 Add Mahasiswa
						</span>
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<div class="table-actions-wrapper">
						<span>
						</span>
						<select class="table-group-action-input form-control input-inline input-small input-sm">
							<option value="">Select...</option>
							<option value="Cancel">Cancel</option>
							<option value="Cancel">Hold</option>
							<option value="Cancel">On Hold</option>
							<option value="Close">Close</option>
						</select>
						<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
					</div>
					<table class="table table-striped table-bordered table-hover" id="datatable_ajax">
					<thead>
					<tr role="row" class="heading">
						<th width="5%">
							<input type="checkbox" class="group-checkable">
						</th>
						<th width="5%">
							 NO
						</th>
						<th width="5%">
							 NIP
						</th>
						<th>
							 Nama
						</th>
						<th width="15%">
							 Jabatan
						</th>
						<th width="5%">
							 Actions
						</th>
					</tr>
					<tr role="row" class="filter">
						<td>
						</td>
						<td>
						</td>
						<td>
							<input type="text" class="form-control form-filter input-sm" name="nip">
						</td>
						<td>
							<input type="text" class="form-control form-filter input-sm" name="nama">
						</td>
						<td>
							<input type="text" class="form-control form-filter input-sm" name="jabatan_strk">
						</td>
						<td>
							<div class="margin-bottom-5">
								<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
							</div>
							<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
						</td>
					</tr>
					</thead>
					<tbody>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- End: life time stats -->
	</div>
</div>
<!-- END CONTENT -->
<script type="text/javascript">
	jQuery(function(){
		TableAjax.initMahasiswa();
	});
</script>