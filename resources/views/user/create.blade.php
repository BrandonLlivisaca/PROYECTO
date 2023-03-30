@extends('tema.app')

@section('title',"Nuevo Usuario")

@section('contenido')
    <h3>
        Registrar Usuario
    </h3>

    <form action="{{ route('roles.store') }}" method="POST">
        <x-user-form-body/>
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