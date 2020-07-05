@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>List Pertanyaan</h4>
            </div>
            <div class="panel-body">
                    <!-- <input type="hidden" name="id" id="id" value="{{$pertanyaan->id}}"> -->
                    <div class="form-group">
                        <label for="id">No.</label>
                        <input type="text" name="id" id="id" value="{{$pertanyaan->id}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" value="{{$pertanyaan->judul}}" class="form-control" readonly>
                    </div>                    
                    <div class="form-group">    
                        <label for="isi">Isi</label>    
                        <input type="text" name="isi" id="isi" value="{{$pertanyaan->isi}}" class="form-control" readonly>
                    </div>
                    <form action="{{url('back')}}" method="get">
                        <div class="form-group">
                            <input type="submit" value="Back" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
    </div>
    
@endsection