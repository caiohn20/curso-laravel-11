@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
            Detalhes do Usuário {{ $user->name }}
        </h2>
    </div>
    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside mb-6">
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>
    <x-alert />

    @can('is-admin', $user)
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit"
                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Deletar</button>
        </form>
    @endcan

@endsection
