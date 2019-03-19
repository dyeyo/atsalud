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
            @include('ips.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('ips.index')}}">IPS</a></li>
                    <li class="breadcrumb-item"><a href="{{route('ips.create')}}">Crear IPS</a></li>
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
                    <form action="javascript:void(0)" method="post" id="newIps" name="newIps">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos de la IPS</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="business_name" name="business_name" class="form-control" placeholder="Nombre del Negocio (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="tradename" name="tradename" class="form-control form-control-danger" placeholder="Nombre comercial(*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="nit" name="nit" class="form-control" placeholder="NIT(*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="address" name="address" class="form-control form-control-danger" placeholder="Dirección" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Teléfono" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control form-control-danger" placeholder="Correo Electronico(*)" required>
                                    </div>
                                    <!--/span-->
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
                            <div class="form-group">
                                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
                            </div>
                        </div>
                    </form>
                </div>
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
