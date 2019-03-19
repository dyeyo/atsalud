@extends('layouts.layout-dashboard')
@section('styles')
    <link href="{{asset('node_modules/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- Page plugins css -->
    <!-- Date picker plugins css -->
    <link href="{{asset('node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
@endsection
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('users.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Usuarios</a></li>
                    <li class="breadcrumb-item"><a href="{{route('users.create')}}">Crear usuario</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Creación de usuario</h4>
                </div>
                <div class="card-body">
                    <form action="javascript:void(0)" method="post" id="newUser" name="newUser">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos del usuario</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="Nombre (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="last_name" name="last_name"
                                               class="form-control form-control-danger" placeholder="Apellido (*)"
                                               required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone_two" name="phone_one" class="form-control"
                                               placeholder="Teléfono principal (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone_two" name="phone_two"
                                               class="form-control form-control-danger" placeholder="Teléfono secundario (*)"
                                               required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="birthdate" name="birthdate" class="form-control" placeholder="Fecha de nacimiento">

                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone_two" name="phone_two"
                                               class="form-control form-control-danger" placeholder="Teléfono secundario (*)"
                                               required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="doc_type" id="doc_type" class="selectpicker form-group"
                                                data-style="form-control btn-secondary">
                                            <option value="-1">[Seleccione tipo de documnento]</option>
                                            <option value="CN">CN</option>
                                            <option value="RC">RC</option>
                                            <option value="TI">TI</option>
                                            <option value="CC">CC</option>
                                            <option value="CE">CE</option>
                                            <option value="PA">PA</option>
                                            <option value="SC">SC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="doc_number" name="doc_number" class="form-control"
                                               placeholder="Número de documento (*)" required>
                                    </div>
                                </div>
                            </div>
                            <h3 class="card-title">Ubicación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="departament_id" id="departament_id" class="select2 form-control custom-select" style="width: 100%; height:36px;" onchange="municipalities()">
                                            <option value="-1">[Seleccione un Departamento]</option>
                                            @foreach($departaments as $departament)
                                                <option value="{{$departament->id}}">{{$departament->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="municipality_id" id="municipality_id" class="select2 form-control custom-select" >
                                            <option value="-1">[Seleccione un Municipio]</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" id="addrees" name="address" class="form-control"
                                           placeholder="Dirección (*)" required>
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
                                                        <input id="permissions[]" name="permissions[]" type="checkbox"
                                                               value="{{$permission->id}}">
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
                                <button class="btn btn-success" onclick="create_role()"><i class="fa fa-check"></i>
                                    Guardar
                                </button>
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
    <script src="{{asset('node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('node_modules/moment/moment.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{asset('node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script>
        $('#birthdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
        jQuery(document).ready(function () {
            $(".select2").select2();
            $('.selectpicker').selectpicker();
        });
        </script>
@endsection
