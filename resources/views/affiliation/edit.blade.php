@extends('layouts.layout-dashboard')
@section('styles')
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
                    <li class="breadcrumb-item"><a href="{{route('affiliations.index')}}">Roles</a></li>
                    <li class="breadcrumb-item"><a href="{{route('affiliations.edit',$affiliation->id)}}">{{$affiliation->name}}</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Edición del afiliación</h4>
                </div>

                <div id="response"></div>
                <div class="card-body">
                    <form action="javascript:void(0)" method="post" id="edit_affiliation" name="edit_affiliation">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos de la afiliación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" id="application_date" value="{{$affiliation->application_date}}" name="application_date" class="form-control" placeholder="fecha de aplicacion (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="type_procedure" value="{{$affiliation->type_procedure}}" name="type_procedure" class="form-control form-control-danger" placeholder="Tipo de procedimiento(*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="affiliation_type"  value="{{$affiliation->affiliation_type}}" id="affiliation_type" class="form-control"  placeholder="Tipo de afiliación (*)" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="affiliation_subtype" value="{{$affiliation->affiliation_subtype}}" id="affiliation_subtype" class="form-control"  placeholder="Afiliación subtipo (*)" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="regime" id="regime" class="form-control" value="{{$affiliation->regime}}" placeholder="Regimen (*)" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="affiliated_type" id="affiliated_type" value="{{$affiliation->affiliated_type}}" class="form-control"  placeholder="Tipo de afiliación(*)" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="contributing_type" value="{{$affiliation->contributing_type}}" id="contributing_type" class="form-control"  placeholder="Tipo de contribución (*)" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="code" id="code" value="{{$affiliation->code}}" class="form-control"  placeholder="Codigo(*)" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="user_id" id="user_id" value="{{$affiliation->user_id}}" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option value="{{$affiliation->user_id}}">{{$affiliation->user->name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="status" value="{{$affiliation->status}}" id="status" class="form-control"  placeholder="Estado(*)" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="hidden" name="id" id="id" value="{{auth()->user()->id}}">
                            <div class="form-actions">
                                <button class="btn btn-success" onclick="update_affiliation({{$affiliation->id}})"> <i class="fa fa-check"></i> Guardar</button>
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
