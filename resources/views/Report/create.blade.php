@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{route('reports.store')}}" method="post">
            {{csrf_field()}}
            <h5> Reporte</h5>
            <input type="text" name="report">
            <h5> Descripción</h5>
            <input type="text" name="description">
            <h5> Prioridad</h5>
            <input type="radio" name="priority" value="Alta">Alta
            <input type="radio" name="priority" value="Media">Media
            <input type="radio" name="priority" value="Baja">Baja
            <h5> Departamento</h5>
            <select name="department_id">
                @foreach($departments as $department)
                <option value="{{$department->id}}">{{$department->department}}</option>
                @endforeach
            </select>
            <input name="user_id" value="{{Auth::id()}}">
            <button type="submit">Guardar</button>
        </form>
    </div>
</div>
@endsection