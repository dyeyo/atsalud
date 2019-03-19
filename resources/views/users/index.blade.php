@extends('layouts.layout-dashboard')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('users.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb m-b-10">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Usuarios</a></li>
                </ol>
                @can('users.create')
                    <a href="{{route('users.create')}}" class="btn btn-info d-none d-lg-block m-l-15"
                       style="color: #fff !important;"><i class="fa fa-plus-circle"></i> Nuevo usuario</a>
                @endcan
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($users as $user)
        <div class="col-md-4 col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-center">
                            <a href="contact-detail.html"><img src="{{asset('images/users/d1.jpg')}}" alt="user" class="img-circle img-responsive"></a>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h5 class="card-title m-b-0">{{$user->user_name}} {{ $user->user_last_name}}</h5> <small>{{$user->role_name}}</small>
                            <p>
                            <address>

                                <br/>
                                <br/>
                                <abbr title="Phone">P:</abbr> {{$user->user_phone_one}}
                            </address>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @endforeach
    </div>
@endsection
