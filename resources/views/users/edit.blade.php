@extends('layouts.layout-dashboard')

@section('content')
@include('users.partials.breadcrumb')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Editar registro</h4>
                    {!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'PUT','class'=>'form-control-line m-t-40']) !!}
                        @include('users.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection