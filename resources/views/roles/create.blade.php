@extends('layouts.layout-dashboard')
@section('styles')
    <link href="{{asset('node_modules/bootstrap-switch/bootstrap-switch.min.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{asset('css/pages/bootstrap-switch.css')}}" rel="stylesheet">
    <link href="{{asset('css/pages/tab-page.css')}}" rel="stylesheet">
@endsection
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
                    <li class="breadcrumb-item"><a href="{{route('roles.create')}}">Crear Rol</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Creación de rol</h4>
                </div>
                <div class="card-body">
                    <form action="javascript:void(0)" method="post" id="newRol" name="newRol">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos del rol</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Nombre rol (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Slug (*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="description" id="description" class="form-control" rows="5" placeholder="Descripción" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <h3>Acceso total</h3><label class="control-label">(permiso especial que otorga acceso total al sistema, acceso tipo super administrador)</label>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-success">
                                                    <input type="radio" name="special" id="option1" value="all-access"> SI
                                                </label>
                                                <label class="btn btn-danger">
                                                    <input type="radio" name="special" id="option2" value=""> NO
                                                </label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                            <?php $item = 'modulo'; ?>
                            @foreach($permissions as $module)
                                @if($module->module != $item)
                                        <div class="col-md-6">
                                            <hr>
                                            <h3 style="text-transform: uppercase">{{$module->module}}</h3>
                                        @foreach($permissions as $permission)
                                            @if($module->module == $permission->module)
                                                    <div class="checkbox checkbox-success m-l-10">
                                                        <input id="permissions[]" name="permissions[]" type="checkbox" value="{{$permission->id}}">
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
                            <br>
                            <input type="hidden" name="id" id="id" value="{{auth()->user()->id}}">
                            <div class="form-actions">
                                <button class="btn btn-success" onclick="create_role()"> <i class="fa fa-check"></i> Guardar</button>
                            </div>
                    </form>
                </div>
                <br>
                <div id="response"></div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- bt-switch -->
    <script src="{{asset('node_modules/bootstrap-switch/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript">
        $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    </script>
@endsection
