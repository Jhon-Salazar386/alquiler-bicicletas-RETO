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
        <nav>

            <!-- Navigation Links -->
            <div>
                <a href="{{ route('bikes.index') }}">Bikes</a>
            </div>

            <!-- Authentication Links -->
            <div>

                @guest
                    <a href="{{ route('login') }}">Log In</a>

                    <a href="{{ route('register') }}">Register</a>
                @endguest

                @auth
                    <a href="{{ route('profile.edit') }}">Profile</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                @endauth

            </div>

        </nav>


    </header>
    <main>
        <section class="">
            <h2>Catalogo</h2>
            <nav>
                
            </nav>
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
