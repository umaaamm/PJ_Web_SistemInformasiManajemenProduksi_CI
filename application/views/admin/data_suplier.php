			<div class="box box-primary box-solid">
				<div class="box-header">
					<h3 class="box-title">Kelola Data Supplier</h3>
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
						       
						           <div class="box-body">
						            <!--  <div class="form-group">
						               <label for="" class="col-sm-4 control-label">Kode</label>
						               <div class="col-sm-7">
						                 <input type="text" class="form-control" name="kode" placeholder="Kode">
						               </div>
						             </div> -->
												 <div class="form-group">
						               <label for="" class="col-sm-4 control-label">Supplier</label>
						               <div class="col-sm-7">
						                 <input type="text" class="form-control" name="supplier" placeholder="Supplier">
						               </div>
						             </div>
						           </div>
						           <!-- /.box-body -->
						        
								    </div>
								    <div class="col-md-5">
								
						           <div class="box-body">
						             <div class="form-group">
						               <label class="col-sm-4 control-label">Barang</label>
						               <div class="col-sm-7">
						                 <input type="text" class="form-control" name="barang" placeholder="Barang">
						               </div>
						             </div>

						              <div class="form-group">
						               <label class="col-sm-4 control-label">No. Telp</label>
						               <div class="col-sm-7">
						                 <input type="text" class="form-control" name="nohp" placeholder="No. Telp">
						               </div>
						             </div>
						            
						           </div>
						       </div>
						           <!-- /.box-body -->
								    </div>
								  </div>
								</div>
								<button type="submit" class="btn btn-info btn-block"><i class="fa fa-save"></i> Simpan</button>
								<!-- <a href="#" class="btn btn-info btn-block"><i class="fa fa-save"></i> Simpan</a> -->
							</div>
						</div>
						        	</form>

						<div class="box box-primary box-solid">
							<div class="box-body">
								<table id="dt-list-supplier" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>No</th>
										<th>Supplier</th>
										<th>Barang</th>
										<th>No. Telp</th>
										<th>Pilihan</th>
									</tr>
									</thead>

									<?php
												$a=1;
												foreach ($data->result_array() as $key) {
											?>
											<tr>
											<td><?php echo $a; ?></td>
											<td><?php echo $key["nama_supplier"];?></td>
                                            <td><?php echo $key["supplier_barang"];?></td> 	
											<td><?php echo $key["telpon"];?></td>	
										<td align="center">
											<button class="btn btn-danger btn-sm" onclick="hapus('<?php echo $key["id_supplier"]; ?>')"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></button>
											<a href="#" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
                                           <!--  <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#mymodal" onclick="edit('<?php echo $key["id_admin"]; ?>','<?php echo $key["nama"]; ?>','<?php echo $key["email"]; ?>','<?php echo $key["username"]; ?>','<?php echo $key['password'];?>','<?php echo $key['bagian'];?>','<?php echo $key['level'];?>')">Edit</button>  -->


<!-- 
											<a href="#" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-pencil"></i></a>
											<a href="#" class="btn btn-danger btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-close"></i></a> -->
										</td>
									</tr>
								<?php $a++; } ?>
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
				<!-- /.box-body -->
					<!-- /.box -->

<script type="text/javascript">
function hapus($id){
	var	conf=window.confirm('Data Akan Dihapus ?');
	if (conf) {
		document.location='<?php echo base_url(); ?>ControllerSupplier/hapus/'+$id;
	}
}

</script>