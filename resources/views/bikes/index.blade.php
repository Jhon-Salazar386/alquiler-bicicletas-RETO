<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikes</title>
</head>
<body>
    <header>
        <h1>Bicicletas</h1>
    </header>
    <main>
        <section class="bikes">
            <h2>Catalogo</h2>

            <table>

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Serial_number</th>
                        <th>Model</th>
                        <th>Price_per_hour</th>
                        <th>Status</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>

            @forelse($bikes as $bike)

                    <tr>
                        <td>{{$bike->id}}</td>
                        <td>{{$bike->serial_number}}</td>
                        <td>{{$bike->model}}</td>
                        <td>{{$bike->price_per_hour}}</td>
                        <td>{{$bike->status}}</td>
                        <td><a href="{{ route('bikes.show', $bike) }}">Detalles</a></td>
                    </tr>

            @empty
                <h3>No hay bicicletas en estos momentos</h3>
            @endforelse
                </tbody>
            </table>

        </section>
    </main>
</body>
</html>
