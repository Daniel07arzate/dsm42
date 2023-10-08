<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $productos)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->Name }}</td>
                    <td>{{ $producto->Price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


