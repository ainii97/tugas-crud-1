@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')

	<div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Pertanyan Baru</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('insert')}}" method="post">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <label for="judul">Isi</label>
                        <textarea id="isi" name="isi" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection