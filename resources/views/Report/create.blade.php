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
                    <textarea name="description" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Prioridad</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="priority" value="Alta">
                            Alta
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="priority" value="Alta" checked>
                            Media
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="priority" value="Alta">
                            Baja
                        </label>
                    </div>
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