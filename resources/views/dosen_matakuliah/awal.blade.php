@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Dosen Matakuliah</strong>
			<a href="{{ url('dosen_matakuliah/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Dosen Matakuliah</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama Dosen</th>
									<th>Nip Dosen</th>
									<th>Nama Matakuliah</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaDosenMatakuliah as $jados)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $jados->dosen->nama or 'nama kosong'}}</td>
									<td>{{ $jados->dosen->nip or 'nip kosong'}}</td>
									<td>{{ $jados->matakuliah->title or 'title kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('dosen_matakuliah/edit/'.$jados->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('dosen_matakuliah/'.$jados->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('dosen_matakuliah/hapus/'.$jados->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop