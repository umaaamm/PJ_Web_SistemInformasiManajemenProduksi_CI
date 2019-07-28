<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manajemen Produksi</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
	<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	     folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/source_sans.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1></h1>
    </section>
		<section class="content">
			<div class="box box-success box-solid">
				<div class="box-header">
					<h3 class="box-title"><i class="fa fa-calendar"></i> Detail Periode PKL - Semester Genap T.A. 2018/2019</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fa fa-minus"></i></button>
					</div>
				</div>
					<div class="box-body">
						<!-- <div class="box box-warning disabled box-solid">
							<div class="box-body">
								<b>Informasi Persyaratan Pendaftaran PKL</b><br>
								<ol type="1">
									<li>Ketentuan Lulus Matakuliah dengan Minimal Nilai B adalah :</li>
									<ol type="a">
										<li>Bahasa Indonesia</li>
										<li>Kecakapan Antar Personal</li>
										<li>Kesekretarisan</li>
									</ol>
									<li>IPK Minimal >= 2.0</li>
									<li>Sudah Menempuh Minimal 100 SKS</li>
									<li>Melakukan Pembayaran PKL sebesar Rp.750.000</li>
									<li>Upload Bukti Pembayaran PKL</li>
								</ol>
							</div>
						</div> -->
						<div class="box box-primary box-solid">
							<div class="box-body">
								<table id="dt-detail-periode-pkl" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>No</th>
										<th>NPM</th>
										<th>Nama Mahasiswa</th>
										<th>Periode PKL</th>
										<th>Jumlah SKS</th>
										<th>IPK</th>
										<th>Bahasa Indonesia</th>
										<th>Kecakapan Antar Personal</th>
										<th>Kesekretarisan</th>
										<th>Tanggal Diajukan</th>
										<th>Tanggal Disetujui</th>
										<th>Pilihan</th>
										<th>Validasi Keuangan</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>1</td>
										<td>15311999</td>
										<td>Dewi Ratna Sari</td>
										<td>3 Bulan</td>
										<td>100</td>
										<td>3.54</td>
										<td>A</td>
										<td>A</td>
										<td>A</td>
										<td>09 Juni 2019</a></td>
										<td>15 Juli 2019</td>
										<td align="center">
											<a href="#" class="btn btn-warning btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-download"></i></a>
											<a href="#" class="btn btn-info btn-sm"><i class="mdi mdi-plus-circle mr-2 fa fa-gear"></i></a>
										</td>
										<td align="center">
											<a href="#" class="btn btn-success disabled"><i class="mdi mdi-plus-circle mr-2 fa fa-check"></i> Terverifikasi</a>
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
		</section>
		<!-- /.content -->
  </div>
	<!-- ./wrapper -->

	<div class="modal fade" id="modal-input-data-periode-pkl">
	   <div class="modal-dialog">
	     <div class="modal-content">
	       <div class="modal-header bg-purple">
	         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	           <span aria-hidden="true">&times;</span></button>
	         <h4 class="modal-title">Tambah Periode PKL</h4>
	       </div>
	       <div class="modal-body">
	         <table border="0" width="100%">
						<tr>
	         		<td>
								<div class="box">
			            <div class="box-body no-padding">
			              <table class="table table-condensed">
			                <tr>
			                  <td class="bg-purple" width="30%">Semester</td>
			                  <td>
													<select class="form-control select2" style="width: 100%;">
													 <option>Ganjil</option>
													 <option>Genap</option>
												 </select>
												</td>
			                </tr>
			                <tr>
			                  <td class="bg-purple">Periode PKL</td>
			                  <td>
													<input type="text" class="form-control" id="input-alamat-perusahan" placeholder="Contoh : T.A. 2018/2019">
												</td>
			                </tr>
											<tr>
			                  <td class="bg-purple">Nama Mahasiswa</td>
			                  <td>
													<input type="file" id="upload-nama-mahasiswa">
												</td>
			                </tr>
											<tr>
			                  <td class="bg-purple">Keterangan</td>
			                  <td>
													<input type="text" class="form-control" id="input-telepon-perusahan" placeholder="Keterangan">
												</td>
			                </tr>
											<tr>
			                  <td class="bg-purple">Informasi Persyaratan</td>
			                  <td>
													<input type="text" class="form-control" id="input-telepon-perusahan" placeholder="Informasi Persyaratan">
												</td>
			                </tr>
											<tr>
			                  <td class="bg-purple">Biaya PKL</td>
			                  <td>
													<input type="text" class="form-control" id="input-telepon-perusahan" placeholder="Biaya PKL">
												</td>
			                </tr>
			              </table>
			            </div>
			            <!-- /.box-body -->
			          </div>
	    					<!-- /.box -->
								<p>
									<a href="#" class="btn btn-info pull-right"><i class="mdi mdi-plus-circle mr-2 fa fa-save"></i> Simpan</a>
		 					 </p>
							</td>
	         	</tr>
	         </table>
	       </div>
	     </div>
	     <!-- /.modal-content -->
	   </div>
	   <!-- /.modal-dialog -->
	 </div>
	 <!-- /.modal -->

	<!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Morris.js charts -->
	<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- datepicker -->
	<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
	<!-- DataTables -->
	<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
	<!-- page script -->
	<script>
		$(function () {
			$('#dt-detail-periode-pkl').DataTable({
				'paging'      : true,
				'lengthChange': true,
				'searching'   : true,
				'ordering'    : true,
				'info'        : true,
				'scrollX'			: true,
				'autoWidth'   : true
			})
		})
	</script>
</body>
</html>
