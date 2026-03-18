@extends('layouts.app')

@section('title', 'Usuários')

@section('content')

<h2 class="mb-4">Lista de Usuários</h2>

<!-- MENSAGEM -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- BUSCA -->
<form method="GET" action="{{ route('users.index') }}" class="mb-3">
    <div class="input-group">
        <input 
            type="text" 
            name="search" 
            class="form-control" 
            placeholder="Buscar por nome ou email..."
            value="{{ $search ?? '' }}"
        >
        <button class="btn btn-dark">Buscar</button>
    </div>
</form>

<a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
    + Novo Usuário
</a>

<div class="card shadow">
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th width="180">Ações</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button 
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir?')"
                                >
                                    Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">
                            Nenhum usuário encontrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>

@endsection