<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title">Kelola Data Pemesan</h3>
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
							<form class="form-horizontal" method="post" action="SimpanPemesanan">
							<div class="col-md-5">
								
								 <div class="box-body">
									<!--  <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Kode</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" id="" placeholder="Kode">
										 </div>
									 </div> -->
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Tanggal</label>
										 <div class="col-sm-7">
											 <div class="input-group date">
												 <input type="text" class="form-control" id="datepicker" name="tanggal" placeholder="Tanggal">
												 <div class="input-group-addon">
													 <i class="fa fa-calendar"></i>
												 </div>
											 </div>
										 </div>
									 </div>
									<!--  <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Jenis Cetak</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control"  placeholder="Jenis Cetak">
										 </div>
									 </div> -->
									 <div class="form-group">
                                             <label for="" class="col-sm-4 control-label">Jenis Cetak</label>
                                              <div class="col-sm-7">
                                            <select class="form-control" name="id_jenisc">
                                                <option value="-">-- Jenis Cetak --</option>
                                              <?php foreach($data_cetak->result_array() as $keyy)
                                              {
                                                ?>
                                                    
                                                    <option value="<?php echo $keyy['id_jenisc'];?>"><?php echo $keyy['nama_jenis_cetak'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Jumlah</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
										 </div>
									 </div>
								 </div>
								 <!-- /.box-body -->
								
							</div>
							<div class="col-md-5">
								
								 <div class="box-body">
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Harga</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="harga" placeholder="Harga">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Customer</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="customer" placeholder="Customer">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">No. Telp</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="telpon" placeholder="No. Telp">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Status</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="status" placeholder="Status">
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
					<table id="dt-list-pemesan" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>
							<!-- <th>Kode</th> -->
							<th>Jenis Cetak</th>
							<th>Jenis Kertas</th>
							<th>Ukuran</th>
							<th>Tinta</th>
							<th>Harga</th>
							<th>Status</th>
							<th>Pilihan</th>
						</tr>
						</thead>
						<!-- <tbody>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td align="center">
								<a href="#modal-edit-data-pemesan" data-toggle="modal" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
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
								<td><?php echo $key["tanggal"];?></td>
			          			<td><?php echo $key["jenis_cetak"];?></td>
			          			<td><?php echo $key["jumlah"];?></td>
			          			<td><?php echo $key["harga"];?></td>
			          			<td><?php echo $key["customer"];?></td>
			          			<td><?php echo $key["telpon"];?></td>
			          			<td><?php echo $key["status"];?></td>
								
								<td align="center">
									<a href="#modal-edit-data-supplier" data-toggle="modal" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
									<button class="btn btn-danger btn-sm" onclick="hapus('<?php echo $key["id_pesanan"]; ?>')"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></button>
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

<div class="modal fade" id="modal-edit-data-pemesan">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit Data Pemesan</h4>
			</div>
			<div class="modal-body">
				<table class="table table-condensed" width="100%">
					<tr>
						<td class="bg-primary" width="30%">Tanggal</td>
						<td>
							<div class="input-group date">
								<input type="text" class="form-control" id="datepicker-edit-data-pemesan" placeholder="Tanggal">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Jenis Cetak</td>
						<td>
						<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Jumlah</td>
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
					<tr>
						<td class="bg-primary">Customer</td>
						<td>
						<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">No. Telp</td>
						<td>
						<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Status</td>
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
		document.location='<?php echo base_url(); ?>ControllerPemesanan/hapus/'+$id;
	}
}

</script>
