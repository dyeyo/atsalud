@extends('layouts.layout-dashboard')

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        Roles
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route'=>'roles.store']) !!}
                            @include('roles.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection