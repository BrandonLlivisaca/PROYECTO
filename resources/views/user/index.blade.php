@extends('tema.app')

@section('title',"Listado")

@section('contenido')
    <h3>
        Listado de Users
    </h3>

    <table class="table table-stripped table-hover ">
        <thead>
            <tr>
                <th>User</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role_id}}</td>
                {{-- <td><a href="{{ route('tarea.edit', $tarea) }}">Editar</a></td> --}}
            </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection