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
						<div class="row">
							<div class="col-md-12">
								<form class="form-horizontal">
									<div class="nav-tabs-custom">
 									 <ul class="nav nav-tabs">
 										 <li class="active"><a href="#tab_1" data-toggle="tab">1. Jenis Cetak</a></li>
 										 <li><a href="#tab_2" data-toggle="tab">2. Rincian Pesanan</a></li>
 										 <li><a href="#tab_3" data-toggle="tab">3. Konfirmasi Pesanan</a></li>
 									 </ul>
 									 <div class="tab-content">
 										 <div class="tab-pane active" id="tab_1">
 											 <b>Pilih Jenis Cetak:</b>
											 <div class="box-body">
												 <div class="form-group">
				                   <div class="radio">
				                     <label>
				                       <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
				                       Kalender Dinding (Rp.30.000)
				                     </label>
				                   </div>
													 <div class="radio">
				                     <label>
				                       <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
				                       Kalender Duduk (Rp.25.000)
				                     </label>
				                   </div>
				                   <div class="radio">
				                     <label>
				                       <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
				                       Undangan - Full Color + Hadcover + Polly (Rp.2000/Pcs)
				                     </label>
				                   </div>
													 <div class="radio">
				                     <label>
				                       <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
				                       Undangan - Blackwhite (BW) + Blanko (Rp.1000/Pcs)
				                     </label>
				                   </div>
													 <div class="radio">
				                     <label>
				                       <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
				                       Yasin - Isi 265 Lembar, Hardcover (Rp.25.000)
				                     </label>
				                   </div>
													 <div class="radio">
				                     <label>
				                       <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
				                       Yasin - Isi 265 Lembar (Rp.20.000)
				                     </label>
				                   </div>
													 <div class="radio">
				                     <label>
				                       <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
				                       Yasin - Isi 144 Lembar, Hardcover (Rp.15.000)
				                     </label>
				                   </div>
													 <div class="radio">
				                     <label>
				                       <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
				                       Yasin - Isi 144 Lembar (Rp.8.500)
				                     </label>
				                   </div>
				                 </div>
												 <a href="#" class="btn btn-success pull-right"><i class="fa fa-arrow-circle-right"></i> Lanjut</a>
											 </div>
 										 </div>
 										 <!-- /.tab-pane -->
 										 <div class="tab-pane" id="tab_2">
											<div class="row">
					 							<div class="col-md-6">
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
					 										 <label for="" class="col-sm-4 control-label">Jumlah</label>
					 										 <div class="col-sm-7">
					 											 <input type="text" class="form-control" id="" placeholder="Jumlah">
					 										 </div>
					 									 </div>
					 									 <div class="form-group">
					 										 <label for="" class="col-sm-4 control-label">Berkas</label>
					 										 <div class="col-sm-7">
					 											 <input type="file" class="form-control" id="" placeholder="Uplaod">
					 											 <!-- <textarea name="name" class="form-control" rows="2" cols=""></textarea> -->
					 										 </div>
					 									 </div>
					 								 </div>
					 								 <!-- /.box-body -->
					 								</form>
					 							</div>
					 							<div class="col-md-6">
					 								<form class="form-horizontal">
					 								 <div class="box-body">
					 									 <div class="form-group">
					 										 <label for="" class="col-sm-4 control-label">Harga (Per-Pcs)</label>
					 										 <div class="col-sm-7">
					 											 <input type="text" class="form-control" name="harga" placeholder="Harga (Per-Pcs)" disabled>
					 										 </div>
					 									 </div>
					 									 <div class="form-group">
					 										 <label for="" class="col-sm-4 control-label">Nama Customer</label>
					 										 <div class="col-sm-7">
					 											 <input type="text" class="form-control" id="" placeholder="Nama Customer" disabled>
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
													<a href="#" class="btn btn-success pull-right"><i class="fa fa-arrow-circle-right"></i> Lanjut</a>
					 							</div>
					 						 </div>
 										 </div>
 										 <!-- /.tab-pane -->
 										 <div class="tab-pane" id="tab_3">
											 <div class="row">
 					 							<div class="col-md-6">
 					 								<form class="form-horizontal">
 					 								 <div class="box-body">
 					 									 <div class="form-group">
 					 										 <label for="" class="col-sm-4 control-label">Tanggal</label>
 					 										 <div class="col-sm-7">
																 ISI HASIL INPUT
 					 										 </div>
 					 									 </div>
														 <div class="form-group">
 					 										 <label for="" class="col-sm-4 control-label">Jenis Cetak</label>
 					 										 <div class="col-sm-7">
																 ISI HASIL INPUT
 					 										 </div>
 					 									 </div>
 					 									 <div class="form-group">
 					 										 <label for="" class="col-sm-4 control-label">Jumlah</label>
 					 										 <div class="col-sm-7">
 					 											 ISI HASIL INPUT
 					 										 </div>
 					 									 </div>
 					 									 <div class="form-group">
 					 										 <label for="" class="col-sm-4 control-label">Berkas</label>
 					 										 <div class="col-sm-7">
 					 											 ISI HASIL INPUT
 					 										 </div>
 					 									 </div>
 					 								 </div>
 					 								 <!-- /.box-body -->
 					 								</form>
 					 							</div>
 					 							<div class="col-md-6">
 					 								<form class="form-horizontal">
 					 								 <div class="box-body">
 					 									 <div class="form-group">
 					 										 <label for="" class="col-sm-4 control-label">Harga (Per-Pcs)</label>
 					 										 <div class="col-sm-7">
 					 											ISI HASIL INPUT
 					 										 </div>
 					 									 </div>
 					 									 <div class="form-group">
 					 										 <label for="" class="col-sm-4 control-label">Nama Customer</label>
 					 										 <div class="col-sm-7">
 					 											 ISI HASIL INPUT
 					 										 </div>
 					 									 </div>
 					 									 <div class="form-group">
 					 										 <label for="" class="col-sm-4 control-label">No. Telp</label>
 					 										 <div class="col-sm-7">
 					 											 ISI HASIL INPUT
 					 										 </div>
 					 									 </div>
 					 									 <div class="form-group">
 					 										 <label for="" class="col-sm-4 control-label">Alamat</label>
 					 										 <div class="col-sm-7">
 					 											 ISI HASIL INPUT
 					 										 </div>
 					 									 </div>
 					 								 </div>
 					 								 <!-- /.box-body -->
 					 								</form>
 					 							</div>
 					 						 </div>
 											<a href="#" class="btn btn-success btn-block"><i class="fa fa-gear"></i> Proses Pesanan</a>
 										 </div>
 										 <!-- /.tab-pane -->
 									 </div>
 									 <!-- /.tab-content -->
 								 	</div>
 								 	<!-- nav-tabs-custom -->
								</form>
							</div>
						</div>
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
							<th>Berkas</th>
							<th>Harga (Per-Pcs)</th>
							<th>Nama Customer</th>
							<th>No. Telp</th>
							<th>Alamat</th>
							<th>Status Pesanan</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td align="center">
								<a href="#" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-download"></i></a>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td align="center">
									<a href="#" class="btn btn-warning btn-sm disabled"><i class="mdi mdi-plus-circle mr-2 fa fa-spinner"></i> Proses</a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td></td>
							<td></td>
							<td></td>
							<td align="center">
								<a href="#" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-download"></i></a>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td align="center">
								<a href="#" class="btn btn-success btn-sm disabled"><i class="mdi mdi-plus-circle mr-2 fa fa-check"></i> Selesai</a>
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
