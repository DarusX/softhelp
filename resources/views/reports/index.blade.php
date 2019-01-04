@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($reports->isNotEmpty())
            <table class="table">
                <thead>
                    <tr>
                        <th>Prioridad</th>
                        <th>Reporte</th>
                        <th>Levantó</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                    <tr class="{{($report->priority == 'Alta')?'info':''}}">
                        <td>{{$report->priority}}</td>
                        <td>{{$report->report}}</td>
                        <td>{{$report->user->name}}</td>
                        <td>{{$report->created_at->format('Y-m-d H:i')}}</td>
                        <td>
                            <a href="{{ route('reports.show', $report) }}" class="btn btn-xs btn-info">
                                    <i class="far fa-eye"></i> Ver
                            </a>
                            <a href="{{ route('reports.edit', $report) }}" class="btn btn-xs btn-primary">
                                    <i class="far fa-edit"></i> Editar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p> No hay reportes registrados</p>
            @endif
        </div>
    </div>
</div>
@endsection