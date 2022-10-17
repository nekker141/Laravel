<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Página para agregar usuarios</h1>
        

        {!! 

        Form::open(['action' => 'App\Http\Controllers\AdminUserController@store', 'files' => true])
        
        !!}

        <table>
            <tr>
                <td>
                    {!! Form::label('role', 'Rol: '); !!}
                    {!! Form::text('role_id'); !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('nombre', 'Nombre: '); !!}
                    {!! Form::text('name'); !!}
                </td> 
            </tr>
            <tr>
                <td>
                    {!! Form::label('email', 'E-Mail: '); !!}
                    {!! Form::text('email'); !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('password', 'Contraseña: '); !!}
                    {!! Form::text('password'); !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('foto', 'Foto: '); !!}
                    {!! Form::file('foto_id'); !!}
                </td>
            </tr>
            <tr>
                <td>{!! Form::submit('Enviar'); !!}</td>
            </tr>
            
        </table>

        {!! Form::close() !!}

        
    </body>
</html>
