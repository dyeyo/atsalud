@extends('layouts.layout-dashboard')
@section('styles')
    <link href="{{asset('node_modules/bootstrap-switch/bootstrap-switch.min.css')}}" rel="stylesheet">
    <link href="{{asset('node_modules/dropify/dist/css/dropify.min.css')}}" rel="stylesheet">
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
                    <li class="breadcrumb-item"><a href="{{route('entities.index')}}">Entidad</a></li>
                    <li class="breadcrumb-item"><a href="{{route('entities.create')}}"> Crear entidad</a></li>
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
                    <div id="response"></div>
                    {{--<form action="javascript:void(0)" method="post" id="newSG" name="newSG">--}}
<<<<<<< HEAD:resources/views/socialSecurity/create.blade.php
                    <form action="{{ route('socialSecurity.store') }}" method="post" id="newSG" name="newSG" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <h3 class="card-title">Datos de la IPS</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="business_name" name="business_name" class="form-control" placeholder="Nombre del negocio (*)" required>
=======
                    <form action="javacript:void(0)" method="post" id="newSG" name="newSG" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos de la IPS</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="business_name" name="business_name" class="form-control" placeholder="Nombre del negocio (*)" required>
                                    </div>
>>>>>>> refs/remotes/origin/master:resources/views/entities/create.blade.php
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="tradename" name="tradename" class="form-control form-control-danger" placeholder="Nombre comercial(*)" required>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="nit" name="nit" class="form-control" placeholder="NIT(*)" required>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="address" name="address" class="form-control form-control-danger" placeholder="Dirección" required>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Teléfono" required>
                                </div>
                            </div>

                        </div>
                        <div class="row p-t-20">

                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control form-control-danger" placeholder="Correo Electronico(*)" required>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="type" id="type" class=" form-control custom-select" style="width: 100%; height:36px;" onchange="tipos()">
                                        <option value="">Seleccione una opcion</option>
                                        <option value="EPS">EPS</option>
                                        <option value="CCF">CCF</option>
                                        <option value="ARP">ARP</option>
                                        <option value="AFP">AFP</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12" id="imagen" style="display: none">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Suba su imagen</h4>
                                    <label for="input-file-now"></label>
                                    <input type="file" id="input-file-now" name="file"  class="dropify" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" onclick="create_socialSegurity()"> <i class="fa fa-check"></i> Guardar</button>
                            {{--<button class="btn btn-success" type="submit"> <i class="fa fa-check"></i> Guardar</button>--}}
                        </div>
                </div>
                <div class="form-body">
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
    <script src="{{asset('node_modules/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $('#birthdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
        jQuery(document).ready(function () {
            $(".select2").select2();
            $('.selectpicker').selectpicker();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
    <script !src="">
        $('#type').change(function(){
            var tipoCambiado =$(this).val();
            if(tipoCambiado  == 'EPS'){
                $('#imagen').show();
            }
            else
            {
                $('#imagen').css('display','none');
                $('#imagen').val('');
            }
        });
    </script>
@endsection
