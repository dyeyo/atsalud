@extends('layouts.layout-dashboard')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('affiliation.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb m-b-10">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('affiliations.index')}}">Afiliaciones</a></li>
                </ol>
                @can('affiliations.create')
                    <a href="{{route('affiliations.create')}}" class="btn btn-info d-none d-lg-block m-l-15"
                       style="color: #fff !important;"><i class="fa fa-plus-circle"></i> Nueva Afiliacion</a>
                @endcan
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Afiliaciones del sistema</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive m-t-40">
                <div class="col-lg-12 col-xlg-12 col-md-">
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#Tramite" role="tab">Tramite</a> </li>
                            <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#DatosPersonales" role="tab">Datos Personales</a> </li>
                            <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#DatosComplementarios" role="tab">Datos Complementarios</a> </li>
                            <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#Nucleo" role="tab">Núcleo Familiar</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#DatosEmpleador" role="tab">Datos de Empleador</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ReporteNovedades" role="tab">Reporte de Novedades</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#DeclaracionesAutorizaciones" role="tab">Declaraciones y Autorizaciones</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Anexos" role="tab">Anexos</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Datos por la Entidad</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Autorizacion</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Carga de documentos</a> </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Tramite" role="tabpanel">
                                <div class="card-body">
                                    <div class="profiletimeline">
                                        <form action="javascript:void(0)" method="post" id="newTramite" name="newTramite">
                                            {{csrf_field()}}
                                            <div class="form-body">
                                                <h3 class="card-title">Datos del Tramite</h3>
                                                <hr>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">A qué EPS se desea afiliar(*)</option>
                                                                <option value="EPS">EPS</option>
                                                                <option value="CCF">CCF</option>
                                                                <option value="ARP">ARP</option>
                                                                <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                            <option value="">Tipo de Trámite(*)</option>
                                                            <option value="EPS">EPS</option>
                                                            <option value="CCF">CCF</option>
                                                            <option value="ARP">ARP</option>
                                                            <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Tipo de Afiliación(*)</option>
                                                                <option value="EPS">EPS</option>
                                                                <option value="CCF">CCF</option>
                                                                <option value="ARP">ARP</option>
                                                                <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Caracteristica del tipo de afiliación(*)</option>
                                                                <option value="EPS">EPS</option>
                                                                <option value="CCF">CCF</option>
                                                                <option value="ARP">ARP</option>
                                                                <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Tipo de Afiliación(*)</option>
                                                                <option value="EPS">EPS</option>
                                                                <option value="CCF">CCF</option>
                                                                <option value="ARP">ARP</option>
                                                                <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Caracteristica del tipo de afiliación(*)</option>
                                                                <option value="EPS">EPS</option>
                                                                <option value="CCF">CCF</option>
                                                                <option value="ARP">ARP</option>
                                                                <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Régimen(*)</option>
                                                                <option value="EPS">EPS</option>
                                                                <option value="CCF">CCF</option>
                                                                <option value="ARP">ARP</option>
                                                                <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Tipo de Afiliado(*)</option>
                                                                <option value="EPS">EPS</option>
                                                                <option value="CCF">CCF</option>
                                                                <option value="ARP">ARP</option>
                                                                <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Tipo de Cotizante(*)</option>
                                                                <option value="EPS">EPS</option>
                                                                <option value="CCF">CCF</option>
                                                                <option value="ARP">ARP</option>
                                                                <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Código (Lo diligencia la EPS):(*)</option>
                                                                <option value="EPS">EPS</option>
                                                                <option value="CCF">CCF</option>
                                                                <option value="ARP">ARP</option>
                                                                <option value="AFP">AFP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="date" name="" class="form-control" id="" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="DatosPersonales" role="tabpanel">
                                <div class="card-body">
                                    <form action="javascript:void(0)" method="post" id="newDatosPersonales" name="newDatosPersonales">
                                        {{csrf_field()}}
                                        <div class="form-body">
                                            <h3 class="card-title">Datos de DatosPersonales</h3>
                                            <hr>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="1er Apellido(*)" required>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="2do Apellido (*)" required>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="1er Nombre(*)" required>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="2do Nombre (*)" required>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                            <option value="">Documento de Identificacion(*)</option>
                                                            <option value="EPS">EPS</option>
                                                            <option value="CCF">CCF</option>
                                                            <option value="ARP">ARP</option>
                                                            <option value="AFP">AFP</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Numero de Identificación (*)" required>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                            <option value="">Genero(*)</option>
                                                            <option value="EPS">EPS</option>
                                                            <option value="CCF">CCF</option>
                                                            <option value="ARP">ARP</option>
                                                            <option value="AFP">AFP</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="date id=" name="slug" class="form-control form-control-danger" placeholder="Fecha de Nacimiento(*)" required>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="DatosComplementarios" role="tabpanel">
                                <div class="card-body">
                                    <div class="card-body">
                                        <form action="javascript:void(0)" method="post" id="newDatosComplementarios" name="newDatosComplementarios">
                                            {{csrf_field()}}
                                            <div class="form-body">
                                                <h3 class="card-title">Datos de Datos Complementarios</h3>
                                                <hr>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Origen Étnico(*)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Grupo Poblacional Especial(*)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Tipo de Discapacidad(*)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Condición(*)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="Discapacidad" name="Discapacidad" class="form-control" placeholder="Discapacidad(*)" required>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Puntaje del Sisben(*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Administradora de Riesgos Laborales(*)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Administradora de Pensiones(*)</option>
                                                            </select>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Ingreso Base de Cotización(*)" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Dirección (*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Zona(*)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="" name="slug" class="form-control form-control-danger" placeholder="Localidad / Comuna(*)" required>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="" name="slug" class="form-control form-control-danger" placeholder="Barrio(*)" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="" name="slug" class="form-control form-control-danger" placeholder="Teléfono Fijo(*)" required>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Departamento(*)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Municipio(*)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="" name="slug" class="form-control form-control-danger" placeholder="Teléfono Movil(*)" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="" name="slug" class="form-control form-control-danger" placeholder="Correo Electrónico(*)" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="Nucleo" role="tabpanel">
                                <form action="javascript:void(0)" method="post" id="newNucleo" name="newNucleo">
                                    {{csrf_field()}}
                                    <div class="form-body">
                                        <h3 class="card-title">Nucleo Familiar</h3>
                                        <hr>

                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="DatosEmpleador" role="tabpanel">
                                <div class="card-body">
                                    <form action="javascript:void(0)" method="post" id="newDatosEmpleador" name="newDatosEmpleador">
                                        {{csrf_field()}}
                                        <div class="form-body">
                                            <h3 class="card-title">Datos de Datos Empleador</h3>
                                            <hr>
                                            <div class="row p-t-20">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Nombre o Razón Social(*)" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                            <option value="">Tipo Documento(*)</option>
                                                            <option value="EPS">EPS</option>
                                                            <option value="CCF">CCF</option>
                                                            <option value="ARP">ARP</option>
                                                            <option value="AFP">AFP</option>
                                                        </select>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Numero de Identidad(*)" required>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Tipo de Aportante o pagador de pensiones(*)" required>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <h3>Ubicación</h3>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Dirección(*)" required>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Teléfono (*)" required>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Correo Electrónico (*)" required>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                            <option value="">Departamento(*)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                            <option value="">Municipio(*)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="ReporteNovedades" role="tabpanel">
                                <div class="card-body">
                                    <form action="javascript:void(0)" method="post" id="newDatosEmpleador" name="newDatosEmpleador">
                                        {{csrf_field()}}
                                        <div class="form-body">
                                            <h3 class="card-title">Datos de Datos Empleador</h3>
                                            <hr>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                            <option value="">Tipo de Novedad(*)</option>
                                                            <option value="EPS">EPS</option>
                                                            <option value="CCF">CCF</option>
                                                            <option value="ARP">ARP</option>
                                                            <option value="AFP">AFP</option>
                                                        </select>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <hr>
                                                <h3>Datos para el reporte de la novedad</h3>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="1er Nombre(*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="2do Nombre(*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="1er Apellido(*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="2do Apellido(*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="date" id="slug" name="slug" class="form-control form-control-danger" placeholder="(*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="date" id="slug" name="slug" class="form-control form-control-danger" placeholder="Fecha (a partir de)(*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                                <option value="">Caja de Compensación Familiar o Pagador de Pensiones(*)</option>
                                                            </select>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="date" id="slug" name="slug" class="form-control form-control-danger" placeholder="Fecha de Nacimiento(*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                </div>
                                                <hr>
                                                <h3>Ubicación</h3>
                                                <div class="row p-t-20">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" id="name" name="name" class="form-control" placeholder="Dirección(*)" required>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Teléfono (*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" id="slug" name="slug" class="form-control form-control-danger" placeholder="Correo Electrónico (*)" required>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                            <option value="">Departamento(*)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;">
                                                            <option value="">Municipio(*)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="DeclaracionesAutorizaciones" role="tabpanel">
                                <div class="card-body">
                                    <form action="javascript:void(0)" method="post" id="newDeclaracionesAutorizaciones" name="newDeclaracionesAutorizaciones">
                                        {{csrf_field()}}
                                        <div class="form-body">
                                            <h3 class="card-title">Datos de Datos Empleador</h3>
                                            <hr>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Declaración de dependencia económica de los beneficiarios y afiliados adicionales: Declaro bajo la gravedad de juramento que el(los) Beneficiario(s) reportado(s) dependen económicamente de mi
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Declaración de la no obligación de afiliarse al Régimen Contributivo, Especial o de Excepción
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Declaración de existencia de razones de fuerza mayor o caso fortuito que impiden la entrega de los documentos que acreditan la condición de beneficiarios
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Declaración de no intermediación del cotizante, cabeza de familia, beneficiarios o afiliados adicionales en una Institución Prestadora de Servicios de Salud
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Autorización para que la EPS solicite y obtenga datos y copia de la historia clínica del cotizante o cabeza de familia y de sus beneficiarios o afiliados adicionales.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Autorización para que la EPS reporte la información que se genere de la afiliación o del reporte de novedades a la base de datos de afiliados vigentes y a las entidades públicas que por sus funciones la requieran
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Autorización para que la EPS maneje los datos personales del cotizante o cabeza de familia y de sus beneficiarios o afiliados adicionales, de acuerdo con lo previsto en la Ley 1581 de 2012 y el Decreto 1377 de 2013
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Autorización para que la EPS envíe información al correo electrónico o al celular como mensajes de texto.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="Anexos" role="tabpanel">
                                <div class="card-body">
                                    <form action="javascript:void(0)" method="post" id="newAnexos" name="newAnexos">
                                        {{csrf_field()}}
                                        <div class="form-body">
                                            <h3 class="card-title">Datos Anexos</h3>
                                            <hr>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Anexo copia del documento de identidad
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Copia del dictamen de incapacidad permanente emitido por la autoridad competente.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Copia del registro civil de matrimonio, o de la Escritura pública, acta de conciliación o sentencia judicial que declare la unión marital.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Copia de la escritura pública o sentencia judicial que declare el divorcio, sentencia judicial que declare la separación de cuerpos y escritura pública, acta de conciliación o sentencia judicial que declare la terminación de la unión marital.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Copia del certificado de adopción o acta de entrega del menor.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Copia de la orden judicial o del acto administrativo de custodia.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Documento en que conste la pérdida de la patria potestad o el certificado de defunción de los padres o la declaración suscrita por el cotizante sobre la ausencia de los dos padres.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Copia de la autorización de traslado por parte de la Superintendencia Nacional de Salud.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Certificación de vinculación a una entidad autorizada para realizar afiliaciones colectivas.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <!--/span-->
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Copia del acto administrativo o providencia de las autoridades competentes en la que conste la calidad de beneficiario o se ordene la afiliación de oficio
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<!-- This is data table -->
    <script src="{{asset('node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="{{asset('js/dashboard1.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
    </script>
<script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
</script>
@endsection
