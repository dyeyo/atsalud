@extends('layouts.layout-login')

@section('content')
<div class="content-title">
    <p class"p-title">Bienvenido</p>
    <ul class"ul-title">
    <li>{{config('app.name')}}.com</li>
    <li>Apoyo tecnológico a</li>
    <li>servicios de salud</li>
    </ul>
</div>
<div class="login-box card">
    <div class="card-body">
        <form class="form-horizontal form-material" id="loginform" method="post" action=" {{route('login.access')}} ">
            {{csrf_field() }}
            <a href="javascript:void(0)" class="text-center db"><img src="{{('images/logo.png')}}" alt="Home" class="logo-auth"/><br/>
                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Ususario" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" id="password"  placeholder="Contraseña" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="custom-control custom-checkbox">
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Recuperar contraseña</a>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Iniciar sesión</button>
                    </div>
                </div>

        </form>
        <form class="form-horizontal" id="recoverform" action="javascript:void(0)">
            {{ csrf_field() }}
            <div class="form-group ">
                <div class="col-xs-12">
                    <h3>Recuperar contraseña</h3>
                    <p class="text-muted">Ingrese su correo electrónico y para recuperar tu contraseña! </p>
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Correo Electronico" required>
                </div>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" onclick="tempory_password()">Enviar</button>
                </div>
            </div>
        </form>
        <div id="response">
        </div>
        @if ($errors->has('username') || $errors->has('password'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                @if($errors->has('username'))
                    <li>{{ $errors->first('username') }}</li>
                @endif
                @if ($errors->has('password'))
                    <li>{{ $errors->first('password') }}</li>
                @endif
            </div>
        @endif
    </div>
</div>
@endsection
