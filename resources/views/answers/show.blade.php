@extends('master')
@section('judul', 'Answers Table')
@section('mainContent')
<div>
    @foreach($datas as $data => $item)
    <div class="card">
        <div class="card-header">
            {{ $item->isi }}
        </div>
        <div class="card-body">
        <h5 class="card-title">{{ $item->is_selected }}</h5>
        <br>
        <h5 class="card-title">{{ $item->created_at }}</h5>
        <br>
        <h5 class="card-title">{{ $item->updated_at }}</h5>
        <br>
        <a href="/jawaban" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    @endforeach
</div>

@endsection

