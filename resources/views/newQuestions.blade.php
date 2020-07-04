@extends('master')
@section('judul', 'Answers Table')
@section('mainContent')
<div>
    <form action="{{ url('/pertanyaan') }}" method="POST">
        @csrf
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Pertanyaan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="judul">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail2" class="col-sm-2 col-form-label">Isi Pertanyaan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail2" name="isi">
          </div>
        </div>

        {{-- <div class="form-group row">
          <div class="col-sm-2">Status Jawaban</div>
          <div class="col-sm-10">
            <div class="form-check">
                <div class="row">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="is_selected" value=1>
                    <label class="form-check-label" for="gridCheck1">
                      &nbsp 1
                    </label>
                </div>
                <div class="row">
                    <input class="form-check-input" type="checkbox" id="gridCheck0" name="is_selected" value=0>
                    <label class="form-check-label" for="gridCheck0">
                      &nbsp 0
                    </label>
                </div>
                <div class="row">
                    <input class="form-check-input" type="checkbox" id="gridCheck-1" name="is_selected" value=-1>
                    <label class="form-check-label" for="gridCheck-1">
                      -1
                    </label>
                </div>
            </div>
          </div>
        </div> --}}
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </div>
      </form>
</div>

@endsection