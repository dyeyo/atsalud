@extends('layouts.layout-dashboard')

@section('content')
@include('roles.partials.breadcrumb')
<div class="row">
    <div class="col-12">
        {!! Form::model($role,['route'=>['roles.update',$role->id],
        'method'=>'PUT','class'=>'form-control-line m-t-40']) !!}
            @include('roles.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection