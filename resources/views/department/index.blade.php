@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
 
            @if ($departments->isNotEmpty())
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Departamento</th>
                </tr>
            </thead>
            <tbody>
            @foreach($departments as $department)
                <tr>
                <th scope="row"><a href="{{route('departments.show', $department)}}">{{$department->id}}</a></th>
                <td>{{$department->department}}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
            @else 
                <p> No hay departamentos registrados</p>
            @endif
        
    </div>
</div>
@endsection