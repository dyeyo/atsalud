@extends('layouts.layout-dashboard')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Material Form</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Material Form</li>
            </ol>
            @can('roles.create')
                <a href="{{route('roles.create')}}" class="btn btn-info">Crear Rol<i class="fa fa-plus-circle"></i></a>
            @endcan
        </div>
    </div>
</div>
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">Roles 
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>
                                            @can('users.show')
                                                <a href="{{route('roles.show',$role->id)}}" class="btn btn-sm btn-secondary">
                                                    Ver
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('users.edit')
                                                <a href="{{route('roles.edit',$role->id)}}" class="btn btn-sm btn-warning">
                                                    Editar
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('users.destroy')
                                                {!! Form::open(['route'=>['roles.destroy',$role->id], 'method'=>'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger">
                                                        Eliminar
                                                    </button>
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$roles->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
