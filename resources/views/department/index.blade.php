@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($departments->isNotEmpty())
            <table class="table">
                <thead>
                    <tr>
                    <th>Departamento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departments as $department)
                    <tr>
                        <td>{{$department->department}}</td>
                        <td>
                            <a href="{{ route('departments.show', $department->id) }}" class="btn btn-xs btn-info">
                                Ver
                            </a>
                            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-xs btn-primary">
                                Editar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                @else 
                    <p> No hay departamentos registrados</p>
                @endif   
        </div>
    </div>
</div>
@endsection