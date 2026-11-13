<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <header>
        <h1>Reserva</h1>
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
    <a href="{{ route('bikes.index') }}">Volver al Catalogo</a>
    <form action="/booking">
        <label for="user_id">user_id</label>
        <input type="text" value="{{ auth()->id() }}" required disabled><br>
        <label for="serial_number">Serial_number</label>
        <input type="text" name="serial_number" id="serial_number" value="{{$bike->serial_number}}" required disabled><br>
        <label for="start_time">start_time</label>
        <input type="datetime-local" name="start_time" id="start_time" required><br>
        <label for="end_time">end_time</label>
        <input type="datetime-local" name="end_time" id="end_time" required><br>
        <input type="submit" value="Crear">
    </form>    
</body>
</html>