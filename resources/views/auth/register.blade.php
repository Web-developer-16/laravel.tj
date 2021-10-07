@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >{{ __('Бақайдгирии истифодабарнда') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ному насаб:') }}</label>
                            <div class="col-md-6">
                                <input id="name" placeholder="Абдураҳмонов А" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Рақами телефон:') }}</label>
                            <div class="col-md-6">
                                <input id="tel" placeholder="+992918260064" type="text" class="form-control @error('tel') is-invalid @enderror"
                                       name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>
                                @error('tel')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="vazifa" class="col-md-4 col-form-label text-md-right">{{ __('Вазифа ё ширкат') }}</label>
                            <div class="col-md-6">
                                <input id="vazifa" placeholder="Веб-барномасоз" type="text" class= "form-control @error('vazifa') is-invalid @enderror"
                                name="vazifa" value="{{ old('vazifa') }}" required autocomplete="name" autofocus>
                                @error('vazifa')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Почтаи электронӣ:') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="email" placeholder="test@mail.ru" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password"  class="col-md-4 col-form-label text-md-right">{{ __('Рамзи махфӣ:') }}</label>
                            <div class="col-md-6">
                                <input id="password" placeholder="********" type="password" class="form-control @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Такрори рамз:') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="********" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Сабт') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
