@extends('layouts.layout-dashboard')
@section('styles')
    <link href="{{asset('node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('ips.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb m-b-10">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('ips.index')}}">ips</a></li>
                </ol>
                @can('ips.create')
                    <a data-toggle="modal" class="btn btn-info d-none d-lg-block m-l-15"
                       style="color: #fff !important;" href="#ips"><i class="fa fa-plus-circle"></i> Nueva Ips</a>
                @endcan
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">ips del sistema</h4>
        </div>
        <div class="card-body">
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="departament" id="departament"
                                class="select2 form-control custom-select"
                                style="width: 100%; height:36px;" onchange="municipalities2(this.value)">
                            <option value="-1">[Seleccione un Departamento]</option>
                            @foreach($departaments as $departament)
                                <option value="{{$departament->id}}">{{$departament->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="municipality" id="municipality" class="select2 form-control custom-select" style="width: 100%; height:36px;" onchange="load_ips(this.value)">
                            <option value="-1">[Seleccione un Municipio]</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="table-responsive m-t-40" id="table">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr align="center">
                        <th>#</th>
                        <th style="width:660px!important;">Nombre</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody >

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- Modal -->
    @can('ips.create')
    <div class="modal fade" id="ips" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header card-header bg-info">
                    <h4 class="modal-title m-b-0 text-white" id="titlemodal">Agregar IPS</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" method="post" id="newIps" name="newIps">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos de la IPS</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="business_name" name="business_name" class="form-control"
                                               placeholder="Razón social (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="tradename" name="tradename"
                                               class="form-control form-control-danger"
                                               placeholder="Nombre comercial (*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="nit" name="nit" class="form-control"
                                               placeholder="Nit (*)"
                                               required >
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="address" name="address"
                                               class="form-control form-control-danger" placeholder="Dirección"
                                               >
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control"
                                               placeholder="Teléfono">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email"
                                               class="form-control form-control-danger"
                                               placeholder="Correo Electronico">
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <h3 class="card-title">Ubicación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="departament_id" id="departament_id"
                                                class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" onchange="municipalities(this.value)" required>
                                            <option value="-1">[Seleccione un Departamento]</option>
                                            @foreach($departaments as $departament)
                                                <option value="{{$departament->id}}">{{$departament->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="municipality_id" id="municipality_id" class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                            <option value="-1">[Seleccione un Municipio (*)]</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="_method" name="_method" value="">
                    </form>
                    <div id="response"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" onclick="create_ips()"><i class="fa fa-check"></i> Guardar</button>
                </div>
            </div>
        </div>
    </div>
    @endcan
    @can('ips.show')
    <div class="modal fade" id="showips" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header card-header bg-info">
                    <h4 class="modal-title m-b-0 text-white">Datos Ips</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="col-12" id="dataips">

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
@section('script')
    <!-- This is data table -->
    <script src="{{asset('node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
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
                $(".select2").select2();
            $('.dropify').dropify();
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
@endsection
