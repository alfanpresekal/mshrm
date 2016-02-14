@extends('core.app')

@section('content')
<link href="{{ asset('/TAGInput/css/style.css') }}" rel="stylesheet" />
<title>2016 mshrm ⋅ Add Employee</title>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Employee
            <small>Register new employees.</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Employee</a></li>
            <li class="active">Add Employee</li>
          </ol>
        </section>
        
        <section class="content">
			
		  <div id="form_feedback"></div>

        
		<div class="row">
		  <div class="col-md-6">
		<div class="box box-info">
		  <div class="box-header with-border">
			<h3 class="box-title">Add an Employee ⋅ <span class="label label-info">Manually insert data</span></h3>
			<div class="box-tools pull-right">
			  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div><!-- /.box-tools -->
		  </div><!-- /.box-header -->
		  <div class="box-body">

          <input type="hidden" id="_token" value="{{ csrf_token() }}">

          <div class="form-group">
            <label for="nip">NIP</label>
		    <input type="text" class="form-control" id="nip" placeholder="nip" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="nama_lengkap">Full Name</label>
		    <input type="text" class="form-control" id="nama_lengkap" placeholder="full name" autocomplete="off">
          </div>
          
                   <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control" id="jenis_kelamin" placeholder="gender">
                        <option value="L">Male</option>
                        <option value="P">Female</option>
                      </select>
                    </div>
          
          <div class="form-group">
            <label for="no_telp">Telephone Number</label>
		    <input type="text" class="form-control" id="no_telp" placeholder="telephone number" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="no_hp">Cellphone Number</label>
		    <input type="text" class="form-control" id="no_hp" placeholder="cellphone number" autocomplete="off">
          </div>
		                     
          <div class="form-group">
            <label for="email">Email Address</label>
		    <input type="email" class="form-control" id="email" placeholder="email address" autocomplete="off" onChange="javascript:this.value=this.value.toLowerCase();">
          </div>

          <div class="form-group">
            <label for="status_pernikahan">Marital Status</label>
		    <input type="text" class="form-control" id="status_pernikahan" placeholder="marital status" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="kewarganegaraan">Nationality</label>
		    <input type="text" class="form-control" id="kewarganegaraan" placeholder="nationality" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="no_ktp">Residence ID number (KTP)</label>
		    <input type="text" class="form-control" id="no_ktp" placeholder="residence id number (ktp)" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="alamat">Address</label>
            <textarea class="form-control" id="alamat" rows="3" placeholder="address"></textarea>
          </div>
          
          <div class="form-group">
            <label for="provinsi">Province (Provinsi)</label>
		    <input type="text" class="form-control" id="provinsi" placeholder="province" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="kota">City (Kota)</label>
		    <input type="text" class="form-control" id="kota" placeholder="city (kota)" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="kecamatan">District (Kecamatan)</label>
		    <input type="text" class="form-control" id="kecamatan" placeholder="district (kecamatan)" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="kelurahan">Sub-district (Kelurahan)</label>
		    <input type="text" class="form-control" id="kelurahan" placeholder="sub-district (kelurahan)" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="kode_pos">Postal Code</label>
		    <input type="text" class="form-control" id="kode_pos" placeholder="postal code" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="suku">Tribe</label>
		    <input type="text" class="form-control" id="suku" placeholder="tribe" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="literasi">Mother Language</label>
		    <input type="text" class="form-control" id="literasi" placeholder="mother language" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="pendidikan">Education</label>
		    <input type="text" class="form-control" id="pendidikan" placeholder="education" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="riwayat_penyakit">Sickness History</label>
            <textarea class="form-control" id="riwayat_penyakit" rows="3" placeholder="sickness history"></textarea>
          </div>
		
          <div class="form-group">
            <label for="bpjs_kesehatan">BPJS Health</label>
		    <input type="text" class="form-control" id="bpjs_kesehatan" placeholder="bpjs health" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="bpjs_ketenagakerjaan">BPJS Employment</label>
		    <input type="text" class="form-control" id="bpjs_ketenagakerjaan" placeholder="bpjs employment" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="asurasi">Insurance</label>
		    <input type="text" class="form-control" id="asurasi" placeholder="insurance" autocomplete="off">
          </div>

		  </div><!-- /.box-body -->
            <div class="box-footer">

          <button type="button" id="button_register_manual" class="btn btn-info btn-flat">Register</button>

            </div>
		</div><!-- /.box -->
		  </div>
		  
		  <div class="col-md-6">
			  
		<div class="box box-success">
		  <div class="box-header with-border">
			<h3 class="box-title">Add Employees ⋅ <span class="label label-success">With .CSV files</span></h3>
			<div class="box-tools pull-right">
			  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div><!-- /.box-tools -->
		  </div><!-- /.box-header -->
		  <div class="box-body">

			
              <form id="upload" method="post" action="/system/UserRegisterFile" enctype="multipart/form-data" style="font-size: 10px;">
			    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
			    <div id="drop">
				  Drop Here
				  <a>Browse</a>
				  <input type="file" name="file_csv" multiple />
			    </div>
			     <ul>
				   <!-- The file uploads will be shown here -->
			     </ul>
               </form>
          

		  </div><!-- /.box-body -->
            <div class="box-footer">

          <button type="button" id="button_check_csv" class="btn btn-success btn-flat">Check for status</button> 
          <a href="{{ url('/resources/csv/1') }}"><button type="button" class="btn btn-link btn-flat">Download acceptable .CSV Format</button></a>

            </div>
		</div><!-- /.box -->
		  
		  </div>
		</div>
    
        </section>
        
<script>
$(document).ready(function(){

	$("#button_register_manual").click(function(){
		$("#form_feedback").empty().html("<div style='text-align:center;' class='overlay'><i class='fa fa-refresh fa-spin'></i></div><br>");
		var ajax_token = $("#_token").val();
		var ajax_nip = $("#nip").val();
		var ajax_nama_lengkap = $("#nama_lengkap").val();
		var ajax_jenis_kelamin = $("#jenis_kelamin").val();
		var ajax_no_telp = $("#no_telp").val();
		var ajax_no_hp = $("#no_hp ").val();
		var ajax_email = $("#email").val();
		var ajax_status_pernikahan = $("#status_pernikahan").val();
		var ajax_kewarganegaraan = $("#kewarganegaraan").val();
		var ajax_no_ktp = $("#no_ktp").val();
		var ajax_alamat = $("#alamat").val();
		var ajax_provinsi = $("#provinsi").val();
		var ajax_kota = $("#kota").val();
		var ajax_kecamatan = $("#kecamatan").val();
		var ajax_kelurahan = $("#kelurahan").val();
		var ajax_kode_pos = $("#kode_pos").val();
		var ajax_suku = $("#suku").val();
		var ajax_literasi = $("#literasi").val();
		var ajax_pendidikan = $("#pendidikan").val();
		var ajax_riwayat_penyakit = $("#riwayat_penyakit").val();
		var ajax_bpjs_kesehatan = $("#bpjs_kesehatan").val();
		var ajax_bpjs_ketenagakerjaan = $("#bpjs_ketenagakerjaan").val();
		var ajax_asurasi = $("#asurasi").val();
			
		$.post("/system/UserRegister",
			{
				_token: ajax_token,
				nip: ajax_nip,
				nama_lengkap: ajax_nama_lengkap,
				jenis_kelamin: ajax_jenis_kelamin,
				no_telp: ajax_no_telp,
				no_hp: ajax_no_hp,
				email: ajax_email,
				status_pernikahan: ajax_status_pernikahan,
				kewarganegaraan: ajax_kewarganegaraan,
				no_ktp: ajax_no_ktp,
				alamat: ajax_alamat,
				provinsi: ajax_provinsi,
				kota: ajax_kota,
				kecamatan: ajax_kecamatan,
				kelurahan: ajax_kelurahan,
				kode_pos: ajax_kode_pos,
				suku: ajax_suku,
				literasi: ajax_literasi,
				pendidikan: ajax_pendidikan,
				riwayat_penyakit: ajax_riwayat_penyakit,
				bpjs_kesehatan: ajax_bpjs_kesehatan,
				bpjs_ketenagakerjaan: ajax_bpjs_ketenagakerjaan,
				asurasi: ajax_asurasi,
			},
		function(data,status){
			if (data == 'OK')
			{
				$("#form_feedback").empty().html("<div class='callout callout-success'><h5>Success!</h5></div>");
			}
			else
			{
				$("#form_feedback").empty().html(data);
			}
		}).fail(function(data,status){ 
				$("#form_feedback").empty().html("<div class='callout callout-warning'><h5>Error, try again soon.</h5></div>");
		});
	});

	$("#button_check_csv").click(function(){
		$("#form_feedback").empty().html("<div style='text-align:center;' class='overlay'><i class='fa fa-refresh fa-spin'></i></div><br>");
		$("#form_feedback").load("/system/UserRegisterCheck/1");
	});

});
</script>

  <script src="{{ asset('/TAGInput/js/jquery.knob.js') }}"></script>
  <script src="{{ asset('/TAGInput/js/jquery.ui.widget.js') }}"></script>
  <script src="{{ asset('/TAGInput/js/jquery.iframe-transport.js') }}"></script>
  <script src="{{ asset('/TAGInput/js/jquery.fileupload.js') }}"></script>
  <script src="{{ asset('/TAGInput/js/script.js') }}"></script>

      </div>
@endsection
