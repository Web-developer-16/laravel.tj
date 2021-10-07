@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Кабинети инфиродии ман</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Ному насаб</th>
                                <th scope="col">Рақами телефон</th>
                                <th scope="col">Почтаи электронӣ</th>
                                <th scope="col">Вазифа ва ширкат</th>
                                <th scope="col">Санаи бақайдгирӣ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{ Auth::user()->id }}
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ Auth::user()->tel }}</td>
                                <td>{{ Auth::user()->email }}</td>
                                <td>{{ Auth::user()->vazifa }}</td>
                                <td>{{ Auth::user()->created_at }}</td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
