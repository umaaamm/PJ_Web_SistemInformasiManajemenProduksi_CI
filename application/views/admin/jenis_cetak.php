<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title">Kelola Data Jenis Cetak</h3>
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
							<form class="form-horizontal" action="SimpanSupplier" method="post">
								<div class="col-md-5">
									<form class="form-horizontal">
									 <div class="box-body">
										 <div class="form-group">
											 <label for="" class="col-sm-4 control-label">Jenis Cetak</label>
											 <div class="col-sm-7">
												 <input type="text" class="form-control" id="" placeholder="Jenis Cetak">
											 </div>
										 </div>
										 <div class="form-group">
											 <label for="" class="col-sm-4 control-label">Jenis Kertas</label>
											 <div class="col-sm-7">
												 <input type="text" class="form-control" id="" placeholder="Jenis Kertas">
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
											 <label for="" class="col-sm-4 control-label">Ukuran</label>
											 <div class="col-sm-7">
												 <input type="text" class="form-control" id="" placeholder="Ukuran">
											 </div>
										 </div>
										 <div class="form-group">
											 <label for="" class="col-sm-4 control-label">Tinta</label>
											 <div class="col-sm-7">
												 <input type="text" class="form-control" id="" placeholder="Tinta">
											 </div>
										 </div>
										 <div class="form-group">
											 <label for="" class="col-sm-4 control-label">Harga</label>
											 <div class="col-sm-7">
												 <input type="text" class="form-control" id="" placeholder="Harga">
											 </div>
										 </div>
									 </div>
									 <!-- /.box-body -->
									</form>
								</div>
							</form>
						</div>
					</div>
					<a href="#" class="btn btn-info btn-block"><i class="fa fa-save"></i> Simpan</a>
				</div>
			</div>

			<div class="box box-primary box-solid">
				<div class="box-body">
					<table id="dt-list-jenis-cetak" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>Kode</th>
							<th>Jenis Cetak</th>
							<th>Jenis Kertas</th>
							<th>Ukuran</th>
							<th>Tinta</th>
							<th>Harga</th>
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
