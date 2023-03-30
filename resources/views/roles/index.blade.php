@extends('tema.app')

@section('title',"Listado")

@section('contenido')
    <h3>
        Listado de Roles
    </h3>

    <table class="table table-stripped table-hover ">
        <thead>
            <tr>
                <th>
                    ROL
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
            <tr>
                <td>{{ $rol->rol }}</td>
                {{-- <td><a href="{{ route('tarea.edit', $tarea) }}">Editar</a></td> --}}
            </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection