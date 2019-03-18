@extends('layouts.layout-dashboard')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">USURAIOS</h4>
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
                            <h4 class="card-title">Usuarios del sistema</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="10px">ID</th>
                                            <th>Nombre</th>
                                            <th class="text-nowrap">Action</th>
                                            <th class="text-nowrap"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td class="text-nowrap">
                                                    @can('users.show')
                                                        <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-secondary">
                                                            Ver
                                                        </a>
                                                    @endcan
                                                    @can('users.edit')
                                                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>Editar</a>
                                                    @endcan
                                                </td>
                                                <td class="text-nowrap">
                                                    @can('users.edit')
                                                        {!! Form::open(['route'=>['users.destroy',$user->id], 'method'=>'DELETE']) !!}
                                                            <button class="btn btn-sm btn-danger">
                                                                <i class="fa fa-close text-danger"></i> Eliminar
                                                            </button>
                                                        {!! Form::close() !!}
                                                     @endcan
                                                </td>
                                                  
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
