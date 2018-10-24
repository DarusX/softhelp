@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Reporte</th>
                        <th>Descripcion</th>
                        <th>Prioridad</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th>Departamento</th>
                    </tr>
                    <tr>
                        <td scope="row">{{($report -> report)}}</td>
                        <td> {{($report -> description)}}</td>
                        <td> {{($report -> priority)}}</td>
                        <td> {{($report -> status)}}</td>
                        <td> {{($report -> user -> name)}}</td>
                        <td> {{($report -> department -> department)}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection