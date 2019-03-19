@extends('layouts.layout-dashboard')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('ips.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles</a></li>
                    <li class="breadcrumb-item"><a href="{{route('roles.show',$ips->id)}}">{{$ips->name}}</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-12">
                    <h4 class="card-title">Nombre del Negocio : <b>{{$ips->business_name}}</b></h4>
                    <p lass="card-title"><strong>Nombre comercial: </strong>{{$ips->tradename}}</p>
                    <p lass="card-title"><strong>NIT: </strong>{{$ips->nit}}</p>
                    <p lass="card-title"><strong>Dirección: </strong>{{$ips->address}}</p>
                    <p lass="card-title"><strong>Teléfono: </strong>{{$ips->phone}}</p>
                    <p lass="card-title"><strong>Correo Electronico: </strong>{{$ips->email}}</p>
                    <p lass="card-title"><strong>Municipio: </strong>{{$ips->municipality->name}}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
