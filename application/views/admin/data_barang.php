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
							<form class="form-horizontal" method="post" action="SimpanDataBarang">
							<div class="col-md-5">

								 <div class="box-body">
								<!-- 	 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Kode</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="kode" placeholder="Kode">
										 </div>
									 </div> -->
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Barang</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="barang" placeholder="Barang">
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

							</div>
							<div class="col-md-5">

								 <div class="box-body">
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Harga</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="harga" placeholder="Harga">
										 </div>
									 </div>
									<!--  <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Supplier</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="supplier" placeholder="Supplier">
										 </div>
									 </div> -->
									  <div class="form-group">
                    	<label for="" class="col-sm-4 control-label">Supplier</label>
                      <div class="col-sm-7">
                        <select class="form-control" name="id_supplier">
	                        <option value="-">- Pilih -</option>
                          <?php foreach($data_supplier->result_array() as $keyy) {?>
                          <option value="<?php echo $keyy['id_supplier'];?>"><?php echo $keyy['nama_supplier'];?></option>
                          <?php } ?>
                        </select>
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
					<table id="dt-list-barang" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>Barang</th>
							<th>Jenis</th>
							<th>Harga</th>
							<th>Supplier</th>
							<th>Pilihan</th>
						</tr>
						</thead>
						<tbody>
							<?php
								$a=1;
									foreach ($data->result_array() as $key) {
								?>
							<tr>
								<td><?php echo $a; ?></td>
								<td><?php echo $key["nama_barang"];?></td>
			          			<td><?php echo $key["jenis_barang"];?></td>
								<td><?php echo $key["harga_barang"];?></td>
								<td><?php echo $key["id_supplier"];?></td>
								<td align="center">
									<a href="#modal-edit-data-supplier" data-toggle="modal" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
									<button class="btn btn-danger btn-sm" onclick="hapus('<?php echo $key["id_barang"]; ?>')"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></button>
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

<div class="modal fade" id="modal-edit-data-barang">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit Data Barang</h4>
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
						<td class="bg-primary">Jenis</td>
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
						<td class="bg-primary">Suplier</td>
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
		document.location='<?php echo base_url(); ?>ControllerDataBarang/hapus/'+$id;
	}
}

</script>
