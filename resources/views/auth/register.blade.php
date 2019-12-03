@extends('layouts.loginLayout')

@section('content')
<!-- Register -->
<div class="col l5 push-l3">
    <div class="card">
        <div class="card-content">
            <span class="card-title">@lang('register.register')</span>
            @include('messages')
            
            <div class="row">
                <form class="col l12" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <!-- Name -->
                    <div class="input-field col l12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <i class="material-icons prefix">account_box</i>
                        <input id="name" name="name" type="text" pattern="[A-Z,a-z ]*" class="validate" value="{{ old('name') }}" required>
                        <label for="name">@lang('user.fName')</label>
                    </div>

                    <!-- lastName -->
                    <div class="input-field col l12 form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                        <i class="material-icons prefix">account_box</i>
                        <input id="lastName" name="lastName" type="text" pattern="[A-Z,a-z ]*" class="validate" value="{{ old('lastName') }}">
                        <label for="lastName">@lang('user.lName')</label>
                    </div>

                    <!-- Email -->
                    <div class="input-field col l12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="text" class="validate" value="{{ old('email') }}" required>
                        <label for="email">@lang('user.email')</label>
                    </div>

                    <!-- Password -->
                    <div class="input-field col l12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <i class="material-icons prefix">https</i>
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">@lang('user.password')</label>
                    </div>

                    <!-- Confirm Password -->
                    <div class="input-field col l12 form-group">
                        <i class="material-icons prefix">enhanced_encryption</i>
                        <input id="password-confirm" name="password_confirmation" type="password" class="validate" required>
                        <label for="password-confirm">@lang('user.confirmPassword')</label>
                    </div>

                    <!-- Botones Register -->
                    <button class="btn waves-effect waves-light " type="submit" name="action">@lang('register.register')</button>
                    <a class="btn btn-sm btn-color waves-effect waves-light" href="{{ route('login') }}">@lang('register.back')</a>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection