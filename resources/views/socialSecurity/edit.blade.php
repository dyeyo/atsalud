@extends('layouts.layout-dashboard')
@section('styles')
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
                    <li class="breadcrumb-item"><a href="{{route('ips.index')}}">Roles</a></li>
                    <li class="breadcrumb-item"><a href="{{route('ips.edit',$ips->id)}}">{{$ips->name}}</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Edición de la IPS</h4>
                </div>
                <div class="card-body">
                    <div id="response"></div>
                    <form action="javascript:void(0)" method="post" id="editIps" name="editIps">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos de la IPS</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="business_name" name="business_name" value="{{$ips->business_name}}"  class="form-control" placeholder="Nombre del Negocio (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="tradename" name="tradename" value="{{$ips->tradename}}"  class="form-control form-control-danger" placeholder="Nombre comercial(*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="nit" name="nit" class="form-control" value="{{$ips->nit}}"  placeholder="NIT(*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="address" name="address" value="{{$ips->address}}"  class="form-control form-control-danger" placeholder="Dirección" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" value="{{$ips->phone}}"  class="form-control" placeholder="Teléfono" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" value="{{$ips->email}}"  class="form-control form-control-danger" placeholder="Correo Electronico(*)" required>
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
                                            <option value="-1">{{$ips->municipality->name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br> 
                            <input type="hidden" name="id" id="id" value="{{auth()->user()->id}}">
                            <div class="form-actions">
                                <button class="btn btn-success" onclick="update_Ips({{$ips->id}})"> <i class="fa fa-check"></i> Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
