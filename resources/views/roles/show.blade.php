@extends('layouts.layout-dashboard')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('roles.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles</a></li>
                    <li class="breadcrumb-item"><a href="{{route('roles.show',$role->id)}}">{{$role->name}}</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-12">
                    <h4 class="card-title">Nombre: <b>{{$role->name}}</b></h4>
                    <p lass="card-title"><strong>Slug: </strong>{{$role->slug}}</p>
                    <p lass="card-title"><strong>Descripcion: </strong>{{$role->description}}</p>
                    <p lass="card-title"><strong>Total acceso: </strong>{{$role->special}}</p>
                </div>

            </div>
            <div class="row">
                <?php $item = 'modulo'; ?>
                @foreach($permissions as $module)
                    @if($module->module != $item)
                        <div class="col-md-6">
                            <hr>
                            <h3 style="text-transform: uppercase">{{$module->module}}</h3>
                            @foreach($permissions as $permission)
                                @if($module->module == $permission->module)
                                    <div class="checkbox checkbox-success m-l-10">
                                        <input @if($role->special == null && $role->can($permission->slug)) checked @endif  disabled
                                               type="checkbox" value="{{$permission->id}}">
                                        <label for="checkbox">{{$permission->name}}</label>
                                        <em>({{$permission->description}})</em>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                    <?php $item = $module->module ?>
                @endforeach
            </div>
        </div>
    </div>
@endsection
