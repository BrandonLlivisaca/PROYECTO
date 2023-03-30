@extends('tema.app')

@section('title',"Nueva Rol")

@section('contenido')
    <h3>
        Registrar Roles
    </h3>

    <form action="{{ route('roles.store') }}" method="POST">
        <x-tarea-for-body/>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>                
            @endforeach
        </ul>
    </div>
    @endif
@endsection