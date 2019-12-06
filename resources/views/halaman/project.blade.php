@extends('halaman.template')

@section('title')
Project
@endsection

@section('content')
<section class="content py-3" >
  <div class="container-fluid">
  	<form action="{{url('/konsultasi')}}" method="POST" enctype="multipart/form-data">
  		@csrf
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-5">
	  		<div class="card">
	  			<div class="card-header" style="background-color: grey;">
	  				Input Nama Lengkap
	  			</div>
	  			<div class="card-body">
	  				<div class="form-group">
	  					<label>Nama Lengkap</label>
	  					<input type="text" name="nama" id="nama" class="form-control">
	  					<label>Nim</label>
	  					<input type="text" name="nim" id="nim" class="form-control">
	  					<label>Jurusan</label>
	  					<input type="text" name="jurusan" id="jurusan" class="form-control">
	  				</div>
	  			</div>
	  		</div>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body" >
						<table class="table" ui-jq="footable" ui-options='{
								"paging": {
					          	"enabled": true
					        },
					        	"filtering": {
					          	"enabled": true
					        },
					        	"sorting": {
					          	"enabled": true
					        }}'>
							<thead>
	  						<tr>
	  							<td>Kode</td>
	  							<td>Penyakit</td>
	  							<td>Pilihan</td>
	  						</tr>
	  					</thead>
	  					<tbody>
	  						@foreach($data as $a)
	  						<tr>
	  							<td>{{$a->id_minat}}</td>
	  							<td>{{$a->minat}}</td>
	  							<td>
	  								<input type="radio" value="{{$a->cf}}" name="{{$a->cf}}">Ya
	  								<input type="radio" value="0" name="{{$a->cf}}" >Tidak
	  							</td>
	  						</tr>
	  						@endforeach
	  					</tbody>
	  					<tr>
	  						<td colspan="2">
	  							<marquee>
	  								<i><b>Silahkan Cek Hasil Minat Dan Bakat Anda!</b></i>
	  							</marquee>		
	  						</td>
	  						<td align="center">
	  							<input type="submit" name="proses" value="CEK HASIL" class="btn btn-primary">
	  						</td>
	  					</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</form>
  </div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		loadData();
		$('form').on('submit',function(e){
			e.prefentDefault();
			$.ajax({
				type: $(this).attr('method'),
				url	: $(this).attr('action'),
				data: $(this).serialize(),
				success:function(){
					loadData();
					resetForm();
				}
			})
		})
	});

	function loadData()
	{
		$.get( ,function(data){
			$('#content').html(data);
		})
	}
</script>
@endsection