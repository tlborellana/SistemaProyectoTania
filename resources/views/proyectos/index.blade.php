@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Proyectos</h1>
            <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Agregar</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre Proyecto</th>
                    <th>Fuente de Fondos</th>
                    <th>Monto Planificado</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto Fondos Propios</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{  $loop->iteration }}</td>
                        <td>{{ $proyecto->NombreProyecto }}</td>
                        <td>{{ $proyecto->fuenteFondos }}</td>
                        <td>${{ number_format($proyecto->MontoPlanificado, 2, '.', ',') }}</td>
                        <td>${{ number_format($proyecto->MontoPatrocinado, 2, '.', ',') }}</td>
                        <td>${{ number_format($proyecto->MontoFondosPropios, 2, '.', ',') }}</td>
                        <td>
                            <form action="{{ route('proyectos.destroy', $proyecto->Id) }}" method="POST">
                                <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-warning">Actualizar</a>
                                <br>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">Elminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('proyectos.pdf') }}" class="btn btn-primary btn-sm">Genererar reporte PDF</a>
    </div>
@endsection
