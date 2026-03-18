@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow-lg p-4">
            <h3 class="mb-4 text-center">Editar Usuário</h3>

            <!-- ERROS -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input 
                        type="text" 
                        name="name" 
                        class="form-control"
                        value="{{ old('name', $user->name) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        class="form-control"
                        value="{{ old('email', $user->email) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Nova Senha (opcional)</label>
                    <input 
                        type="password" 
                        name="password" 
                        class="form-control"
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirmar Senha</label>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        class="form-control"
                    >
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">
                        Voltar
                    </a>

                    <button type="submit" class="btn btn-warning">
                        Atualizar
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection