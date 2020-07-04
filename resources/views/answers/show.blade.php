@extends('master')
@section('judul', 'Answers Table')
@section('mainContent')
<div>
    @foreach($datas as $data)
    <div class="card">
        <div class="card-header">
            {{ $data->isi }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $data->is_selected }}</h5>
          <h5 class="card-title">{{ $data->created_at }}</h5>
          <h5 class="card-title">{{ $data->updated_at }}</h5>
          <a href="/jawaban" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    @endforeach
</div>

@endsection