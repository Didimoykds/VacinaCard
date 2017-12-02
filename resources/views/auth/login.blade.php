@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h3>Login</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <div class="col-md-6 col-md-offset-3 input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <div class="col-md-6 col-md-offset-3 input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>
                                </div>
                                <div class="col-md-12">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            @if ($errors->has('email'))
                                <div class="col-md-12 text-center">
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                </div>
                            @endif
                            <div class="col-md-12 text-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembre-me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    Crie sua conta Aqui!
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
