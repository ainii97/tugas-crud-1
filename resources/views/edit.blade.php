@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Update Pertanyaan</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('update', $pertanyaan->id)}}" method="post">
                    <!-- <input type="hidden" name="id" id="id" value="{{$pertanyaan->id}}"> -->
                    <div class="form-group">
                        <label for="id">No.</label>
                        <input type="text" name="id" id="id" value="{{$pertanyaan->id}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" value="{{$pertanyaan->judul}}" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <textarea id="isi" name="isi" class="form-control">
                            {!!$pertanyaan->isi!!}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection