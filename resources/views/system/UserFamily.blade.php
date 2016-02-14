@extends('core.app')

@section('content')
<link href="{{ asset('/TAGInput/css/style.css') }}" rel="stylesheet" />
<title>2016 mshrm ⋅ Add Employee's Family Data</title>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Employee's Family Data
            <small>Add employees' family data.</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Employee</a></li>
            <li class="active">Add Employee's Family Data</li>
          </ol>
        </section>
        
        <section class="content">
			
		  <div id="form_feedback"></div>

        
		<div class="row">
		  <div class="col-md-6">
		<div class="box box-info">
		  <div class="box-header with-border">
			<h3 class="box-title">Add an Employee's Family Data ⋅ <span class="label label-info">Manually insert data</span></h3>
			<div class="box-tools pull-right">
			  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div><!-- /.box-tools -->
		  </div><!-- /.box-header -->
		  <div class="box-body">

          <input type="hidden" id="_token" value="{{ csrf_token() }}">


          <div id="user_feedback"></div>

          <div class="form-group">
            <label for="nip">NIP</label>
		    <input type="text" class="form-control" id="nip" placeholder="nip" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="nama_pasangan">Spouse's Name</label>
		    <input type="text" class="form-control" id="nama_pasangan" placeholder="spouse's name" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="jumlah_anak">Number of Children</label>
		    <input type="text" class="form-control" id="jumlah_anak" placeholder="number of children" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="nama_anak_1">First Child's Name</label>
		    <input type="text" class="form-control" id="nama_anak_1" placeholder="first child's name" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="nama_anak_2">Second Child's Name</label>
		    <input type="text" class="form-control" id="nama_anak_2" placeholder="second child's name" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="nama_anak_3">Third Child's Name</label>
		    <input type="text" class="form-control" id="nama_anak_3" placeholder="third child's name" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="nama_ibu">Mother's name</label>
		    <input type="text" class="form-control" id="nama_ibu" placeholder="mother's name" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="nama_ayah">Father's name</label>
		    <input type="text" class="form-control" id="nama_ayah" placeholder="father's name" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="kontak_keluarga_1">Family's Contact 1</label>
		    <input type="text" class="form-control" id="kontak_keluarga_1" placeholder="family's contact 1" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="kontak_keluarga_2">Family's Contact 2</label>
		    <input type="text" class="form-control" id="kontak_keluarga_2" placeholder="family's contact 2" autocomplete="off">
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
			<h3 class="box-title">Add Employees' Family Data ⋅ <span class="label label-success">With .CSV files</span></h3>
			<div class="box-tools pull-right">
			  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div><!-- /.box-tools -->
		  </div><!-- /.box-header -->
		  <div class="box-body">

			
              <form id="upload" method="post" action="/system/UserFamilyFile" enctype="multipart/form-data" style="font-size: 10px;">
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
          <a href="{{ url('/resources/csv/2') }}"><button type="button" class="btn btn-link btn-flat">Download acceptable .CSV Format</button></a>

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
		var ajax_nama_pasangan = $("#nama_pasangan").val();
		var ajax_jumlah_anak = $("#jumlah_anak").val();
		var ajax_nama_anak_1 = $("#nama_anak_1").val();
		var ajax_nama_anak_2 = $("#nama_anak_2").val();
		var ajax_nama_anak_3 = $("#nama_anak_3").val();
		var ajax_nama_ibu = $("#nama_ibu").val();
		var ajax_nama_ayah = $("#nama_ayah").val();
		var ajax_kontak_keluarga_1 = $("#kontak_keluarga_1").val();
		var ajax_kontak_keluarga_2 = $("#kontak_keluarga_2").val();
			
		$.post("/system/UserFamily",
			{
				_token: ajax_token,
				nip: ajax_nip,
				nama_pasangan: ajax_nama_pasangan,
				jumlah_anak: ajax_jumlah_anak,
				nama_anak_1: ajax_nama_anak_1,
				nama_anak_2: ajax_nama_anak_2,
				nama_anak_3: ajax_nama_anak_3,
				nama_ibu: ajax_nama_ibu,
				nama_ayah: ajax_nama_ayah,
				kontak_keluarga_1: ajax_kontak_keluarga_1,
				kontak_keluarga_2: ajax_kontak_keluarga_2,
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
		$("#form_feedback").load("/system/UserRegisterCheck/2");
	});
	
	$("#nip").on('change', function(){
		$("#user_feedback").empty().html("<div class='callout callout-info'><h5>Checking.</h5></div>");
		var ajax_token = $("#_token").val();
		var ajax_nip = $("#nip").val();
		$.post("/system/UserFamilyCheck",
		{
			_token: ajax_token,
			nip: ajax_nip,
		},
		function(data,status){
			if (data == 'OK')
			{
				$("#user_feedback").empty().html("<div class='callout callout-success'><h5>User with this NIP exists.</h5></div>");
			}
			else
			{
				$("#user_feedback").empty().html(data);
			}
		});
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
