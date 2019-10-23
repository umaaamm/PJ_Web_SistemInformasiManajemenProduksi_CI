<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title">Kelola Data Pembelian</h3>
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
							<form class="form-horizontal" method="post" action="SimpanPembelian">
							<div class="col-md-5">

								 <div class="box-body">
								 	 <div class="form-group">
	                    <label for="" class="col-sm-4 control-label">Nama Barang</label>
                      	<div class="col-sm-7">
                        <select class="form-control" name="id_barang">
                        	<option value="-">- Pilih -</option>
                          	<?php foreach($data_barang->result_array() as $keyy) { ?>
                          <option value="<?php echo $keyy['id_barang'];?>"><?php echo $keyy['nama_barang'];?></option>
                            <?php } ?>
                        </select>
                    	</div>
                    </div>
									 <!-- <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Barang</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" i placeholder="Barang">
										 </div>
									 </div> -->
								 </div>
								 <!-- /.box-body -->

							</div>
							<div class="col-md-5">

								 <div class="box-body">
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Stok</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="stok" placeholder="Stok">
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
					<table id="dt-list-pembelian" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>

							<th>Barang</th>
							<th>Stok</th>
							<th>Pilihan</th>
						</tr>
						</thead>
						<!-- <tbody>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td align="center">
								<a href="#modal-edit-data-pembelian" data-toggle="modal" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
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
								<td><?php echo $key["id_barang"];?></td>
			          			<td><?php echo $key["stok"];?></td>

								<td align="center">
									<a href="#modal-edit-data-supplier" data-toggle="modal" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
									<button class="btn btn-danger btn-sm" onclick="hapus('<?php echo $key["id_data_pembelian"]; ?>')"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></button>
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

<div class="modal fade" id="modal-edit-data-pembelian">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit Data Pembelian</h4>
			</div>
			<div class="modal-body">
				<table class="table table-condensed" width="100%">
					<tr>
						<td class="bg-primary" width="30%">Barang</td>
						<td>
							<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Stok</td>
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
		document.location='<?php echo base_url(); ?>ControllerPembelian/hapus/'+$id;
	}
}

</script>
