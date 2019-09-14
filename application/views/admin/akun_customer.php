<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title">Kelola Akun Customer</h3>
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
								<form class="form-horizontal" method="post" action="SimpanAkunCustomer">
								 <div class="box-body">
									 <!-- <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Kode</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="kode" placeholder="Kode">
										 </div>
									 </div> -->
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Nama Customer</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="nama" placeholder="Nama Customer">
										 </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Username</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="username" placeholder="Username">
										 </div>
									 </div>

								 </div>
								 <!-- /.box-body -->
							
							</div>
							<div class="col-md-5">
								
								 <div class="box-body">
									 <div class="form-group">
									 	  <label for="" class="col-sm-4 control-label">Email</label>
									 	  <div class="col-sm-7">
									 	 	  <input type="text" class="form-control" name="email" placeholder="Email">
									 	  </div>
									 </div>
									 <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Password</label>
										 <div class="col-sm-7">
											 <input type="password" class="form-control" name="password" placeholder="Password">
										 </div>
									 </div>
									 <!-- <div class="form-group">
										 <label for="" class="col-sm-4 control-label">Level</label>
										 <div class="col-sm-7">
											 <input type="text" class="form-control" name="level" placeholder="Level">
										 </div>
									 </div> -->
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
					<table id="dt-list-akun-admin" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>Nama Customer</th>
							<th>Username</th>
							<th>Password</th>
							<th>Email</th>
							<th>Level</th>
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
								<td><?php echo $key["nama"];?></td>
			          			<td><?php echo $key["username"];?></td>
								<td><?php echo $key["password"];?></td>
								<td><?php echo $key["email"];?></td>
								<td><?php echo $key["level"];?></td>
								<td align="center">
									<a href="#modal-edit-data-supplier" data-toggle="modal" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
									<button class="btn btn-danger btn-sm" onclick="hapus('<?php echo $key["id_user"]; ?>')"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></button>
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

<div class="modal fade" id="modal-edit-akun-customer">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit Akun Customer</h4>
			</div>
			<div class="modal-body">
				<table class="table table-condensed" width="100%">
					<tr>
						<td class="bg-primary" width="30%">Nama Customer</td>
						<td>
							<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Username</td>
						<td>
						<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Password</td>
						<td>
						<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Email</td>
						<td>
						<input type="text" name="" class="form-control" value="">
						</td>
					</tr>
					<tr>
						<td class="bg-primary">Level</td>
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
		document.location='<?php echo base_url(); ?>ControllerAkunCustomer/hapus/'+$id;
	}
}

</script>
