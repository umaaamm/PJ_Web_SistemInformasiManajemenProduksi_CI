<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title">Kelola Data Barang</h3>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fa fa-minus"></i></button>
		</div>
	</div>
		<div class="box-body">
			<div class="box box-warning disabled box-solid">
				<div class="box-body">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<form class="form-horizontal">
								 <div class="box-body">
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Kode</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="kode" placeholder="Kode">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Barang</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="nama" placeholder="Barang">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Jenis</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="jenis" placeholder="Jenis">
										 </div>
									 </div>
								 </div>
								 <!-- /.box-body -->
								</form>
							</div>
							<div class="col-md-5">
								<form class="form-horizontal">
								 <div class="box-body">
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Harga</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="harga" placeholder="Harga">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Supplier</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="supplier" placeholder="Supplier">
										 </div>
									 </div>
								 </div>
								 <!-- /.box-body -->
								</form>
							</div>
						</div>
					</div>
					<a href="#" class="btn btn-info btn-block"><i class="fa fa-save"></i> Simpan</a>
				</div>
			</div>

			<div class="box box-primary box-solid">
				<div class="box-body">
					<table id="dt-list-barang" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>Kode</th>
							<th>Barang</th>
							<th>Jenis</th>
							<th>Harga</th>
							<th>Supplier</th>
							<th>Pilihan</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td align="center">
								<a href="#" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
								<a href="#" class="btn btn-danger btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></a>
							</td>
						</tr>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
