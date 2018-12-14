@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('departments.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Deparment</label>
                    <input type="text" name="department" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                            <i class="far fa-save"></i> Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
    @if(Session::has('errors'))
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
</div>
@endsection