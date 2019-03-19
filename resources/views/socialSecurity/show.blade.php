@extends('layouts.layout-dashboard')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('socialSecurity.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('socialSecurity.index')}}">Seguridad Social</a></li>
                    <li class="breadcrumb-item"><a href="{{route('socialSecurity.show',$socSeg->id)}}">{{$socSeg->name}}</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-12">
                    <h4 class="card-title">Nombre del Negocio : <b>{{$socSeg->business_name}}</b></h4>
                    <p class="card-title"><strong>Nombre comercial: </strong>{{$socSeg->tradename}}</p>
                    <p class="card-title"><strong>NIT: </strong>{{$socSeg->nit}}</p>
                    <p class="card-title"><strong>Dirección: </strong>{{$socSeg->address}}</p>
                    <p class="card-title"><strong>Teléfono: </strong>{{$socSeg->phone}}</p>
                    <p class="card-title"><strong>Correo Electronico: </strong>{{$socSeg->email}}</p>
                </div>

            </div>
        </div>
    </div>

@endsection
