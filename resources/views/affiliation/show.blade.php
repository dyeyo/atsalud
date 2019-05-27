@extends('layouts.layout-dashboard')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('affiliation.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('affiliations.index')}}">Afiliaciones</a></li>
                    <li class="breadcrumb-item"><a href="{{route('affiliations.show',$affiliation->id)}}">{{$affiliation->name}}</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-12">
                    <h4 class="card-title">Fecha de aplicación: <b>{{$affiliation->application_date}}</b></h4>
                    <p class="card-title"><strong>Tipo de Procedimiento: </strong>{{$affiliation->type_procedure}}</p>
                    <p class="card-title"><strong>Tipo de Afiliación: </strong>{{$affiliation->affiliation_type}}</p>
                    <p class="card-title"><strong>Afiliación Subtipo: </strong>{{$affiliation->affiliation_subtype}}</p>
                    <p class="card-title"><strong>Regimen: </strong>{{$affiliation->regime}}</p>
                    <p class="card-title"><strong>Tipo Afiliado: </strong>{{$affiliation->affiliated_type}}</p>
                    <p class="card-title"><strong>Tipo de contribución: </strong>{{$affiliation->contributing_type}}</p>
                    <p class="card-title"><strong>Codigo: </strong>{{$affiliation->code}}</p>
                    <p class="card-title"><strong>Usuario: </strong>{{$affiliation->User->name}}</p>
                    <p class="card-title"><strong>Estado: </strong>{{$affiliation->status}}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
