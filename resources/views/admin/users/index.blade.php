@extends('admin.layouts.app')

@section('title', 'Usuários')

@section('content')
    @include('admin.users.partials.breadcrumb')

    <x-alert/>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                                <a href="{{ route('users.show', $user->id) }}">Detalhar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100">Nenhum usuário encontrado!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $users->links() }}
        </div>
    </div>
@endsection



