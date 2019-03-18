@extends('layouts.layout-dashboard')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Usuario {{auth()->user()->name}}</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nombre <b>{{$user->name}}</b></h4>
                <p class="card-title">Email <b>{{$user->email}}</b></p>
            </div>
        </div>
    </div>
</div>
@endsection