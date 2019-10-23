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
							<form class="form-horizontal" action="SimpanJenisCetak" method="post">
								<div class="col-md-5">
									<form class="form-horizontal">
									 <div class="box-body">
										 <div class="form-group">
											 <label for="" class="col-sm-4 control-label">Jenis Cetak</label>
											 <div class="col-sm-7">
												 <!-- <input type="text" class="form-control" name="jenis_cetak" placeholder="Jenis Cetak"> -->
					                  <select class="form-control" name="jenis_cetak">
					                    <option>Undangan</option>
					                    <option>Yasin</option>
					                    <option>Kalender</option>
					                  </select>
											 </div>
										 </div>
										 <div class="form-group">
											 <label for="" class="col-sm-4 control-label">Jumlah (Pcs)</label>
											 <div class="col-sm-7">
												 <input type="text" class="form-control" name="jenis_kertas" placeholder="Jenis Kertas">
											 </div>
										 </div>
									 </div>
									 <!-- /.box-body -->

								</div>
								<div class="col-md-5">
									<form class="form-horizontal">
									 <div class="box-body">
										 <div class="form-group">
											 <label for="" class="col-sm-4 control-label">Harga (Per-Pcs)</label>
											 <div class="col-sm-7">
												 <input type="text" class="form-control" name="harga" placeholder="Harga Per-Pcs" disabled>
											 </div>
										 </div>
										 <div class="form-group">
											 <label for="" class="col-sm-4 control-label">Total Harga</label>
											 <div class="col-sm-7">
												 <input type="text" class="form-control" name="harga" placeholder="Total Harga" disabled>
											 </div>
										 </div>
									 </div>
									 <!-- /.box-body -->

								</div>

						</div>
					</div>
					<button type="submit" class="btn btn-info btn-block"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>

			<div class="box box-primary box-solid">
				<div class="box-body">
					<table id="dt-list-jenis-cetak" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>
							<!-- <th>Kode</th> -->
							<th>Jenis Cetak</th>
							<th>Jumlah (Pcs)</th>
							<th>Harga (Per-Pcs)</th>
							<th>Total Harga</th>
							<th>Pilihan</th>
						</tr>
						</thead>
						<!-- <tbody> -->
						<!-- <tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td align="center">
								<a href="#modal-edit-data-jenis-cetak" data-toggle="modal" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
								<a href="#" class="btn btn-danger btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></a>
							</td>
						</tr> -->
						<tbody>
							<?php
								$a=1;
									foreach ($data->result_array() as $key) {
								?>
							<tr>
								<td><?php echo $a; ?></td>
								<td><?php echo $key["nama_jenis_cetak"];?></td>
			          			<td><?php echo $key["jumlah_pcs"];?></td>
			          			<td><?php echo $key["harga_per-pcs"];?></td>
			          			<td><?php echo $key["total_harga"];?></td>

								<td align="center">
									<a href="#modal-edit-data-supplier" data-toggle="modal" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
									<button class="btn btn-danger btn-sm" onclick="hapus('<?php echo $key["id_jenisc"]; ?>')"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></button>
								</td>
							</tr>
						<?php $a++; } ?>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->

<div class="modal fade" id="modal-edit-data-jenis-cetak">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit Data Jenis Cetak</h4>
			</div>
			<div class="modal-body">
				<table class="table table-condensed" width="100%">
					<tr>
						<td class="bg-primary" width="30%">Jenis Cetak</td>
						<td>
							<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Jenis Kertas</td>
						<td>
							<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Ukuran</td>
						<td>
							<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Tinta</td>
						<td>
							<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Harga</td>
						<td>
							<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Simpan</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script type="text/javascript">
function hapus($id){
	var	conf=window.confirm('Data Akan Dihapus ?');
	if (conf) {
		document.location='<?php echo base_url(); ?>ControllerJenisCetak/hapus/'+$id;
	}
}

</script>
