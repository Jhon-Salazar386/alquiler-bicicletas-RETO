<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
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