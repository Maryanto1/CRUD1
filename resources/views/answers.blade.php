@extends('master')
@section('judul', 'Answers Table')
@section('mainContent')
<div>
  <div class="row">
    <div class="col-10"></div>
  <a class="btn btn-success col-2 mb-1 pl-1" href="{{ url('/jawaban/create') }}">Create New</a>
    
  </div>

  <div class="row">
    <table class="table table-bordered">
      <thead class="bg-success">                  
        <tr>
          <th style="width: 10px">No.</th>
          <th>Isi</th>
          <th>dipilih?</th>
          <th>Dibuat Pada</th>
          <th>Diperbaharui Pada</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($datas as $data => $item)
        <tr>
         <td>{{ $data+1 }}</td>
         <td>{{ $item->isi }}</td>
         <td>{{ $item->is_selected }}</td>
         <td>{{ $item->created_at }}</td>
         <td>{{ $item->updated_at }}</td>
         <td>
          <a href="/jawaban/{{ $item->id }}" class="btn btn-secondary">Detail</a>
          <a href="/jawaban/{{ $item->id }}/edit" class="btn btn-primary">Ubah</a>
          <form action="/jawaban/{{ $item->id }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
              <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </form>
         </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection