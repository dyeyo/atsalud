@extends('layouts.layout-dashboard')

@section('content')
@include('roles.partials.breadcrumb')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nombre <b>{{$role->name}}</b></h4>
                <p lass="card-title"><strong>Slug </strong>{{$role->slug}}</p>
                <p lass="card-title"><strong>Descripcion </strong>{{$role->description}}</p>
            </div>
        </div>
    </div>
</div>
@endsection