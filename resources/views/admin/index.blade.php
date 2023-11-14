@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Информация о пользователе</div>

                <div class="card-body">
                    <p>Ваше имя: {{ $user->name }}</p>
                    <p>Емейл: {{ $user->email }}</p>
                    <p>Идентификатор: {{ $user->id }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
