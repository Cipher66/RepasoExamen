<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>Examen Laravel</title>
    </head>
    <body>
        Introduce tu nombre:
        <form action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="permiso">
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>
