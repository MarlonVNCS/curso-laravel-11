@extends('admin.layouts.app')
@section('title', 'Editar o usuário')


@section('content')
    @include('admin.users.partials.breadcrumb')
    <div>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Usuário
        </h2>
    </div>

    <form action="{{route('users.update', $user->id)}}" method="post">
        @method('put')
        @include('admin.users.partials.form')
    </form>
@endsection