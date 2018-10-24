@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($reports->isNotEmpty())
            <table class="table">
                <thead>
                    <tr>
                        <th>Reportes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                    <tr>
                        <td><a href="{{route('reports.show', $report)}}">{{$report->report}}</a></td>
                        <td>
                            <a href="{{ route('reports.show', $report) }}" class="btn btn-xs btn-info">
                                Ver
                            </a>
                            <a href="{{ route('reports.edit', $report) }}" class="btn btn-xs btn-primary">
                                Editar
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