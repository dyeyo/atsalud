@extends('layouts.layout-dashboard')
@section('styles')
@endsection
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('socialSecurity.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('socialSecurity.index')}}">Roles</a></li>
                    <li class="breadcrumb-item"><a href="{{route('socialSecurity.edit',$socSeg->id)}}">{{$socSeg->name}}</a></li>
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
                    <form action="javascript:void(0)" method="post" id="editSegSoc" name="editSegSoc">
                    {{--<form action="{{ route('socialSecurity.update',$socSeg->id) }}" method="post" id="editSG" name="editSG">--}}
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos de la Seguridad Social</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="business_name" name="business_name" value="{{$socSeg->business_name}}"  class="form-control" placeholder="Nombre del Negocio (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="tradename" name="tradename" value="{{$socSeg->tradename}}"  class="form-control form-control-danger" placeholder="Nombre comercial(*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="nit" name="nit" class="form-control" value="{{$socSeg->nit}}"  placeholder="NIT(*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="address" name="address" value="{{$socSeg->address}}"  class="form-control form-control-danger" placeholder="Dirección" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" value="{{$socSeg->phone}}"  class="form-control" placeholder="Teléfono" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" value="{{$socSeg->email}}"  class="form-control form-control-danger" placeholder="Correo Electronico(*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;" onchange="tipos()">
                                            <option value="">{{$socSeg->type}}</option>
                                            <option value="EPS">EPS</option>
                                            <option value="CCF">CCF</option>
                                            <option value="ARP">ARP</option>
                                            <option value="AFP">AFP</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br> 
                            <input type="hidden" name="id" id="id" value="{{auth()->user()->id}}">
                            <div class="form-actions">
                                {{--<button class="btn btn-success" type="submit"> <i class="fa fa-check"></i> Guardar</button>--}}
                                <button class="btn btn-success" onclick="update_SegSoc({{$socSeg->id}})"> <i class="fa fa-check"></i> Guardar</button>
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
