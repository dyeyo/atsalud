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
            @include('affiliation.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('affiliations.index')}}">Afilicaciones</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Creación de Afiliación</h4>
                </div>
                <div id="response"></div>
                <div class="card-body">
                    <form action="javascript:void(0)" method="post" id="newAffiliation" name="newAffiliation">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos de Afiliación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" id="application_date" name="application_date" class="form-control" placeholder="fecha de aplicacion (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="type_procedure" name="type_procedure" class="form-control form-control-danger" placeholder="Tipo de procedimiento(*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="affiliation_type" id="affiliation_type" class="form-control"  placeholder="Tipo de afiliación (*)" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="affiliation_subtype" id="affiliation_subtype" class="form-control"  placeholder="Afiliación subtipo (*)" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="regime" id="regime" class="form-control"  placeholder="Regimen (*)" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="affiliated_type" id="affiliated_type" class="form-control"  placeholder="Tipo de afiliación(*)" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="contributing_type" id="contributing_type" class="form-control"  placeholder="Tipo de contribución (*)" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="code" id="code" class="form-control"  placeholder="Codigo(*)" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="user_id" id="user_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option value="-1">[Seleccione un Usuario]</option>
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="status" id="status" class="form-control"  placeholder="Estado(*)" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="hidden" name="id" id="id" value="{{auth()->user()->id}}">
                            <div class="form-actions">
                                <button class="btn btn-success" onclick="create_affiliation()"> <i class="fa fa-check"></i> Guardar</button>
                            </div>
                    </form>
                </div>
                <br>

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
