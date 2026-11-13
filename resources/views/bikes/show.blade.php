<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike-details</title>
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
            
            @if($bike)
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Serial_number</th>
                            <th>Model</th>
                            <th>Price_per_hour</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{$bike->id}}</th>
                            <th>{{$bike->serial_number}}</th>
                            <th>{{$bike->model}}</th>
                            <th>{{$bike->price_per_hour}}</th>
                            <th>{{$bike->status}}</th>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('bookings.create', $bike) }}">Reservar</a>

            @else
                <h2>No se pudo encontrar</h2>
            @endif

        </section>
    </main>
</body>
</html>
