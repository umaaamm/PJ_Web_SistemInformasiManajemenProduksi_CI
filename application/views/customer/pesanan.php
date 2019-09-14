<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title">Kelola Data Pesanan</h3>
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
										 <label for="" class="col-sm-4 control-label">Tanggal</label>
										 <div class="col-sm-7">
											 <div class="input-group date">
												 <input type="text" class="form-control" id="datepicker" placeholder="Tanggal">
												 <div class="input-group-addon">
													 <i class="fa fa-calendar"></i>
												 </div>
											 </div>
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Jenis Cetak</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" id="" placeholder="Jenis Cetak">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Jumlah</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" id="" placeholder="Jumlah">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Catatan</label>
										 <div class="col-sm-7">
											 <textarea name="name" class="form-control" rows="2" cols=""></textarea>
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
										 <label for="" class="col-sm-4 control-label">Customer</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" id="" placeholder="Customer">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">No. Telp</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" id="" placeholder="No. Telp">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Alamat</label>
										 <div class="col-sm-7">
											 <textarea name="name" class="form-control" rows="2" cols=""></textarea>
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
					<table id="dt-list-pesanan" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Jenis Cetak</th>
							<th>Jumlah</th>
							<th>Customer</th>
							<th>No. Telp</th>
							<th>Alamat</th>
							<th>Ket/Catatan</th>
							<th>Status Pesanan</th>
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
							<td></td>
							<td>
								<td align="center">
									<a href="#" class="btn btn-warning btn-sm disabled"><i class="mdi mdi-plus-circle mr-2 fa fa-spinner"></i> Proses</a>
								</td>
							</td>
							<td align="center">
								<a href="#" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
								<a href="#" class="btn btn-danger btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<td align="center">
									<a href="#" class="btn btn-success btn-sm disabled"><i class="mdi mdi-plus-circle mr-2 fa fa-check"></i> Selesai</a>
								</td>
							</td>
							<td></td>
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
