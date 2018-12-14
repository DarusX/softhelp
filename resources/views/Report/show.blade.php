-@extends('layouts.app')
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
        <div class="col-md-3">
            <form action="{{route('messages.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Message</label>
                    <input name="message" rows="10" class="form-control">
                </div>

                <div class="form-group">
                    <input type="hidden" name="report_id" class="form-control" value="{{$report->id}}">
                </div>

                <div class="form-group">
                    <input type="hidden" name="user_id" class="form-control" value="{{Auth::id()}}">
                </div>

                <div class="form-group">
                    <input type="hidden" name="message_id" class="form-control" value="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>

        <div class="container-fluid">
            <div class="col-md-12">
                @foreach($report->messages as $message)
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACA0lEQVR4Xu2YQYvCMBCFx4MURKigFb31IIJ4E/z/P6DgTbwoihdFtCCKWHrY5QVGql3WtXGppS9Hm0wyLzPvw1TCMPySEo8KBWAFsAXoASX2QKEJkgKkAClACpACJVaAGCQGiUFikBgsMQT4Z4gYJAaJQWKQGCQGS6zAWzAYBIEcj0cjY7fbleFweCfpdDqVzWYjvV5PfN9/Kve74/22obUAOGwcxzIajWSxWMhut5PBYCCdTsfsezqdZDKZmDl/EeDd8Z6pbSWAJtdqtVK3rhsnb1MFSFZEs9k0AlWrVen3+4Jvr8Z7luS/VcB2u5XZbCb1ev3WAslbXq1WslwuBUmiMvTb9Xq9VQUSj6LIVA1Glni5C+A4TqoFGo3G7WY9z5P5fH7XAhAHv2G4rivj8VhU0Czxsopg1QJ64Ha7bVpAk4IRYuz3eyPM4XBICaBVoLcPz7CJl4sAjx6gCaDkz+ezXC6X1LkefQATarWaEQpGCT9QD3glXi4CYFOYHBJFAuv1OkUBzNHK0OST3oHkgUjFZ5Z4WZPHOqsWQAAtZb3tn1D3KACSRIXA+NQrFKUwRVTBK/FyFcBm809Ya10Bn5CEzRkoAF+E+CLEFyG+CNm4aNHXkgKkAClACpACRXdym/OTAqQAKUAKkAI2Llr0taQAKUAKkAKkQNGd3Ob8pEDZKfANMHZanyc+RysAAAAASUVORK5CYII=" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>
                            {{($message -> message)}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection