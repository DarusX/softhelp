@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Departamento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"><h1> {{($department -> department)}}</h1></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection