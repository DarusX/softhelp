@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('reports.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                        <label for="">Reporte</label>
                        <input type="text" name="report" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" name="description" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Prioridad</label>
                        <input type="radio" name="prioryty" class="form-group" value="Alta"> Alta
                        <input type="radio" name="prioryty" class="form-group" value="Media"> Media
                        <input type="radio" name="prioryty" class="form-group" value="Baja"> Baja
                </div>
                <div class="form-group">
                        <label for="">Estado</label>
                        <input type="text" name="status" class="form-control">
                </div>
                <div class="form-group">
                        <label for="">Departamento</label>
                        <select name="department_id" class="form-control">
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department}}</option>
                                @endforeach
                        </select>
                </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar</button>
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