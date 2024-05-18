<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Reporte' }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px; /* Reducir el tamaño del texto */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }
        th, td {
            padding: 4px;
            border: 1px solid #000;
            text-align: left;
        }
        
    </style>
</head>
<body>
    <h1>HealthAlerts - Reporte {{ $title ?? '' }}</h1>

    <table>
        <thead>
            <tr>
                @if(count($data) > 0)
                    @foreach(array_keys($data[0]->getAttributes()) as $column)
                        <th>{{ $column }}</th>
                    @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    @foreach($item->getAttributes() as $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
