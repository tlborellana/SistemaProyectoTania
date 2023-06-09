<!DOCTYPE html>
<html>

<head>
    <title>Gobierno de El Salvador</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <h1>Gobierno de El Salvador</h1>
    <h2>ISTA</h2>
    <p>Fecha: {{ date('d/m/Y') }}</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Proyecto</th>
                <th>Fuente de Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->Id }}</td>
                    <td>{{ $proyecto->NombreProyecto }}</td>
                    <td>{{ $proyecto->fuenteFondos }}</td>
                    <td>${{ number_format($proyecto->MontoPlanificado, 2, '.', ',') }}</td>
                    <td>${{ number_format($proyecto->MontoPatrocinado, 2, '.', ',') }}</td>
                    <td>${{ number_format($proyecto->MontoFondosPropios, 2, '.', ',') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
