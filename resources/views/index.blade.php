@extends('master')
@section('judul', 'Questions Table')
@section('mainContent')
<div>
  <div class="row">
    <div class="col-10"></div>
  <a class="btn btn-success col-2 mb-1 pl-1" href="{{ url('/pertanyaan/create')}}" >Create New</a>
    
  </div>

  <div class="row">
    <table class="table table-bordered">
      <thead class="bg-success">                  
        <tr>
          <th style="width: 10px">No.</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Dibuat Pada</th>
          <th>Diperbaharui Pada</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($datas as $data => $item)
        <tr>
         <td>{{ $data+1 }}</td>
         <td>{{ $item->judul }}</td>
         <td>{{ $item->isi }}</td>
         <td>{{ $item->created_at }}</td>
         <td>{{ $item->updated_at }}</td>
         <td>
           <a href="" class="btn btn-secondary">Detail</a>
           <a href="" class="btn btn-primary">Ubah</a>
           <a href="" class="btn btn-danger">Hapus</a>
         </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection