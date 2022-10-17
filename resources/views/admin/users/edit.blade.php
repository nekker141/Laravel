<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Editar 2</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Página para editar usuarios</h1>

        {!! Form::model($user,['method' => 'patch', 'action' => ['App\Http\Controllers\AdminUserController@update', $user->id], 'files' => true]) !!}
    
            <table>
                <tr>
                    <td>
                        <img src="/images/{{ $user->foto ? $user->foto->ruta_foto : 'test.jpg'}}" width="50px" />
                    </td>
                </tr>
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
                        {!! Form::label('foto', 'Foto: '); !!}
                        {!! Form::file('foto_id'); !!}
                    </td>
                </tr>
                <tr>
                    <td>{!! Form::submit('Modificar usuario'); !!}</td>
                </tr>
                
            </table>
    
            {!! Form::close() !!}

            {!! Form::model($user,['method' => 'DELETE', 'action' => ['App\Http\Controllers\AdminUserController@destroy', $user->id], 'files' => true]) !!}

            <table>
                <tr>{!! Form::submit('Borrar usuario'); !!}</tr>
            </table>

            {!! Form::close() !!}

            
    </body>
</html>
