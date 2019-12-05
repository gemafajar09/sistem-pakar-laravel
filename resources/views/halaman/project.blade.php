@extends('halaman.template')

@section('title')
Project
@endsection

@section('content')
<section class="content py-3">
  <div class="container-fluid">
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
  				<div class="card-body">
  					<table class="table">
  						<thead>
	  						<tr>
	  							<td>Kode Minat</td>
	  							<td>Minat/Bakat</td>
	  							<td>Pilihan</td>
	  						</tr>
	  					</thead>
	  					<tbody>
	  						<tr>
	  							<td></td>
	  							<td></td>
	  							<td>
	  								<input type="radio" value="" name="">
	  								<input type="radio" value="" name="">
	  							</td>
	  						</tr>
	  					</tbody>
  					</table>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</section>
@endsection