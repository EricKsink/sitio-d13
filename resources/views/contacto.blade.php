<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de contacto para: {{$ tipo_usuario}}</h1>
    <form action="/guardar-formulario" method="POST">

        @csrf
        @if ($tipo_usuario == 'cliente')
            <label for="no_cliente"></label>
            <input type="text" name="no_cliente" value="{{old ('no_cliente') }}" id="no_cliente">
            <br>
        @endif
        <label>Nombre:<br><input type="text" name="nombre" value="{{ old ('nombre') }}"></label><br>
        <label for="">Correo:<br><input id="correo" type="email" name="correo" value="{{ old ('correo')}}" class="@error('correo') is-invalid @enderror"></label><br>
            
        @error('correo')
            <div class="alert alert-danger">{{ $message}}</div>
        @enderror
        <br>
        <label for="">Mensaje:<br><textarea cols="30"name="mensaje" rows="4">{{ old('mensaje')}}</textarea></label><br>

        <input type="submit" value="Enviar">
    

    </form>
</body>
</html>