@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Departamento</th>
                    </tr>
                    <tr>
                    <td> {{($department -> department)}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection