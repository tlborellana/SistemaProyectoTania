@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Proyecto</h1>

        <form method="POST" action="{{ route('proyectos.update', $proyecto->Id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="NombreProyecto">Nombre Proyecto:</label>
                <input type="text" class="form-control" id="NombreProyecto" name="NombreProyecto" value="{{ $proyecto->NombreProyecto }}" required>
            </div>

            <div class="form-group">
                <label for="fuenteFondos">Fuente de Fondos:</label>
                <input type="text" class="form-control" id="fuenteFondos" name="fuenteFondos" value="{{ $proyecto->fuenteFondos }}" required>
            </div>

            <div class="form-group">
                <label for="MontoPlanificado">Monto Planificado:</label>
                <input type="number" class="form-control" id="MontoPlanificado" name="MontoPlanificado" value="{{ $proyecto->MontoPlanificado }}" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="MontoPatrocinado">Monto Patrocinado:</label>
                <input type="number" class="form-control" id="MontoPatrocinado" name="MontoPatrocinado" value="{{ $proyecto->MontoPatrocinado }}" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="MontoFondosPropios">Monto Fondos Propios:</label>
                <input type="number" class="form-control" id="MontoFondosPropios" name="MontoFondosPropios" value="{{ $proyecto->MontoFondosPropios }}" step="0.01" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Atras</a>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
