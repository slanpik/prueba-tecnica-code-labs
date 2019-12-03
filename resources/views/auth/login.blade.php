@extends('layouts.loginLayout')

@section('content')
<!-- Login -->
<div class="col l5 push-l3 ">
    <div class="card">
        <div class="card-content">
            <span class="card-title">@lang('register.login')</span>

            <div class="row">
                <form class="col l12" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <!-- Email -->
                    <div class="input-field col l12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="text" class="validate" value="{{ old('email') }}" required>
                        <label for="email">@lang('user.email')</label>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <!-- Password -->
                    <div class="input-field col l12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <i class="material-icons prefix">https</i>
                        <input id="password" name="password" type="password" class="validate" value="{{ old('password') }}" required>
                        <label for="password">@lang('user.password')</label>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <!-- Botones Login -->
                    <button class="btn btn-sm waves-effect waves-light" type="submit" name="action">@lang('register.login')</button>

                    <a class="btn btn-sm btn-color waves-effect waves-light" href="{{ route('register') }}">@lang('register.register')</a>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection